<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link rel="icon" type="image/svg+xml" href="/vite.svg"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Car Experts</title>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;700&display=swap" rel="stylesheet">


    <!--    <link rel="stylesheet" href="style/style.sass">-->
    <script type="module" crossorigin src="/assets/index.fe9cca41.js"></script>
    <link rel="stylesheet" href="/assets/index.c9ba42bb.css">
    <link rel="stylesheet" href="/assets/add.css">
</head>
<body>
<header class="header">
    <div class="container header__container">
        <div class="header__logo">
            <img src="/assets/LogoHeader.fccae26c.png" alt="logo">
        </div>
        <div class="header__contacts">
            <a class="link contacts__link" href="">+7 910 966 54 12</a>
            <a class="link contacts__link" href="">info@carexperts.ru</a>
        </div>
        <div class="header__date">
            <div class="date__title">
                Обновлено
            </div>
            <div class="date__date accent">
                25 авг 2022
            </div>
        </div>
    </div>
</header>
<section class="overview">
    <div class="container">
        <h1 class="h1">Обзор автомобиля</h1>
        <div class="overview__content">
            <div class="overview__logo">
                <img
                    src="/assets/brands/{{strtolower(str_replace (' ', '-', $invoice->brand)).'-logo.png'}}"
                    alt="car-logo">
            </div>
            <div class="overview__name">
                {{ $invoice->brand }}
                {{ $invoice->model }}
            </div>
            <div class="overview__divider"></div>
            <div class="overview__equipment">
                <div class="equipment__title h3">
                    Комплектация
                </div>
                <div class="equipment__grid">
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="/assets/massage.d98a0345.svg" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="/assets/massage.d98a0345.svg" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="/assets/massage.d98a0345.svg" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="/assets/massage.d98a0345.svg" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="/assets/massage.d98a0345.svg" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="/assets/massage.d98a0345.svg" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="/assets/massage.d98a0345.svg" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="/assets/massage.d98a0345.svg" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="/assets/massage.d98a0345.svg" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="/assets/Add-icon.b3de98c7.svg" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="/assets/Add-icon.b3de98c7.svg" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="/assets/Add-icon.b3de98c7.svg" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="technical">
    <div class="container">
        <div class="h2">Технические характеристики</div>
        <table class="technical__table">
            <tr>
                <td>
                    <div class="technical__title">
                        Год выпуска
                    </div>
                    <div class="technical__value">
                        {{ $invoice->year }}
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        Пробег
                    </div>
                    <div class="technical__value">
                        {{ $invoice->mileage }} км
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        Двигатель
                    </div>
                    <div class="technical__value">
                        {{ $invoice->capacity }} л / {{ $invoice->power }} л.с.
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        Привод
                    </div>
                    <div class="technical__value">
                        {{ $invoice->drive }}
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        VIN
                    </div>
                    <div class="technical__value">
                        {{ $invoice->VIN }}
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="technical__title">
                        Цвет
                    </div>
                    <div class="technical__value">
                        {{ $invoice->color }}
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        Коробка
                    </div>
                    <div class="technical__value">
                        {{ $invoice->gearbox }}
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        ДТП (база)
                    </div>
                    <div class="technical__value">
                        {{ $invoice->clearVIN }}
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        Спецификация
                    </div>
                    <div class="technical__value">
                        {{ $invoice->specification }}
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        Гарантия
                    </div>
                    <div class="technical__value">
                        {{ $invoice->guarantee != 'Нет' ? $invoice->guaranteeYear. ' лет' : 'Нет' }}
                    </div>
                </td>
            </tr>
        </table>
    </div>
</section>
<section class="condition">
    <div class="container">
        <div class="h2">Состояние кузова</div>
        @php
            $translate = [
                "Капот" => "Hood",
                "Задняя крышка" => "Back-cover",
                "Дверь левая передняя" => "Front-left-door",
                'Дверь правая передняя' => 'Front-right-door',
                'Дверь левая задняя' => 'Left-rear-door',
                'Дверь правая задняя' =>'Right-rear-door',
                'Крыло левое переднее' => 'Left-front-wing',
                'Крыло правое переднее' => 'Right-front-wing',
                'Крыло левое заднее' => 'Left-rear-wing',
                'Крыло правое заднее' => 'Right-rear-wing',
                'Стойка левая передняя' => 'Left-front-rack',
                'Стойка правая передняя' => 'Right-front-rack',
                'Стойка левая задняя' => 'Left-rear-rack',
                'Стойка правая задняя' => 'Right-rear-rack',
                'Стойка левая средняя' => 'Left-middle-rack',
                'Стойка правая средняя' => 'Right-middle-rack',
                'Крыша' => 'Roof',
                'Зеркала' => 'Mirrors',
                'Бампер передний' => 'Front-bumper',
                'Бампер задний' => 'Rear-bumper',
                ];

        @endphp
        <div class="condition__content">
            <div class="condition__side condition__side-front">
{{--                @foreach($invoice->paintedParts as $part)--}}
{{--                    <div class="condition__value {{ $translate[$part['part']] }}">--}}
{{--                        @if($part['rating'] == 5)--}}
{{--                            <img src="/assets/paint-1000.png" alt="">--}}
{{--                        @elseif($part['rating'] == 4)--}}
{{--                            <img src="/assets/paint-750.png" alt="">--}}
{{--                        @elseif($part['rating'] == 3)--}}
{{--                            <img src="/assets/paint-500.png" alt="">--}}
{{--                        @elseif($part['rating'] == 2)--}}
{{--                            <img src="/assets/paint-340.png" alt="">--}}
{{--                        @elseif($part['rating'] == 1)--}}
{{--                            <img src="/assets/paint-240.png" alt="">--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                @endforeach--}}
                @foreach($translate as $item)
                    <div class="condition__value {{ $item}}">
                            <img src="/assets/paint-1000.png" alt="">
                    </div>
                @endforeach

                <img src="/assets/car-front.png" alt="car-front">
            </div>
            <div class="condition__side condition__side-back">
                @foreach($translate as $item)
                    <div class="condition__value {{ $item}}">
                        <img src="/assets/paint-1000.png" alt="">
                    </div>
                @endforeach
{{--                @foreach($invoice->paintedParts as $part)--}}
{{--                    <div class="condition__value {{ $translate[$part['part']] }}">--}}
{{--                        @if($part['rating'] == '1000')--}}
{{--                            <img src="/assets/paint-1000.png" alt="">--}}
{{--                        @elseif($part['rating'] == '750')--}}
{{--                            <img src="/assets/paint-750.png" alt="">--}}
{{--                        @elseif($part['rating'] == '500')--}}
{{--                            <img src="/assets/paint-500.png" alt="">--}}
{{--                        @elseif($part['rating'] == '340')--}}
{{--                            <img src="/assets/paint-340.png" alt="">--}}
{{--                        @elseif($part['rating'] == '240')--}}
{{--                            <img src="/assets/paint-240.png" alt="">--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                @endforeach--}}

                <img src="/assets/car-back.png" alt="car-back">
            </div>
            <div class="condition__measurement">
                <div class="measurement__values"></div>
                <div class="measurement__titles">
                    <div class="titles__item">1000 + мкм</div>
                    <div class="titles__item">до 800 мкм</div>
                    <div class="titles__item">до 500 мкм</div>
                    <div class="titles__item">до 300 мкм</div>
                    <div class="titles__item">100 мкм</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="recommendation">
    <div class="container flex">
        <div class="recommendation-left">
            <div class="h2">Рекомендации и выводы</div>
            <div class="recommendation__text">
                <p>
                    {{ $invoice->last }}
                </p>
                <p>
                    {{ $invoice->smells ? 'Посторонние запахи отстуствуют' : 'Посторонние запахи присуствуют' }}
                </p>
                {{ $invoice->equipmentStatus }}

                @if($invoice->equipmentStatus  == 'Есть замечания')
                    <p>
                        {{ $invoice->equipmentStatus ? 'Есть недочеты по работе опций:' : ''}} <br>
                        {{ $invoice->allDefects }}
                    </p>
                @endif


            </div>
        </div>
        <div class="recommendation__cost">
            <img
                src="data:image/png;base64,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"
                alt="cost">
            <div class="h3">Цена</div>
            <div class="cost__value accent">{{ $invoice->price }}</div>
        </div>
    </div>
</section>
<section class="report">
    <div class="container">
        <div class="h1">
            <span class="report__title" id="photo-report">Фотоотчет</span>
            <span class="report__divider"></span>
            <span class="report__title not-active" id="video-report">Видеоотчет</span>
        </div>
        <div class="report__photo report__type">
            <div class="report__slider slider-for">
                @foreach($invoice->photosGeneralIn as $photo)
                    <div class="slide">
                        <div class="slide__image">
                            <img src="{{ $photo }}" alt="slide" data-fancybox="demo" data-caption="Фотоотчет">
                        </div>

                    </div>
                @endforeach

                @foreach($invoice->photosGeneralOut as $photo)
                    <div class="slide">
                        <div class="slide__image">
                            <img src="{{ $photo }}" alt="slide" data-fancybox="demo" data-caption="Фотоотчет">
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="report__slider slider-nav">
                @foreach($invoice->photosGeneralIn as $photo)

                    <div class="slide">
                        <div class="slide__image-wrapper">
                            <img src="{{ $photo }}" alt="slide">
                        </div>
                    </div>
                @endforeach
                @foreach($invoice->photosGeneralOut as $photo)

                    <div class="slide">
                        <div class="slide__image-wrapper">
                            <img src="{{ $photo }}" alt="slide">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="report__video report__type not-active">
            <div class="video-wrapper">
                <video muted loop type='video/mp4' controls="">
                    <source src="{{$invoice->video}}">
                </video>
            </div>
        </div>
    </div>
</section>
<section class="components">
    <div class="container">
        <div class="h1">Технические компоненты</div>
        <div class="flex">
            @if ( $invoice->photosVIN)

            <div class="components__item item">
                <a class="item__image" data-fancybox="demo" data-caption="Технические компоненты"
                   href="{{ $invoice->photosVIN[0] }}">
                    <img src="{{ $invoice->photosVIN[0] }}" alt="vin">
                </a>
                <div class="item__text h2">VIN</div>
            </div>
            @endif
            @if ( $invoice->photoDocks)
                <a class="components__item item" data-fancybox="demo" data-caption="Технические компоненты"
                   href="{{ $invoice->photoDocks[0] }}">
                    <div class="item__image">
                        <img src="{{ $invoice->photoDocks[0] }}" alt="info ts">
                    </div>
                    <div class="item__text h2">Информация о ТС</div>
                </a>
            @endif
        </div>
    </div>
</section>
<section class="components">
    <div class="container">
        <div class="h1">Покрышки</div>
        <div class="flex">
            <div class="tires-logo">
                <img src="/assets/tires/{{(str_replace (' ', '-', $invoice->tiresBrand)).'.png'}}"
                                         alt="">
            </div>
            <div class="tires-chars">
                <div class="tires-chars__title">
                    Состояние
                </div>
                <div class="tires-chars__text">
                    <div class="tires-chars__box">

                        @if($invoice->tiresStatus == 'В норме')
                            <img src="/assets/ok.png" alt="">
                        @else
                            <img src="/assets/notOk.png" alt="">
                        @endif
                    </div>

                    {{ $invoice->tiresStatus }}
                </div>

                <div class="tires-line">

                </div>

                <div class="tires-chars__title">
                    год выпуска
                </div>
                <div class="tires-chars__text">
                    <div class="tires-chars__box">

                        @if($invoice->tiresYear>=2019)
                            <img src="/assets/ok.png" alt="">
                        @else
                            <img src="/assets/alert.png" alt="">
                        @endif
                    </div>
                    {{ $invoice->tiresYear }}

                </div>
            </div>

            @if ($invoice->photosTires)
            <div class="tires-photo">
                <img src="{{ $invoice->photosTires[0] }}" alt="">
            </div>
            @endif
        </div>
    </div>
</section>
<section class="components">
    <div class="container">
        <div class="h1">Повреждения</div>

        @if(count($invoice->badPartsOut)>0)
            <div class="flex ">

                @foreach((array_merge($invoice->badParts, $invoice->badPartsOut, $invoice->badPartsIn)) as $badPart)
                    <div class="components__item item">
                        <img class="item__image" src="{{ $badPart['photo'][0] }}" alt="vin" data-fancybox="demo"
                             data-caption="Повреждения">
                        <div class="item__desc">
                            {{ $badPart['text'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="no-trash">
                <div class="h1">
                    Вы счастливчик! <br>
                    Машина без единого повреждения
                </div>
                <div class="no-trash__like">
                    <svg width="115" height="120" viewBox="0 0 115 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.15885 56.9702V99.9123H26.3389L27.2569 100.02C44.1349 103.956 55.3189 106.794 60.8929 108.552C68.2969 110.886 71.0569 111.456 76.079 111.792C79.835 112.05 84.101 110.604 86.045 108.624C87.119 107.532 87.923 105.288 88.241 101.808C88.3068 101.079 88.5677 100.38 88.9963 99.7856C89.4249 99.1913 90.0054 98.7232 90.677 98.4303C92.171 97.7823 93.413 96.7262 94.451 95.1902C95.411 93.7862 96.035 91.1702 96.149 87.3842C96.169 86.6882 96.3664 86.0088 96.7223 85.4103C97.0782 84.8119 97.581 84.3141 98.183 83.9642C101.675 81.9422 103.403 79.6622 103.763 76.9862C104.159 74.0282 103.199 70.6982 100.685 66.9062C100.095 66.0169 99.8754 64.9325 100.073 63.8838C100.27 62.835 100.868 61.9045 101.741 61.2902C104.147 59.5982 105.467 57.2462 105.797 53.9102C106.325 48.5942 102.935 44.6642 95.261 43.8782C88.4262 43.2022 81.5254 43.7776 74.8969 45.5762C74.145 45.7727 73.3526 45.7503 72.613 45.5118C71.8734 45.2732 71.2172 44.8284 70.7218 44.2296C70.2264 43.6308 69.9123 42.903 69.8165 42.1318C69.7207 41.3605 69.8471 40.578 70.1809 39.8762C73.1809 33.5282 74.849 28.2902 75.239 24.2341C75.749 18.8521 74.507 14.9521 71.6029 11.7361C69.4009 9.30012 65.8789 7.90812 64.5589 8.19612C62.8189 8.56812 61.6849 9.57612 60.2089 13.1041C59.3389 15.1921 58.9189 16.9681 58.1989 21.1141C57.5089 25.0501 57.1309 26.8262 56.3449 29.1542C53.9749 36.2102 48.1609 43.5242 40.3549 48.5702C34.8841 52.1025 28.9549 54.8682 22.7329 56.7902C22.3442 56.91 21.9396 56.9707 21.5329 56.9702H8.15885ZM7.90685 108.09C5.96885 108.144 4.22885 107.712 2.77085 106.692C0.910843 105.39 0.0348418 103.338 0.0168418 100.974L0.0348418 57.0362C-0.169158 54.6962 0.520842 52.5482 2.15284 50.9522C3.68285 49.4522 5.68085 48.7442 7.79285 48.7922H20.9029C26.206 47.1024 31.262 44.7177 35.9389 41.7002C42.2269 37.6322 46.8589 31.8002 48.6289 26.5441C49.2349 24.7321 49.5589 23.2321 50.1709 19.7041C50.9989 14.9701 51.5149 12.7681 52.7029 9.93612C55.1629 4.04412 58.3909 1.16411 62.8429 0.198111C67.2229 -0.749891 73.601 1.77611 77.633 6.24012C82.103 11.1841 84.077 17.3701 83.345 25.0141C83.033 28.3022 82.121 31.9802 80.621 36.0782C85.7436 35.3316 90.9387 35.2188 96.089 35.7422C108.131 36.9722 114.893 44.8142 113.909 54.7262C113.477 58.9982 111.929 62.6282 109.295 65.4782C111.509 69.7442 112.391 73.9622 111.839 78.0782C111.203 82.8182 108.563 86.7662 104.171 89.8322C103.829 93.9902 102.875 97.3083 101.183 99.7923C99.8498 101.799 98.1103 103.504 96.077 104.796C95.429 108.9 94.067 112.11 91.841 114.366C88.151 118.122 81.557 120.36 75.533 119.952C69.8149 119.568 66.4309 118.872 58.4509 116.352C53.1889 114.69 42.2929 111.93 25.8709 108.09H7.90085H7.90685ZM18.1129 55.1042C18.1113 54.5674 18.2157 54.0355 18.42 53.5392C18.6243 53.0428 18.9246 52.5916 19.3036 52.2114C19.6826 51.8313 20.133 51.5297 20.6287 51.3239C21.1245 51.1181 21.6561 51.0122 22.1929 51.0122C22.7287 51.0138 23.2589 51.1208 23.7533 51.3273C24.2477 51.5338 24.6966 51.8357 25.0744 52.2157C25.4521 52.5956 25.7513 53.0463 25.9549 53.5419C26.1585 54.0375 26.2625 54.5684 26.2609 55.1042V101.172C26.2617 101.708 26.1569 102.239 25.9526 102.734C25.7483 103.229 25.4484 103.68 25.0701 104.059C24.6918 104.438 24.2425 104.74 23.7478 104.945C23.2531 105.151 22.7227 105.257 22.1869 105.258C21.6511 105.257 21.1207 105.151 20.626 104.945C20.1313 104.74 19.6819 104.438 19.3036 104.059C18.9253 103.68 18.6255 103.229 18.4211 102.734C18.2168 102.239 18.1121 101.708 18.1129 101.172V55.1042Z"
                            fill="#222222"/>
                    </svg>
                </div>
            </div>
        @endif
    </div>
</section>
<footer class="footer">
    <div class="container header__container">
        <div class="header__logo">
            <img src="/assets/LogoFooter.049f563c.png" alt="logo">
        </div>
        <div class="header__contacts">
            <a class="link contacts__link" href="">+7 910 966 54 12</a>
            <a class="link contacts__link" href="">info@carexperts.ru</a>
        </div>
    </div>
    <div class="container footer__container flex">
        <div class="header__date footer__date">
            <div class="date__title">
                Дата диагностики
            </div>
            <div class="date__date accent">
                {{ $invoice->created_at }}
            </div>
        </div>
        @if($invoice->updated_at)
            <div class="header__date footer__date">
                <div class="date__title">
                    Обновлено
                </div>
                <div class="date__date accent">
                    {{ $invoice->updated_at }}

                </div>
            </div>
        @endif
        <a class="btn footer__btn" href="/pdf/{{$invoice->id}}">
            Скачать PDF-версию
        </a>
    </div>
</footer>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>


</body>
</html>
