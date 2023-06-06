<header class="container mb-10 lg:mb-14">
    <h1 class="block text-2xl font-bold text-gray-800 sm:text-3xl">
        Записи на приём
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
                            <a download href='../../../resources/docs/dogovor.docx' class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md bg-primary-100 border border-transparent font-semibold text-primary-500 hover:text-white hover:bg-primary-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-primary-500 focus:ring-offset-2 transition-all text-sm">
                                Ознакомиться с договором
                                <i class="fa-regular fa-file-word"></i>
                            </a>
                            <? if (empty($_SESSION['USER']['testimonial'])) : ?>
                                <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary-600 transition-all text-sm" data-hs-overlay="#new-testimonial-canvas">
                                    Оставить отзыв
                                    <i class="fa-regular fa-message"></i>
                                </button>
                            <? endif; ?>
                            <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-primary-500 text-white hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-all text-sm" data-hs-overlay="#new-record-canvas">
                                Новая запись
                                <i class='fa-solid fa-plus'></i>
                            </button>
                        </div>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left">
                                    <div class="group flex justify-between items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                            Филиал
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
                            <? while ($booking = mysqli_fetch_assoc($bookings_result)) : ?>
                                <tr class="bg-white">
                                    <td class="h-px w-px whitespace-nowrap">
                                        <div class="px-6 py-2">
                                            <span class="inline-flex items-center gap-1.5 py-1 px-2 rounded-md text-xs font-medium bg-gray-100 text-gray-800">
                                                <?= $booking['filial_title'] ?>
                                            </span>
                                            <p class="text-sm text-gray-600">
                                                <?= 'ул. ' . $booking['street_name'] . ', д. ' . $booking['house_number'] ?>
                                            </p>
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
                                                <?= $booking['staff_surname'] . ' ' . mb_substr($booking['staff_name'], 0, 1) . '. ' . mb_substr($booking['staff_patronymic'], 0, 1) . '.' ?>
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