<header class="container">
    <h1 class="block text-2xl font-bold text-gray-800 sm:text-3xl">Профиль</h1>
    <p class="mt-2 text-lg text-gray-800">
        Добро пожаловать, <?= $fullname ?>
    </p>
</header>
<? if (isset($_SESSION['USER'])) : ?>
    <section>
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-gray-500">
                                Почта
                            </p>
                        </div>
                        <div class="mt-1 flex items-center">
                            <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                                <?= $_SESSION['USER']['email'] ?>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-gray-500">
                                Телефон
                            </p>
                        </div>
                        <div class="mt-1 flex items-center">
                            <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                                <?= $_SESSION['USER']['phone'] ?>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-gray-500">
                                Проживание
                            </p>
                        </div>
                        <div class="mt-1 flex items-center">
                            <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                                ул. <?= $_SESSION['USER']['street_name'] ?>, д. <?= $_SESSION['USER']['house_number'] ?>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-gray-500">
                                Дата рождения
                            </p>
                        </div>
                        <div class="mt-1 flex items-center">
                            <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                                <?php
                                setlocale(LC_TIME, 'ru_RU.utf8');
                                $date = strftime("%d %B %Y", strtotime($_SESSION['USER']['birthday']));
                                echo $date;
                                ?>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<? endif; ?>