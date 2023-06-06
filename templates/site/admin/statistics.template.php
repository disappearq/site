<header class="container mb-10 lg:mb-14">
    <h1 class="block text-2xl font-bold text-gray-800 sm:text-3xl">
        Статистика за все время
    </h1>
</header>
<section class="container mx-auto">
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
        <div class="flex flex-col justify-between gap-y-6 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm rounded-xl">
            <div class="text-center">
                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800">
                    <?= $total_users ?>
                </h3>
            </div>
            <div class="inline-flex justify-center items-center">
                <span class="w-2 h-2 inline-block bg-gray-500 rounded-full mr-2"></span>
                <span class="text-xs font-semibold uppercase text-gray-600">
                    Всего пользователей
                </span>
            </div>
        </div>

        <div class="flex flex-col justify-between gap-y-6 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm rounded-xl">
            <div class="text-center">
                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800">
                    <?= $total_staffs ?>
                </h3>
            </div>
            <div class="inline-flex justify-center items-center">
                <span class="w-2 h-2 inline-block bg-gray-500 rounded-full mr-2"></span>
                <span class="text-xs font-semibold uppercase text-gray-600">
                    Работников
                </span>
            </div>
        </div>

        <div class="flex flex-col justify-between gap-y-6 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm rounded-xl">
            <div class="text-center">
                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800">
                    <?= $total_patients ?>
                </h3>
            </div>
            <div class="inline-flex justify-center items-center">
                <span class="w-2 h-2 inline-block bg-gray-500 rounded-full mr-2"></span>
                <span class="text-xs font-semibold uppercase text-gray-600">
                    Пациентов
                </span>
            </div>
        </div>
        <div class="flex flex-col justify-between gap-y-6 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm rounded-xl">
            <div class="text-center">
                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800">
                    <?= $total_records ?>
                </h3>
            </div>
            <div class="inline-flex justify-center items-center">
                <span class="w-2 h-2 inline-block bg-gray-500 rounded-full mr-2"></span>
                <span class="text-xs font-semibold uppercase text-gray-600">
                    Всего записей
                </span>
            </div>
        </div>

        <div class="flex flex-col justify-between gap-y-6 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm rounded-xl">
            <div class="text-center">
                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800">
                    <?= $total_categories ?>
                </h3>
            </div>
            <div class="inline-flex justify-center items-center">
                <span class="w-2 h-2 inline-block bg-gray-500 rounded-full mr-2"></span>
                <span class="text-xs font-semibold uppercase text-gray-600">
                    Категорий
                </span>
            </div>
        </div>

        <div class="flex flex-col justify-between gap-y-6 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm rounded-xl">
            <div class="text-center">
                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800">
                    <?= $total_services ?>
                </h3>
            </div>
            <div class="inline-flex justify-center items-center">
                <span class="w-2 h-2 inline-block bg-gray-500 rounded-full mr-2"></span>
                <span class="text-xs font-semibold uppercase text-gray-600">
                    Услуг
                </span>
            </div>
        </div>

        <div class="flex flex-col justify-between gap-y-6 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm rounded-xl">
            <div class="text-center">
                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800">
                    <?= $total_filials ?>
                </h3>
            </div>
            <div class="inline-flex justify-center items-center">
                <span class="w-2 h-2 inline-block bg-gray-500 rounded-full mr-2"></span>
                <span class="text-xs font-semibold uppercase text-gray-600">
                    Всего филиалов
                </span>
            </div>
        </div>

        <div class="flex flex-col justify-between gap-y-6 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm rounded-xl">
            <div class="text-center">
                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800">
                    <?= $total_regions ?>
                </h3>
            </div>
            <div class="inline-flex justify-center items-center">
                <span class="w-2 h-2 inline-block bg-gray-500 rounded-full mr-2"></span>
                <span class="text-xs font-semibold uppercase text-gray-600">
                    Регионов
                </span>
            </div>
        </div>

        <div class="flex flex-col justify-between gap-y-6 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm rounded-xl">
            <div class="text-center">
                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800">
                    <?= $total_cities ?>
                </h3>
            </div>
            <div class="inline-flex justify-center items-center">
                <span class="w-2 h-2 inline-block bg-gray-500 rounded-full mr-2"></span>
                <span class="text-xs font-semibold uppercase text-gray-600">
                    Городов
                </span>
            </div>
        </div>

        <div class='hidden'>
            <? while ($priceRow = mysqli_fetch_assoc($total_prices)) : ?>
                <tr class='hidden'>
                    <td class='hidden'><?= $priceRow['id'] ?></td>
                    <td class='hidden'><?= $priceRow['service_title'] ?></td>
                    <td class='hidden'><?= $priceRow['total'] != NULL ? $priceRow['services'] : 0 ?></td>
                    <td class='hidden'><?= $priceRow['total'] ?? 0 ?></td>
                    <?php $sum += $priceRow['total'];
                    $bookings += $priceRow['services'] ?>
                </tr>
            <? endwhile; ?>
        </div>

        <div class="flex flex-col col-span-2 justify-between gap-y-6 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm rounded-xl">
            <div class="text-center">
                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800">
                    <?= $sum ?>
                </h3>
            </div>
            <div class="inline-flex justify-center items-center">
                <span class="w-2 h-2 inline-block bg-gray-500 rounded-full mr-2"></span>
                <span class="text-xs font-semibold uppercase text-gray-600">
                    Выручка филиала за все время
                </span>
            </div>
        </div>
    </div>
</section>