<header class="container mb-10 lg:mb-14">
    <h1 class="block text-2xl font-bold text-gray-800 sm:text-3xl">
        Расписание приёмов
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
                            <form action="" method="GET" id="sort-form">
                                <label for="date_filter" class="sr-only">Дата</label>
                                <div class="flex rounded-md shadow-sm">
                                    <input type="date" id="date_filter" name="date_filter" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-l-md text-sm focus:z-10 focus:border-primary-500 focus:ring-primary-500 " value="<?= !empty($_GET['date_filter']) ? $_GET['date_filter'] : '' ?>">
                                    <button type="submit" class="inline-flex gap-2 px-3 py-2 flex-shrink-0 justify-center items-center rounded-r-md border border-transparent font-semibold bg-primary-500 text-white hover:bg-primary-600 focus:z-10 focus:outline-none focus:ring-2 focus:ring-primary-500 transition-all text-sm">
                                        <i class="fa-solid fa-search"></i>
                                    </button>
                                </div>
                            </form>
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
                                <? while ($booking = mysqli_fetch_assoc($bookings_result)) : ?>
                                    <tr>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-6 py-2">
                                                <span class="inline-flex items-center gap-1.5 py-1 px-2 rounded-md text-xs font-medium bg-gray-100 text-gray-800">
                                                    <?= $booking['patient_surname'] . ' ' .  mb_substr($booking['patient_name'], 0, 1) . '. ' . mb_substr($booking['patient_patronymic'], 0, 1) . '.' ?>
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
                                <a href="<?= $uri ?>?<?= http_build_query($_GET) ?>" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm">
                                    <i class="fa-solid fa-chevron-left fa-xs"></i>
                                    Предыдущая
                                </a>
                            <? endif; ?>
                            <? if ($page < $pages) : ?>
                                <?php $_GET['page'] = $page + 1; ?>
                                <a href="<?= $uri ?>?<?= http_build_query($_GET) ?>" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm">
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