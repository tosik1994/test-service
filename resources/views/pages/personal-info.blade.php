<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <!--<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>-->
    <!--<link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152">-->
    <!--<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">-->
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">

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
    <meta name="twitter:image" content="img/logo.png">

    <meta property="og:url" content="/">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="">
    <meta property="og:image" content="img/logo.png">
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
<header class="header">
    <div class="header__upperline d-flex flex-end a-center padding-container">
        <div class="header__logo">
            <a href="/index.html" class="md"><img src="img/ЭлектроДом%201.png" title="" alt=""></a>
            <a href="/index.html" class="xs dn">
                <ЭД></ЭД>
            </a>
        </div>
        <div class="header__links d-flex a-center">
            <a href="#">Контакты</a>
            <a href="#">магазин</a>
        </div>
        <div class="header__language">
            <a href="#" class="dropdown d-flex a-center">
                <span>RU</span>
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down"
                     class="svg-inline--fa fa-caret-down fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 320 512">
                    <path fill="currentColor"
                          d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
                </svg>
            </a>
        </div>
        <div class="menu dn">
            <div class="sandwich">
                <span class="line line-1"></span>
                <span class="line line-2"></span>
                <span class="line line-3"></span>
            </div>
        </div>
        <div class="header__login">
            <a href="#" class="d-flex j-center a-center"> <img src="img/user.png" alt="" title=""></a>
        </div>
    </div>
    <div class="header__bottom-line">
        <div class="header__links-xs d-flex a-center dn">
            <a href="#">Контакты</a>
            <a href="#">магазин</a>
        </div>
        <ul class="d-flex j-between main-nav">
            <li>
                <a href="#" class="dropdown">услуги ремонта</a>
                <ul>
                    <li>
                        <a href="#">Ремонт смартфонов</a>
                    </li>
                    <li>
                        <a href="#">Ремонт ноутбуков</a>
                    </li>
                    <li>
                        <a href="#">Ремонт компьютеров</a>
                    </li>
                    <li>
                        <a href="#">Ремонт телевизоров и монитовор</a>
                    </li>
                    <li>
                        <a href="#">Ремонт бытовой техники</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown">Услуги монтажа</a>
                <ul>
                    <li>
                        <a href="#">Ремонт смартфонов</a>
                    </li>
                    <li>
                        <a href="#">Ремонт ноутбуков</a>
                    </li>

                    <li>
                        <a href="#">Ремонт телевизоров и монитовор</a>
                    </li>
                    <li>
                        <a href="#">Ремонт бытовой техники</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown">Услуги настройки</a>
                <ul>
                    <li>
                        <a href="#">Ремонт смартфонов</a>
                    </li>

                    <li>
                        <a href="#">Ремонт телевизоров и монитовор</a>
                    </li>
                    <li>
                        <a href="#">Ремонт бытовой техники</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown">Заказ деталей</a>
                <ul>
                    <li>
                        <a href="#">Ремонт смартфонов</a>
                    </li>
                    <li>
                        <a href="#">Ремонт ноутбуков</a>
                    </li>
                    <li>
                        <a href="#">Ремонт компьютеров</a>
                    </li>
                    <li>
                        <a href="#">Ремонт телевизоров и монитовор</a>
                    </li>
                    <li>
                        <a href="#">Ремонт бытовой техники</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</header>
<div class=" personal padding-container">
    <div class="breadcrumbs">
        <ul>
            <li><a href="main.html">Главная</a></li>
            <li><a href="#">Личный кабинет</a></li>
            <li><a href="#">Персональная информация</a></li>
        </ul>
    </div>
    <div class="dn personal-inner">
        <h1>Дмитрий, добро пожаловать в личный кабинет!</h1>
        <div class="personal__data">
            <div class="title text-center">
                Ваши персональные данные
            </div>
            <div class="">
                <div class="d-flex j-between a-center personal__data-item" data-attr="имя">
                    Дмитрий
                </div>
                <div class="d-flex j-between a-center personal__data-item" data-attr="Фамилия">
                    Иванов
                </div>
                <div class="d-flex j-between a-center personal__data-item" data-attr="Email">
                    dmitriyr.123@gmail.com
                </div>
                <div class="d-flex j-between a-center personal__data-item" data-attr="Телефон">
                    +38(098) 589-54-56
                </div>
                <a href="#">Редактировать</a>
            </div>
        </div>
        <div class="personal__nav">
            <a href="#" class="d-flex a-center "><img src="img/user.png" alt=""
                                                      title=""><span>Персональная информация</span></a>
            <a href="#" class="d-flex a-center "><img src="img/shopping-cart%20(1).png" alt="" title=""><span>История заказов</span></a>
        </div>
    </div>
    <div class="dn personal-inner">
        <h1>Дмитрий, добро пожаловать в личный кабинет!</h1>
        <div class="personal__data form">
            <div class="title">
                Ваши персональные данные
            </div>
            <div class="d-flex warning">
                <img class="" src="img/warning.png" alt="" title="">
                <span>Заполните ваши данные, что в дальнейшем вам поможет в оформлении заказов</span>
            </div>
            <form class="">
                <input type="text" placeholder="Имя*" required>
                <input type="text" placeholder="Фамилия*" required>
                <input type="email" placeholder="Email*" required>
                <input type="text" placeholder="Телефон*" required class="inputmask">
                <button type="submit">Сохранить</button>
            </form>

        </div>
        <div class="personal__nav">
            <a href="#" class="d-flex a-center "><img src="img/user.png" alt=""
                                                      title=""><span>Персональная информация</span></a>
            <a href="#" class="d-flex a-center "><img src="img/shopping-cart%20(1).png" alt="" title=""><span>История заказов</span></a>
        </div>
    </div>
    <div class="personal-inner">
        <h1>История заказов</h1>
        <div class="personal__list-box">
            <div class="caption d-flex">
                <div class="name">Изделия</div>
                <div class="serial">Серийный номер</div>
                <div class="defects">Описание деффектов</div>
                <div class="status">Статус заказа</div>
            </div>
            <div class="personal__list">
                <div class="personal__item d-flex">
                    <div class="name" data-attr="Изделия"><span>Lorem ipsum dolor sit amet</span></div>
                    <div class="serial" data-attr="Серийный номер"><span>456783</span></div>
                    <div class="defects" data-attr="Описание деффектов"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span> </div>
                    <div class="status" data-attr="Статус заказа"><span>Оформлен</span></div>
                </div>
                <div class="personal__item d-flex">
                    <div class="name" data-attr="Изделия"><span>Lorem ipsum dolor sit amet</span></div>
                    <div class="serial" data-attr="Серийный номер"><span>456783</span></div>
                    <div class="defects" data-attr="Описание деффектов"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span> </div>
                    <div class="status" data-attr="Статус заказа"><span>Оформлен</span></div>
                </div>

                <div class="personal__item d-flex">
                    <div class="name" data-attr="Изделия"><span>Lorem ipsum dolor sit amet</span></div>
                    <div class="serial" data-attr="Серийный номер"><span>456783</span></div>
                    <div class="defects" data-attr="Описание деффектов"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span> </div>
                    <div class="status" data-attr="Статус заказа"><span>Оформлен</span></div>
                </div>


            </div>
        </div>
        <div class="personal__nav">
            <a href="#" class="d-flex a-center "><img src="img/user.png" alt=""
                                                      title=""><span>Персональная информация</span></a>
            <a href="#" class="d-flex a-center "><img src="img/shopping-cart%20(1).png" alt="" title=""><span>История заказов</span></a>
        </div>
    </div>
</div>
<div class="service padding-container dn">
    <div class="breadcrumbs">
        <ul>
            <li><a href="main.html">Главная</a></li>
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
                <img src="img/image.png" title="" alt="">
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
<footer class="footer padding-container">
    <div class="footer__box d-flex j-between">
        <div class="footer__logo">
            <img src="img/ЭлектроДом%201.1.png" alt="" title="">
            <div class="logo-text text-center">© Электродом 2019</div>
        </div>
        <div class="">
            <div class="title">
                Контакты
            </div>
            <ul>
                <li><a href="#">Phone: (057) 719-69-30</a></li>
                <li><a href="#">Phone: (050) 424-77-52</a></li>
                <li><a href="#">Phone: (068) 761-86-63</a></li>
            </ul>
        </div>
        <div class="">
            <div class="title">
                Где мы находимся
            </div>
            <ul>
                <li><span>г. Харьков, проспект Гагарина, 20</span></li>
                <li><span>c 9.00 до 20.00 без выходных</span></li>
                <li><a href="https://imagineering.studio/"><img src="img/image%204.4.png" alt="" title=""></a></li>
            </ul>
        </div>
        <div class="">
            <div class="title">
                Где нас найти
            </div>
            <ul>
                <li><a href="#">e-mail: shop@electrodim.com</a></li>
                <li class="d-flex social">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">

                            <g id="Mask_Group_4" data-name="Mask Group 4" transform="translate(-814 -462)">
                                <g id="facebook-logo_1_" data-name="facebook-logo (1)" transform="translate(814 462)">
                                    <path id="Path_4"
                                          d="M11.249 0H9.3a3.416 3.416 0 0 0-3.6 3.692v1.7H3.751a.306.306 0 0 0-.306.306v2.468a.306.306 0 0 0 .306.306h1.956v6.223a.306.306 0 0 0 .306.305h2.551a.306.306 0 0 0 .306-.306V8.471h2.287a.306.306 0 0 0 .306-.306V5.7a.306.306 0 0 0-.306-.306H8.87V3.951c0-.693.165-1.046 1.069-1.046h1.31a.306.306 0 0 0 .306-.306V.309A.306.306 0 0 0 11.249 0z"
                                          data-name="Path 4"></path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">

                            <g id="Mask_Group_3" data-name="Mask Group 3" transform="translate(-916 -718)">
                                <g id="instagram-logo" transform="translate(916 718)">
                                    <path id="Path_1"
                                          d="M10.86 0H4.139A4.144 4.144 0 0 0 0 4.139v6.721A4.144 4.144 0 0 0 4.139 15h6.721A4.144 4.144 0 0 0 15 10.861V4.139A4.144 4.144 0 0 0 10.86 0zm2.809 10.861a2.812 2.812 0 0 1-2.809 2.809H4.139a2.812 2.812 0 0 1-2.808-2.809V4.139a2.812 2.812 0 0 1 2.808-2.808h6.721a2.812 2.812 0 0 1 2.809 2.809v6.721z"
                                          data-name="Path 1"></path>
                                    <path id="Path_2"
                                          d="M7.5 3.635A3.865 3.865 0 1 0 11.365 7.5 3.869 3.869 0 0 0 7.5 3.635zm0 6.4A2.534 2.534 0 1 1 10.034 7.5 2.537 2.537 0 0 1 7.5 10.034z"
                                          data-name="Path 2"></path>
                                    <path id="Path_3" d="M11.527 2.507a.975.975 0 1 0 .69.286.98.98 0 0 0-.69-.286z"
                                          data-name="Path 3"></path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none" viewBox="0 0 21 21">
                            <path fill="#fff"
                                  d="M10.5 0C4.725 0 0 4.725 0 10.5c0 4.463 2.756 8.269 6.694 9.712-.131-.787-.131-2.1 0-3.018.131-.788 1.181-5.25 1.181-5.25s-.263-.525-.263-1.444c0-1.444.92-2.625 1.97-2.625.918 0 1.312.656 1.312 1.444 0 .918-.525 2.231-.919 3.543-.262 1.05.525 1.838 1.575 1.838 1.837 0 3.281-1.969 3.281-4.856 0-2.494-1.837-4.331-4.331-4.331-3.019 0-4.725 2.23-4.725 4.593 0 .919.394 1.838.787 2.363v.525c-.13.393-.262 1.05-.262 1.181s-.131.262-.394.131c-1.312-.656-2.1-2.493-2.1-4.068 0-3.282 2.363-6.3 6.956-6.3 3.675 0 6.432 2.624 6.432 6.037 0 3.675-2.231 6.563-5.513 6.563-1.05 0-2.1-.526-2.362-1.182 0 0-.525 1.969-.657 2.494-.262.919-.918 2.1-1.312 2.756 1.05.263 2.1.394 3.15.394C16.275 21 21 16.275 21 10.5S16.275 0 10.5 0z"
                                  opacity=".5"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
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
<script type="text/javascript" src="js/lightcase.js"></script>

<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
<link rel="stylesheet" type="text/css" href="css/mystyle.min.css"/>
<link rel="stylesheet" type="text/css" href="css/lightcase.css"/>

<script>
    $(document).ready(function () {
        $('.inputmask').inputmask({"mask": "+38(099) 999-9999"});
    });
</script>
</html>
