<?php session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/utils/renderTemplate.php';

($conn = mysqli_connect('127.0.0.1', 'root', '', 'dentistry')) or die('Error: ' . mysqli_error($conn));

if (isset($_POST['add_category']) && (empty($_SESSION['msg']['button_value']) || (int)$_POST['add_category'] != (int)$_SESSION['msg']['button_value'])) {
    $query = "SELECT id FROM `services_categories` WHERE `category_title` = '$_POST[category_title]'";
    $category = mysqli_fetch_assoc(mysqli_query($conn, $query));
    if (empty($category)) {
        $query = "INSERT INTO `services_categories` (`category_title`) VALUES ('$_POST[category_title]')";
        $res = mysqli_query($conn, $query);
        if ($res) {
            // Если успешно, сборка сообщения для вывода
            $category_message = "Успех. Категория $_POST[category_title] добавлена";
            $_SESSION['msg']['value'] = $category_message;
            $_SESSION['msg']['shown'] = false;
            $_SESSION['msg']['button_value'] = $_POST['add_category'];
        }
    } else {
        $category_message = "Ошибка. Категория $_POST[category_title] уже создана";
    }
}

if (isset($_POST['testimonial'])) {
    $testimonial = mysqli_real_escape_string($conn, $_POST['testimonial']);
    $patient_id = intval($_SESSION['USER']['id']);

    $stmt = mysqli_prepare($conn, "UPDATE `patients` SET `testimonial` = ? WHERE `id` = ?");
    mysqli_stmt_bind_param($stmt, "si", $testimonial, $patient_id);
    mysqli_stmt_execute($stmt);

    $_SESSION['USER']['testimonial'] = $_POST['testimonial'];

    if (mysqli_errno($conn)) {
        die("Ошибка выполнения запроса: " . mysqli_error($conn));
    }

    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}

if (isset($_POST['registration_form'])) {
    $message = '';

    // Extracting common variables outside of if/else blocks
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    if (!empty($_POST['role']) && $_POST['role'] == 1) {
        // Check for patient
        $query = "SELECT * FROM patients WHERE email = '$email' OR phone = '$phone'";
        $res = mysqli_query($conn, $query);

        // Combine multiple checks into one if statement
        if ($res && mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            if ($row['email'] == $email) {
                $message .= "This email has already been registered. <br />";
            }
            if ($row['phone'] == $phone) {
                $message .= "This phone number has already been registered. <br />";
            }
        } else {
            $query = "INSERT INTO `patients` (`patient_surname`, `patient_name`, `patient_patronymic`, `phone`, `email`, `password`)
            VALUES ('$_POST[name]', '$_POST[surname]', '$_POST[patronymic]', '$phone', '$email', '$password')";
            $res = mysqli_query($conn, $query);
            if ($res) {
                $message_box = "Patient $_POST[surname] " . mb_substr($_POST['name'], 0, 1) . '.' . mb_substr($_POST['patronymic'], 0, 1) . ".  has been successfully registered.";
            }
        }
    } else {
        // Check for staff
        $query = "SELECT * FROM staffs WHERE email = '$email' OR phone = '$phone'";
        $res = mysqli_query($conn, $query);

        // Combine multiple checks into one if statement
        if ($res && mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            if ($row['email'] == $email) {
                $message .= "This email has already been registered. <br />";
            }
            if ($row['phone'] == $phone) {
                $message .= "This phone number has already been registered. <br />";
            }
        } else {
            $query = "INSERT INTO `staffs` (`staff_surname`, `staff_name`, `staff_patronymic`, `phone`, `email`, `password`, `filial_id`)
            VALUES ('$_POST[surname]', '$_POST[name]', '$_POST[patronymic]', '$phone', '$email', '$password', '$filial_data[id]')";
            $res = mysqli_query($conn, $query);
            if ($res) {
                $message_box = "Staff $_POST[surname] " . mb_substr($_POST['name'], 0, 1) . '.' . mb_substr($_POST['patronymic'], 0, 1) . ". has been successfully registered.";
            }
        }
    }
}

if (isset($_POST['add_service']) && (empty($_SESSION['msg']['button_value']) || (int)$_POST['add_service'] != (int)$_SESSION['msg']['button_value'])) {
    $query = "SELECT id FROM `services` WHERE `service_title` = '$_POST[service_title]'";
    $service = mysqli_fetch_assoc(mysqli_query($conn, $query));
    if (empty($service)) {
        $query =
            "INSERT INTO
		`services` (`service_title`, `category_id`)
		VALUES ('$_POST[service_title]', '$_POST[category_id]')";
        $res1 = mysqli_query($conn, $query);
        $id = mysqli_insert_id($conn);
        $query = "INSERT INTO
		`prices` (`service_id`, `price`)
		VALUES ($id, '$_POST[price]')";
        $res2 = mysqli_query($conn, $query);
        if ($res1 && $res2) {
            // Если успешно, сборка сообщения для вывода
            $service_message = "Успех. Услуга $_POST[service_title] добавлена";
            $_SESSION['msg']['value'] = $service_message;
            $_SESSION['msg']['shown'] = false;
            $_SESSION['msg']['button_value'] = $_POST['add_category'];
        }
    } else {
        $service_message = "Ошибка. Услуга $_POST[service_title] уже создана";
    }
}
?>

<!DOCTYPE html>
<html lang='ru'>

<head>
    <!-- Мета -->
    <meta charset='utf-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />

    <title><?= $brand ?></title>

    <!-- 
        ИКОНКИ
     -->
    <link rel='icon' type='image/png' href='' />

    <!-- 
        ШРИФТЫ
     -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- 
        СТИЛИ
     -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' />
    <link rel='stylesheet' href='/resources/styles/styles.min.css' />
</head>

<body class='animation-fade-in duration-300 bg-gray-50'>
    <header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white border-b text-sm py-2.5 sm:py-4">
        <nav class="container flex basis-full justify-between items-center w-full mx-auto px-4 sm:px-6 lg:px-8" aria-label="Global">
            <div class="mr-5 md:mr-8">
                <a class="flex-none text-xl font-semibold" href="/dashboard" aria-label="<?= $brand ?>">
                    <i class='fa-solid fa-tooth fa-xl text-primary-600'></i>
                    <?= $brand ?>
                    <span class="inline bg-gray-100 text-xs text-gray-500 font-semibold rounded-full py-1 px-2">
                        Личный кабинет
                    </span>
                </a>
            </div>
            <div class="hs-dropdown relative inline-flex [--placement:bottom-right]" data-hs-dropdown-placement="bottom-left">
                <button id="hs-dropdown" type="button" class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-white text-gray-700 align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-xs ">
                    <i class='fa-solid fa-user fa-xl'></i>
                </button>
                <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[15rem] z-10 bg-white shadow-md rounded-lg p-2" aria-labelledby="hs-dropdown">
                    <div class="py-3 px-5 -m-2 bg-gray-100 rounded-t-lg">
                        <p class="text-sm text-gray-500">Авторизован как</p>
                        <p class="text-sm font-medium text-gray-800">
                            <?= $email ?>
                        </p>
                    </div>
                    <div class="mt-2 py-2 first:pt-0 last:pb-0">
                        <button class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-primary-500" id='logout-button' type='button'>
                            <i class='flex-none fa-solid fa-sign-out'></i>
                            Выход
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main id="content" role="main">
        <nav class="sticky -top-px bg-white text-sm font-medium text-black ring-1 ring-gray-900 ring-opacity-5 border-t shadow-sm shadow-gray-100 pt-6 md:pb-6 -mt-px-gray-800" aria-label="Jump links">
            <div class="container snap-x w-full flex items-center overflow-x-auto scrollbar-x px-4 sm:px-6 lg:px-8 pb-4 md:pb-0 mx-auto ">
                <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last-pr-0">
                    <a class="inline-flex items-center gap-x-2 hover:text-gray-500" href="/dashboard">
                        Профиль
                    </a>
                </div>
                <?php if ($_SESSION['USER']) { ?>
                    <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last:pr-0">
                        <a class="inline-flex items-center gap-x-2 hover:text-gray-500" href="/dashboard/bookings">
                            Записи
                        </a>
                    </div>
                <?php } elseif ($_SESSION['STAFF']['job_id'] == 6) { ?>
                    <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last:pr-0">
                        <a class="inline-flex items-center gap-x-2 hover:text-gray-500" href="/dashboard/shedules">
                            Расписание
                        </a>
                    </div>
                    <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last:pr-0">
                        <a class="inline-flex items-center gap-x-2 hover:text-gray-500" href="/dashboard/patients<?= $_GET['date_filter'] ? '?date_filter=' . $_GET['date_filter'] : '' ?>">
                            Пациенты
                        </a>
                    </div>
                <?php } else { ?>
                    <div class="snap-center shrink-0 pr-5 sm:pr-8 sm:last-pr-0">
                        <a class="inline-flex items-center gap-x-2 hover:text-gray-500" href="/dashboard/analyz">
                            Статистика
                        </a>
                    </div>
                    <div class="hs-dropdown snap-center shrink-0 pr-5 sm:pr-8 sm:last:pr-0 relative inline-flex [--trigger:hover]">
                        <button id="hs-dropdown-hover-event" type="button" class="hs-dropdown-toggle py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none">
                            Филиал
                            <svg class="hs-dropdown-open:rotate-180 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </button>

                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[15rem] bg-white shadow-md rounded-lg p-2 mt-2 after:h-4 after:absolute after:-bottom-4 after:left-0 after:w-full before:h-4 before:absolute before:-top-4 before:left-0 before:w-full" aria-labelledby="hs-dropdown-hover-event">
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-primary-500" href="/dashboard/filial/records">
                                Записи
                            </a>
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-primary-500" href="/dashboard/filial/categories">
                                Категории услуг
                            </a>
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-primary-500" href="/dashboard/filial/services">
                                Услуги и цены
                            </a>
                        </div>
                    </div>
                    <div class="hs-dropdown relative inline-flex [--trigger:hover]">
                        <button id="hs-dropdown-hover-event" type="button" class="hs-dropdown-toggle py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none">
                            Пользователи
                            <svg class="hs-dropdown-open:rotate-180 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </button>

                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[15rem] bg-white shadow-md rounded-lg p-2 mt-2 after:h-4 after:absolute after:-bottom-4 after:left-0 after:w-full before:h-4 before:absolute before:-top-4 before:left-0 before:w-full" aria-labelledby="hs-dropdown-hover-event">
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-primary-500" href="/dashboard/users/patients">
                                Пациенты
                            </a>
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-primary-500" href="/dashboard/users/staff">
                                Персонал
                            </a>
                            <div class="py-2 first:pt-0 last:pb-0">
                                <button type='button' data-hs-overlay="#new-user-canvas" class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-primary-500 w-full">
                                    Новый пользователь
                                </button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </nav>
        <div class="container mx-auto py-10 px-4 sm:px-6 lg:px-8 ">
            <?= $content ?>
        </div>
    </main>

    <!-- 
        КАНВАСЫ
    -->
    <? if (isset($_SESSION['USER']) && $_SESSION['USER']['testimonial'] === null) : ?>
        <div id="new-testimonial-canvas" class="hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full fixed top-0 left-0 transition-all duration-300 transform h-full max-w-xs w-full z-[60] bg-white border-r" tabindex="-1" data-hs-overlay-scroll="true">
            <div class="flex justify-between items-center h-[71px] py-3 px-4 border-b">
                <h3 class="font-bold text-gray-800">
                    Оставить отзыв
                </h3>
            </div>
            <div class="p-4 h-full">
                <form actions='' method='POST' class='flex flex-col h-[calc(100vh_-_100px)] justify-between' id='new-testimonial-form'>
                    <div class='flex flex-col space-y-2'>
                        <? if ($_SESSION['USER']['testimonial'] === null) : ?>
                            <div class="bg-primary-50 mb-2 border border-primary-200 text-sm text-primary-600 rounded-md p-4" role="alert">
                                <span class="font-bold">Уважаемый клиент</span>, нам очень важен Ваш отзыв, пожалуйста - опишите ваши эмоции в ходе прохождения обследования в нашей клинике.
                            </div>
                        <? endif; ?>
                        <textarea rows="6" name="testimonial" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" placeholder="Мне очень нравится клиника 'Мой зубной'..."></textarea>
                    </div>
                    <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-primary-500 text-white hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-all text-sm">
                        Оставить
                    </button>
                </form>
            </div>
        </div>
    <? endif; ?>

    <div id="new-record-canvas" class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full fixed top-0 left-0 transition-all duration-300 transform h-full max-w-xs w-full z-[60] bg-white border-r hidden" tabindex="-1">
        <div class="flex justify-between items-center h-[71px] py-3 px-4 border-b">
            <h3 class="font-bold text-gray-800">
                Запись к врачу
            </h3>
            <button type="button" class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white text-sm " data-hs-overlay="#new-record-canvas">
                <span class="sr-only">Close modal</span>
                <i class='fa-solid fa-xmark'></i>
            </button>
        </div>
        <div class="p-4 h-full">
            <? if (!isset($_SESSION['USER']['city_id']) && !isset($_SESSION['STAFF'])) : ?>
                <div class="bg-orange-50 mb-2 border border-orange-200 text-sm text-orange-600 rounded-md p-4" role="alert">
                    <span class="font-bold">Важно:</span> cначала выберите город!
                </div>
            <? endif; ?>
            <form class='flex flex-col h-[calc(100vh_-_100px)] justify-between' id='new-booking-form'>
                <div class="flex flex-col">
                    <?php if (isset($_SESSION['STAFF'])) { ?>
                        <div class="mb-2">
                            <label for="surname" class="block text-sm font-medium">Фамилия</label>
                            <input id="surname" type='text' name="surname" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" placeholder="Фамилия пациента" required />
                        </div>
                        <div class="mb-2">
                            <label for="name" class="block text-sm font-medium">Имя</label>
                            <input id="name" type='text' name="name" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" placeholder="Имя пациента" required />
                        </div>
                        <div class="mb-2">
                            <label for="patronymic" class="block text-sm font-medium">Отчество</label>
                            <input id="patronymic" type='text' name="patronymic" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" placeholder="Отчество пациента" required />
                        </div>
                        <div class="mb-2">
                            <label for="phone" class="block text-sm font-medium">Телефон</label>
                            <input id="phone" type='tel' name="phone" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" placeholder="Телефон пациента" required />
                        </div>
                    <?php } ?>
                    <div class="mb-2">
                        <label for="filial" class="block text-sm font-medium">Филиал</label>
                        <select id="filial" name="filial" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500">
                            <option selected>Выберите из списка</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="service" class="block text-sm font-medium">Услуга</label>
                        <select id="service" name="service" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" disabled>
                            <option selected>Выберите филиал</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="doctor" class="block text-sm font-medium">Врач</label>
                        <select id="doctor" name="doctor" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" disabled>
                            <option selected>Выберите услугу</option>
                        </select>
                    </div>
                    <div class="mb-2 grid grid-cols-2 gap-2">
                        <div>
                            <label for="date" class="block text-sm font-medium">Дата</label>
                            <input type="date" id="date" name="date" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" disabled placeholder="Выберите доктора">
                        </div>
                        <div>
                            <label for="time" class="block text-sm font-medium">Время</label>
                            <input type="time" id="time" name="time" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" disabled placeholder="Выберите время">
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold text-primary-500 hover:text-primary-700 focus:outline-none focus:ring-2 ring-offset-white focus:ring-primary-500 focus:ring-offset-2 transition-all text-sm" data-hs-overlay="#modal-set-city">
                            Изменить город
                        </button>
                    </div>
                </div>
                <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-primary-500 text-white hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-all text-sm">
                    <?php if (isset($_SESSION['STAFF'])) { ?>
                        Записать
                    <?php } else { ?>
                        Записаться
                    <?php } ?>
                </button>
            </form>
        </div>
    </div>

    <div id="new-category-canvas" class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full fixed top-0 left-0 transition-all duration-300 transform h-full max-w-xs w-full z-[60] bg-white border-r hidden" tabindex="-1">
        <div class="flex justify-between items-center h-[71px] py-3 px-4 border-b">
            <h3 class="font-bold text-gray-800">
                Добавить категорию
            </h3>
        </div>
        <div class="p-4 h-full">
            <form action="" method="POST" class='flex flex-col h-[calc(100vh_-_100px)] justify-between' id='new-category-form'>
                <div class="flex flex-col">
                    <div>
                        <label for="category_title" class="block text-sm font-medium">Название</label>
                        <input id="category_title" type='text' name="category_title" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" placeholder="Название категории" required />
                    </div>
                </div>
                <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-primary-500 text-white hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-all text-sm" name="add_category" value="<?= isset($_POST['add_category']) && $_POST['add_category'] == 1 ? 0 : 1 ?>">
                    Добавить
                </button>
            </form>
        </div>
    </div>

    <div id="new-service-canvas" class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full fixed top-0 left-0 transition-all duration-300 transform h-full max-w-xs w-full z-[60] bg-white border-r hidden" tabindex="-1">
        <div class="flex justify-between items-center h-[71px] py-3 px-4 border-b">
            <h3 class="font-bold text-gray-800">
                Добавить услугу
            </h3>
            <button type="button" class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white text-sm " data-hs-overlay="#new-service-canvas">
                <span class="sr-only">Close modal</span>
                <i class='fa-solid fa-xmark'></i>
            </button>
        </div>
        <div class="p-4 h-full">
            <form action="" method="POST" class='flex flex-col h-[calc(100vh_-_100px)] justify-between' id='new-category-form'>
                <div class="flex flex-col">
                    <div class='mb-2'>
                        <label for="service_title" class="block text-sm font-medium">Название</label>
                        <input id="service_title" type='text' name="service_title" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" placeholder="Название услуги" required />
                    </div>
                    <div class='mb-2'>
                        <label for='category_id' class='block text-sm font-medium'>Категория</label>
                        <select class="py-2 px-3 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" name="service_id" id="category_id">
                            <? foreach ($services_categories as $cat) : ?>
                                <option value="<?= $cat['id'] ?>" <?= $cat['id'] == $ser['category_id'] ? 'selected' : '' ?>>
                                    <?= $cat['category_title'] ?>
                                </option>
                            <? endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label for="price" class="block text-sm font-medium">Цена</label>
                        <input id="price" type='number' name="price" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" placeholder="Цена" required />
                    </div>
                </div>
                <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-primary-500 text-white hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-all text-sm" name="add_service" value="<?= isset($_POST['add_service']) && $_POST['add_service'] == 1 ? 0 : 1 ?>">
                    Добавить
                </button>
            </form>
        </div>
    </div>

    <div id="new-user-canvas" class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full fixed top-0 left-0 transition-all duration-300 transform h-full max-w-xs w-full z-[60] bg-white border-r hidden" tabindex="-1">
        <div class="flex justify-between items-center h-[71px] py-3 px-4 border-b">
            <h3 class="font-bold text-gray-800">
                Добавить пользователя
            </h3>
            <button type="button" class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white text-sm " data-hs-overlay="#new-user-canvas">
                <span class="sr-only">Close modal</span>
                <i class='fa-solid fa-xmark'></i>
            </button>
        </div>
        <div class="p-4 h-full">
            <form action='' method='POST' class='flex flex-col h-[calc(100vh_-_100px)] justify-between'>
                <div class="flex flex-col">
                    <div class="mb-2">
                        <label for="surname" class="block text-sm font-medium">Фамилия</label>
                        <input id="surname" type='text' name="surname" value="<?= $_POST['surname'] ?? '' ?>" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" placeholder="Фамилия" required />
                    </div>
                    <div class="mb-2">
                        <label for="name" class="block text-sm font-medium">Имя</label>
                        <input id="name" type='text' name="name" value="<?= $_POST['name'] ?? '' ?>" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" placeholder="Имя" required />
                    </div>
                    <div class="mb-2">
                        <label for="patronymic" class="block text-sm font-medium">Отчество</label>
                        <input id="patronymic" type='text' name="patronymic" value="<?= $_POST['patronymic'] ?? '' ?>" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" placeholder="Отчество" required />
                    </div>
                    <div class='mb-2 grid-cols-2 gap-2'>
                        <div>
                            <label for="email" class="block text-sm font-medium">Почта</label>
                            <input id="email" type='email' name="email" value="<?= $_POST['email'] ?? '' ?>" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" placeholder="Почта" required />
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium">Телефон</label>
                            <input type="tel" id="phone" name="phone" value="<?= $_POST['phone'] ?? '' ?>" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" placeholder="+7 (XXX) XXX-XX-XX" data-mask='+7 (000) 000-00-00' required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium">Пароль</label>
                        <input id="password" type='password' name="password" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" placeholder="Пароль" required />
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="flex">
                            <input type="radio" name="role" id="role1" value="1" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-primary-600 pointer-events-none focus:ring-primary-500">
                            <label for="role1" class="text-sm text-gray-500 ml-2">Пациент</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="role" id="role2" value="2" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-primary-600 pointer-events-none focus:ring-primary-500">
                            <label for="role2" class="text-sm text-gray-500 ml-2">Сотрудник</label>
                        </div>
                    </div>
                </div>
                <button class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-primary-500 text-white hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-all text-sm" name="registration_form" type="submit">
                    Зарегистрировать
                </button>
            </form>
        </div>
    </div>

    <!-- 
        МОДАЛЬНЫЕ ОКНА
     -->
    <div id="modal-set-city" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm">
                <div class="p-4 sm:p-7">
                    <div class="text-center">
                        <h2 class="block text-2xl font-bold text-gray-800">Выбор города</h2>
                        <p class="mt-2 text-sm text-gray-600">
                            Уже выбрали?
                            <button class="text-primary-600 decoration-2 hover:underline font-medium" type='button' data-hs-overlay="#doctors-appointment-canvas">
                                Запишитесь на прием
                            </button>
                        </p>
                    </div>
                    <div class="mt-5">
                        <form class="grid gap-y-4" id='city-set-form'>
                            <div>
                                <label for="region" class="block text-sm font-medium mb-2">Регион</label>
                                <div class="relative">
                                    <select id="region" name="region" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500">
                                        <option selected>Выберите из списка</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label for="city" class="block text-sm font-medium mb-2">Город</label>
                                <div class="relative">
                                    <select id="city" name="city" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" disabled>
                                        <option selected>Выберите регион</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-primary-500 text-white hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-all text-sm">Установить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 
        СКРИПТЫ
    -->
    <script src='/resources/libs/jquery/jquery.min.js'></script>
    <script src='/resources/libs/jquery/mask/mask.min.js'></script>
    <script src='/resources/libs/preline/preline.js'></script>
    <script src='/resources/js/app.js'></script>
    <script src='/resources/js/common.js'></script>
</body>

</html>