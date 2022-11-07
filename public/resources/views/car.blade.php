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
    {{--
    <script type="module" crossorigin src="{{url('/storage/assets/index.a2dc5af3.js') }}"></script>
    --}}
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
            font-family: 'Jost', sans-serif;
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
            width: 1600px;
            padding: 0 50px;
            margin: auto;
            /*width: 1440px;*/
            /*max-width: 95vw*/
        }

        .container:after {
            content: " ";
            display: block;
            height: 0;
            clear: both;
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
            padding-top: 30px
        }

        .header__container {
            /*display: flex;*/
            /*justify-content: space-between;*/
            /*align-items: flex-end*/
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

        .header__qr-text {
            font-size: 16px;
            color: #222222;
            opacity: 0.5;
            width: 160px;
            float: right;
            margin-right: 70px;
        }

        .overview {
            padding-top: 0;
        }

        .overview__content {
            /*display: flex;*/
            /*gap: 30px;*/
            width: 100%
        }

        .overview__left {
            width: 550px;
        }

        .overview__logo {
            margin-right: 30px;
            width: 200px;
            height: 200px;
            border: 1px rgba(0, 0, 0, .1) solid;
            border-radius: 6px
        }

        .overview__logo img {
            margin: 40px;
            width: 120px;
            height: 120px;
        }

        .overview__name {
            margin-right: 80px;
            max-width: 215px;
            font-size: 30px;
            line-height: 30px;
        }

        .overview__divider {
            height: 215px;
            border-right: 1px #222222 solid;
            opacity: .1
        }

        .overview__divider.right {
            margin-right: 20px;
        }

        .overview__divider::after {

            content: " ";
            display: table;
            clear: both;
        }

        .overview__equipment {
            /*width: 800px;*/
            margin-left: 50px;
        }

        .overview__right {
            width: 800px;
        }

        .overview__equipment .equipment__title {
            font-size: 14px;
            text-transform: uppercase;
            margin-bottom: 30px
        }

        .overview__equipment .equipment__grid {
            /*display: grid;*/
            /*grid-template-columns:repeat(auto-fill, minmax(200px, 1fr));*/
            /*row-gap: 25px;*/
            font-size: 16px;
            color: #444;
            width: 1000px
        }

        .overview__equipment tr {
            padding-bottom: 30px;
        }

        .overview__equipment .equipment__item {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .overview__addition {
            margin-right: -250px;
        }

        .overview__addition .addition__item {
            margin-top: 30px;
            font-size: 16px;
            line-height: 110%;
            /*width: 200px;*/
        }

        .technical__table tr td {
            padding: 30px 40px;
            border: 1px rgba(0, 0, 0, .1) solid
        }

        .technical__table {
            width: 100%;
            border-collapse: collapse;
            border-top: none;
            border-bottom: none;
        }

        .technical__table tr:first-child td {
            border-top: none
        }

        .nbt, .nbt * {
            border-top: none !important
        }


        .nbb, .nbb * {
            border-bottom: none !important
        }

        .technical__table tr:last-child td {
            border-bottom: none !important
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
        }

        .condition__side {
            position: relative;
            width: 420px;
            display: inline-block;
            transform: scale(1.3);
            margin-right: 120px;
        }


        .condition__side img {
            width: 100%;
        }

        .condition__icon {
            position: absolute
        }

        .condition__measurement {
            /*margin: -25px 60px 0;*/
            /*display: flex;*/
            /*gap: 20px*/
            float: right;
            position: relative;
            right: -100px;
            margin-right: -100px;
        }

        .condition__measurement > * {
            display: inline-block;
        }

        .condition__measurement .measurement__values {
            width: 15px;
            height: 80%;
            border-radius: 100px;

            /*background: linear-gradient(180deg, #CA120C 0%, #F70800 23.44%, #F7AD08 49.48%, #F2F708 75%, rgba(255, 255, 255, 0) 100%)*/
        }

        .condition__measurement .measurement__values img {
            height: 100%;
        }

        .condition__measurement .measurement__titles {

            display: inline-block;
            margin-left: 25px;
            position: relative;
            top: -60px;
        }

        .condition__measurement .measurement__titles .titles__item {
            margin-bottom: 60px;
            /*display: flex;*/
            /*flex-direction: column;*/
            /*justify-content: space-between*/
        }

        .condition__measurement .measurement__titles .titles__item:last-child {
            margin-bottom: 0;
        }

        .recommendation .h2 {
            margin-bottom: 50px !important;
        }

        .recommendation__text p:last-child {
            margin-bottom: 0
        }

        .recommendation-left {
            max-width: 60%;
        }

        .recommendation__cost {
            /*display: flex;*/
            /*flex-direction: column;*/
            /*justify-content: center;*/
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
            height: 100%;
            /*max-width: 30%*/
            /*padding-left: 40px;*/
        }

        .slide__content {
            padding-left: 50px;
            vertical-align: top;
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

        .report img {
            margin-bottom: 50px;
        }

        .report .photo__line img:first-child {
            margin-right: 50px;
        }

        .photo__line img {
            max-width: 95%;
        }

        .components {
            padding-top: 0;
        }

        .components .flex {
            flex-wrap: wrap;
            gap: 30px;

        }

        .components table, .components table img {
        }

        .components .grid {
            display: grid;
            grid-template-columns:1fr 1fr;
            gap: 30px
        }

        .components__item {
            position: relative;
            width: 730px;
            border-radius: 6px;
            /*overflow: hidden*/
        }

        .components__item .item__image:first-child {
            padding-right: 20px;
        }

        .components__item .item__image:last-child {
            padding-left: 20px;
        }

        /*.components__item .item__image {*/
        /*    max-width: 705px;*/
        /*    width: 100%;*/
        /*    height: 470px*/
        /*}*/

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
            position: relative;
            left: 20px;
            bottom: 70px;
            /*margin-bottom: 0;*/
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
            border-top: 1px rgba(0, 0, 0, .1) solid;
            margin-left: 60px;
        }

        .footer .header__logo {
            width: 160px;
        }


        .footer .header__logo::after {
            content: " ";
            display: table;
            clear: both;
            height: 0;
            width: fit-content;
            margin-left: 30px;
        }

        .footer .footer__container {
            gap: 30px;
            align-items: flex-end;
            padding-bottom: 120px
        }

        .footer__qr {
            margin-right: 80px;
            padding: 10px;
            border-radius: 15px 0;
            border: 1px solid black;
            width: 100px;
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

    <style>

        .header__logo, .header__logo img {
            max-height: 87px;
        }

        .flex > * {
            display: inline-block;
        }

        .header__right {
            float: right;
        }

        .header__logo {
            float: left;
        }

        .left {
            float: left;
        }

        .right {
            float: right;
        }

        .overview__content {
            min-height: 200px;
            /*margin-bottom: 100px;*/
        }

        .equipment__item-2 {
            padding-right: 30px;
            height: 30px;
            max-width: 230px;
            font-size: 16px;
            line-height: 110%;
            padding-bottom: 12px;
        }

        .equipment__item-2 > span {
            padding: 17px 0;
        }


        .equipment__item-2 img {
            height: 30px;
            width: 30px;
            margin-bottom: -5px;
        }


        .condition {
            height: 570px;
        }

        .condition__photos {
            width: 1300px;
        }

        .report__photo > * {
            margin-bottom: 60px;
        }

        .photo__with-comment {
            width: 100%;
            margin-bottom: 60px;
        }

        .photo__with-comment:after {
            /*content: " ";*/
            /*display: table;*/
            /*clear: both;*/
            /*height: 0;*/
        }

        .photo__with-comment img {
            width: 100%;
            /*width: 900px;*/
            /*height: 600px;*/
            /*object-fit: cover;*/
        }

        .photo__with-comment .right {
            /*max-width: 500px;*/
        }

        .photo__with-comment .h2 {
            margin-bottom: 30px;
        }

        .photo__line > img {
            display: inline-block;

        }

        .photo__line > img:first-child {
            margin-right: 40px;
        }

        .photo__comment, .photo__with-comment {
            margin-bottom: 40px;
        }

        .photo__comment > * {
        }

        .photo__comment .h2 {
            margin-right: 40px
        }

        .photo__comment * {
            width: 100% !important;
        }

        .footer .contacts__link {
            font-size: 30px;
            margin-left: 100px;
            white-space: nowrap;
            position: relative;
            line-height: 38px;
            vertical-align: bottom;
            margin-top: 5px;
        }

        .footer .header__date {
            height: 110px;
            width: 160px;
            text-align: left;
        }

        .footer .date__date {
            margin-bottom: 40px;
        }

        .footer .header__qr-text {
            margin-left: auto;
        }

        .page-break {
            page-break-after: always;
        }

        .footer {
            position: absolute;
            bottom: 10px;
        }


        .header__qr {
            border-radius: 20px 0;
            padding: 15px;
            border: 1px solid black;
        }

        h1 {
            font-size: 120px !important;
            font-weight: 500 !important;
            line-height: 132px !important;
            letter-spacing: -0.02em !important;
            text-align: left;

        }

        .mw960 {
            max-width: 1500px;
        }

        .brakes {
            padding-top: 100px;
        }

        .brakes table{
            width: 100%;
        }

        .brakes td{
            padding-bottom: 25px;
        }


        .image-color {
            width: 34px;
            height: 34px;
            position: absolute;
        }

        .image-color.bonner {
            left: 150px;
            bottom: 450px;
            width: 34px;
            height: 34px;
        }

        .image-color.bonner img {
            width: 34px;
            height: 34px;
        }

        .condition__value {

            position: absolute;
            width: 20px;
            height: 28px;

            max-width: 20px;
            max-height: 28px;
        }

        .condition__value img {

            width: 20px;
            height: 28px;
        }

        .condition__value.bonnet {

            top: 70px;
            left: 67px;
            display: block;

        }

    </style>

    <style>
        .report table {
            width: 100%;
        }

        img {
            max-height: 470px;
            object-fit: cover;
        }

        .report table img.big {
            max-height: 760px;
        }

        .report table img {
            height: 100%
        }

        .tires-chars {
            margin: 0 15px;
        }

        .tires-logo {
        }

        .tires-chars__box {
            display: flex;
            gap: 16px;

        }

        .tires-chars__text * {
            display: inline-block;
        }


        .tires-chars__box {
            width: 30px;
            height: 30px;
            min-width: 30px;
            min-height: 30px;
            max-width: 30px;
            max-height: 30px;
            display: block;
            place-items: center;
            border: 1px solid #000000;
            border-radius: 4px;
            padding: 15px 5px 0;
            text-align: center;
            vertical-align: center;
            margin-bottom: -15px;
            margin-right: 7px;
        }

        .tires-line {
            border-bottom: 1px solid #222;
            width: 215px;
            margin: 30px 0;
        }

        .tires-photo img {
            height: 307px;
        }

        .components__item .item__image {

            object-fit: cover;
        }

        .condition__value img {
            max-width: 20px;
            max-height: 28px;
            width: 20px;
            height: 28px;
            object-fit: contain;
        }

        .condition__side .Hood {
            top: 112px;
            left: 96px;
        }

        .condition__side .Back-cover {
            top: 82px;
            left: 90px;
        }

        .condition__side .Front-left-door {
            top: 130px;
            left: 245px;
        }

        .condition__side .Front-right-door {
            top: 112px;
            right: 80px;
        }

        .condition__side .Left-rear-door {
            top: 118px;
            left: 298px;
        }

        .condition__side .Right-rear-door {
            top: 112px;
            left: 264px;
        }

        .condition__side .Left-front-wing {
            top: 130px;
            left: 195px;
        }

        .condition__side .Right-front-wing {
            top: 107px;
            right: 35px;
        }

        .condition__side .Left-rear-wing {
            top: 94px;
            right: 44px;
        }

        .condition__side .Right-rear-wing {
            top: 93px;
            left: 185px;
        }

        .condition__side .Left-front-rack {
            top: 71px;
            left: 235px;
        }

        .condition__side .Right-front-rack {
            top: 61px;
            right: 93px;
        }

        .condition__side .Left-rear-rack {
            top: 72px;
            right: 80px;
        }

        .condition__side .Right-rear-rack {
            top: 65px;
            left: 223px;
        }

        .condition__side .Left-middle-rack {
            top: 73px;
            left: 271px;
        }

        .condition__side .Right-middle-rack {
            top: 64px;
            right: 126px;
        }

        .condition__side .Roof {
            top: 50px;
            left: 212px;
        }

        .condition__side .Mirrors {
            top: 82px;
            left: 118px;
        }

        .condition__side .Front-bumper {
            top: 166px;
            left: 78px;
        }

        .condition__side .Rear-bumper {
            top: 125px;
            left: 90px;
        }

        .condition__side-front .Back-cover,
        .condition__side-front .Front-right-door,
        .condition__side-front .Right-rear-door,
        .condition__side-front .Right-front-wing,
        .condition__side-front .Right-rear-wing,
        .condition__side-front .Right-front-rack,
        .condition__side-front .Right-rear-rack,
        .condition__side-front .Right-middle-rack,
        .condition__side-front .Rear-bumper {
            display: none;
        }

        .condition__side-back .Hood,
        .condition__side-back .Front-left-door,
        .condition__side-back .Left-rear-door,
        .condition__side-back .Left-front-wing,
        .condition__side-back .Left-rear-wing,
        .condition__side-back .Left-front-rack,
        .condition__side-back .Left-rear-rack,
        .condition__side-back .Left-middle-rack,
        .condition__side-back .Roof,
        .condition__side-back .Mirrors,
        .condition__side-back .Front-bumper {
            display: none;
        }


        .tires-logo {
            width: 215px;
            height: 215px;
            border-radius: 6px;
            border: 1px solid #222;
            place-items: center;
            padding: 23px;
        }
    </style>
</head>
<body>
<header class="header">
    <div class="container header__container">
        <div class="header__logo">
            <img src="{{ url('/assets/LogoHeader.fccae26c.png') }}" alt="logo">
        </div>
        <div class="header__right">
            <div class="header__qr">
                <img
                    src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(140)->generate('https://www.car-experts.ae/')) !!} ">
            </div>

        </div>
        <div class="header__qr-text">
            Отсканируйте QR-код,
            чтобы посмотреть наши
            контакты
        </div>
    </div>
</header>
<section class="overview">
    <div class="container">
        <h1 class="h1">Обзор автомобиля</h1>
        <div class="overview__content">
            <div class="overview__left left">
                <div class="overview__logo left">

                    <img
                        src="{{ url('/assets/brands/'.strtolower(str_replace (' ', '-', $invoice->brand)).'-logo.png')}}"
                        alt="car-logo">

                    {{--                    <img--}}
                    {{--                        src="{{'/assets/brands/'.strtolower(str_replace (' ', '-', $invoice->brand)).'-logo.png'}}"--}}

                    {{--                        alt="car-logo">--}}

                </div>
                <div class="overview__name right">
                    {{ $invoice->brand }} <br>
                    {{ $invoice->model }}
                </div>
            </div>
            <div class="overview__right right">
                <div class="overview__divider left"></div>
                <div class="overview__equipment left">
                    <div class="equipment__title h3">
                        Комплектация
                    </div>
                    <table class="equipment__grid">
                        @php
                            $equipmentItems = $invoice->equipment;

                            $rows = ceil(count($equipmentItems)/3);


                            $equipmentIco = [
                                'Датчик давления в шинах' => '4G',
                                'Адаптивный свет' => '6E',
                                'Автоматический дальний свет' => '5E',
                                'Фаркоп' => '5B',
                                'Круиз-контроль' => '2H',
                                'Система помощи при парковке' => '5E',
                                'Камера' => '1H',
                                'Камера 360' => '6E',
                                'Проекционный дисплей' => '1H',
                                'Открытие багажника без помощи рук' => '6A',
                                'Электронная приборная панель' => '2H',
                                'Бесключевой доступ' => '4A',
                                'Электроскладывание зеркал' => '6E',
                                'Система «старт-стоп»' => '4F',
                                'Кожанный салон' => '6G',
                                'Люк' => '1C',
                                'Панорамная крыша' => '2G',
                                'Обогрев рулевого колеса' => '4C',
                                'Третий ряд сидений' => '6G',
                                'Электрорегулировка сидений' => '4H',
                                'Память положения сидений' => '6G',
                                'Подогрев сидений' => '6G',
                                'Вентиляция сидений' => '6G',
                                'Премиум Аудиосистема' => '4D',
                                'Мультимедиа система для задних пассажиров' => '4D',
                                'Навигационная система' => '5H',
                                'Android Auto/CarPlay' => '4D',
                                'Розетка 220V' => '1A',
                                'Массаж сидений' => '6G',
                                'Доводчики дверей' => '4A',
                                ];

                        @endphp
                        @for($i = 0; $i< $rows; $i++)
                            <tr>

                                @for($j = 3*$i; $j < 3*($i+1); $j++)
                                    @isset($equipmentItems[$j])
                                        <td class="equipment__item-2">
                                            <span class="">
                                                @php $icon = isset($equipmentIco[$equipmentItems[$j]]) ? $equipmentIco[$equipmentItems[$j]] : 'no-icon'  @endphp
                                              <img src="{{url('/assets/icons/'.$icon.'.png')}}"/>
                                            </span>
                                            <span class="">
                                                {{$equipmentItems[$j]}}
                                            </span>
                                        </td>
                                    @endif
                                @endfor

                            </tr>

                        @endfor
                    </table>
                </div>

                {{--                <div class="overview__addition right">--}}
                {{--                    <div class="h3">--}}
                {{--                        Дополнительные опции--}}
                {{--                    </div>--}}
                {{--                    <div class="addition__item">--}}
                {{--                        <span class="">--}}
                {{--                            <img src="{{url('/storage/assets/massage.png') }}"--}}
                {{--                                 alt="icon">--}}
                {{--                        </span>--}}
                {{--                        <span class="">--}}
                {{--                            Массаж сидений--}}
                {{--                        </span>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="overview__divider  right"></div>--}}

            </div>
        </div>
    </div>
</section>
<section class="technical">
    <div class="container">
        <div class="h2">Технические характеристики</div>
        <table class="technical__table">
            <tr class="nbt">
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
                        {{ $invoice->guarantee != 'Нет' ? $invoice->guaranteeYear : 'Нет' }}
                    </div>
                </td>

            </tr>
        </table>
    </div>
</section>
<section class="condition">
    <div class="container">
        <div class="h2">Состояние кузова</div>
        <table class="condition__content container">
            <tr>
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

                <td width="75%" class=" condition__photos">

                    <div class="condition__side condition__side-front">
                        @foreach($invoice->paintedParts as $part)
                            <div class="condition__value {{ $translate[$part['part']] }}">
                                @if($part['rating'] == "5")
                                    <img src="{{url('/assets/1000.png')}}" alt="">
                                @elseif($part['rating'] == "4")
                                    <img src="{{url('/assets/800.png') }}" alt="">
                                @elseif($part['rating'] == 3)
                                    <img src="{{url('/assets/500.png') }}" alt="">
                                @elseif($part['rating'] == 2)
                                    <img src="{{url('/assets/300.png') }}" alt="">
                                @elseif($part['rating'] == 1)
                                    <img src="{{url('/assets/100.png') }}" alt="">
                                @endif
                            </div>
                        @endforeach
                        {{--                        <div class="image-color bonner">--}}

                        <img src="{{url('/assets/car-front.png') }}" alt="car-front">
                    </div>
                    <div class="condition__side condition__side-back">
                        @foreach($invoice->paintedParts as $part)
                            <div class="condition__value {{ $translate[$part['part']] }}">
                                @if($part['rating'] == "5")
                                    <img src="{{url('/assets/1000.png')}}" alt="">
                                @elseif($part['rating'] == "4")
                                    <img src="{{url('/assets/800.png') }}" alt="">
                                @elseif($part['rating'] == 3)
                                    <img src="{{url('/assets/500.png') }}" alt="">
                                @elseif($part['rating'] == 2)
                                    <img src="{{url('/assets/300.png') }}" alt="">
                                @elseif($part['rating'] == 1)
                                    <img src="{{url('/assets/100.png') }}" alt="">
                                @endif
                            </div>
                        @endforeach

                        <img src="{{url('/assets/car-back.png') }}" alt="car-back">
                    </div>
                </td>

                <td width="25%" class="condition__measurement ">
                    <span class="measurement__values">
                        <img src="{{ url('/assets/gradient.png') }}" alt="">
                    </span>
                    <div class="measurement__titles">
                        <div class="titles__item">1000 + мкм</div>
                        <div class="titles__item">до 800 мкм</div>
                        <div class="titles__item">до 500 мкм</div>
                        <div class="titles__item">до 300 мкм</div>
                        <div class="titles__item">100 мкм</div>
                    </div>
                </td>
            </tr>

        </table>
    </div>
</section>
<section class="recommendation">
    <div class="container flex">
        <div class="recommendation-left left">
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
        <div class="recommendation__cost right">
            <img
                src="data:image/png;base64,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"
                alt="cost">
            <div class="h3">Цена</div>
            <div class="cost__value accent">{{ $invoice->price }}</div>

        </div>
    </div>
</section>
<footer class="footer">
    <div class="container header__container">
        <div>
            <span class="header__date left">
                <div class="header__date">
                    <div class="date__date accent">
                        Дата
                    </div>
                    <div class="date__title">
                        {{ explode(' ', $invoice->updated_at ?? $invoice->created_at)[0] }}
                    </div>
                </div>
            </span>
            <span class="footer__qr right">
                <img
                    src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->generate(URL::to('/'.$invoice->id))) !!} ">
            </span>
            <span class="header__qr-text">
                <div class="header__qr-text">
                    Report Online
                </div>
            </span>
        </div>

    </div>
</footer>

<div class="page-break"></div>

<header class="header ">
    <div class="container header__container">
        <div class="header__logo">
            <img src="{{ url('/assets/LogoHeader.fccae26c.png') }}" alt="logo">
        </div>

    </div>
</header>
<section class="report">
    <div class="container">
        @php
            $photos = array_merge($invoice->photosGeneralIn, $invoice->photosGeneralOut);
        @endphp
        <table>
            <tr class="photo__line">
                <td width="65%" class="">
                    <img class="big" src="{{ $photos[0] }}" alt="slide">
                </td>

            </tr>
        </table>
        <table>
            @for($i = 1; $i<count($photos); $i++)
                <tr class="photo__line">
                    @isset($photos[$i])
                        <td>
                            <img src="{{ $photos[$i++] }}" alt="slide">
                        </td>
                    @endif
                    @isset($photos[$i])

                        <td>
                            <img src="{{ $photos[$i] }}" alt="slide">
                        </td>
                    @endif

                </tr>
            @endfor
        </table>
    </div>
</section>
<footer class="footer">
    <table class="container header__container">
        <tr>

            <td class="header__logo">
                <img src="{{url('/storage/assets/LogoFooter.049f563c.png') }}" alt="logo">
            </td>
            <td class="header__contacts">
                <span class="link contacts__link" href="">+7 910 966 54 12</span>
                <span class="link contacts__link" href="">info@carexperts.ru</span>
            </td>
            <td class="footer__qr right">
                <img
                    src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->generate(URL::to('/'.$invoice->id))) !!} ">
            </td>
        </tr>

    </table>
</footer>

<div class="page-break"></div>


<header class="header ">
    <div class="container header__container">
        <div class="header__logo">
            <img src="{{ url('/assets/LogoHeader.fccae26c.png') }}" alt="logo">
        </div>

    </div>
</header>
<section class="components">
    <div class="container">
        <div class="h2">Технические компоненты</div>
        <table>
            <tr>
                <td class="components__item item">

                    @if ( $invoice->photosVIN)

                        <div class="item__image">
                            <img class="item__image" src="{{ $invoice->photosVIN[0] }}" alt="vin">
                        </div>
                        <div class="item__text h2">VIN</div>
                    @endif
                </td>

                @if ( $invoice->photosDocks)
                    <td class="components__item item">
                        <div class="item__image">
                            <img src="{{ $invoice->photosDocks[0] }}" alt="Информация о ТС">
                        </div>
                        <div class="item__text h2">Информация о ТС</div>
                    </td>
                @endif
            </tr>
        </table>
    </div>
</section>
<section class="components">
    <div class="container">
        <div class="h1">Покрышки</div>
        <br>
        <br>
        <div class="flex">
            <div class="tires-logo">
                @php


                    $file =  url('/assets/tires/'.str_replace (' ', '-', $invoice->tiresBrand).'.png');
                    $file_headers = @get_headers($file);
                    if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
                        $exists = false;
                    }
                    else {
                        $exists = true;
                    }
                @endphp


                @if ($exists)
                    <img src="{{ url('/assets/tires/'.str_replace (' ', '-', $invoice->tiresBrand).'.png')}}"
                         alt="{{$invoice->tiresBrand}}">
                @else
                    {{$invoice->tiresBrand}}
                @endif
            </div>
            <div class="tires-chars">
                <div class="tires-chars__title">
                    Состояние
                </div>
                <br>
                <div class="tires-chars__text">
                    <div class="tires-chars__box">

                        @if($invoice->tiresStatus == 'В норме')
                            <img src="{{url('/assets/ok.png')}}" alt="">
                        @else
                            <img src="{{url('/assets/notOk.png')}}" alt="">
                        @endif
                    </div>
                    <div>

                        {{ $invoice->tiresStatus }}
                    </div>

                </div>

                <div class="tires-line">

                </div>

                <div class="tires-chars__title">
                    год выпуска
                </div>
                <br>

                <div class="tires-chars__text">
                    <div class="tires-chars__box">

                        @if($invoice->tiresYear>=2019)
                            <img src="{{url('/assets/ok.png')}}" alt="">
                        @else
                            <img src="{{url('/assets/alert.png')}}" alt="">
                        @endif
                    </div>
                    <div>

                        {{ $invoice->tiresYear }}
                    </div>

                </div>
            </div>

            @if($invoice->photosTires)
                <div class="tires-photo">
                    <img src="{{ $invoice->photosTires[0] }}" alt="">
                </div>
            @endif
        </div>
    </div>
</section>
{{--<footer class="footer">--}}
{{--    <table class="container header__container">--}}
{{--        <tr>--}}

{{--            <td class="header__logo">--}}
{{--                <img src="{{url('/storage/assets/LogoFooter.049f563c.png') }}" alt="logo">--}}
{{--            </td>--}}
{{--            <td class="header__contacts">--}}
{{--                <span class="link contacts__link" href="">+7 910 966 54 12</span>--}}
{{--                <span class="link contacts__link" href="">info@carexperts.ru</span>--}}
{{--            </td>--}}
{{--            <td class="footer__qr right">--}}
{{--                <img--}}
{{--                    src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->generate(URL::to('/'.$invoice->id))) !!} ">--}}
{{--            </td>--}}
{{--        </tr>--}}

{{--    </table>--}}
{{--</footer>--}}

{{--<div class="page-break"></div>--}}


{{--<header class="header ">--}}
{{--    <div class="container header__container">--}}
{{--        <div class="header__logo">--}}
{{--            <img src="{{ url('/assets/LogoHeader.fccae26c.png') }}" alt="logo">--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</header>--}}
<section class="components brakes">
    <div class="container">
        <div class="h1">Повреждения</div>
        @php
        $badParts = (array_merge($invoice->badParts, $invoice->badPartsOut, $invoice->badPartsIn)) ;
        @endphp
        @if(count($badParts)>0)
            <table>
                @for($i = 0; $i<count($badParts); $i++)
                    <tr class="photo__line">
                        @isset($badParts[$i])
                            <td>
                                <img src="{{ $badParts[$i]['photo'][0] }}" alt="slide">
                                <br>
                                {{ $badParts[$i++]['text'] }}
                            </td>
                        @endif
                        @isset($badParts[$i])

                                <td>
                                    <img src="{{ $badParts[$i]['photo'][0] }}" alt="slide">
                                    <br>
                                    {{ $badParts[$i]['text'] }}
                                </td>
                        @endif

                    </tr>
                @endfor
            </table>
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
    <table class="container header__container">
        <tr>

            <td class="header__logo">
                <img src="{{url('/storage/assets/LogoFooter.049f563c.png') }}" alt="logo">
            </td>
            <td class="header__contacts">
                <span class="link contacts__link" href="">+7 910 966 54 12</span>
                <span class="link contacts__link" href="">info@carexperts.ru</span>
            </td>
            <td class="footer__qr right">
                <img
                    src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->generate(URL::to('/'.$invoice->id))) !!} ">
            </td>
        </tr>

    </table>
</footer>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>


</body>
</html>
