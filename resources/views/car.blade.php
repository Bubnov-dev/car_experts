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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!--    <link rel="stylesheet" href="style/style.sass">-->
    {{--    <script type="module" crossorigin src="{{public_path('/storage/assets/index.a2dc5af3.js') }}"></script>--}}
    <style>
        @font-face {
            font-family: 'Futura PT';
            src: url('/storage/fonts/FuturaPT-Book.ttf');
            font-weight: 400
        }

        @font-face {
            font-family: 'Futura PT';
            src: url('/storage/fonts/FuturaPT-Book.ttf');
            font-weight: 500
        }

        body, * {
            font-family: 'Roboto', sans-serif;
            font-size: 20px;
            line-height: 110%;
            letter-spacing: -.02em
        }

        * {
            box-sizing: border-box
        }

        section {
            padding-top: 100px
        }

        .container {
            margin: auto;
            width: 1440px;
            max-width: 95vw
        }

        h1, .h1 {
            font-size: 70px;
            line-height: 110%;
            font-weight: 500;
            margin-bottom: 60px
        }

        h2, .h2 {
            font-size: 30px;
            line-height: 110%;
            font-weight: 500;
            margin-bottom: 60px
        }

        h3, .h3 {
            font-size: 14px;
            line-height: 110%;
            font-weight: 400;
            text-transform: uppercase
        }

        .accent {
            font-size: 30px;
            font-weight: 500
        }

        .link {
            display: inline-block;
            color: #222;
            text-decoration: none;
            cursor: pointer
        }

        .link:hover {
            text-decoration: underline
        }

        .flex {
            display: flex
        }

        .btn {
            padding: 15px 95px;
            border: 1px #222222 solid;
            border-radius: 6px;
            font-weight: 500;
            font-size: 30px
        }

        .hidden {
            display: none !important
        }

        .header {
            padding-top: 100px
        }

        .header__container {
            display: flex;
            justify-content: space-between;
            align-items: flex-end
        }

        .header__contacts {
            margin: 0 30px 5px auto;
            display: flex;
            gap: 30px;
            font-size: 28px;
            line-height: 120%
        }

        .header__date {
            margin: 0 0 5px;
            text-align: right;
            min-width: 215px
        }

        .header__date .date__title {
            font-size: 16px;
            line-height: 110%;
            margin-bottom: 4px
        }

        .overview__content {
            display: flex;
            gap: 30px;
            width: 100%
        }

        .overview__logo {
            display: grid;
            place-content: center;
            padding: 20px;
            width: 215px;
            min-width: 215px;
            height: 215px;
            border: 1px rgba(0, 0, 0, .1) solid;
            border-radius: 6px
        }

        .overview__logo img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain
        }

        .overview__name {
            max-width: 215px;
            font-size: 30px;
            line-height: inherit
        }

        .overview__divider {
            height: 215px;
            border-right: 1px #222222 solid;
            opacity: .1
        }

        .overview__equipment {
            width: 100%
        }

        .overview__equipment .equipment__title {
            font-size: 14px;
            text-transform: uppercase;
            margin-bottom: 30px
        }

        .overview__equipment .equipment__grid {
            display: grid;
            grid-template-columns:repeat(auto-fill, minmax(200px, 1fr));
            row-gap: 25px;
            font-size: 16px;
            color: #444
        }

        .overview__equipment .equipment__item {
            display: flex;
            align-items: center;
            gap: 20px
        }

        .technical__table {
            width: 100%;
            border-collapse: collapse
        }

        .technical__table tr:first-child td {
            border-top: none
        }

        .technical__table tr:last-child td {
            border-bottom: none
        }

        .technical__table tr td {
            padding: 30px 40px;
            border: 1px rgba(0, 0, 0, .1) solid
        }

        .technical__table tr td:first-child {
            padding-left: 0;
            border-left: none
        }

        .technical__table tr td:last-child {
            border-right: none
        }

        .technical__title {
            margin-bottom: 20px;
            font-size: 14px;
            text-transform: uppercase
        }

        .technical__value {
            font-size: 30px
        }

        .condition__content {
            display: flex;
            align-items: center;
            gap: 80px;
            width: 100%
        }

        .condition__side {
            position: relative
        }

        .condition__icon {
            position: absolute
        }

        .condition__measurement {
            margin: -125px auto 0;
            display: flex;
            gap: 20px
        }

        .condition__measurement .measurement__values {
            width: 15px;
            height: 325px;
            border-radius: 100px;
            background: linear-gradient(180deg, #CA120C 0%, #F70800 23.44%, #F7AD08 49.48%, #F2F708 75%, rgba(255, 255, 255, 0) 100%)
        }

        .condition__measurement .measurement__titles {
            display: flex;
            flex-direction: column;
            justify-content: space-between
        }

        .recommendation__text p:last-child {
            margin-bottom: 0
        }

        .recommendation__cost {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-left: 150px;
            padding: 27px 150px;
            background-color: #f9f9f9;
            border-radius: 6px;
            text-align: center
        }

        .recommendation__cost .h3 {
            margin-top: 35px;
            margin-bottom: 10px
        }

        .report .h1 {
            display: flex;
            align-items: center
        }

        .report__divider {
            display: inline-block;
            margin: 0 30px;
            height: 80px;
            border-right: 1px rgba(0, 0, 0, .1) solid
        }

        .report__title {
            transition: .3s ease-in-out
        }

        .report__title.not-active {
            font-size: 50px;
            text-decoration: underline
        }

        .report__type.not-active {
            display: none
        }

        .report__video video {
            width: 100%;
            height: 1015px;
            object-fit: cover
        }

        .report__slider.slider-for {
            margin-bottom: 35px
        }

        .report__slider.slider-for .slide {
            display: flex;
            gap: 60px
        }

        .report__slider.slider-for .slide__image {
            width: 920px;
            height: 610px;
            overflow: hidden;
            border-radius: 6px
        }

        .report__slider.slider-for .slide__image img {
            width: 100%;
            height: auto
        }

        .report__slider.slider-for .slide__content {
            max-width: 30%
        }

        .report__slider.slider-nav {
            min-height: 320px
        }

        .report__slider.slider-nav .slick-track {
            display: flex;
            align-items: center
        }

        .report__slider.slider-nav .slick-list {
            padding: 25px 0 !important
        }

        .report__slider.slider-nav .slide {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 320px
        }

        .report__slider.slider-nav .slide.slick-center + .slide .slide__image-wrapper:after {
            background: linear-gradient(270deg, #FFFFFF -21.6%, rgba(255, 255, 255, 0) 50%)
        }

        .report__slider.slider-nav .slide .slide__image-wrapper {
            position: relative;
            width: 460px;
            height: 310px;
            transition: .3s ease-in-out;
            border-radius: 6px;
            overflow: hidden
        }

        .report__slider.slider-nav .slide .slide__image-wrapper img {
            width: 100%;
            height: auto
        }

        .report__slider.slider-nav .slide .slide__image-wrapper:after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transition: .3s ease-in-out;
            background: linear-gradient(90deg, #FFFFFF -21.75%, rgba(255, 255, 255, 0) 50%)
        }

        .report__slider.slider-nav .slide.slick-center .slide__image-wrapper {
            filter: drop-shadow(0px 4px 15px rgba(0, 0, 0, .15))
        }

        .report__slider.slider-nav .slide.slick-center .slide__image-wrapper:after {
            display: none
        }

        .report__slider.slider-nav .slide.slide:not(.slick-center) .slide__image-wrapper {
            width: 338px;
            height: 225px
        }

        .report__slider.slider-nav .arrow {
            position: absolute;
            top: 42%;
            width: 50px;
            height: 50px;
            background-size: contain;
            z-index: 10
        }

        .report__slider.slider-nav .arrow.arrow-next {
            right: 0;
            background-image: url('/storage/assets/img/arrow-right.svg')
        }

        .report__slider.slider-nav .arrow.arrow-prev {
            background-image: url('/storage/assets/img/arrow-left.svg')
        }

        .components .flex {
            flex-wrap: wrap;
            gap: 30px
        }

        .components .grid {
            display: grid;
            grid-template-columns:1fr 1fr;
            gap: 30px
        }

        .components__item {
            position: relative;
            max-width: 705px;
            border-radius: 6px;
            overflow: hidden
        }

        .components__item .item__image {
            max-width: 705px;
            width: 100%;
            height: 470px
        }

        .components__item .item__image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 6px
        }

        .components__item .item__image:after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, .75) 100%)
        }

        .components__item .item__text {
            position: absolute;
            left: 40px;
            bottom: 40px;
            margin-bottom: 0;
            color: #fff
        }

        .components__item .item__desc {
            margin-top: 30px
        }

        .footer {
            margin-top: 120px
        }

        .footer .header__container {
            padding: 120px 0 50px;
            border-top: 1px rgba(0, 0, 0, .1) solid
        }

        .footer .footer__container {
            gap: 30px;
            align-items: flex-end;
            padding-bottom: 120px
        }

        .footer__date {
            text-align: left
        }

        .footer__btn {
            margin-left: auto
        }

        .no-trash {
            margin: 200px 0
        }

        .no-trash .h1 {
            text-align: center
        }

        .no-trash__like {
            display: block;
            width: fit-content;
            margin: 0 auto
        }
    </style>
</head>
<body>
<header class="header">
    <div class="container header__container">
        <div class="header__logo">
            <img src="{{ public_path('/storage/assets/LogoHeader.fccae26c.png') }}" alt="logo">
        </div>
        <div class="header__contacts">
            <a class="link contacts__link" href="">рус +7 910 966 54 12</a>
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
        <div class="h1">Обзор автомобиля</div>
        <div class="overview__content">
            <div class="overview__logo">
                <img
                    src="data:image/png;base64,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"
                    alt="car-logo">
            </div>
            <div class="overview__name">
                Mercedes-Benz
                GL-Класс
                500 II (X166)
            </div>
            <div class="overview__divider"></div>
            <div class="overview__equipment">
                <div class="equipment__title h3">
                    Комплектация
                </div>
                <div class="equipment__grid">
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="{{public_path('/storage/assets/massage.d98a0345.svg') }}" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="{{public_path('/storage/assets/massage.d98a0345.svg') }}" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="{{public_path('/storage/assets/massage.d98a0345.svg') }}" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="{{public_path('/storage/assets/massage.d98a0345.svg') }}" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="{{public_path('/storage/assets/massage.d98a0345.svg') }}" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="{{public_path('/storage/assets/massage.d98a0345.svg') }}" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="{{public_path('/storage/assets/massage.d98a0345.svg') }}" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="{{public_path('/storage/assets/massage.d98a0345.svg') }}" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="{{public_path('/storage/assets/massage.d98a0345.svg') }}" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="{{public_path('/storage/assets/Add-icon.b3de98c7.svg') }}" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="{{public_path('/storage/assets/Add-icon.b3de98c7.svg') }}" alt="icon">
                        </div>
                        <div class="item__name">
                            Массаж сидений
                        </div>
                    </div>
                    <div class="equipment__item">
                        <div class="item__icon">
                            <img src="{{public_path('/storage/assets/Add-icon.b3de98c7.svg') }}" alt="icon">
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
                        2012
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        Пробег
                    </div>
                    <div class="technical__value">
                        145 688 км
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        Двигатель
                    </div>
                    <div class="technical__value">
                        4.7 л / 435 л.с.
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        Привод
                    </div>
                    <div class="technical__value">
                        Полный
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        VIN
                    </div>
                    <div class="technical__value">
                        1KLBN52TWXM186109
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="technical__title">
                        Цвет
                    </div>
                    <div class="technical__value">
                        Мокрый асфальт
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        Коробка
                    </div>
                    <div class="technical__value">
                        Автоматическая
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        ДТП (база)
                    </div>
                    <div class="technical__value">
                        Не найдено
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        Спецификация
                    </div>
                    <div class="technical__value">
                        В наличии
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        Гарантия
                    </div>
                    <div class="technical__value">
                        2 года
                    </div>
                </td>
            </tr>
        </table>
    </div>
</section>
<section class="condition">
    <div class="container">
        <div class="h2">Состояние кузова</div>
        <div class="condition__content">
            <div class="condition__side condition__side-front">
                <img src="{{public_path('/storage/assets/car-front.84b5798f.png') }}" alt="car-front">
            </div>
            <div class="condition__side condition__side-back">
                <img src="{{public_path('/storage/assets/car-back.6bcf3ba5.png') }}" alt="car-back">
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
                    В целом, конечно, курс на социально-ориентированный национальный проект представляет собой
                    интересный эксперимент проверки новых принципов формирования материально-технической и кадровой
                    базы. Не следует, однако, забывать, что семантический разбор внешних противодействий позволяет
                    выполнить важные задания по разработке направлений прогрессивного развития.
                </p>
                <p>
                    И нет сомнений, что тщательные исследования конкурентов представляют собой не что иное, как
                    квинтэссенцию победы маркетинга над разумом и должны быть объявлены нарушающими общечеловеческие
                    нормы этики и морали.
                </p>
            </div>
        </div>
        <div class="recommendation__cost">
            <img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIYAAABnCAYAAADFYTq2AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAA6hSURBVHgB7Z1JbBTZGcc/t8kh40HBZmcixRYEDkQsAjERRKJ9AJQEkAFpIhDrgVWJBsSSI/jKNowUsR7YIhBIYCLIIDgEIwEKB6BBcAhh8SFhGWxMBE4Og5u8f7leqfr1q6r3ql9VV7frL7Wq7a52t/v96turuob6kbq7uxvZZhC78e1P8vl8vWzfTCbTzTb/YbcO+1e5+vr6d9RPVENVKBuA7MePHyexBf5ZTU3NJOqDwYRynz596mDb++xv56gPmA6qMlUFGAwELPxMdvRnGQRZ6rMGcaqDwZJjoFxg969XAygVCwaDARahpba2dgXFD0KQcr29vdcHDBhwjEGSowpURYGRcBi81MGs2DG2PV5JliTxYDAYAMAKZqpb2DZLla12QMIAOU4JV2LBsIH4mgGxkSrHOqgKVmRHkgFJHBhVDoSoxAKSGDD6GRCiEgdIIsBAUMmAOErmag2VKgDSnIQgtaxgoBBlA5GlVI7YZ7KP1US+LScgGSqTGBRwG/cohaJIzGpsZJ/NNfYZraAyKXaLkVoJPcF6DB48eBPFrFjBSGOJ0Io99ojNlTAotsM8UgpFGMHK3ovTtURuMew09Bv2j62kVCXLTmtbKWJFCoYdT7Sxu5MolTHFEXdEBoYNReo6olPOjjsiGR6KJMZIoYhFk+yUtpEikHGLkUIRuyLJWIyCkUJRNgGOySbdijFXkkJRVjXabsVY89EIGCkUidCkfD5/lAzJCBh2StpIqcoq5k5aurq6viEDKhkMZi3wRvpNneLDhw908uRJamlpoV27dtGrV68oSUIDjsGxkUpUScGn3SHdR/1AAKKtrY3OnTtHPT09BY/Nnj2bli1bRiNGjKCkqLe3t3no0KHtFFKhwbDjiufUD3T16lXav3+/A8SUKVNo8eLFdOfOHTp9+rSzX8IAKSlTCQUGol97lqKRqlgA4sSJE/T69WvrZwCxZs0aa8v14sULOnLkCF28eNH5XYIAaW9oaGimEAoFRmdn57FMJlO2IZKodf/+fSuOwBYaNWoUbd++vQAIUTJAli9fTrNmzSorIOwA3sT6KtruXhsMBsVKBoWxtChJkgEBCzF37lzlvyECMnz4cJozZw4tWLCAPv/8cyqD3tkupUPnSVpgVGu9QgRi4MCBVgyBG+6HEQBpbW214hAIgMCCwM2UQdouRQuManMhOkC8f/8+FCQAY8+ePfT48WPr53IBoutSlMGopiwEtQcAgeASCrIQcAtwDxD24S4Bi33p0iWaOXMmrV27lkaOHOn5mvxvwJJAZQAELqVJNUtRBuPt27fIQiqqkAVLgIxiwoQJVgDIi1Pnz5+3Hg8CAkc73AFfzCAhFkkyIDoDPkpgVFrAKboIfPhjxoyhXC7n1CL8FhFAHD582IkPeBAKS4Hfwa1A48aNszIV1DLc2Qj2nTdvnhYgEydOtFJcbKOUbTU6AvcjBTFrARfSSAmXCMSPfvwZDfppE7355yNnH1iGU6dOKQGBfbHIsChBErMRwAT48Hw/iYDMmDGD1q1bF1mKy6zGBWY1FgTtFwhGJVgLGRBjs/NoXPNv2f06+p6B8fDyGQcQMQ1FrIAA0Q1E2KwEC7x3715qb2+XvpZMsECwOohXOCBRFslUyuWBYCTZWgQBIer57Wv06Lsz1PP2jfUzFg2ugB/lJtJULjE+UQEE+wIOWC2uKABRsRq+YCTVWugCIUoEBBo7diwdOnRIGQgsPBZy6tSpWrGEKiBRl9mDYg1fMJi1QDErSwlRqUCIklmQoNI3F6wBFm7Hjh1KldHm5manFgKLFBR7QDJAdu/ebSRAZVajlVmNHV6PD/B6AFfCY0/OUgKENBMLYAoIrqYvm60bBwQLgUwFYGzevNmyIiaEv8uh8Ap8ZcL+2Bdbngnxhl6pYhbja7bG+7zqGp4WI0lVzqdPn1qROtfkhatobLN6/0JVD787Sx23/+ZYEL+UFgErFgvwBLkf7Dd//nxrm81mLej84ODBKG4cCNRiUO8wmc76VUOlYNhtdQSdibmyDaaleKUS+mLCNAuQusHDyKR63n5Pz//ergxIkGSLDIsEl+BXZeUxSRRAuOTZQ5GCkaSgU1a+xo1/cHAF43/9VSSA9FmQa87vdADxAkKc5+ASs5iIgXBkd16LrkUqBSMJQadf+RoftDsoq2sYRk2/zDJAfkemFQYQwICUUxUId1Et7h6KVxBaBEa5m2Wy2UqvhcDRtWXLFqdzCUDG/+Yry4qYlgwQsfQtugEdIOrq6iwgFi5c6PkeEGuNHj2aDKuDuZMm8ZdFYJTLjciA8AvUxHkHtwDIr1b/kZXDG8m0RECQ4qK7CjjdvRWvtFcGBGBYtGiRdV8m94jh+vXrfeEJI1lNowiMrq6uNpyfQDFJBoTfkSbm9m4XgzK0+4iNKv6AAMjtP/+pqA8DkGV1DfF9qwAhawaidI+tScmykyIwWHyB7+mIJRtB/IAjQQUIWTDHG1zu6J7v5y4r/4K5l8ZpzZEAEtSHwfvBe+HT5GGBiDjuKMpOCsCwi1r3KGKpTF9zyYBQyQ6KjtAI4w9IVkWFi0Hvg79vLCwW2OuIF4FQgciQioZ4CsDAGUxsByOnuMmkM32tm+55Kc4AFZL1YZB6btu2zRMIpOSoa5QBCEdix1UEI5L4Qnf6Gkc5WtelACH7m3HFHxDiDwSoWGAEjDKJNZpyAMElxhkFvRL7K6KMyWvYNqiBhBQQ4gsJIFSg4JYBR5/Y58DfxI1bIRzZuEUFSF3D0L6tZIFlATeAgJvxizsAUFQzGvY3QxWDYZfBG8mg4CbctQhE7KptbaSqd+/etcBQnbmEheENKy8BTPh+Hn8ADgSQURXI3JIBoRt38EA0AhWUWN0Ww/igL44CfBD4QBCEQSolZdGVYOZBRXBRL1++VNoP0K5evdoBBLUJ9EiiiD9kQASVvP3cTERqhHHgAagTY0QVeCLzQAbiboCFmaZW6UrqSpbaQoO+aGIFsm0luZeHLAB9dPmsVanEIqsCIbYC4ow73H0TNxj70KOniCQDRGWaGovmnoUspdPplqx8DfgAiokAlYPBpQKErpsxrXw+v2rIkCHHcN8BI67GmQiIyjS1bBYyLCBiF1PMeGSvNW3p77XdCwcDi7p161YtIILS26jkbqi5wYj1hCIAsnPnTnrw4IH1c9hZSFVAvM4Vkb0eXAxiHP46TV9mGRx/IB1xMJBFyILFMHFH1LK/yG+VdZ//MopSOLcKfqVcRNsYwuFV0DCAcKsDIV3F43wsDpYAFkDlXBFZUQ0yDYZY+VV1Mzdv3rSsTwQdVq6/sNK4Vcdyg/GJDAun/uOfUqn1ix9WWAvipaATlmWjdFgoBIKmwBAPAhULIX4uACPCnkmOgTEZdyww7BpGNxkWCD9w4IDzT4UBRKXqyc8o55YDWywwrAegQVCpAwRfrCtXrljFslLB4IC5axEbNmyg6dOnez7/1q1b1uWddCAyIGc2g4MR6XCOuNhhADGVjXCpzFaaAAMpJo8hcB9ABLlWXYgM6h0Dox53YgGDS1zsoBN5sR8WB88zBYjObKUJMKCEttqlYmBYTHAwsvaVcmKRCEjQWVZhi2Ru6c5WIjaCG8RrlgIGjnSknqpAlLORBpUVDEhmDcIAgthhyZIlnoCEma0UB4iiSFefPHlCBw8eTAwQXCIYkQzooNsJBbkL5PJIx7h0AZEVyUqdrYRgVXDfJBhJarXLJIIRSYyxdOnSgngCoOhYAxVAELkjgocACCwIz0agMP4ddQLMUPABGhNglLMHoqNYwID4YpfiLoKul4kFBSDPnj1zfmci4DMRfOI94Eo85eyBaCjerITHE1gELl1AVK6XiX2xALisUpjZSjEWMJWVcJWrB6KhwjoGFEXlU1RYd+HuqZSSxukGfKbAKHcPREOFlU8oztMGwgAiugsdQMIEfHg9pKs4+6tUV+I185lAOacRuMEwfkklBFy46boLv3hCp4rKm0/Ynwvw6cQdkA4YP/y3hx5fv0T/uPZX+uF/PZ7pahIl7a5GMSHOs5Iw8YRuydz9HBOzlQAH2QlcmAoYIhBQBcQUBZLOYzAwjjEwjF4oBaZfpz6BRcFi68QTsjI7Ygn3jAN6DV6targZuAye8rrdzI0bN5RijL5zSc5apy3y16yQmKJA0gmuuGY+TbsLr+eozDjwkjckizuCgk9Ml+fOHaXufz9Xes2ky33SkQNGZ2dnSyaTaaOIJAMEi4D000u6gGCxceRjP51ROq9zOrzAABCPLp+xtirvq1LEDEN90ZR4XB1WE+4iaI5SpjBxhwhG97+eU+78UQeIpFYvQ8opbkEFpyjGmbKaGOIJKrNDYWYrxfL1sJ+Pp88ahjnXxKgyILgKzniP5dxVP4WJJ1TL7GKXNMwIv6igdLdSJV5yKdaz3f2k6y78yuxwU2GGbUWrwkfy+N9OaH/DiHzPdn/z5k22trY21rkMUTJ3gcqhV7opq6JyhT2ng0OEx2F1cL9SMw1VuQNP62dxhzjjDD9hQXAL05VVcUe6bqbK5X9FHShJ1w8PM+XlHryVSbfe0R8ku6Sj7OJsZYszvBSm6SZKNnuhm/JWq2QXgZVd5zOSc0xMKGxXNgnT1wmW2nU+oaR9HYUolTJ70qavkyp3R7Xg97Kdk+hOZPICBDCkQKjJ62uwKubbB/yEYRp0cnmZHUqBUJLUjUA1Xs9gcLQxOGKtgpYq3odBQJkCESzmFVYyN3Jc+pjXk5JQ7EoVrfy+Fy3j9STb77RTqqqUHXR2eD2e8XtyPp8/TqmqVa1+D/qCwVzJBbZR+pL4VBWl9qCv8fYFA00VFoB+S6mqSixFbQ3apyZoh0pLXVMFyvML8tzKBO1gW41AwlJVhljQuUppP1JU3Jd7TGVeXuVvmQItBhfzS5soVSULSYSy5VcGA3UN5lIuUKqKFJKIoEzELWVXAtmnGMClpIFoZcmzJ+IlZYsBgbg0EK08sdgiMAsRpQUGZH89UjulqgjhQNZxIVz/B3tRp9x9WrPxAAAAAElFTkSuQmCC"
                alt="cost">
            <div class="h3">Цена</div>
            <div class="cost__value accent">$ 300 000</div>
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
                <div class="slide">
                    <div class="slide__image">
                        <img src="{{public_path('/storage/assets/slide1.6764c463.png') }}" alt="slide">
                    </div>
                    <div class="slide__content">
                        <div class="slide__title h2">Комментарий 1</div>
                        <div class="slide__desc">
                            В целом, конечно, курс на социально-ориентированный национальный проект представляет
                            собой интересный эксперимент проверки новых принципов формирования
                            материально-технической и кадровой базы. Не следует, однако, забывать, что семантический
                            разбор внешних противодействий позволяет выполнить важные задания по разработке
                            направлений прогрессивного развития.
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__image">
                        <img src="{{public_path('/storage/assets/slide2.e3d73fb2.png') }}" alt="slide">
                    </div>
                    <div class="slide__content">
                        <div class="slide__title h2">Комментарий 2</div>
                        <div class="slide__desc">
                            В целом, конечно, курс на социально-ориентированный национальный проект представляет
                            собой интересный эксперимент проверки новых принципов формирования
                            материально-технической и кадровой базы. Не следует, однако, забывать, что семантический
                            разбор внешних противодействий позволяет выполнить важные задания по разработке
                            направлений прогрессивного развития.
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__image">
                        <img src="{{public_path('/storage/assets/slide1.6764c463.png') }}" alt="slide">
                    </div>
                    <div class="slide__content">
                        <div class="slide__title h2">Комментарий 3</div>
                        <div class="slide__desc">
                            В целом, конечно, курс на социально-ориентированный национальный проект представляет
                            собой интересный эксперимент проверки новых принципов формирования
                            материально-технической и кадровой базы. Не следует, однако, забывать, что семантический
                            разбор внешних противодействий позволяет выполнить важные задания по разработке
                            направлений прогрессивного развития.
                            В целом, конечно, курс на социально-ориентированный национальный проект представляет
                            собой интересный эксперимент проверки новых принципов формирования
                            материально-технической и кадровой базы. Не следует, однако, забывать, что семантический
                            разбор внешних противодействий позволяет выполнить важные задания по разработке
                            направлений прогрессивного развития.
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__image">
                        <img src="{{public_path('/storage/assets/slide1.6764c463.png') }}" alt="slide">
                    </div>
                    <div class="slide__content">
                        <div class="slide__title h2">Комментарий 3</div>
                        <div class="slide__desc">
                            В целом, конечно, курс на социально-ориентированный национальный проект представляет
                            собой интересный эксперимент проверки новых принципов формирования
                            материально-технической и кадровой базы. Не следует, однако, забывать, что семантический
                            разбор внешних противодействий позволяет выполнить важные задания по разработке
                            направлений прогрессивного развития.
                            В целом, конечно, курс на социально-ориентированный национальный проект представляет
                            собой интересный эксперимент проверки новых принципов формирования
                            материально-технической и кадровой базы. Не следует, однако, забывать, что семантический
                            разбор внешних противодействий позволяет выполнить важные задания по разработке
                            направлений прогрессивного развития.
                        </div>
                    </div>
                </div>
            </div>
            <div class="report__slider slider-nav">
                <div class="slide">
                    <div class="slide__image-wrapper">
                        <img src="{{public_path('/storage/assets/slide1.6764c463.png') }}" alt="slide">
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__image-wrapper">
                        <img src="{{public_path('/storage/assets/slide2.e3d73fb2.png') }}" alt="slide">
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__image-wrapper">
                        <img src="{{public_path('/storage/assets/slide1.6764c463.png') }}" alt="slide">
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__image-wrapper">
                        <img src="{{public_path('/storage/assets/slide1.6764c463.png') }}" alt="slide">
                    </div>
                </div>
            </div>
        </div>
        <div class="report__video report__type not-active">
            <video muted autoplay loop type='video/mp4'>
                <source src="https://onlycars.vip/img/1-masina-16x9_KbiJuPj6.mp4">
            </video>
        </div>
    </div>
</section>
<section class="components">
    <div class="container">
        <div class="h1">Технические компоненты</div>
        <div class="flex">
            <div class="components__item item">
                <div class="item__image">
                    <img class="item__image" src="{{public_path('/storage/assets/vin.bb29fd95.png') }}" alt="vin">
                </div>
                <div class="item__text h2">VIN</div>
            </div>
            <div class="components__item item">
                <div class="item__image">
                    <img src="{{public_path('/storage/assets/slide1.6764c463.png') }}" alt="vin">
                </div>
                <div class="item__text h2">VIN</div>
            </div>
        </div>
    </div>
</section>
<section class="components">
    <div class="container">
        <div class="h1">Покрышки</div>
        <div class="flex">
            <div class="components__item item">
                <img class="item__image" src="{{public_path('/storage/assets/vin.bb29fd95.png') }}" alt="vin">
                <div class="item__desc">
                    Не следует, однако, забывать, что семантический разбор внешних противодействий позволяет
                    выполнить важные задания по разработке направлений. Нет сомнений, что тщательные исследования
                    конкурентов представляют собой, как квинтэссенцию победы маркетинга над разумом и должны быть
                    объявлены.
                </div>
            </div>
            <div class="components__item item">
                <img class="item__image" src="{{public_path('/storage/assets/vin.bb29fd95.png') }}" alt="vin">
                <div class="item__desc">
                    Не следует, однако, забывать, что семантический разбор внешних противодействий позволяет
                    выполнить важные задания по разработке направлений. Нет сомнений, что тщательные исследования
                    конкурентов представляют собой, как квинтэссенцию победы маркетинга над разумом и должны быть
                    объявлены.
                </div>
            </div>
        </div>
    </div>
</section>
<section class="components">
    <div class="container">
        <div class="h1">Повреждения</div>
        <div class="grid hidden">
            <div class="components__item item">
                <img class="item__image" src="{{public_path('/storage/assets/vin.bb29fd95.png') }}" alt="vin">
                <div class="item__desc">
                    Не следует, однако, забывать, что семантический разбор внешних противодействий позволяет
                    выполнить важные задания по разработке направлений. Нет сомнений, что тщательные исследования
                    конкурентов представляют собой, как квинтэссенцию победы маркетинга над разумом и должны быть
                    объявлены.
                </div>
            </div>
            <div class="components__item item">
                <img class="item__image" src="{{public_path('/storage/assets/vin.bb29fd95.png') }}" alt="vin">
                <div class="item__desc">
                    Не следует, однако, забывать, что семантический разбор внешних противодействий позволяет
                    выполнить важные задания по разработке направлений. Нет сомнений, что тщательные исследования
                    конкурентов представляют собой, как квинтэссенцию победы маркетинга над разумом и должны быть
                    объявлены.
                </div>
            </div>
            <div class="components__item item">
                <img class="item__image" src="{{public_path('/storage/assets/vin.bb29fd95.png') }}" alt="vin">
                <div class="item__desc">
                    Не следует, однако, забывать, что семантический разбор внешних противодействий позволяет
                    выполнить важные задания по разработке направлений. Нет сомнений, что тщательные исследования
                    конкурентов представляют собой, как квинтэссенцию победы маркетинга над разумом и должны быть
                    объявлены.
                </div>
            </div>
            <div class="components__item item">
                <img class="item__image" src="{{public_path('/storage/assets/vin.bb29fd95.png') }}" alt="vin">
                <div class="item__desc">
                    Не следует, однако, забывать, что семантический разбор внешних противодействий позволяет
                    выполнить важные задания по разработке направлений. Нет сомнений, что тщательные исследования
                    конкурентов представляют собой, как квинтэссенцию победы маркетинга над разумом и должны быть
                    объявлены.
                </div>
            </div>
            <div class="components__item item">
                <img class="item__image" src="{{public_path('/storage/assets/vin.bb29fd95.png') }}" alt="vin">
                <div class="item__desc">
                    Не следует, однако, забывать, что семантический разбор внешних противодействий позволяет
                    выполнить важные задания по разработке направлений. Нет сомнений, что тщательные исследования
                    конкурентов представляют собой, как квинтэссенцию победы маркетинга над разумом и должны быть
                    объявлены.
                </div>
            </div>
            <div class="components__item item">
                <img class="item__image" src="{{public_path('/storage/assets/vin.bb29fd95.png') }}" alt="vin">
                <div class="item__desc">
                    Не следует, однако, забывать, что семантический разбор внешних противодействий позволяет
                    выполнить важные задания по разработке направлений. Нет сомнений, что тщательные исследования
                    конкурентов представляют собой, как квинтэссенцию победы маркетинга над разумом и должны быть
                    объявлены.
                </div>
            </div>
        </div>
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
    </div>
</section>
<footer class="footer">
    <div class="container header__container">
        <div class="header__logo">
            <img src="{{public_path('/storage/assets/LogoFooter.049f563c.png') }}" alt="logo">
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
                25 авг 2022
            </div>
        </div>
        <div class="header__date footer__date">
            <div class="date__title">
                Обновлено
            </div>
            <div class="date__date accent">
                25 авг 2022
            </div>
        </div>
        <div class="header__date footer__date">
            <div class="date__title">
                Номер диагностики
            </div>
            <div class="date__date accent">
                25 авг 2022
            </div>
        </div>
        <div class="btn footer__btn">
            Скачать PDF-версию
        </div>
    </div>
</footer>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>


</body>
</html>
