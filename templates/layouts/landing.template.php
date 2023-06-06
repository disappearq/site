<!DOCTYPE html>
<html lang='ru'>

<head>
    <!-- Мета -->
    <meta charset='utf-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />

    <!-- SEO -->
    <title><?= $brand ?> bla-bla</title>
    <meta name='description' content='' />

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
    <link rel='stylesheet' href='/resources/libs/jquery/fancybox/fancybox.min.css' />
    <link rel='stylesheet' href='/resources/styles/styles.min.css' />
</head>

<body class='animation-fade-in duration-300'>
    <header class="flex flex-wrap sm:justify-start fixed top-0 sm:flex-nowrap z-50 w-full bg-white/50 backdrop-blur-md border-b border-gray-200 text-sm py-3 sm:py-0 ">
        <nav class="relative max-w-7xl w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
            <div class="flex items-center justify-between">
                <a class="flex-none text-xl font-semibold" href="/" aria-label="<?= $brand ?>">
                    <i class='fa-solid fa-tooth fa-xl fa-flip text-primary-600'></i>
                    <?= $brand ?>
                </a>
                <div class="sm:hidden">
                    <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary-600 transition-all text-sm" data-hs-collapse="#navbar-collapse" aria-controls="navbar-collapse" aria-label="Toggle navigation">
                        <i class='fa-solid fa-bars hs-collapse-open:hidden block w-3.5 h-3.5'></i>
                        <i class='fa-solid fa-xmark hs-collapse-open:block hidden w-3.5 h-3.5'></i>
                    </button>
                </div>
            </div>
            <div id="navbar-collapse" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                <div data-hs-scrollspy="#scrollspy" class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:pl-7 font-medium text-sm">
                    <a class=" text-gray-700 leading-6 hover:text-gray-500 sm:py-6 hs-scrollspy-active:text-primary-600" href="#about">О нас</a>
                    <a class=" text-gray-700 leading-6 hover:text-gray-500 sm:py-6 hs-scrollspy-active:text-primary-600" href="#advantages">Преимущества</a>
                    <a class=" text-gray-700 leading-6 hover:text-gray-500 sm:py-6 hs-scrollspy-active:text-primary-600" href="#services">Услуги</a>
                    <a class=" text-gray-700 leading-6 hover:text-gray-500 sm:py-6 hs-scrollspy-active:text-primary-600" href="#doctors">Врачи</a>
                    <a class=" text-gray-700 leading-6 hover:text-gray-500 sm:py-6 hs-scrollspy-active:text-primary-600" href="#certificates">Сертификаты</a>
                    <a class=" text-gray-700 leading-6 hover:text-gray-500 sm:py-6 hs-scrollspy-active:text-primary-600" href="#placement">Где нас найти?</a>

                    <div class="inline-flex sm:border-l sm:border-gray-300 sm:pl-7 ">
                        <button type="button" class="w-full shadow-sm sm:w-max py-2 px-3 inline-flex justify-center items-center gap-2 -ml-px first:rounded-l-lg first:ml-0 last:rounded-r-lg border font-medium focus:z-10 bg-white text-gray-700 align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-white focus:ring-primary-600 transition-all text-sm" data-hs-overlay="#modal-login">
                            <i class='fa-solid fa-sign-in'></i>
                            Вход
                        </button>
                        <button type="button" class="w-full shadow-sm sm:w-max py-2 px-3 inline-flex justify-center items-center gap-2 -ml-px first:rounded-l-lg first:ml-0 last:rounded-r-lg font-medium align-middle focus:z-10 focus:outline-none focus:ring-2 focus:ring-primary-700 transition-all text-sm border border-transparent bg-primary-600 text-white hover:bg-primary-700" data-hs-overlay="#modal-register">
                            Регистрация
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main id='scrollspy' role='main'>
        <?= $content ?>
    </main>
    <footer class='bg-gray-900'>
        <div class="max-w-7xl py-10 px-4 sm:px-6 lg:px-8 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-5 text-center">
                <div class='text-left'>
                    <a class="flex-none text-xl font-semibold text-white" href="#" aria-label="<?= $brand ?>">
                        <i class='fa-solid fa-tooth fa-xl fa-flip text-primary-600'></i>
                        <?= $brand ?>
                    </a>
                </div>
                <ul class="text-center">
                    <li class="inline-block relative pr-8 last:pr-0 last-of-type:before:hidden before:absolute before:top-1/2 before:right-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-300">
                        <button class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200" type="button" data-hs-overlay="#modal-offer">
                            Оферта
                        </button>
                    </li>
                    <li class="inline-block relative pr-8 last:pr-0 last-of-type:before:hidden before:absolute before:top-1/2 before:right-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-300">
                        <button class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200" type="button" data-hs-overlay="#modal-policy">
                            Конфиденциальность
                        </button>
                    </li>
                    <li class="inline-block relative pr-8 last:pr-0 last-of-type:before:hidden before:absolute before:top-1/2 before:right-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-300">
                        <button class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200" type="button" data-hs-overlay="#modal-cookie">
                            Cookie
                        </button>
                    </li>
                </ul>
                <div class="md:text-right space-x-2">
                    <a class="inline-flex justify-center items-center gap-x-3.5 w-10 h-10 text-center text-gray-200 hover:bg-white/[.1] rounded-md focus:outline-none focus:ring-2 focus:ring-primary-600 transition" href="https://vk.com/">
                        <i class='fa-brands fa-vk'></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- 
        ОКНО КУКИ
     -->
    <div id="cookie" class="fixed bottom-0 right-0 z-[50] sm:max-w-md w-full mx-auto p-6">
        <div class="p-4 bg-white border border-gray-200 rounded-xl shadow-sm ">
            <div class="flex gap-x-4">
                <svg class="flex-shrink-0 w-8 h-auto" width="72" height="63" viewBox="0 0 72 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.5174 56.1528C16.2903 57.6825 16.929 61.4559 14.8118 60.9459C13.5013 60.5381 11.4445 57.6213 12.493 56.1528C12.661 55.8468 13.2189 55.2757 14.106 55.4389" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    <path d="M15.5173 49.6263L14.0262 48.5579C13.5346 48.2056 12.8477 48.3707 12.658 48.945C12.3456 49.8907 12.1258 51.1463 12.462 52.2324C12.5336 52.4636 12.7127 52.6466 12.9449 52.7146C13.8342 52.9751 15.2568 52.9048 15.8197 51.054" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    <mask id="path-3-inside-1_4542_101166" fill="currentColor" class="text-gray-800">
                        <ellipse rx="1.09811" ry="0.738034" transform="matrix(0.921654 0.388014 -0.38048 0.924789 14.2069 43.4055)" />
                    </mask>
                    <path d="M13.3756 43.0555C13.6288 42.4402 14.1378 42.259 14.3273 42.2214C14.5316 42.1809 14.6503 42.223 14.687 42.2384L13.1651 45.9376C13.7607 46.1884 14.4484 46.2907 15.1206 46.1574C15.7781 46.0269 16.654 45.5999 17.0622 44.6076L13.3756 43.0555ZM14.687 42.2384C14.7237 42.2539 14.8369 42.3094 14.9524 42.4846C15.0596 42.6471 15.2913 43.1401 15.0381 43.7554L11.3515 42.2034C10.9432 43.1957 11.261 44.1253 11.6329 44.689C12.0131 45.2654 12.5694 45.6868 13.1651 45.9376L14.687 42.2384ZM15.0381 43.7554C14.7849 44.3708 14.2759 44.552 14.0864 44.5895C13.8821 44.6301 13.7634 44.588 13.7267 44.5725L15.2486 40.8734C14.653 40.6226 13.9653 40.5203 13.2931 40.6536C12.6357 40.784 11.7597 41.2111 11.3515 42.2034L15.0381 43.7554ZM13.7267 44.5725C13.69 44.5571 13.5768 44.5015 13.4613 44.3264C13.3541 44.1638 13.1225 43.6709 13.3756 43.0555L17.0622 44.6076C17.4705 43.6153 17.1527 42.6857 16.7809 42.1219C16.4007 41.5455 15.8443 41.1241 15.2486 40.8734L13.7267 44.5725Z" fill="black" mask="url(#path-3-inside-1_4542_101166)" />
                    <mask id="path-5-inside-2_4542_101166" fill="currentColor" class="text-gray-800">
                        <ellipse rx="1.00988" ry="1.0181" transform="matrix(0.921654 0.388014 -0.38048 0.924789 21.3702 57.2201)" />
                    </mask>
                    <path d="M20.4576 56.8359C20.6581 56.3486 21.2257 56.094 21.7438 56.312L20.2219 60.0112C21.768 60.6621 23.5159 59.9153 24.1442 58.388L20.4576 56.8359ZM21.7438 56.312C22.2618 56.5301 22.4832 57.1169 22.2827 57.6043L18.5961 56.0522C17.9677 57.5795 18.6757 59.3603 20.2219 60.0112L21.7438 56.312ZM22.2827 57.6043C22.0822 58.0916 21.5146 58.3462 20.9966 58.1281L22.5185 54.429C20.9724 53.7781 19.2245 54.5249 18.5961 56.0522L22.2827 57.6043ZM20.9966 58.1281C20.4785 57.9101 20.2571 57.3233 20.4576 56.8359L24.1442 58.388C24.7726 56.8607 24.0646 55.0799 22.5185 54.429L20.9966 58.1281Z" fill="black" mask="url(#path-5-inside-2_4542_101166)" />
                    <mask id="path-7-inside-3_4542_101166" fill="currentColor" class="text-gray-800">
                        <ellipse rx="1.00988" ry="1.0181" transform="matrix(0.921654 0.388014 -0.38048 0.924789 6.75397 38.8236)" />
                    </mask>
                    <path d="M5.84142 38.4394C6.04192 37.9521 6.60952 37.6975 7.12756 37.9156L5.60564 41.6147C7.15177 42.2656 8.89966 41.5188 9.52804 39.9915L5.84142 38.4394ZM7.12756 37.9156C7.6456 38.1337 7.86701 38.7205 7.66651 39.2078L3.9799 37.6557C3.35152 39.1831 4.05951 40.9638 5.60564 41.6147L7.12756 37.9156ZM7.66651 39.2078C7.46601 39.6951 6.89842 39.9498 6.38037 39.7317L7.90229 36.0325C6.35616 35.3816 4.60827 36.1284 3.9799 37.6557L7.66651 39.2078ZM6.38037 39.7317C5.86233 39.5136 5.64092 38.9268 5.84142 38.4394L9.52804 39.9915C10.1564 38.4642 9.44843 36.6834 7.90229 36.0325L6.38037 39.7317Z" fill="black" mask="url(#path-7-inside-3_4542_101166)" />
                    <path d="M31.6479 50.2383C31.5807 51.2241 32.1721 53.053 35.0756 52.4819" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    <path d="M50.9903 34.6769C50.1699 34.1428 48.3973 33.5907 47.8709 35.6552" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    <path d="M40.9087 17.4562C40.0882 16.9221 38.3156 16.37 37.7892 18.4345" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    <path d="M27.8502 29.3345C27.1279 29.998 26.1419 31.587 27.977 32.6357" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    <path d="M62.1917 19.585C62.4894 18.6451 62.5577 16.7703 60.4502 16.7902" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    <ellipse cx="51.2061" cy="22.3973" rx="3.02446" ry="3.05945" fill="currentColor" class="text-gray-800" />
                    <path d="M67.7398 29.6361C68.8249 31.2826 67.6381 32.6215 66.8281 33.1457C66.7645 33.1869 66.695 33.2184 66.6214 33.2363C65.0504 33.618 63.6063 31.5388 63.6063 30.0441C63.6064 28.8034 66.3283 27.4945 67.7398 29.6361Z" fill="currentColor" class="text-gray-800" />
                    <path d="M58.868 38.6126C57.9809 36.4914 54.6002 37.7288 53.0207 38.6126C51.7101 39.2284 52.0126 41.4681 53.6256 43.3038C54.9161 44.7723 56.5157 44.1196 57.1542 43.6097C58.0951 42.8279 59.7552 40.7339 58.868 38.6126Z" fill="currentColor" class="text-gray-800" />
                    <path d="M5.85665 41.8048C5.21042 40.2694 2.74791 41.1651 1.59743 41.8048C0.642774 42.2505 0.863078 43.8717 2.03804 45.2004C2.978 46.2634 4.14317 45.7909 4.60826 45.4219C5.29365 44.8559 6.50288 43.3402 5.85665 41.8048Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    <path d="M45.4596 49.2172C40.9431 47.667 40.2844 51.6987 40.5196 53.9083C40.8221 55.3361 42.4351 55.54 43.4433 55.2341C45.5677 54.5894 51.1052 51.1548 45.4596 49.2172Z" fill="currentColor" class="text-gray-800" />
                    <ellipse rx="2.96295" ry="3.45694" transform="matrix(0.855131 0.518411 -0.509711 0.860345 30.4996 41.3871)" fill="currentColor" class="text-gray-800" />
                    <path d="M38.5032 29.1282C39.471 27.8228 37.8983 26.0687 36.991 25.3549C36.0836 24.6411 34.8335 24.8654 33.8657 26.1707C32.7567 27.6664 37.2934 30.7599 38.5032 29.1282Z" fill="currentColor" class="text-gray-800" />
                    <path d="M19.2476 18.9295C16.4247 18.2768 15.7862 19.8813 15.8198 20.7652C16.0215 23.8246 20.5582 24.4365 21.6672 23.6207C22.4364 23.0548 22.7761 19.7453 19.2476 18.9295Z" fill="currentColor" class="text-gray-800" />
                    <path d="M36.6888 6.79381C35.6403 4.67259 33.2947 5.02613 32.2529 5.46805C28.7042 6.61025 29.3292 8.52749 30.1358 9.13938C31.3456 10.1252 34.2289 12.0153 36.0839 11.6889C38.4027 11.281 37.9994 9.44533 36.6888 6.79381Z" fill="currentColor" class="text-gray-800" />
                    <path d="M56.9526 54.9284C57.7592 53.5006 60.2795 51.0735 65.1187 49.9313C66.0596 49.7953 67.9818 48.5647 68.1431 44.7302C68.3448 39.9371 73.5872 32.9003 69.3529 28.1072C67.5382 26.053 68.4456 23.2121 67.5382 17.7051" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    <path d="M66.7316 16.176C65.1521 14.2383 60.6625 9.8939 55.3394 8.01743C48.703 5.67797 55.8063 4.55591 44.1399 4.75246C44.0816 4.75344 44.0194 4.76029 43.9617 4.76836C43.019 4.90008 40.5102 4.51266 37.2614 1.95295C37.2161 1.91728 37.1681 1.88406 37.1153 1.86091C36.6 1.63502 35.1744 1.43154 32.9584 2.2045C30.6195 3.02036 24.0531 5.46791 21.0622 6.58971C20.4237 6.92965 19.0056 8.05825 18.441 9.85312C17.7353 12.0967 5.93991 23.5187 9.56927 28.9237" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    <path d="M10.4768 30.1484C11.9084 30.3333 14.621 31.3895 15.0562 34.1372C15.1369 34.6464 15.5068 35.0847 16.0079 35.2063C18.8253 35.8904 22.6446 38.4014 20.8122 44.4603C20.7218 44.7592 20.7652 45.0847 20.9158 45.3583C21.7327 46.8422 22.367 49.4462 20.6725 51.7386C20.1262 52.4776 20.4167 53.842 21.2912 54.1243C23.3727 54.7962 25.8398 55.985 27.2662 57.833C27.5533 58.2049 28.0338 58.3932 28.4956 58.3062C30.4142 57.9446 33.9492 57.9776 37.2937 60.233C42.1328 63.4964 42.3345 60.0291 48.6858 60.7429C53.7669 61.314 55.7765 58.3294 56.1462 56.7656" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
                <p class="text-sm">
                    Пользуясь сайтом вы соглашаетесь с <button class="inline-flex items-center gap-x-1.5 text-primary-600 decoration-2 hover:underline font-medium" type='button' data-hs-overlay="#modal-cookie">политикой Cookie</button>
                </p>
                <div>
                    <button id='cookie-accept' type="button" class="inline-flex text-gray-500 focus:outline-none" data-hs-remove-element="#cookie">
                        <span class="sr-only">Dismiss</span>
                        <i class='fa-solid fa-xmark w-4'></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- 
        МОДАЛЬНЫЕ ОКНА
     -->
    <div id="modal-login" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm ">
                <div class="p-4 sm:p-7">
                    <div class="text-center">
                        <h2 class="block text-2xl font-bold">Авторизация</h2>
                        <p class="mt-2 text-sm text-gray-600 ">
                            Еще не зарегистрированы?
                            <button class="text-primary-600 decoration-2 hover:underline font-medium" type='button' data-hs-overlay="#modal-register">
                                Регистрация
                            </button>
                        </p>
                    </div>
                    <div class="mt-5">
                        <form class="grid gap-y-4" id='login-form'>
                            <div>
                                <label for="email" class="block text-sm font-medium mb-2">Почта</label>
                                <div class="relative">
                                    <input type="email" id="email" name="email" class="py-3 px-4 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-primary-500 focus:ring-primary-500 " placeholder="user11@mail.ru" maxlength="32" autofocus required>
                                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                                        <i class='fa-solid fa-envelope h-3.5 w-3.5 text-gray-400'></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="password" class="block text-sm font-medium mb-2">Пароль</label>
                                <div class="relative">
                                    <input type="password" id="password" name="password" class="py-3 px-4 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-primary-500 focus:ring-primary-500 " placeholder="••••••••••••" maxlength="32" required>
                                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                                        <i class='fa-solid fa-envelope h-3.5 w-3.5 text-gray-400'></i>
                                    </div>
                                </div>
                            </div>
                            <p class='hidden text-sm text-red-600' id='error-message'></p>
                            <p class='hidden text-sm text-green-600' id='success-message'></p>
                            <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-primary-500 text-white hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-all text-sm ">Войти</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-register" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm ">
                <div class="p-4 sm:p-7">
                    <div class="text-center">
                        <h2 class="block text-2xl font-bold">Регистрация</h2>
                        <p class="mt-2 text-sm text-gray-600 ">
                            Уже зарегистрированы?
                            <button class="text-primary-600 decoration-2 hover:underline font-medium" type='button' data-hs-overlay="#modal-login">
                                Авторизация
                            </button>
                        </p>
                    </div>
                    <div class="mt-5">
                        <form class="grid grid-cols-2 gap-4" id='registration-form'>
                            <div class='col-span-2'>
                                <label for="surname" class="block text-sm mb-2">Фамилия</label>
                                <div class="relative">
                                    <input type="text" id="surname" name="surname" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500  " placeholder="Введите фамилию" autofocus required>
                                </div>
                            </div>
                            <div class='col-span-2'>
                                <label for="name" class="block text-sm mb-2">Имя</label>
                                <div class="relative">
                                    <input type="text" id="name" name="name" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500  " placeholder="Введите имя" required>
                                </div>
                            </div>
                            <div class='col-span-2'>
                                <label for="patronymic" class="block text-sm mb-2">Отчество</label>
                                <div class="relative">
                                    <input type="text" id="patronymic" name="patronymic" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500  " placeholder="Введите отчество" required>
                                </div>
                            </div>
                            <div>
                                <label for="email" class="block text-sm mb-2">Почта</label>
                                <div class="relative">
                                    <input type="email" id="email" name="email" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500  " placeholder="Введите почту" maxlength="32" required>
                                </div>
                            </div>
                            <div>
                                <label for="phone" class="block text-sm mb-2">Телефон</label>
                                <div class="relative">
                                    <input type="tel" id="phone" name="phone" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500  " placeholder="+7 (XXX) XXX-XX-XX" data-mask='+7 (000) 000-00-00' required>
                                </div>
                            </div>
                            <div>
                                <label for="password1" class="block text-sm mb-2">Пароль</label>
                                <div class="relative">
                                    <input type="password" id="password1" name="password1" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500  " placeholder="Введите пароль" minlength="8" maxlength="32" required>
                                </div>
                            </div>
                            <div>
                                <label for="password2" class="block text-sm mb-2">Подтверждение пароля</label>
                                <div class="relative">
                                    <input type="password" id="password2" name="password2" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-primary-500 focus:ring-primary-500  " minlength="8" maxlength="32" placeholder="Повторите пароль" required>
                                </div>
                            </div>
                            <p class='hidden text-sm text-red-600' id='error-message2'></p>
                            <p class='hidden text-sm text-green-600' id='success-message2'></p>
                            <button type="submit" class="py-3 col-span-2 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-primary-500 text-white hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-all text-sm ">
                                Зарегистрироваться
                            </button>
                            <div class='col-span-2 text-sm text-gray-600 '>
                                Нажимая на кнопку вы подтверждаете, что ознакомлены с <button class="text-primary-600 decoration-2 hover:underline font-medium" type='button' data-hs-overlay="#modal-offer">публичной офертой</button>, и <button class="text-primary-600 decoration-2 hover:underline font-medium" type='button' data-hs-overlay="#modal-policy">политикой конфиденциальности</button>.
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-offer" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl">
                <div class="py-3 px-4 border-b ">
                    <h3 class="font-bold">
                        Публичная оферта
                    </h3>
                </div>
                <div class="p-4 overflow-y-auto space-y-4">
                    <p>Настоящий публичный Договор–оферта на оказание платных медицинских услуг ООО «Стоматология Мой зубной» (далее – «Договор-оферта» или «Договор») в порядке ст. 435, 437 Гражданского Кодекса РФ (далее – «ГК РФ») является публичной офертой, обращенной к физическим лицам, желающим получить соответствующие стоматологические услуги. Физические лица, желающие принять (акцептовать) данную оферту обязуются подписать Заявление о присоединении к публичному Договору-оферте на оказание платных стоматологических услуг ООО «Стоматологии доктора Елисеева» по форме, изложенной в Приложении № 1 к настоящему Договору.</p>

                    <p> Статья 440 ГК РФ гласит, что договор считается заключенным, если акцепт получен лицом, направившим оферту, в пределах указанного в ней срока. Заявления о присоединении к публичному Договору-оферте на оказание платных стоматологических услуг ООО «Стоматология Мой зубной» должны содержать в себе реквизиты редакции Договора-оферты. Заявления полученные, позднее срока действия настоящей редакции Договора-оферты не принимаются.</p>

                    <p>Настоящий Договор-оферта действителен с «4» июня 2022 года.</p>

                    <p>1. ОСНОВНЫЕ ТЕРМИНЫ И ОПРЕДЕЛЕНИЯ</p>

                    <p>1.1. Заказчик – физическое лицо, заключающее настоящий Договор с Исполнителем, в некоторых случаях Заказчиком может являться законный представитель Пациента.</p>

                    <p>1.2. Исполнитель – Общество с ограниченной ответственностью «Стоматология доктора Елисеева» (ООО «Стоматология доктора Елисеева») (Свидетельство о государственной регистрации юридического лица в Едином государственном реестр юридических лиц выдано Инспекцией Федеральной налоговой службы по г. Симферополю 25.11.2014 года, ОГРН 1149102092226),(по тексту Договора – Клиники).</p>

                    <p>1.3. Пациент – физическое лицо, получающие медицинские услуги, оказываемые Исполнителем в объемах и порядке, установленном настоящим Договором, дополнениями/приложениями к настоящему Договору.
                    </p>
                    <p> 1.4. Сторона – именуемый по отдельности Заказчик или Исполнитель.
                    </p>
                    <p> 1.5. Стороны – именуемые совместно Заказчик и Исполнитель.</p>

                    <p> 1.6. Прайс-лист – утвержденный Генеральным директором перечень оказываемых медицинских услуг и цен на них, действующий на момент произведения оплаты. Прайс-лист доступен для публичного ознакомления на официальном сайте Исполнителя в информационной сети Интернет justdent.ru и на стендах в Клиниках Исполнителя. Стоимость конкретных процедур и манипуляций также может быть уточнена у соответствующих специалистов Исполнителя.</p>

                    <p> 1.7. В случае, если Заказчик и Пациент являются одним лицом, то по тексту настоящего Договора термины «Пациент» и «Заказчик» являются равнозначными и могут применяться как совместно, так и раздельно.</p>

                    2. ПРЕДМЕТ ДОГОВОРА

                    2.1. Настоящий Договор определяет условия и порядок оказания платных стоматологических услуг в Клинике Исполнителя.

                    2.2. Заказчик полностью доверяет, а Клиника принимает на себя предоставление стоматологического обслуживания – отдельных стоматологических услуг с использованием современных технологий, методик лечения и протезирования, гарантирует качество лечения при выполнении следующих взаимных обязательств.

                    2.3. Заказчик гарантирует, что он является законным представителем Пациента, являющегося недееспособным/ограниченно дееспособным лицом, либо лицом, не достигшим 18-летнего возраста, вся информация о Пациенте, о состоянии его здоровья и пр., подлежит передаче Заказчику, а также Пациенту – при достижении им 15-летнего возраста.

                    2.4. Перечень и стоимость стоматологических услуг, оказываемых Пациенту в рамках настоящего Договора, указывается в действующем на момент обращения Пациента в Клинику Исполнителя Прайс-листе на медицинские услуги.

                    2.5. Объем предоставления Пациенту стоматологических услуг определяется Исполнителем и согласовывается Пациентом (законным представителем Пациента, не достигшего возраста 15 лет), в момент обращения Пациента в Клинику Исполнителя с целью получения стоматологических услуг.

                    gudodama, [04.06.2023 23:52]
                    2.7. Стоматологические услуги по настоящему Договору оказываются Исполнителем Заказчику систематически, по факту обращения Пациента в Клинику Исполнителя. Сроки и время оказания стоматологических услуг согласовываются в момент записи Пациента на прием к лечащему врачу либо на осуществление иной стоматологической услуги.

                    3. ПРАВА и ОБЯЗАТЕЛЬСТВА СТОРОН

                    3.1. ИСПОЛНИТЕЛЬ ОБЯЗУЕТСЯ:

                    3.1.1. Поручить врачу Клиники осуществлять в оговоренное с Заказчиком время осмотр пациента с проведением, по показаниям, дополнительных методов обследования для установления предварительного диагноза и объема необходимых лечебных процедур. При отсутствии необходимых технических возможностей Клиника оставляет за собой право направить Пациента в иную специализированную медицинскую организацию. О результатах обследования врач обязан исчерпывающе проинформировать Пациента.

                    3.1.2. Поручить врачу Клиники ознакомить Пациента с планом лечения, возможными ближайшими и более поздними осложнениями, независящими от проведенного врачом лечения. Обеспечить качественные и безболезненные методы лечения с применением по показаниям обезболивающих средств, согласовать время и дату посещения пациентом врача, отразить в амбулаторной карте заказчика данные обследования, диагноз и проводимое лечение. Амбулаторная карта является неотъемлемым приложением к настоящему договору.

                    3.1.3. В случае непредвиденного отсутствия лечащего врача в назначенный день, Клиника вправе назначить другого врача для проведения лечения в ООО «Стоматология Мой зубной»

                    3.1.4. По письменному заявлению Пациента выдавать ему выписку из амбулаторной карты Пациента, иную медицинскую документацию в порядке, предусмотренном законодательством РФ.

                    3.1.5. По требованию Заказчика/Пациента предоставить для ознакомления документы, подтверждающие специальную правоспособность Исполнителя и его врачей.

                    3.1.6. Соблюдать врачебную тайну, в том числе конфиденциальность персональных данных Заказчика/Пациента, используемых, в том числе, в стоматологических информационных системах.

                    3.1.7. При оказании стоматологических услуг обеспечивать применение разрешенных к применению в Российской Федерации лекарственных препаратов, специализированных продуктов лечебного питания, медицинских изделий.

                    3.2. ЗАКАЗЧИК/ПАЦИЕНТ, принимая (акцептируя) условия настоящего Договора-оферты, берет на себя следующие обязательства:

                    3.2.1. До оказания медицинской услуги предоставить Исполнителю максимально подробную информацию о состоянии здоровья, отягощенной наследственности, о перенесенных и имеющихся заболеваниях, известных ему аллергических реакциях, противопоказаниях Пациента.

                    3.2.2. Выполнять все требования и/или обеспечить выполнение Пациентом всех требований и рекомендаций врача и медицинского персонала, соблюдать гигиену полости рта, в том числе соблюдать указания Исполнителя, предписанные на период после оказания стоматологической услуги.

                    3.2.3. Заблаговременно информировать Исполнителя о необходимости отмены или изменения назначенного Пациенту время получения (оказания) стоматологической услуги по телефонам: 26-27-22 +7978-8539837. В случае опоздания более, чем на 10 минут по отношению к назначенному времени получения стоматологической услуги, Исполнитель оставляет за собой право переноса или отмены получения стоматологической услуги.

                    3.2.4. Сообщать Исполнителю сведения о наличии у Пациента заболевания, представляющего опасность для окружающих, при использовании крови, биологических жидкостей Пациента.

                    3.2.5. Посещать лечащего врача для контрольных и профилактических осмотров в период реабилитации. Контрольный, профилактический осмотры в период, ограниченный гарантийным сроком, проводятся бесплатно.

                    3.2.6. Сообщать Исполнителю о жалобах Пациента, перенесенных заболеваниях, обращениях за медицинской помощью, изменениях в состоянии здоровья.

                    3.2.7. Предоставлять Исполнителю необходимую для медицинского вмешательства информацию о состоянии здоровья Пациента и иные сведения, которые могут сказаться на качестве оказываемых стоматологических услуг.

                    gudodama, [04.06.2023 23:52]
                    3.2.8. Учитывать свои финансовые возможности при привлечении объемов и видов медицинских услуг Пациенту. Оплачивать стоматологической услуги в сроки и в порядке, предусмотренные настоящим Договором, дополнениями/приложениями к нему.

                    3.2.9. За свой счет оплачивать расходы, потребовавшиеся на лечение осложнений, возникших вследствие собственных сознательных действий Пациента вопреки согласованным с Пациентом назначениям Исполнителя.

                    3.2.10. Предоставить Исполнителю согласие на обработку своих персональных данных по форме установленной Исполнителем

                    3.3. ИСПОЛНИТЕЛЬ имеет право:

                    3.3.1. Вносить изменения в прейскурант услуг. Прейскурант является официальным документом Клиники, содержит полный перечень услуг, оказание которых возможно в рамках настоящего Договора.

                    3.3.2. При необходимости привлекать третьих лиц (медицинских специалистов, медицинские учреждения) для оказания услуг Пациенту.

                    3.3.3. Отказаться от предоставления Пациенту услуг, предусмотренных настоящим Договором, в случае невыполнения Пациентом условий настоящего Договора, в том числе в случае невыполнения Пациентом требований медицинского персонала Исполнителя, при выявлении у Пациента противопоказаний к проведению лечебно диагностических мероприятий

                    3.3.4. Самостоятельно определять объем исследований и необходимых действий, направленных на установление верного диагноза и оказание стоматологической услуги Пациенту, в случаях возникновения состояний Пациента, требующих незамедлительного медицинского вмешательства

                    3.4. ЗАКАЗЧИК/ПАЦИЕНТ имеет право:

                    3.4.1. Требовать от Исполнителя надлежащего выполнения им обязательств по настоящему Договору.

                    3.4.2. На выбор лечащего врача, с учетом согласия врача, в соответствии с законодательством Российской Федерации.

                    3.4.3. На профилактику, диагностику, лечение, медицинскую реабилитацию в условиях, соответствующих санитарно-гигиеническим требованиям.

                    3.4.4. На получение консультаций врачей-специалистов, в том числе проведение по просьбе Заказчика/Пациента консилиума врачей.

                    3.4.5. На облегчение боли, связанной с заболеванием и (или) медицинским вмешательством, доступными методами и лекарственными препаратами.

                    3.4.6. На получение информации о своих правах и обязанностях, состоянии своего здоровья, выбор лиц, которым в интересах Пациента может быть передана информация о состоянии его здоровья.

                    3.4.7. На защиту сведений, составляющих врачебную тайну.

                    3.4.8. Заказчик/Пациент (при достижении 15-летнего возраста) имеет право на получение в доступной форме информации о состоянии своего здоровья, на отказ от медицинского вмешательства.

                    3.4.9. Знакомиться и получать медицинскую документацию (ее копии и выписки из медицинских документов), знакомиться с медицинскими заключениями Исполнителя в отношении Пациента с указанием результатов проведенных исследований, лечебных мероприятий и необходимых рекомендаций, в порядке, предусмотренном законодательством РФ и настоящим Договором.

                    3.4.10. На информированное добровольное согласие на медицинское вмешательство. В случаях, когда состояние Пациента не позволяет ему выразить свою волю, а медицинское вмешательство неотложно, вопрос о его проведении в интересах Пациента решает врач. Отказ от медицинского вмешательства с указанием возможных последствий оформляется записью в медицинской документации и подписывается Пациентом или его представителем, а также медицинским работником.

                    3.4.11. Самостоятельно, на основе действующего прейскуранта, определять перечень услуг, которые он желает получить в рамках настоящего договора, с учетом рекомендаций, полученных от медицинского персонала Клиники.

                    3.4.12. Обратиться к руководству Клиники с предложениями, жалобами, в том числе в случае претензий по объему и качеству оказанных медицинских услуг.

                    4. СТОИМОСТЬ УСЛУГ И ПОРЯДОК РАСЧЕТОВ

                    gudodama, [04.06.2023 23:52]
                    4.1. Стоимость стоматологических услуг, оказываемых Пациенту по настоящему Договору, определяется в соответствии с Прайс-листом, действующим на дату оказания стоматологической услуги Пациенту (если иное не согласовано Сторонами в дополнениях/приложениях к Договору), и указывается в Плане лечения. Стоимость стоматологических услуг НДС не облагается в соответствии с п. 2 ст. 149 НК Российской Федерации.

                    4.2. За выполнение комплексной программы стоматологического обслуживания Пациент производит оплату по факту выполненной работы на основании Прайс-листа, действующего на момент оказания стоматологической услуги, наличными денежными средствами в кассу Клиники. При выполнении зубопротезных работ, выполненных Клиникой в полном объеме, Пациент обязан оплатить ее после принятия.

                    С согласия Пациента работа может быть оплачена им при заключении договора в полном размере или путем аванса.

                    4.3. Заказчику предоставляется документ, подтверждающий произведенную оплату стоматологических услуг (контрольно-кассовый чек либо иной расчетный документ, оформленный в соответствии с требованиями законодательства).

                    5. УСЛОВИЯ И ПОРЯДОК ОКАЗАНИЯ МЕДИЦИНСКИХ УСЛУГ

                    5.1. Прием Пациента осуществляется после оформления медицинской (амбулаторной) карты (в том числе электронной медицинской карты) в момент первичного обращения Пациента в Клинику. Стоматологические услуги оказываются в Клинике в дни и часы, которые устанавливаются руководителем Клиники, режим работы доводится до сведения Заказчика/Пациента путем размещения информации на информационном стенде в Клинике и официальном сайте Исполнителя.

                    5.2. Стоматологические услуги оказываются Исполнителем в соответствии с действующим законодательством Российской Федерации и правилами (положениями), устанавливающими условия и порядок оказания стоматологических услуг в Клинике Исполнителя.

                    5.3. Исполнитель не обеспечивает Пациентов бесплатными лекарственными препаратами, питанием и не применяет в процессе лечения лекарственные средства и медицинские изделия, приобретенные Заказчиком/Пациентом у третьих лиц.

                    5.4. В соответствии с п. 3 ст. 70 Федерального закона №ФЗ-323 от 21.11.2011 г. «Об основах охраны здоровья граждан в Российской Федерации» лечащий врач по согласованию с руководителем Клиники может отказаться от наблюдения за Пациентом и его лечения, если отказ непосредственно не угрожает жизни Пациента и здоровью окружающих. В случае отказа лечащего врача от наблюдения за Пациентом и лечения Пациента, руководитель Клиники должен организовать замену лечащего врача.

                    5.5. Стоматологические услуги оказываются Пациенту Исполнителем при наличии письменного информированного добровольного согласия Пациента (его законного представителя) на медицинское вмешательство, проведение диагностических процедур и лечебных манипуляций, компьютерно-диагностических исследований, которые, по мнению врача Исполнителя, целесообразны и необходимы.

                    5.6. Факт оказания стоматологической услуги Пациенту, подтверждается первичной медицинской документацией и/или получением документа, подтверждающего произведенную оплату стоматологических услуг (контрольно-кассовый чек либо иной расчетный документ, оформленный в соответствии с требованиями законодательства). Из-за отсутствия претензий со стороны Заказчика/Пациента по качеству и объему оказанных услуг в течение 3 (трех) календарных дней с момента оказания услуги Пациенту, услуги считаются оказанными надлежащим образом и приняты Заказчиком/Пациентом в полном объеме.

                    6. ОТВЕТСТВЕННОСТЬ СТОРОН

                    6.1. ИСПОЛНИТЕЛЬ несет ответственность:

                    6.1.1. За качество, объем и сроки оказываемых Пациенту стоматологических услуг, за исключением ситуаций, когда исполнение сроков не соблюдено по причинам, не зависящим от Исполнителя.

                    6.1.2. За достоверное и своевременное информирование Пациента о возможном развитии побочных явлений или осложнений, связанных с лечебно-диагностическим процессом при оказании стоматологических услуг.

                    6.1.3. В случае невыполнения или некачественного выполнения своих обязательств, при наличии доказательства своей вины.

                    6.2. ЗАКАЗЧИК/ПАЦИЕНТ несет ответственность:

                    gudodama, [04.06.2023 23:52]
                    6.2.1. За несвоевременную оплату стоимости предоставленных стоматологических услуг в соответствии с условиями настоящего Договора, дополнений/приложений к нему. При этом, в случае просрочки Заказчиком/Пациентом платежа более, чем на 5 рабочих дней Исполнитель вправе приостановить оказание стоматологических услуг Пациенту в рамках настоящего Договора, и взыскать с Заказчика/Пациента неустойку в размере, предусмотренном законодательством Российской Федерации.

                    6.2.2. За достоверность предоставленной врачу информации о перенесенных заболеваниях, известных ему аллергических реакциях, противопоказаниях в отношении Пациента.

                    6.2.3. За выполнение/невыполнение Пациентом всех требований и рекомендаций по лечению медицинского персонала Исполнителя, в том числе за соблюдение/несоблюдение указаний лечащего врача Исполнителя, предписанных на период после оказания стоматологической услуги.

                    6.3. Неисполнение или ненадлежащее исполнение обязанностей Пациентом, повлёкшее ухудшение качества оказанной медицинской услуги, соответственно снимает ответственность с Исполнителя за качество медицинской помощи.

                    6.4. Исполнитель освобождается от ответственности за неисполнение или ненадлежащее исполнение медицинских услуг по настоящему Договору, если Пациент нарушит обязательства, предусмотренные настоящим Договором, в случае если указанные нарушения имели место и явились причиной недостатков оказания медицинской помощи (вреда).

                    6.5. Вид лечения, конструкции протеза, стоматологических материалов определяются Клиникой с учетом пожеланий Пациента. Клиника обязана своевременно информировать Пациента о том, что не соблюдение указаний лечащего врача Клиники и иные обстоятельства, зависящие от потребителя, могут снизить качество выполняемой работы (оказываемой услуги) или повлечь за собой невозможность ее завершения в срок.

                    Если Пациент, несмотря на своевременное и обоснованное информирование Клиникой, в разумный срок не выполнит указания лечащего врача Клиники либо не устранит иных обстоятельств, которые могут снизить качество выполняемой работы (оказываемой услуги), то Клиника не несет ответственности за положительный и качественный результат выполненной работы (оказанной услуги). Пациент в данном случае не имеет право требовать возмещения убытков.

                    6.6. Все споры, возникающие при выполнении настоящего Договора, решаются путем переговоров. В случае невозможности урегулирования спора в досудебном порядке, все неурегулированные вопросы подлежат разрешению в суде в соответствии с законодательством Российской Федерации.

                    7. ПОРЯДОК ИЗМЕНЕНИЯ И РАСТОРЖЕНИЯ ДОГОВОРА

                    7.1. Настоящий Договор может быть изменен и/или дополнен Сторонами путем подписания дополнительных соглашений и приложений к нему, а также иными способами в соответствии с условиями настоящего Договора.

                    7.2. Исполнитель вправе в одностороннем порядке вносить изменения в Договор, Прайс-лист, перечень стоматологических услуг, в положения, устанавливающие условия и правила оказания стоматологических услуг Исполнителем. В случае изменения Исполнителем какого-либо документа, указанного в настоящем пункте, такие изменения доводятся до сведения Заказчика/Пациента путем размещения соответствующей информации на информационных стендах в Клинике Исполнителя и официальном сайте Исполнителя.

                    7.3. Заказчик/Пациент вправе отказаться от получения стоматологических услуг в рамках настоящего Договора, предоставив Исполнителю письменный отказ от медицинского вмешательства (или потребовать его прекращения) в порядке, предусмотренном статьей 20 пунктом 7 Федерального закона №ФЗ-323 от 21.11.2011 г. «Об основах охраны здоровья граждан в Российской Федерации», либо в любое время расторгнуть настоящий Договор в одностороннем порядке, уведомив письменно Исполнителя о расторжении Договора и/или дополнения/приложения к Договору.

                    gudodama, [04.06.2023 23:52]
                    7.4. При отказе Заказчика/Пациента от получения стоматологических услуг и/или при расторжении Договора (его части) Стороны производят окончательный расчет по настоящему Договору (его части), при этом Заказчик/Пациент оплачивает Исполнителю фактически понесенные Исполнителем расходы, связанные с исполнением обязательств по Договору и/или его дополнению/приложению.

                    7.5. Исполнителем после исполнения Договора по требованию Пациента/Заказчика выдаются медицинские документы (копии медицинских документов, выписки из медицинских документов), отражающие состояние здоровья Пациента/Заказчика.

                    7.6. Заказчик вправе в любое время отказаться от исполнения настоящего Договора при условии оплаты Исполнителю за фактически понесенные Исполнителем расходы

                    8. КОНФИДЕНЦИАЛЬНОСТЬ

                    8.1. Конфиденциальной считается информация, отнесенная Федеральным законом РФ № 152-ФЗ «О персональных данных» от 27.07.2006 г. к персональным данным. Исполнитель обязуется принимать все необходимые организационные и технические меры для защиты персональных данных Заказчика/Пациента от неправомерного или случайного доступа к ним, уничтожения, изменения, блокирования, копирования, распространения персональных данных, а также от иных неправомерных действий. Стороны берут на себя взаимные обязательства по соблюдению режима конфиденциальности информации, полученной при исполнении условий настоящего Договора. Передача информации третьим лицам или иное разглашение информации, признанной по настоящему Договору конфиденциальной, может осуществляться только с письменно согласия другой Стороны, если иное не предусмотрено законодательством Российской Федерации и/или настоящим Договором, дополнениями/приложениями к нему.

                    8.2. С письменного согласия Пациента (его законного представителя) допускается передача сведений, составляющих врачебную тайну другим лицам, указанным Пациентом или его законным представителем.

                    8.3. Подписывая соответствующее Заявление о присоединении к публичному Договору-оферте на оказание платных стоматологических услуг ООО «Стоматология доктора Елисеева» Пациент (его законный представитель) в соответствии со ст. 9 Федерального закона от 27.07.2006 г. № 152-ФЗ «О персональных данных» дает свое согласие на обработку его персональных данных Исполнителем (далее – «Оператор») и его уполномоченным сотрудникам. Список уполномоченных сотрудников указан в Приказе о назначении ответственных лиц за обработку персональных данных. Целью обработки персональных данных является оказание медицинских услуг по профилю деятельности Исполнителя на основании настоящего Договора-оферты.

                    8.4. Перечень персональных данных, подлежащих обработке:

                    фамилия, имя, отчество;

                    пол, возраст;

                    паспортные данные;

                    физиологические особенности человека;

                    состояние здоровья, имеющиеся заболевания, поставленные диагнозы, факты обращения в медицинские организации;

                    место регистрации, почтовый адрес, адрес электронной почты, домашний и мобильный телефоны;

                    привычки и увлечения, в том числе вредные (алкоголь, наркотики и др.);

                    семейное положение, наличие детей, родственные связи.

                    8.5. Перечень действий с персональными данными, на совершение которых Пациент (его законный представитель) дает свое согласие: любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу, обезличивание, блокирование, удаление, уничтожение персональных данных.

                    8.6. Передача персональных данных ограничена исключительно медицинскими целями и обусловлена исключительно технической необходимостью.

                    8.7. Пациент может потребовать в письменном виде уничтожить его персональные данные в любой момент после окончания оказания услуг.

                    9. ЗАКЛЮЧИТЕЛЬНЫЕ ПОЛОЖЕНИЯ

                    9.1. Контроль за выполнением объема и качества медицинской помощи осуществляется администрацией лечебного учреждения, при необходимости, привлекаются специалисты вышестоящего органа здравоохранения.

                    gudodama, [04.06.2023 23:52]
                    9.2. Стоматологические услуги не оказываются, если у Пациента имеются противопоказания, препятствующие оказанию услуг по настоящему Договору.

                    В случае возникновения разногласия между Клиникой и Пациентом по вопросу качества оказания услуг спор между сторонами может быть рассмотрен в судебном порядке по месту нахождения Клиники Стоматологии доктора Елисеева.

                    9.3. Споры, возникающие между сторонами, решаются путем взаимных переговоров или с привлечением независимых специалистов-экспертов.

                    Заказчик/Пациент настоящим подтверждает, что он ознакомился с правилами поведения, Положением о порядке и условиях оказания стоматологических услуг в Клинике Исполнителя, утвержденным Исполнителем, и обязуется соблюдать их.

                    9.4. Настоящим Заказчик/Пациент подтверждает, что до заключения Договора уведомлен о том, что несоблюдение Пациентом указаний (рекомендаций) Исполнителя (медицинского работника, предоставляющего стоматологическую услугу), в том числе назначенного режима лечения, могут снизить качество предоставления медицинской услуги, повлечь за собой невозможность ее завершения в срок или отрицательно сказаться на состоянии здоровья Пациента.

                    9.5. В случае если какая-либо часть или части настоящего Договора будут признаны недействительными, незаконными или неприемлемыми к исполнению, это решение не должно отражаться на оценке обоснованности, законности и выполнимости других его частей и положений.

                    9.6. Все изменения и дополнения к договору действительны в том случае, если они совершены в письменной форме и подписаны обеими сторонами.

                    9.7. Приложения к настоящему Договору: Приложение № 1 – Форма Заявления о присоединении к публичному Договору-оферте на оказание платных стоматологических услуг ООО «Стоматология доктора Елисеева».

                    9.8. Подписание Заявления о присоединении (по форме, предусмотренной Приложением № 1) к настоящему Договору свидетельствует об ознакомлении и согласии Заказчика/Пациента (его законного представителя) с Договором и приложениями к нему, ценами на стоматологические услуги - Прайс-листом Исполнителя, в том числе способом информирования об изменении Прайс-листа. Законный представитель Пациента, при достижении Пациентом 14 лет, согласен на оплату лечения Пациента денежными средствами в соответствии с Прайс-листом Исполнителя, в том числе при произведении оплаты самим Пациентом в момент обращения Пациента, и осознает свою дополнительную финансовую ответственность по сделкам своего ребенка (Пациента), оформляемым в рамках настоящего Договора в процессе лечения Пациента.

                    9.9. Клиника устанавливает гарантийный срок на оказанные стоматологические услуги в соответствии с «Положением о гарантиях»
                </div>
            </div>
        </div>
    </div>
    <div id="modal-policy" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl">
                <div class="py-3 px-4 border-b ">
                    <h3 class="font-bold">
                        Политика конфиденциальности
                    </h3>
                </div>
                <div class="p-4 overflow-y-auto">
                    <div class="space-y-4">
                        Политика конфиденциальности персональных данных
                        Настоящая Политика конфиденциальности персональных данных (далее – Политика конфиденциальности) действует в отношении всей информации, которую сайт , (далее – ) расположенный на доменном имени (а также его субдоменах), может получить о Пользователе во время использования сайта (а также его субдоменов), его программ и его продуктов.

                        1. Определение терминов
                        1.1 В настоящей Политике конфиденциальности используются следующие термины:

                        1.1.1. «Администрация сайта» (далее – Администрация) – уполномоченные сотрудники на управление сайтом , которые организуют и (или) осуществляют обработку персональных данных, а также определяет цели обработки персональных данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными.

                        1.1.2. «Персональные данные» - любая информация, относящаяся к прямо или косвенно определенному, или определяемому физическому лицу (субъекту персональных данных).

                        1.1.3. «Обработка персональных данных» - любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных.

                        1.1.4. «Конфиденциальность персональных данных» - обязательное для соблюдения Оператором или иным получившим доступ к персональным данным лицом требование не допускать их распространения без согласия субъекта персональных данных или наличия иного законного основания.

                        1.1.5. «Сайт » - это совокупность связанных между собой веб-страниц, размещенных в сети Интернет по уникальному адресу (URL): , а также его субдоменах.

                        1.1.6. «Субдомены» - это страницы или совокупность страниц, расположенные на доменах третьего уровня, принадлежащие сайту , а также другие временные страницы, внизу который указана контактная информация Администрации

                        1.1.5. «Пользователь сайта » (далее Пользователь) – лицо, имеющее доступ к сайту , посредством сети Интернет и использующее информацию, материалы и продукты сайта .

                        1.1.7. «Cookies» — небольшой фрагмент данных, отправленный веб-сервером и хранимый на компьютере пользователя, который веб-клиент или веб-браузер каждый раз пересылает веб-серверу в HTTP-запросе при попытке открыть страницу соответствующего сайта.

                        1.1.8. «IP-адрес» — уникальный сетевой адрес узла в компьютерной сети, через который Пользователь получает доступ на .

                        2. Общие положения
                        2.1. Использование сайта Пользователем означает согласие с настоящей Политикой конфиденциальности и условиями обработки персональных данных Пользователя.

                        2.2. В случае несогласия с условиями Политики конфиденциальности Пользователь должен прекратить использование сайта .

                        2.3. Настоящая Политика конфиденциальности применяется к сайту . не контролирует и не несет ответственность за сайты третьих лиц, на которые Пользователь может перейти по ссылкам, доступным на сайте .

                        2.4. Администрация не проверяет достоверность персональных данных, предоставляемых Пользователем.

                        3. Предмет политики конфиденциальности
                        3.1. Настоящая Политика конфиденциальности устанавливает обязательства Администрации по неразглашению и обеспечению режима защиты конфиденциальности персональных данных, которые Пользователь предоставляет по запросу Администрации при регистрации на сайте или при подписке на информационную e-mail рассылку.

                        3.2. Персональные данные, разрешённые к обработке в рамках настоящей Политики конфиденциальности, предоставляются Пользователем путём заполнения форм на сайте и включают в себя следующую информацию:
                        3.2.1. фамилию, имя, отчество Пользователя;
                        3.2.2. контактный телефон Пользователя;
                        3.2.3. адрес электронной почты (e-mail)
                        3.2.4. место жительство Пользователя (при необходимости)
                        3.2.5. фотографию (при необходимости)

                        gudodama, [04.06.2023 23:40]
                        3.3. защищает Данные, которые автоматически передаются при посещении страниц:
                        - IP адрес;
                        - информация из cookies;
                        - информация о браузере
                        - время доступа;
                        - реферер (адрес предыдущей страницы).

                        3.3.1. Отключение cookies может повлечь невозможность доступа к частям сайта , требующим авторизации.

                        3.3.2. осуществляет сбор статистики об IP-адресах своих посетителей. Данная информация используется с целью предотвращения, выявления и решения технических проблем.

                        3.4. Любая иная персональная информация неоговоренная выше (история посещения, используемые браузеры, операционные системы и т.д.) подлежит надежному хранению и нераспространению, за исключением случаев, предусмотренных в п.п. 5.2. настоящей Политики конфиденциальности.

                        4. Цели сбора персональной информации пользователя
                        4.1. Персональные данные Пользователя Администрация может использовать в целях:
                        4.1.1. Идентификации Пользователя, зарегистрированного на сайте для его дальнейшей авторизации.
                        4.1.2. Предоставления Пользователю доступа к персонализированным данным сайта .
                        4.1.3. Установления с Пользователем обратной связи, включая направление уведомлений, запросов, касающихся использования сайта , обработки запросов и заявок от Пользователя.
                        4.1.4. Определения места нахождения Пользователя для обеспечения безопасности, предотвращения мошенничества.
                        4.1.5. Подтверждения достоверности и полноты персональных данных, предоставленных Пользователем.
                        4.1.6. Создания учетной записи для использования частей сайта , если Пользователь дал согласие на создание учетной записи.
                        4.1.7. Уведомления Пользователя по электронной почте.
                        4.1.8. Предоставления Пользователю эффективной технической поддержки при возникновении проблем, связанных с использованием сайта .
                        4.1.9. Предоставления Пользователю с его согласия специальных предложений, новостной рассылки и иных сведений от имени сайта .

                        5. Способы и сроки обработки персональной информации
                        5.1. Обработка персональных данных Пользователя осуществляется без ограничения срока, любым законным способом, в том числе в информационных системах персональных данных с использованием средств автоматизации или без использования таких средств.

                        5.2. Персональные данные Пользователя могут быть переданы уполномоченным органам государственной власти Российской Федерации только по основаниям и в порядке, установленным законодательством Российской Федерации.

                        5.3. При утрате или разглашении персональных данных Администрация вправе не информировать Пользователя об утрате или разглашении персональных данных.

                        5.4. Администрация принимает необходимые организационные и технические меры для защиты персональной информации Пользователя от неправомерного или случайного доступа, уничтожения, изменения, блокирования, копирования, распространения, а также от иных неправомерных действий третьих лиц.

                        5.5. Администрация совместно с Пользователем принимает все необходимые меры по предотвращению убытков или иных отрицательных последствий, вызванных утратой или разглашением персональных данных Пользователя.

                        6. Права и обязанности сторон
                        6.1. Пользователь вправе:

                        6.1.1. Принимать свободное решение о предоставлении своих персональных данных, необходимых для использования сайта , и давать согласие на их обработку.

                        6.1.2. Обновить, дополнить предоставленную информацию о персональных данных в случае изменения данной информации.

                        6.1.3. Пользователь имеет право на получение у Администрации информации, касающейся обработки его персональных данных, если такое право не ограничено в соответствии с федеральными законами. Пользователь вправе требовать от Администрации уточнения его персональных данных, их блокирования или уничтожения в случае, если персональные данные являются неполными, устаревшими, неточными, незаконно полученными или не являются необходимыми для заявленной цели обработки, а также принимать предусмотренные законом меры по защите своих прав. Для этого достаточно уведомить Администрацию по указаному E-mail адресу.

                        6.2. Администрация обязана:

                        gudodama, [04.06.2023 23:40]
                        6.2.1. Использовать полученную информацию исключительно для целей, указанных в п. 4 настоящей Политики конфиденциальности.

                        6.2.2. Обеспечить хранение конфиденциальной информации в тайне, не разглашать без предварительного письменного разрешения Пользователя, а также не осуществлять продажу, обмен, опубликование, либо разглашение иными возможными способами переданных персональных данных Пользователя, за исключением п.п. 5.2. настоящей Политики Конфиденциальности.

                        6.2.3. Принимать меры предосторожности для защиты конфиденциальности персональных данных Пользователя согласно порядку, обычно используемого для защиты такого рода информации в существующем деловом обороте.

                        6.2.4. Осуществить блокирование персональных данных, относящихся к соответствующему Пользователю, с момента обращения или запроса Пользователя, или его законного представителя либо уполномоченного органа по защите прав субъектов персональных данных на период проверки, в случае выявления недостоверных персональных данных или неправомерных действий.

                        Ответственность сторон
                        7.1. Администрация, не исполнившая свои обязательства, несёт ответственность за убытки, понесённые Пользователем в связи с неправомерным использованием персональных данных, в соответствии с законодательством Российской Федерации, за исключением случаев, предусмотренных п.п. 5.2. и 7.2. настоящей Политики Конфиденциальности.

                        7.2. В случае утраты или разглашения Конфиденциальной информации Администрация не несёт ответственность, если данная конфиденциальная информация:
                        7.2.1. Стала публичным достоянием до её утраты или разглашения.
                        7.2.2. Была получена от третьей стороны до момента её получения Администрацией Ресурса.
                        7.2.3. Была разглашена с согласия Пользователя.

                        7.3. Пользователь несет полную ответственность за соблюдение требований законодательства РФ, в том числе законов о рекламе, о защите авторских и смежных прав, об охране товарных знаков и знаков обслуживания, но не ограничиваясь перечисленным, включая полную ответственность за содержание и форму материалов.

                        7.4. Пользователь признает, что ответственность за любую информацию (в том числе, но не ограничиваясь: файлы с данными, тексты и т. д.), к которой он может иметь доступ как к части сайта , несет лицо, предоставившее такую информацию.

                        7.5. Пользователь соглашается, что информация, предоставленная ему как часть сайта , может являться объектом интеллектуальной собственности, права на который защищены и принадлежат другим Пользователям, партнерам или рекламодателям, которые размещают такую информацию на сайте .
                        Пользователь не вправе вносить изменения, передавать в аренду, передавать на условиях займа, продавать, распространять или создавать производные работы на основе такого Содержания (полностью или в части), за исключением случаев, когда такие действия были письменно прямо разрешены собственниками такого Содержания в соответствии с условиями отдельного соглашения.

                        7.6. В отношение текстовых материалов (статей, публикаций, находящихся в свободном публичном доступе на сайте ) допускается их распространение при условии, что будет дана ссылка на .

                        7.7. Администрация не несет ответственности перед Пользователем за любой убыток или ущерб, понесенный Пользователем в результате удаления, сбоя или невозможности сохранения какого-либо Содержания и иных коммуникационных данных, содержащихся на сайте или передаваемых через него.

                        7.8. Администрация не несет ответственности за любые прямые или косвенные убытки, произошедшие из-за: использования либо невозможности использования сайта, либо отдельных сервисов; несанкционированного доступа к коммуникациям Пользователя; заявления или поведение любого третьего лица на сайте.

                        7.9. Администрация не несет ответственность за какую-либо информацию, размещенную пользователем на сайте , включая, но не ограничиваясь: информацию, защищенную авторским правом, без прямого согласия владельца авторского права.

                        gudodama, [04.06.2023 23:40]
                        8. Разрешение споров
                        8.1. До обращения в суд с иском по спорам, возникающим из отношений между Пользователем и Администрацией, обязательным является предъявление претензии (письменного предложения или предложения в электронном виде о добровольном урегулировании спора).

                        8.2. Получатель претензии в течение 30 календарных дней со дня получения претензии, письменно или в электронном виде уведомляет заявителя претензии о результатах рассмотрения претензии.

                        8.3. При не достижении соглашения спор будет передан на рассмотрение Арбитражного суда г. Альметьевск.

                        8.4. К настоящей Политике конфиденциальности и отношениям между Пользователем и Администрацией применяется действующее законодательство Российской Федерации.

                        9. Дополнительные условия
                        9.1. Администрация вправе вносить изменения в настоящую Политику конфиденциальности без согласия Пользователя.

                        9.2. Новая Политика конфиденциальности вступает в силу с момента ее размещения на сайте , если иное не предусмотрено новой редакцией Политики конфиденциальности.

                        9.3. Все предложения или вопросы касательно настоящей Политики конфиденциальности следует сообщать по адресу: support@justdent.ru

                        9.4. Действующая Политика конфиденциальности размещена на странице по адресу http:///politika.html

                        Обновлено: 05 Июня 2023 года

                        г. Альметьевск, Кононов
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-cookie" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl">
                <div class="py-3 px-4 border-b ">
                    <h3 class="font-bold">
                        Политика Cookie
                    </h3>
                </div>
                <div class="p-4 overflow-y-auto">
                    <div class="space-y-4">
                        gudodama, [04.06.2023 23:40]
                        Политика конфиденциальности персональных данных
                        Настоящая Политика конфиденциальности персональных данных (далее – Политика конфиденциальности) действует в отношении всей информации, которую сайт , (далее – ) расположенный на доменном имени (а также его субдоменах), может получить о Пользователе во время использования сайта (а также его субдоменов), его программ и его продуктов.

                        1. Определение терминов
                        1.1 В настоящей Политике конфиденциальности используются следующие термины:

                        1.1.1. «Администрация сайта» (далее – Администрация) – уполномоченные сотрудники на управление сайтом , которые организуют и (или) осуществляют обработку персональных данных, а также определяет цели обработки персональных данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными.

                        1.1.2. «Персональные данные» - любая информация, относящаяся к прямо или косвенно определенному, или определяемому физическому лицу (субъекту персональных данных).

                        1.1.3. «Обработка персональных данных» - любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных.

                        1.1.4. «Конфиденциальность персональных данных» - обязательное для соблюдения Оператором или иным получившим доступ к персональным данным лицом требование не допускать их распространения без согласия субъекта персональных данных или наличия иного законного основания.

                        1.1.5. «Сайт » - это совокупность связанных между собой веб-страниц, размещенных в сети Интернет по уникальному адресу (URL): , а также его субдоменах.

                        1.1.6. «Субдомены» - это страницы или совокупность страниц, расположенные на доменах третьего уровня, принадлежащие сайту , а также другие временные страницы, внизу который указана контактная информация Администрации

                        1.1.5. «Пользователь сайта » (далее Пользователь) – лицо, имеющее доступ к сайту , посредством сети Интернет и использующее информацию, материалы и продукты сайта .

                        1.1.7. «Cookies» — небольшой фрагмент данных, отправленный веб-сервером и хранимый на компьютере пользователя, который веб-клиент или веб-браузер каждый раз пересылает веб-серверу в HTTP-запросе при попытке открыть страницу соответствующего сайта.

                        1.1.8. «IP-адрес» — уникальный сетевой адрес узла в компьютерной сети, через который Пользователь получает доступ на .

                        2. Общие положения
                        2.1. Использование сайта Пользователем означает согласие с настоящей Политикой конфиденциальности и условиями обработки персональных данных Пользователя.

                        2.2. В случае несогласия с условиями Политики конфиденциальности Пользователь должен прекратить использование сайта .

                        2.3. Настоящая Политика конфиденциальности применяется к сайту . не контролирует и не несет ответственность за сайты третьих лиц, на которые Пользователь может перейти по ссылкам, доступным на сайте .

                        2.4. Администрация не проверяет достоверность персональных данных, предоставляемых Пользователем.

                        3. Предмет политики конфиденциальности
                        3.1. Настоящая Политика конфиденциальности устанавливает обязательства Администрации по неразглашению и обеспечению режима защиты конфиденциальности персональных данных, которые Пользователь предоставляет по запросу Администрации при регистрации на сайте или при подписке на информационную e-mail рассылку.

                        3.2. Персональные данные, разрешённые к обработке в рамках настоящей Политики конфиденциальности, предоставляются Пользователем путём заполнения форм на сайте и включают в себя следующую информацию:
                        3.2.1. фамилию, имя, отчество Пользователя;
                        3.2.2. контактный телефон Пользователя;
                        3.2.3. адрес электронной почты (e-mail)
                        3.2.4. место жительство Пользователя (при необходимости)
                        3.2.5. фотографию (при необходимости)

                        gudodama, [04.06.2023 23:40]
                        3.3. защищает Данные, которые автоматически передаются при посещении страниц:
                        - IP адрес;
                        - информация из cookies;
                        - информация о браузере
                        - время доступа;
                        - реферер (адрес предыдущей страницы).

                        3.3.1. Отключение cookies может повлечь невозможность доступа к частям сайта , требующим авторизации.

                        3.3.2. осуществляет сбор статистики об IP-адресах своих посетителей. Данная информация используется с целью предотвращения, выявления и решения технических проблем.

                        3.4. Любая иная персональная информация неоговоренная выше (история посещения, используемые браузеры, операционные системы и т.д.) подлежит надежному хранению и нераспространению, за исключением случаев, предусмотренных в п.п. 5.2. настоящей Политики конфиденциальности.

                        4. Цели сбора персональной информации пользователя
                        4.1. Персональные данные Пользователя Администрация может использовать в целях:
                        4.1.1. Идентификации Пользователя, зарегистрированного на сайте для его дальнейшей авторизации.
                        4.1.2. Предоставления Пользователю доступа к персонализированным данным сайта .
                        4.1.3. Установления с Пользователем обратной связи, включая направление уведомлений, запросов, касающихся использования сайта , обработки запросов и заявок от Пользователя.
                        4.1.4. Определения места нахождения Пользователя для обеспечения безопасности, предотвращения мошенничества.
                        4.1.5. Подтверждения достоверности и полноты персональных данных, предоставленных Пользователем.
                        4.1.6. Создания учетной записи для использования частей сайта , если Пользователь дал согласие на создание учетной записи.
                        4.1.7. Уведомления Пользователя по электронной почте.
                        4.1.8. Предоставления Пользователю эффективной технической поддержки при возникновении проблем, связанных с использованием сайта .
                        4.1.9. Предоставления Пользователю с его согласия специальных предложений, новостной рассылки и иных сведений от имени сайта .

                        5. Способы и сроки обработки персональной информации
                        5.1. Обработка персональных данных Пользователя осуществляется без ограничения срока, любым законным способом, в том числе в информационных системах персональных данных с использованием средств автоматизации или без использования таких средств.

                        5.2. Персональные данные Пользователя могут быть переданы уполномоченным органам государственной власти Российской Федерации только по основаниям и в порядке, установленным законодательством Российской Федерации.

                        5.3. При утрате или разглашении персональных данных Администрация вправе не информировать Пользователя об утрате или разглашении персональных данных.

                        5.4. Администрация принимает необходимые организационные и технические меры для защиты персональной информации Пользователя от неправомерного или случайного доступа, уничтожения, изменения, блокирования, копирования, распространения, а также от иных неправомерных действий третьих лиц.

                        5.5. Администрация совместно с Пользователем принимает все необходимые меры по предотвращению убытков или иных отрицательных последствий, вызванных утратой или разглашением персональных данных Пользователя.

                        6. Права и обязанности сторон
                        6.1. Пользователь вправе:

                        6.1.1. Принимать свободное решение о предоставлении своих персональных данных, необходимых для использования сайта , и давать согласие на их обработку.

                        6.1.2. Обновить, дополнить предоставленную информацию о персональных данных в случае изменения данной информации.

                        6.1.3. Пользователь имеет право на получение у Администрации информации, касающейся обработки его персональных данных, если такое право не ограничено в соответствии с федеральными законами. Пользователь вправе требовать от Администрации уточнения его персональных данных, их блокирования или уничтожения в случае, если персональные данные являются неполными, устаревшими, неточными, незаконно полученными или не являются необходимыми для заявленной цели обработки, а также принимать предусмотренные законом меры по защите своих прав. Для этого достаточно уведомить Администрацию по указаному E-mail адресу.

                        6.2. Администрация обязана:

                        gudodama, [04.06.2023 23:40]
                        6.2.1. Использовать полученную информацию исключительно для целей, указанных в п. 4 настоящей Политики конфиденциальности.

                        6.2.2. Обеспечить хранение конфиденциальной информации в тайне, не разглашать без предварительного письменного разрешения Пользователя, а также не осуществлять продажу, обмен, опубликование, либо разглашение иными возможными способами переданных персональных данных Пользователя, за исключением п.п. 5.2. настоящей Политики Конфиденциальности.

                        6.2.3. Принимать меры предосторожности для защиты конфиденциальности персональных данных Пользователя согласно порядку, обычно используемого для защиты такого рода информации в существующем деловом обороте.

                        6.2.4. Осуществить блокирование персональных данных, относящихся к соответствующему Пользователю, с момента обращения или запроса Пользователя, или его законного представителя либо уполномоченного органа по защите прав субъектов персональных данных на период проверки, в случае выявления недостоверных персональных данных или неправомерных действий.

                        Ответственность сторон
                        7.1. Администрация, не исполнившая свои обязательства, несёт ответственность за убытки, понесённые Пользователем в связи с неправомерным использованием персональных данных, в соответствии с законодательством Российской Федерации, за исключением случаев, предусмотренных п.п. 5.2. и 7.2. настоящей Политики Конфиденциальности.

                        7.2. В случае утраты или разглашения Конфиденциальной информации Администрация не несёт ответственность, если данная конфиденциальная информация:
                        7.2.1. Стала публичным достоянием до её утраты или разглашения.
                        7.2.2. Была получена от третьей стороны до момента её получения Администрацией Ресурса.
                        7.2.3. Была разглашена с согласия Пользователя.

                        7.3. Пользователь несет полную ответственность за соблюдение требований законодательства РФ, в том числе законов о рекламе, о защите авторских и смежных прав, об охране товарных знаков и знаков обслуживания, но не ограничиваясь перечисленным, включая полную ответственность за содержание и форму материалов.

                        7.4. Пользователь признает, что ответственность за любую информацию (в том числе, но не ограничиваясь: файлы с данными, тексты и т. д.), к которой он может иметь доступ как к части сайта , несет лицо, предоставившее такую информацию.

                        7.5. Пользователь соглашается, что информация, предоставленная ему как часть сайта , может являться объектом интеллектуальной собственности, права на который защищены и принадлежат другим Пользователям, партнерам или рекламодателям, которые размещают такую информацию на сайте .
                        Пользователь не вправе вносить изменения, передавать в аренду, передавать на условиях займа, продавать, распространять или создавать производные работы на основе такого Содержания (полностью или в части), за исключением случаев, когда такие действия были письменно прямо разрешены собственниками такого Содержания в соответствии с условиями отдельного соглашения.

                        7.6. В отношение текстовых материалов (статей, публикаций, находящихся в свободном публичном доступе на сайте ) допускается их распространение при условии, что будет дана ссылка на .

                        7.7. Администрация не несет ответственности перед Пользователем за любой убыток или ущерб, понесенный Пользователем в результате удаления, сбоя или невозможности сохранения какого-либо Содержания и иных коммуникационных данных, содержащихся на сайте или передаваемых через него.

                        7.8. Администрация не несет ответственности за любые прямые или косвенные убытки, произошедшие из-за: использования либо невозможности использования сайта, либо отдельных сервисов; несанкционированного доступа к коммуникациям Пользователя; заявления или поведение любого третьего лица на сайте.

                        7.9. Администрация не несет ответственность за какую-либо информацию, размещенную пользователем на сайте , включая, но не ограничиваясь: информацию, защищенную авторским правом, без прямого согласия владельца авторского права.

                        gudodama, [04.06.2023 23:40]
                        8. Разрешение споров
                        8.1. До обращения в суд с иском по спорам, возникающим из отношений между Пользователем и Администрацией, обязательным является предъявление претензии (письменного предложения или предложения в электронном виде о добровольном урегулировании спора).

                        8.2. Получатель претензии в течение 30 календарных дней со дня получения претензии, письменно или в электронном виде уведомляет заявителя претензии о результатах рассмотрения претензии.

                        8.3. При не достижении соглашения спор будет передан на рассмотрение Арбитражного суда г. Альметьевск.

                        8.4. К настоящей Политике конфиденциальности и отношениям между Пользователем и Администрацией применяется действующее законодательство Российской Федерации.

                        9. Дополнительные условия
                        9.1. Администрация вправе вносить изменения в настоящую Политику конфиденциальности без согласия Пользователя.

                        9.2. Новая Политика конфиденциальности вступает в силу с момента ее размещения на сайте , если иное не предусмотрено новой редакцией Политики конфиденциальности.

                        9.3. Все предложения или вопросы касательно настоящей Политики конфиденциальности следует сообщать по адресу: support@justdent.ru

                        9.4. Действующая Политика конфиденциальности размещена на странице по адресу http:///politika.html

                        Обновлено: 05 Июня 2023 года

                        г. Альметьевск, Кононов

                        gudodama, [04.06.2023 23:56]
                        Мы используем cookie
                        Когда вы посещаете этот сайт, "Мой зубной"
                        может использовать общеотраслевую технологию, называемую cookie. Файлы cookie
                        представляют собой небольшие фрагменты данных, которые временно сохраняются на
                        вашем компьютере или мобильном устройстве и обеспечивают более эффективную
                        работу сайта.
                        "Мой зубной" для сбора статистики
                        использует подсистему «Цифровая культура». На основе этих данных мы делаем наш
                        сайт лучше и эффективнее для пользователей.
                        Продолжая пользоваться этим сайтом, вы соглашаетесь на использование cookie и
                        обработку данных в соответствии с Политикой сайта (ссылка на правила пользования
                        сайтом) в области обработки и защиты персональных данных.
                        Если вы не хотите использовать cookie, вы можете отключить их в настройках
                        безопасности вашего браузера. Отключение cookie следует выполнить для каждого
                        браузера и устройства, с помощью которого осуществляется вход на сайт.
                        Обратите внимание, что в случае, если использование сайтом cookie-файлов
                        отключено, некоторые возможности и услуги сайта могут быть недоступны.
                        Согласие на обработку персональных данных посетителей сайта
                        Настоящим, свободно, своей волей и в своем интересе выражаю свое согласие
                        [адрес учреждения – собственника сайта] (далее – Оператор) на автоматизированную
                        обработку моих персональных данных в соответствии со следующим перечнем
                        персональных данных:
                        мои запросы как посетителя сайта;
                        системная информация, данные из моего браузера;
                        файлы cookie;
                        мой IP-адрес;
                        установленные на моем устройстве операционные системы;
                        установленные на моем устройстве типы браузеров;
                        установленные на моем устройстве расширения и настройки цвета экрана;
                        установленные и используемые на моем устройстве языки;
                        версии Flash и поддержка JavaScript;
                        типы мобильных устройств, используемых мной, если применимо;
                        географическое положение;
                        количество посещений сайта и просмотров страниц;
                        длительность пребывания на сайте;
                        запросы, использованные мной при переходе на сайт;
                        страницы, с которых были совершены переходы.
                        Для целей сбора статистики о посетителях сайта Оператор вправе осуществлять
                        обработку моих персональных данных следующими способами: сбор, систематизация,
                        накопление, хранение, обновление, изменение, использование. Оператор может
                        обрабатывать файлы cookie самостоятельно или с привлечением иных сервисов.
                        Настоящее согласие вступает в силу с момента моего перехода на сайт Оператора
                        и действует до момента его отзыва.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 
        СКРИПТЫ
    -->
    <script src='https://api-maps.yandex.ru/2.1/?apikey=5f9a5460-e6e3-4078-b87f-ed438bc9c4cf&lang=ru_RU'></script>
    <script src='/resources/libs/jquery/jquery.min.js'></script>
    <script src='/resources/libs/jquery/mask/mask.min.js'></script>
    <script src='/resources/libs/jquery/fancybox/fancybox.min.js'></script>
    <script src='/resources/libs/preline/preline.js'></script>
    <script src='/resources/js/common.js'></script>
</body>

</html>