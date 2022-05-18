<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <!--<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>-->
    <!--<link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152">-->
    <!--<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">-->
    <link rel="mask-icon" href="styles/img/safari-pinned-tab.svg" color="#5bbad5">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <!-- Meta -->
    <title>ElectroDom</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="styles/img/logo.png">

    <meta property="og:url" content="/">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="">
    <meta property="og:image" content="styles/img/logo.png">
</head>
<body>
<div class="preloader">
    <div class="laoder-frame">
        <svg class="svg-loader" version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
  <path opacity="0.2" fill="#000" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946
    s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634
    c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"></path>
            <path fill="#000" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0
    C22.32,8.481,24.301,9.057,26.013,10.047z">

            </path>
  </svg>
    </div>
</div>
<script>
    $('html').css({"overflow-y": "hidden"});
    $(window).on('load', function () {
        setTimeout(function () {
            $('.preloader').fadeOut('slow', function () {
            });
            $('html').css({"overflow-y": "scroll"});
        }, 500);
    });


</script>
<style>
    .preloader {
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background-color: #fff;
        z-index: 99999;
    }

    .laoder-frame {
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        height: 100vh;
    }

    .svg-loader {
        width: 110px;
        -webkit-animation: svg-loader 1s linear infinite;
        animation: svg-loader 1s linear infinite;
    }

    @-webkit-keyframes svg-loader {
        from {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    @keyframes svg-loader {
        from {
            -ms-transform: rotate(0);
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }
        to {
            -ms-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }
</style>
@include('parts.header')

<div class="personal padding-container">
    <div class="breadcrumbs">
        <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="/personal-info">Личный кабинет</a></li>
            @if(url()->current() === route('personal-info'))
                <li><a href="">Персональная информация</a></li>
            @elseif(url()->current() === route('personal-info-change'))
                <li><a href="">Изменение персональной информации</a></li>
            @elseif(url()->current() === route('orders'))
                <li><a href="">Заказы</a></li>
            @endif
        </ul>
    </div>


    @if(url()->current() === route('personal-info'))
        @include('parts.personal-info')
    @elseif(url()->current() === route('personal-info-change'))
        @include('parts.personal-info-change')
    @elseif(url()->current() === route('orders'))
        @include('parts.orders')
    @endif

</div>
<div class="service padding-container dn">
    <div class="breadcrumbs">
        <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">Личный кабинет</a></li>
            <li><a href="#">Персональная информация</a></li>
        </ul>
    </div>
    <div class="service-inner d-flex">
        <div class="d-flex">
            <div class="service-text">
                <h1>Ремонт смартфонов</h1>
                <div class="service-description">
                    <p>У Вас неполадки с Вашим мобильным другом? Вы чувствуете тревогу, беспокойство и нервозность,
                        когда смартфон/телефон подвисает? Не стоит так переживать!</p>
                    <p>Если возникла потребность реанимировать Ваш гаджет, который до этого ни разу не подводил, и
                        подыскиваете качественный и доступный ремонт смартфонов, Харьков рекомендует обратить внимание
                        на «ЭлектроДом», где помогут вернуть в указанный срок функциональность телефона/смартфона
                        следующих мировых вендоров: iPhone, Acer, Asus, HTC, Lenovo, LG, Nokia, Samsung, Sony. Также
                        высококвалифицированные инженеры сервисного центра оказывают сервисный гарантийный ремонт
                        смартфонов Xiaomi, Huawei, Impression, Prestigio.</p>
                </div>
            </div>
            <div class="img-holder">
                <img src="styles/img/image.png" title="" alt="">
            </div>
        </div>

        <div class="service-form">
            <div class="title">Свяжитесь с нами</div>
            <div class="desc">Мы поможем решить вашу проблему</div>
            <form>
                <input type="text" class="" placeholder="Имя">
                <input type="text" class="" placeholder="Телефон">
                <input type="text" class="" placeholder="Email">
                <input type="text" class="" placeholder="Изделие">
                <input type="text" class="" placeholder="Серийный номер">
                <input type="text" class="" placeholder="Описание дефекта">
                <label class="d-flex">
                    <input type="checkbox">
                    <span class="checkbox"></span>
                    <span>Ремонт на дому </span>
                </label>
                <input type="text" class="" placeholder="Адрес">
                <div class="d-flex half">
                    <input type="text" placeholder="Дом">
                    <input type="text" placeholder="Кв.">
                </div>
                <button>Отправить</button>
            </form>
        </div>

    </div>
</div>
@include('parts.footer')
</body>

<div style="display: none;">
    <div itemscope itemtype="http://schema.org/Organization">
        <span itemprop="name">Organization</span>
        Contacts:
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            Address:
            <span itemprop="streetAddress"></span>
            <span itemprop="postalCode"></span>
            <span itemprop="addressLocality"></span>,
        </div>
        tel:<span itemprop="telephone"></span>,
        fax:<span itemprop="faxNumber"></span>,
        Email: <span itemprop="email"></span>
    </div>


</div>
<script type="text/javascript" src="styles/js/lightcase.js"></script>

<script type="text/javascript" src="styles/js/script.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles/css/normalize.css"/>
<link rel="stylesheet" type="text/css" href="styles/css/mystyle.min.css"/>
<link rel="stylesheet" type="text/css" href="styles/css/lightcase.css"/>

<script>
    $(document).ready(function () {
        $('.inputmask').inputmask({"mask": "+38(099) 999-9999"});
    });
</script>
</html>
