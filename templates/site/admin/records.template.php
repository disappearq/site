<header class="container mb-10 lg:mb-14">
    <h1 class="block text-2xl font-bold text-gray-800 sm:text-3xl">
        Записи филиала
    </h1>
</header>
<section class="container mx-auto">
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                        <h2 class="text-xl font-semibold text-gray-800">
                            Список записей
                        </h2>
                        <div class="inline-flex gap-x-2">
                            <form action="" method="GET" class='flex gap-x-2' id="filter_form">
                                <select class="py-2 px-3 pr-9 block w-auto border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500 " name="service_filter" id="service_filter">
                                    <option value=''>Все услуги</option>
                                    <? while ($service = mysqli_fetch_assoc($services_result)) : ?>
                                        <option value="<?= $service['id'] ?>" <?= !empty($_GET['service_filter']) && $_GET['service_filter'] == $service['id'] ? 'selected' : '' ?>>
                                            <?= $service['service_title'] ?>
                                        </option>
                                    <? endwhile; ?>
                                </select>
                                <input class="py-2 px-3 block w-auto border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" type="date" id="date_filter" name="date_filter" value="<?= !empty($_GET['date_filter']) ? $_GET['date_filter'] : '' ?>">
                                <input class="py-2 px-3 block w-auto border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" type="number" name="limit" placeholder="Вывести" value="<?= !empty($_GET['limit']) ? $_GET['limit'] : '' ?>">
                            </form>
                            <Button class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md bg-primary-100 border border-transparent font-semibold text-primary-500 hover:text-white hover:bg-primary-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-primary-500 focus:ring-offset-2 transition-all text-sm" href type="button" data-hs-overlay="#filter-records-modal">
                                Поиск
                                <i class="fa-solid fa-search"></i>
                            </Button>
                            <div id="filter-records-modal" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
                                <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                    <form action="" method="GET" id="filter_form" class="flex flex-col bg-white border shadow-sm rounded-xl">
                                        <div class="flex justify-between items-center py-3 px-4 border-b ">
                                            <h3 class="font-bold text-gray-800">
                                                Поиск записей
                                            </h3>
                                            <button type="button" class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm" data-hs-overlay="#filter-records-modal">
                                                <span class="sr-only">Close</span>
                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="p-4 overflow-y-auto">
                                            <div class='flex flex-col gap-4 w-full'>
                                                <div class='grid grid-cols-3 gap-x-4'>
                                                    <input class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" type="text" name="surname_filter" placeholder="Фамилия" value="<?= !empty($_GET['surname_filter']) ? $_GET['surname_filter'] : '' ?>">
                                                    <input class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" type="text" name="name_filter" placeholder="Имя" value="<?= !empty($_GET['name_filter']) ? $_GET['name_filter'] : '' ?>">
                                                    <input class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" type="text" name="patronymic_filter" placeholder="Отчество" value="<?= !empty($_GET['patronymic_filter']) ? $_GET['patronymic_filter'] : '' ?>">
                                                </div>
                                                <input class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500" type="tel" name="phone_filter" placeholder="Телефон" value="<?= !empty($_GET['phone_filter']) ? $_GET['phone_filter'] : '' ?>">
                                            </div>
                                        </div>
                                        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t ">
                                            <a href='/dashboard/records' class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-indigo-500 text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all text-sm">
                                                Сбросить
                                                <i class="fa-solid fa-rotate-right"></i>
                                            </a>
                                            <button class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-primary-500 text-white hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-all text-sm" type="submit">
                                                Найти
                                                <i class="fa-solid fa-caret-right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <Button class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-primary-500 text-white hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-all text-sm" href type="button" data-hs-overlay="#new-record-canvas">
                                Новая запись
                                <i class="fa-solid fa-plus"></i>
                            </Button>
                        </div>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left">
                                    <div class="group flex justify-between items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                            Пациент
                                        </span>
                                        <div class="flex justify-center items-center w-5 h-5 border border-gray-200  text-gray-400 rounded">
                                            <i class="fa-solid fa-sort fa-xs"></i>
                                        </div>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left">
                                    <div class="group flex justify-between items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                            Услуга
                                        </span>
                                        <div class="flex justify-center items-center w-5 h-5 border border-gray-200  text-gray-400 rounded">
                                            <i class="fa-solid fa-sort fa-xs"></i>
                                        </div>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left">
                                    <div class="group flex justify-between items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                            Врач
                                        </span>
                                        <div class="flex justify-center items-center w-5 h-5 border border-gray-200  text-gray-400 rounded">
                                            <i class="fa-solid fa-sort fa-xs"></i>
                                        </div>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left">
                                    <div class="group flex justify-between items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                            Телефон
                                        </span>
                                        <div class="flex justify-center items-center w-5 h-5 border border-gray-200  text-gray-400 rounded">
                                            <i class="fa-solid fa-sort fa-xs"></i>
                                        </div>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left">
                                    <div class="group flex justify-between items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                            Дата и время приема
                                        </span>
                                        <div class="flex justify-center items-center w-5 h-5 border border-gray-200  text-gray-400 rounded">
                                            <i class="fa-solid fa-sort fa-xs"></i>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <? if ($total > 0) : ?>
                                <? while ($booking = mysqli_fetch_assoc($result)) : ?>
                                    <tr>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-6 py-2">
                                                <span class="inline-flex items-center gap-1.5 py-1 px-2 rounded-md text-xs font-medium bg-gray-100 text-gray-800">
                                                    <?= $booking['patient_surname'] . ' ' .  $booking['patient_name'] . ' ' . $booking['patient_patronymic'] ?>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="h-px w-72 min-w-[18rem]">
                                            <div class="px-6 py-2">
                                                <span class="font-semibold text-sm text-gray-600">
                                                    <?= $booking['service_title'] ?>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-6 py-2">
                                                <p class="text-sm text-gray-600">
                                                    <?= $booking['staff_surname'] . ' ' . mb_substr($booking['staff_name'], 0, 1) . '.' . mb_substr($booking['staff_patronymic'], 0, 1) . '.' ?>
                                                </p>
                                            </div>
                                        </td>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-6 py-2">
                                                <p class="text-sm text-gray-600">
                                                    <?= $booking['phone'] ?>
                                                </p>
                                            </div>
                                        </td>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-6 py-2">
                                                <p class="text-sm text-gray-600">
                                                    <?
                                                    setlocale(LC_TIME, 'ru_RU.utf8');
                                                    echo date('H:i', strtotime($booking['time'])) . ' / ' . strftime("%d %h %Y", strtotime($booking['date']));
                                                    ?>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                <? endwhile; ?>
                            <? else : ?>
                                <tr>
                                    <td colspan="5" class="h-px w-auto whitespace-nowrap">
                                        <div class="px-6 py-2">
                                            <span class="text-sm text-gray-800">
                                                Записей
                                                <? setlocale(LC_TIME, 'ru_RU.utf8');
                                                echo $_GET['date_filter'] ? 'на ' . ($formatted_date = strftime('%d %h %Y', strtotime($_GET['date_filter']))) : ''
                                                ?> нет.
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            <? endif; ?>
                        </tbody>
                    </table>
                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
                        <p class="text-sm text-gray-600">
                            Записей <span class="font-semibold text-gray-800">
                                <?= $total ?>
                            </span> | Страница
                            <span class="font-semibold text-gray-800">
                                <?= $page ?>
                            </span> из <span class="font-semibold text-gray-800">
                                <?= $pages ?>
                            </span>
                        </p>
                        <div class="inline-flex gap-x-2">
                            <? if ($page != 1) : ?>
                                <?php $_GET['page'] = $page - 1; ?>
                                <a href="<?= $uri ?>?<?= http_build_query($_GET) ?>" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary-600 transition-all text-sm">
                                    <i class="fa-solid fa-chevron-left fa-xs"></i>
                                    Предыдущая
                                </a>
                            <? endif; ?>
                            <? if ($page < $pages) : ?>
                                <?php $_GET['page'] = $page + 1; ?>
                                <a href="<?= $uri ?>?<?= http_build_query($_GET) ?>" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary-600 transition-all text-sm">
                                    Следующая
                                    <i class="fa-solid fa-chevron-right fa-xs"></i>
                                </a>
                                <?php $_GET['page'] = $page; ?>
                            <? endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>