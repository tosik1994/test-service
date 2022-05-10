<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <link rel="mask-icon" href="{{asset('/styles/img/safari-pinned-tab.svg')}}" color="#5bbad5">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <link href="{{asset('/styles/css/jquery.formstyler.css')}}" rel="stylesheet"/>
    <link href="{{asset('/styles/css/jquery.formstyler.theme.css')}}" rel="stylesheet"/>
    <script src="{{asset('/styles/js/jquery.formstyler.min.js')}}"></script>

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

<div class="main__slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide d-flex a-center j-between">
                <div class="text-holder">
                    <div class="title">
                        Lorem ipsum dolor sit
                    </div>
                    <div class="desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    </div>
                    <a href="#" class="more d-flex a-center j-center">
                        Подробнее
                    </a>
                </div>
                <div class="img-holder">
                    <img src="styles/img/kisspng-laptop-computer-icons-clip-art-5adc0db01e7.png" alt="" title="">
                </div>
            </div>
            <div class="swiper-slide d-flex a-center j-between">
                <div class="text-holder">
                    <div class="title">
                        Lorem ipsum dolor sit
                    </div>
                    <div class="desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    </div>
                    <a href="#" class="more d-flex a-center j-center">
                        Подробнее
                    </a>
                </div>
                <div class="img-holder">
                    <img src="styles/img/kisspng-laptop-computer-icons-clip-art-5adc0db01e7.png" alt="" title="">
                </div>
            </div>
            <div class="swiper-slide d-flex a-center j-between">
                <div class="text-holder">
                    <div class="title">
                        Lorem ipsum dolor sit
                    </div>
                    <div class="desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    </div>
                    <a href="#" class="more d-flex a-center j-center">
                        Подробнее
                    </a>
                </div>
                <div class="img-holder">
                    <img src="styles/img/kisspng-laptop-computer-icons-clip-art-5adc0db01e7.png" alt="" title="">
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        $(document).ready(function () {
            var swiper = new Swiper('.swiper-container', {
                pagination: {
                    el: '.swiper-pagination',
                },
            });
        });
    </script>
</div>
<div class="main__advantages padding-container d-flex">
    <div class="main__advantages-item d-flex">
        <div class="img-holder">
            <img src="styles/img/tools.png" alt="" title="">
        </div>
        <div class="text-holder">
            <div class="title">Быстрый ремонт</div>
            <div class="desc">Мы стараемся максимально быстро ремонтировать технику клиента</div>
        </div>
    </div>
    <div class="main__advantages-item d-flex">
        <div class="img-holder">
            <img src="styles/img/hand.png" alt="" title="">
        </div>
        <div class="text-holder">
            <div class="title">Нет работы Нет оплаты</div>
            <div class="desc">Вы оплачиваете только за качественно выполненную работу нашего мастера</div>
        </div>
    </div>
    <div class="main__advantages-item d-flex">
        <div class="img-holder">
            <img src="styles/img/winner.png" alt="" title="">
        </div>
        <div class="text-holder">
            <div class="title">30 дней гарантии</div>
            <div class="desc">Только оригинальные запчасти для Ваших телефонов, гарантия на весь ремонт</div>
        </div>
    </div>
    <div class="main__advantages-item d-flex">
        <div class="img-holder">
            <img src="styles/img/24-hours%20(1).png" alt="" title="">
        </div>
        <div class="text-holder">
            <div class="title">Бесплатная консультация</div>
            <div class="desc">Мы всегда сможем проконсультировать Вас по телефону, либо у нас в офисе</div>
        </div>
    </div>
</div>
<div class="main__about padding-container">
    <div class="text-center title">
        Что мы занимаемся?
    </div>
    <div class="desc">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt .
    </div>
    <div class="main__about-list">
        <div class="main__about-item">
            <div class="img-holder">
                <img src="styles/img/house@2x.png" alt="" title="">
            </div>
            <div class="text-holder">
                <div class="title">
                    Lorem ipsum dolor
                </div>
                <div class="desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </div>
            </div>
        </div>
        <div class="main__about-item">
            <div class="img-holder">
                <img src="styles/img/house@2x.png" alt="" title="">
            </div>
            <div class="text-holder">
                <div class="title">
                    Lorem ipsum dolor
                </div>
                <div class="desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </div>
            </div>
        </div>
        <div class="main__about-item">
            <div class="img-holder">
                <img src="styles/img/house@2x.png" alt="" title="">
            </div>
            <div class="text-holder">
                <div class="title">
                    Lorem ipsum dolor
                </div>
                <div class="desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </div>
            </div>
        </div>
        <div class="main__about-item">
            <div class="img-holder">
                <img src="styles/img/house@2x.png" alt="" title="">
            </div>
            <div class="text-holder">
                <div class="title">
                    Lorem ipsum dolor
                </div>
                <div class="desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer padding-container">
    <div class="footer__box d-flex j-between">
        <div class="footer__logo">
            <img src="styles/img/ЭлектроДом%201.1.png" alt="" title="">
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
                <li><a href="https://imagineering.studio/"><img src="styles/img/image%204.4.png" alt="" title=""></a></li>
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
<div class="modal login">
    <div class="modal-body">
        <div class="modal-title">
            <a class="tab-link" href="#" data-attr="enter">Вход</a>
            <a class="tab-link" href="#" data-attr="registration">Регистрация</a>
            <div class="modal-close">
                <a href="#"></a>
            </div>
        </div>
        <div>
            <div class="tabs-content enter">
                <form>
                    <label>
                        <span>Email</span>
                        <input type="email" required>
                    </label>
                    <label>
                        <span>Пароль</span>
                        <input type="password" required>
                    </label>
                    <button type="submit">Вход</button>
                </form>
                <div class="enter-reg text-center">
                    <div class="text-center">или</div>
                    <a href="#" class="tab-link" data-attr="registration"><u>зарегестрироваться</u></a>
                </div>


            </div>
            <div class="tabs-content registration">
                <form>
                    <label>
                        <span>Имя</span>
                        <input type="text" required>
                    </label>
                    <label>
                        <span>Фамилия</span>
                        <input type="text" required>
                    </label>
                    <label>
                        <span>Телефон</span>
                        <input type="text" class="inputmask" required>
                    </label>
                    <label>
                        <span>Email</span>
                        <input type="email" required>
                    </label>
                    <button type="submit">Продолжить</button>
                </form>
                <div class="enter-reg text-center">
                    <div class="text-center">или</div>
                    <a href="#" class="tab-link" data-attr="enter"><u>войти</u></a>
                </div>
            </div>
        </div>
    </div>

</div>
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
<script type="text/javascript" src="{{asset('styles/js/lightcase.js')}}"></script>

<script type="text/javascript" src="{{asset('styles/js/script.js')}}"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('styles/css/normalize.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('styles/css/mystyle.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('styles/css/lightcase.css')}}"/>
</html>
