<section class='bg-[url(/resources/images/bg_banner.png)] bg-cover bg-center h-screen text-gray-800 w-full flex items-center justify-center' role="banner">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
            <div>
                <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight ">
                    Стоматология<br />
                    <span class="text-primary-600">
                        &laquo;<?= $brand ?>&raquo;
                    </span>
                </h1>
                <p class="mt-3 text-lg text-gray-800 ">Запишитесь на прием или консультацию у нашего специалиста прямо сейчас.</p>
                <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                    <button class="inline-flex justify-center items-center gap-x-3 text-center bg-primary-600 hover:bg-primary-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4" data-hs-overlay="#modal-login">
                        Записаться
                        <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>
                    <a class="inline-flex justify-center items-center gap-x-3.5 text-sm lg:text-base text-center border hover:border-gray-300 shadow-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4" href="#placement">
                        Показать на карте
                    </a>
                </div>
            </div>
            <div class="relative ml-4 rotate-3">
                <img class="w-full rounded-xl shadow-md" src="https://www.tcd.ie/dental/assets/images/undergraduate-courses/dental-science.jpg" alt="Image Description">
                <div class="absolute inset-0 -z-[1] bg-gradient-to-tr from-primary-200 via-white/0 to-white/0 w-full h-full rounded-xl mt-4 -mb-4 mr-4 -ml-4 lg:mt-6 lg:-mb-6 lg:mr-6 lg:-ml-6"></div>
                <div class="absolute bottom-0 left-0">
                    <svg class="w-2/3 ml-auto h-auto text-white " width="630" height="451" viewBox="0 0 630 451" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="140" y="352" width="106" height="99" fill="currentColor" />
                        <rect x="482" y="402" width="64" height="49" fill="currentColor" />
                        <rect x="433" y="402" width="63" height="49" fill="currentColor" />
                        <rect x="384" y="352" width="49" height="50" fill="currentColor" />
                        <rect x="531" y="328" width="50" height="50" fill="currentColor" />
                        <rect x="99" y="303" width="49" height="58" fill="currentColor" />
                        <rect x="99" y="352" width="49" height="50" fill="currentColor" />
                        <rect x="99" y="392" width="49" height="59" fill="currentColor" />
                        <rect x="44" y="402" width="66" height="49" fill="currentColor" />
                        <rect x="234" y="402" width="62" height="49" fill="currentColor" />
                        <rect x="334" y="303" width="50" height="49" fill="currentColor" />
                        <rect x="581" width="49" height="49" fill="currentColor" />
                        <rect x="581" width="49" height="64" fill="currentColor" />
                        <rect x="482" y="123" width="49" height="49" fill="currentColor" />
                        <rect x="507" y="124" width="49" height="24" fill="currentColor" />
                        <rect x="531" y="49" width="99" height="99" fill="currentColor" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
<section class='bg-[url(/resources/images/bg_about.png)] bg-cover bg-center h-screen text-gray-800 w-full flex items-center justify-center' id='about'>
    <div class="max-w-7xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="aspect-w-16 aspect-h-7">
            <img class="w-full object-cover rounded-xl h-96 shadow-xl" src="https://i-cf65.ch-static.com/content/dam/cf-consumer-healthcare/paradontax/master/assets/caringforgums/dentist-treating-patient.jpg?auto=format" alt="Image Description">
        </div>
        <div class="mt-5 lg:mt-16 grid lg:grid-cols-3 gap-8 lg:gap-12">
            <div class="lg:col-span-1">
                <h2 class="font-bold text-2xl md:text-3xl text-gray-800 ">
                    О компании
                </h2>
                <p class="mt-2 md:mt-4 text-gray-500">
                    Стоматология <span class="text-primary-600">&laquo;<?= $brand ?>&raquo;</span> работает с 2000 года. За это время мы выросли из частного кабинета до одной из крупнейших сетей стоматологических клиник РФ. Ежегодно нам доверяют лечение и уход за своими зубами более тысячи клиентов.
                </p>
            </div>
            <div class="lg:col-span-2">
                <div class="grid sm:grid-cols-2 gap-8 md:gap-12">
                    <div class="flex gap-x-5">
                        <i class='fa-solid fa-lightbulb fa-xl flex-shrink-0 mt-4 text-primary-600 '></i>
                        <div class="grow">
                            <h3 class="text-lg font-semibold text-gray-800 ">
                                Оборудование
                            </h3>
                            <p class="mt-1 text-gray-600 ">
                                Современное стоматологическое оборудование и расходные материалы
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-x-5">
                        <i class='fa-solid fa-users fa-xl flex-shrink-0 mt-4 text-primary-600 '></i>
                        <div class="grow">
                            <h3 class="text-lg font-semibold text-gray-800 ">
                                Штат
                            </h3>
                            <p class="mt-1 text-gray-600 ">
                                Свыше 20 высококвалифицированных врачей-стоматологов
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-x-5">
                        <i class='fa-solid fa-stethoscope fa-xl flex-shrink-0 mt-4 text-primary-600 '></i>
                        <div class="grow">
                            <h3 class="text-lg font-semibold text-gray-800 ">
                                Возможности
                            </h3>
                            <p class="mt-1 text-gray-600 ">
                                Наши клиники оказывают полный спектр услуг по лечению и протезированию
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class='bg-[url(/resources/images/bg_advantages.svg)] bg-contain bg-center bg-no-repeat h-screen text-gray-800 w-full flex items-center justify-center' id='advantages'>
    <div class="max-w-7xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="grid md:grid-cols-2 gap-12">
            <div class="lg:w-3/4">
                <h2 class="text-3xl text-gray-800 font-bold lg:text-4xl ">
                    Наши преимущества
                </h2>
                <p class="mt-3 text-gray-800 ">
                    Здоровье и комфорт клиентов <span class="text-primary-600">&laquo;<?= $brand ?>&raquo;</span> – наша главная цель, поэтому мы стараемся постоянно расширять комплекс услуг, сохраняя приемлемые цены.
                </p>
                <a class="mt-5 inline-flex items-center gap-x-2 font-medium text-primary-600 " href='#placement'>
                    Свяжитесь с нами и узнайте больше
                    <i class='fa-solid fa-long-arrow-right'></i>
                </a>
            </div>
            <div class="space-y-6 lg:space-y-10">
                <div class="flex">
                    <span class="flex-shrink-0 inline-flex justify-center items-center w-[46px] h-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto   ">
                        <i class='fa-solid fa-tooth fa-lg'></i>
                    </span>
                    <div class="ml-5 sm:ml-8">
                        <h3 class="text-base sm:text-lg font-semibold text-gray-800 ">
                            Полный спектр услуг
                        </h3>
                        <p class="mt-1 text-gray-600 ">
                            Терапевтическое лечение, реставрация, все виды протезирования и другие услуги в одной клинике.
                        </p>
                    </div>
                </div>
                <div class="flex">
                    <span class="flex-shrink-0 inline-flex justify-center items-center w-[46px] h-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto   ">
                        <i class='fa-solid fa-gem fa-lg'></i>
                    </span>
                    <div class="ml-5 sm:ml-8">
                        <h3 class="text-base sm:text-lg font-semibold text-gray-800 ">
                            Качество
                        </h3>
                        <p class="mt-1 text-gray-600 ">
                            Мы используем самое современное оборудование производства Италии и Японии.
                        </p>
                    </div>
                </div>
                <div class="flex">
                    <span class="flex-shrink-0 inline-flex justify-center items-center w-[46px] h-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto   ">
                        <i class='fa-solid fa-check fa-lg'></i>
                    </span>
                    <div class="ml-5 sm:ml-8">
                        <h3 class="text-base sm:text-lg font-semibold text-gray-800 ">
                            Гарантия
                        </h3>
                        <p class="mt-1 text-gray-600 ">
                            Мы уверены в профессионализме своих специалистов и качестве используемых материалов.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class='h-screen text-gray-800 w-full flex items-center justify-center' id='services'>
    <div class="max-w-7xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="grid gap-12">
            <div class="lg:w-3/4">
                <h2 class="text-3xl text-gray-800 font-bold lg:text-4xl ">
                    Услуги компании
                </h2>
                <button class="mt-5 inline-flex items-center gap-x-2 font-medium text-primary-600 " type='button' data-hs-overlay="#modal-register">
                    Запишитесь на прием уже сейчас
                    <i class='fa-solid fa-long-arrow-right'></i>
                </button>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 items-center gap-6 md:gap-10">
                <div class="w-full h-full bg-white shadow-lg rounded-lg p-5  hover:translate-x-1 hover:-translate-y-1 ease-in transition-all">
                    <div class="flex items-center gap-x-4 mb-3">
                        <div class="flex-shrink-0">
                            <h3 class="block text-lg font-semibold text-gray-800 ">Верхние брекеты</h3>
                        </div>
                    </div>
                    <p class="text-gray-600 flex items-center justify-between ">
                        <span>1,5-2 часа</span>
                        <span class='font-medium text-primary-600'>8000 руб.</span>
                    </p>
                </div>
                <div class="w-full h-full bg-white shadow-lg rounded-lg p-5  hover:translate-x-1 hover:-translate-y-1 ease-in transition-all">
                    <div class="flex items-center gap-x-4 mb-3">
                        <div class="flex-shrink-0">
                            <h3 class="block text-lg font-semibold text-gray-800 ">Вставка керамических имплатов</h3>
                        </div>
                    </div>
                    <p class="text-gray-600 flex items-center justify-between ">
                        <span>от 1 до 2 часов</span>
                        <span class='font-medium text-primary-600'>12000 руб.</span>
                    </p>
                </div>
                <div class="w-full h-full bg-white shadow-lg rounded-lg p-5  hover:translate-x-1 hover:-translate-y-1 ease-in transition-all">
                    <div class="flex items-center gap-x-4 mb-3">
                        <div class="flex-shrink-0">
                            <h3 class="block text-lg font-semibold text-gray-800 ">Запись на плановый осмотр</h3>
                        </div>
                    </div>
                    <p class="text-gray-600 flex items-center justify-between ">
                        <span>5-10 минут</span>
                        <span class='font-medium text-primary-600'>500 руб.</span>
                    </p>
                </div>
                <div class="w-full h-full bg-white shadow-lg rounded-lg p-5  hover:translate-x-1 hover:-translate-y-1 ease-in transition-all">
                    <div class="flex items-center gap-x-4 mb-3">
                        <div class="flex-shrink-0">
                            <h3 class="block text-lg font-semibold text-gray-800 ">Нижние брекеты</h3>
                        </div>
                    </div>
                    <p class="text-gray-600 flex items-center justify-between ">
                        <span>10 минут</span>
                        <span class='font-medium text-primary-600'>7000 руб.</span>
                    </p>
                </div>
                <div class="w-full h-full bg-white shadow-lg rounded-lg p-5  hover:translate-x-1 hover:-translate-y-1 ease-in transition-all">
                    <div class="flex items-center gap-x-4 mb-3">
                        <div class="flex-shrink-0">
                            <h3 class="block text-lg font-semibold text-gray-800 ">Общий осмотр</h3>
                        </div>
                    </div>
                 
                    <p class="text-gray-600 flex items-center justify-between ">
                        <span>30-60 минут</span>
                        <span class='font-medium text-primary-600'>1500 руб.</span>
                    </p>
                </div>
                <div class="w-full h-full bg-white shadow-lg rounded-lg p-5  hover:translate-x-1 hover:-translate-y-1 ease-in transition-all">
                    <div class="flex items-center gap-x-4 mb-3">
                        <div class="flex-shrink-0">
                            <h3 class="block text-lg font-semibold text-gray-800 ">Консультация прикуса</h3>
                        </div>
                    </div>
                    <p class="text-gray-600 flex items-center justify-between ">
                        <span>30 минут</span>
                        <span class='font-medium text-primary-600'>1000 руб.</span>
                    </p>
                </div>
                <div class="w-full h-full bg-white shadow-lg rounded-lg p-5  hover:translate-x-1 hover:-translate-y-1 ease-in transition-all">
                    <div class="flex items-center gap-x-4 mb-3">
                        <div class="flex-shrink-0">
                            <h3 class="block text-lg font-semibold text-gray-800 ">Знакомство
                                и консультация</h3>
                        </div>
                    </div>
                    <p class="text-gray-600 flex items-center justify-between ">
                        <span>10 минут</span>
                        <span class='font-medium text-primary-600'>3000 руб.</span>
                    </p>
                </div>
                <div class="w-full h-full bg-white shadow-lg rounded-lg p-5  hover:translate-x-1 hover:-translate-y-1 ease-in transition-all">
                    <div class="flex items-center gap-x-4 mb-3">
                        <div class="flex-shrink-0">
                            <h3 class="block text-lg font-semibold text-gray-800 ">Регистрация и первый осмотр</h3>
                        </div>
                    </div>
                    <p class="text-gray-600 flex items-center justify-between ">
                        <span>10-30 минут</span>
                        <span class='font-medium text-primary-600'>800 руб.</span>
                    </p>
                </div>
                <div class="w-full h-full bg-white shadow-lg rounded-lg p-5  hover:translate-x-1 hover:-translate-y-1 ease-in transition-all">
                    <div class="flex items-center gap-x-4 mb-3">
                        <div class="flex-shrink-0">
                            <h3 class="block text-lg font-semibold text-gray-800 ">Реставрация имплатнов</h3>
                        </div>
                    </div>
                    <p class="text-gray-600 flex items-center justify-between ">
                        <span>1-2 часа </span>
                        <span class='font-medium text-primary-600'>10000 руб.</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class='h-screen text-gray-800 w-full flex items-center justify-center' id='doctors'>
    <div class="max-w-7xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="grid gap-12">
            <div class="lg:w-3/4">
                <h2 class="text-3xl text-gray-800 font-bold lg:text-4xl ">
                    Наши врачи
                </h2>
                <button class="mt-5 inline-flex items-center gap-x-2 font-medium text-primary-600 " type='button' data-hs-overlay="#modal-register">
                    Нашли нужного врача? Запишитесь на прием
                    <i class='fa-solid fa-long-arrow-right'></i>
                </button>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 items-center gap-6 md:gap-10">
                <div class="w-full h-full bg-white gap-3 shadow-lg rounded-lg flex p-5  hover:translate-x-1 hover:-translate-y-1 ease-in transition-all">
                    <img class="rounded-md" src='/resources/images/doctors/elena.png' width="128" />
                    <div class='flex flex-col justify-between'>
                        <div class="flex items-center gap-x-4 mb-3">
                            <div class="flex-shrink-0">
                                <h3 class="block text-lg font-semibold text-gray-800 ">Елена Смирнова</h3>
                            </div>
                        </div>
                        <p class="text-gray-600  mb-3">Опытный стоматолог, который специализируется на ортодонтии.</p>
                    </div>
                </div>
                <div class="w-full h-full bg-white gap-3 shadow-lg rounded-lg flex p-5  hover:translate-x-1 hover:-translate-y-1 ease-in transition-all">
                    <img class="rounded-md" src='/resources/images/doctors/alexandr.png' width="128" />
                    <div class='flex flex-col justify-between'>
                        <div class="flex items-center gap-x-4 mb-3">
                            <div class="flex-shrink-0">
                                <h3 class="block text-lg font-semibold text-gray-800 ">Александр Кузнецов</h3>
                            </div>
                        </div>
                        <p class="text-gray-600  mb-3">Профессиональный стоматолог, который специализируется на имплантации зубов.</p>
                    </div>
                </div>
                <div class="w-full h-full bg-white gap-3 shadow-lg rounded-lg flex p-5  hover:translate-x-1 hover:-translate-y-1 ease-in transition-all">
                    <img class="rounded-md" src='/resources/images/doctors/3.png' width="128" />
                    <div class='flex flex-col justify-between'>
                        <div class="flex items-center gap-x-4 mb-3">
                            <div class="flex-shrink-0">
                                <h3 class="block text-lg font-semibold text-gray-800 ">Дмитрий Петров</h3>
                            </div>
                        </div>
                        <p class="text-gray-600  mb-3">Опытный стоматолог, который специализируется на эндодонтии.</p>
                    </div>
                </div>
                <div class="w-full h-full bg-white gap-3 shadow-lg rounded-lg flex p-5  hover:translate-x-1 hover:-translate-y-1 ease-in transition-all">
                    <img class="rounded-md" src='/resources/images/doctors/ivan.png' width="128" />
                    <div class='flex flex-col justify-between'>
                        <div class="flex items-center gap-x-4 mb-3">
                            <div class="flex-shrink-0">
                                <h3 class="block text-lg font-semibold text-gray-800 ">Иван Сидоров</h3>
                            </div>
                        </div>
                        <p class="text-gray-600  mb-3">Cпециалист по хирургической стоматологии. </p>
                    </div>
                </div>
                <div class="w-full h-full bg-white gap-3 shadow-lg rounded-lg flex p-5  hover:translate-x-1 hover:-translate-y-1 ease-in transition-all">
                    <img class="rounded-md" src='/resources/images/doctors/olga.png' width="128" />
                    <div class='flex flex-col justify-between'>
                        <div class="flex items-center gap-x-4 mb-3">
                            <div class="flex-shrink-0">
                                <h3 class="block text-lg font-semibold text-gray-800 ">Ольга Николаева</h3>
                            </div>
                        </div>
                        <p class="text-gray-600  mb-3">Квалифицированный стоматолог, который специализируется на детской стоматологии. </p>
                    </div>
                </div>
                <div class="w-full h-full bg-white gap-3 shadow-lg rounded-lg flex p-5  hover:translate-x-1 hover:-translate-y-1 ease-in transition-all">
                    <img class="rounded-md" src='/resources/images/doctors/maria.png' width="128" />
                    <div class='flex flex-col justify-between'>
                        <div class="flex items-center gap-x-4 mb-3">
                            <div class="flex-shrink-0">
                                <h3 class="block text-lg font-semibold text-gray-800 ">Мария Иванова</h3>
                            </div>
                        </div>
                        <p class="text-gray-600  mb-3">Известный стоматолог, который специализируется на эстетической стоматологии. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class='h-screen text-gray-800 w-full flex items-center justify-center' id='certificates'>
    <div class="max-w-7xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="relative p-6 md:p-16">
            <div class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
                <div class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-8 lg:order-2">
                    <h2 class="text-2xl text-gray-800 font-bold sm:text-3xl ">
                        Сертификаты
                    </h2>
                    <nav class="grid gap-4 mt-5 md:mt-10" aria-label="Tabs" role="tablist">
                        <button type="button" class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-left hover:bg-gray-200 p-4 md:p-5 rounded-xl   active" id="tabs-with-card-item-1" data-hs-tab="#tabs-with-card-1" aria-controls="tabs-with-card-1" role="tab">
                            <span class="flex">
                                <svg class="flex-shrink-0 mt-2 h-6 w-6 md:w-7 md:h-7 hs-tab-active:text-blue-600 text-gray-800  " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                                    <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                </svg>
                                <span class="grow ml-6">
                                    <span class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800">Сертификат 1</span>
                                </span>
                            </span>
                        </button>
                        <button type="button" class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-left hover:bg-gray-200 p-4 md:p-5 rounded-xl  " id="tabs-with-card-item-2" data-hs-tab="#tabs-with-card-2" aria-controls="tabs-with-card-2" role="tab">
                            <span class="flex">
                                <svg class="flex-shrink-0 mt-2 h-6 w-6 md:w-7 md:h-7 hs-tab-active:text-blue-600 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z" />
                                </svg>
                                <span class="grow ml-6">
                                    <span class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800">Сертификат 2</span>
                                </span>
                            </span>
                        </button>
                    </nav>
                </div>
                <div class="lg:col-span-6">
                    <div class="relative">
                        <div>
                            <div id="tabs-with-card-1" role="tabpanel" aria-labelledby="tabs-with-card-item-1">
                                <img class="shadow-xl shadow-gray-200 rounded-xl w-full " src="/resources/images/cert_1.png" alt="Image Description">
                            </div>
                            <div id="tabs-with-card-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-card-item-2">
                                <img class="shadow-xl shadow-gray-200 rounded-xl w-full " src="/resources/images/cert_2.png" alt="Image Description">
                            </div>
                        </div>
                        <div class="hidden absolute top-0 right-0 translate-x-20 md:block lg:translate-x-20">
                            <svg class="w-16 h-auto text-primary-500" width="121" height="135" viewBox="0 0 121 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                                <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5" stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                                <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874" stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute inset-0 grid grid-cols-12 w-full h-full">
                <div class="col-span-full lg:col-span-7 lg:col-start-6 bg-gray-100 w-full h-5/6 rounded-xl sm:h-3/4 lg:h-full "></div>
            </div>
        </div>
    </div>
</section>
<section class='bg-[url(/resources/images/bg_advantages.svg)] bg-min bg-right-bottom bg-no-repeat h-screen text-gray-800 w-full flex items-center justify-center' id='placement'>
    <div class="max-w-7xl w-full px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-xl mx-auto">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl ">
                    Где нас найти?
                </h1>
            </div>
        </div>
        <div class="mt-12 w-full shadow-xl">
            <div id="map-page" class='w-full h-96 max-w-7xl'></div>
        </div>
        <div class="mt-12 flex justify-between items-center gap-4 lg:gap-8">
            <a class="flex flex-col h-full text-center rounded-md p-4 sm:p-6 " href="tel:+7 999 999 99-99" href='tel:+7 (939) 606-40-40'>
                <div class="grow text-center">
                    <h3 class="text-lg font-semibold text-gray-800 ">Телефон</h3>
                    <p class="mt-1 text-gray-500">+7 (939) 606-40-40</p>
                </div>
            </a>
            <a class="flex flex-col h-full text-center rounded-md p-4 sm:p-6 " href="tel:+7 999 999 99-99" href='mailto:support@justdent.ru'>
                <div class="grow text-center">
                    <h3 class="text-lg font-semibold text-gray-800 ">Почта</h3>
                    <p class="mt-1 text-gray-500">support@justdent.ru</p>
                </div>
            </a>
            <a class="flex flex-col h-full text-center rounded-md p-4 sm:p-6 " href="tel:+7 999 999 99-99" href='vk.com/justdent' target='_blank'>
                <div class="grow text-center">
                    <h3 class="text-lg font-semibold text-gray-800 ">ВКонтакте</h3>
                    <p class="mt-1 text-gray-500">Мой зубной</p>
                </div>
            </a>
            <p class="flex flex-col h-full text-center rounded-md p-4 sm:p-6 ">
            <div class="grow text-center">
                <h3 class="text-lg font-semibold text-gray-800">Местоположение</h3>
                <p class="mt-1 text-gray-500">г. Альметьевск, ул. Мира 10а</p>
            </div>
            </p>
        </div>
    </div>
</section>
<section class='text-gray-800 w-full flex items-center justify-center'>
    <div class="max-w-7xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <? while ($patient = mysqli_fetch_assoc($patients_result)) : ?>
                <div class="flex flex-col bg-white border justify-between  border-gray-200 shadow-sm rounded-xl">
                    <div class="flex-auto p-4 md:p-6">
                        <p class="text-base text-gray-800 md:text-xl ">
                            <em>
                                "<?= $patient['testimonial'] ?>"
                            </em>
                        </p>
                    </div>
                    <div class="p-4 rounded-b-xl md:px-6">
                        <h3 class="text-sm font-semibold text-gray-800 sm:text-base ">
                            <?= $patient['patient_surname'] . ' ' . $patient['patient_name'] ?>
                        </h3>
                        <p class="text-sm text-gray-500"> Клиент </p>
                    </div>
                </div>
            <? endwhile; ?>
        </div>
    </div>
</section>