<?php session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/utils/renderTemplate.php';

($conn = mysqli_connect('127.0.0.1', 'root', '', 'dentistry')) or die('Error: ' . mysqli_error($conn));

// Обработка сохранения категории
if (isset($_POST['save_category'])) {
    $name = 'category_title' . $_POST['save_category'];
    $title = mysqli_real_escape_string($conn, $_POST[$name]);
    $id = mysqli_real_escape_string($conn, $_POST['save_category']);
    $query = "UPDATE services_categories SET category_title = '$title' WHERE id = '$id'";
    $update_res = mysqli_query($conn, $query);
    $category_message = "Успех. Категория № $id обновлена на $title";
}

// Обработка удаления категории
if (isset($_POST['delete_category'])) {
    $id = mysqli_real_escape_string($conn, $_POST['delete_category']);
    $query = "SELECT id FROM services WHERE category_id = '$id'";
    $service_res = mysqli_query($conn, $query);
    if (empty(mysqli_fetch_assoc($service_res))) {
        $query = "DELETE FROM services_categories WHERE id = '$id'";
        $update_res = mysqli_query($conn, $query);
        $category_message = "Успех. Категория № $id удалена";
    } else {
        $category_message = "Ошибка. Нельзя удалить категорию № $id. Она уже указана в Услуге";
    }
}
?>

<header class="container mb-10 lg:mb-14">
    <h1 class="block text-2xl font-bold text-gray-800 sm:text-3xl">
        Категории услуг
    </h1>
</header>
<section class="container mx-auto">
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                        <h2 class="text-xl font-semibold text-gray-800">
                            Список категорий
                        </h2>
                        <div class="inline-flex gap-x-2">
                            <Button class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-primary-500 text-white hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-all text-sm" href type="button" data-hs-overlay="#new-category-canvas">
                                Новая категория
                                <i class='fa-solid fa-plus'></i>
                            </Button>
                        </div>
                    </div>
                    <form action='' method='POST'>
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left">
                                        <div class="group flex justify-between items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                Категория
                                            </span>
                                            <div class="flex justify-center items-center w-5 h-5 border border-gray-200  text-gray-400 rounded">
                                                <i class="fa-solid fa-sort fa-xs"></i>
                                            </div>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left">
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <? while ($category = mysqli_fetch_assoc($result)) : ?>
                                    <tr>
                                        <td class="h-px w-full whitespace-nowrap">
                                            <div class="px-6 py-2">
                                                <span>
                                                    <input name="category_title<?= $category['id'] ?>" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500" type="text" value="<?= $category['category_title'] ?>" placeholder="<?= $category['category_title'] ?>" />
                                                </span>
                                            </div>
                                        </td>
                                        <td class="h-px w-auto whitespace-nowrap">
                                            <div class="px-6 py-2 space-x-2">
                                                <button type='submit' value="<?= $category['id'] ?>" name="save_category" class="font-semibold text-emerald-500 hover:text-emerald-600 transition-all text-sm cursor-pointer">
                                                    Сохранить
                                                </button>
                                                <button type='submit' value="<?= $category['id'] ?>" name="delete_category" class="font-semibold text-red-500 hover:text-red-600 transition-all text-sm cursor-pointer">
                                                    Удалить
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                <? endwhile; ?>
                            </tbody>
                        </table>
                    </form>
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
    </div>
</section>