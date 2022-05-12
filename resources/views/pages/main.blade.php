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

@include('parts.style')
@include('parts.header')

<div class="main__slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach($services as $service)
                @if($service->is_banner)

                    <div class="swiper-slide d-flex a-center j-between">
                        <div class="text-holder">
                            <div class="title">
                                {{$service->title}}
                            </div>
                            <div class="desc">
                                {{$service->description}}
                            </div>
                            <a href="{{route('service.show', ['id' => $service->id])}}" class="more d-flex a-center j-center">
                                Подробнее
                            </a>
                        </div>
                        <div class="img-holder">
                            <img src="{{$service->img}}" alt="" title="">
                        </div>
                    </div>
                @endif
            @endforeach
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
    @foreach($advantages as $advantage)
        <div class="main__advantages-item d-flex">
            <div class="img-holder">
                <img src="{{$advantage->img}}" alt="" title="">
            </div>
            <div class="text-holder">
                <div class="title">{{$advantage->title}}</div>
                <div class="desc">{{$advantage->description}}</div>
            </div>
        </div>
    @endforeach
</div>
<div class="main__about padding-container">
    <div class="text-center title">
        Сервисный центр ЭлектроДом
    </div>

    <div class="main__about-list">
        @foreach($what_we_dos as $what_we_do)
            <div class="main__about-item">
                <div class="img-holder">
                    <img src="{{$what_we_do->img}}" alt="" title="">
                </div>
                <div class="text-holder">
                    <div class="title">
                        {{$what_we_do->title}}
                    </div>
                    <div class="desc">
                        {{$what_we_do->description}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('parts.footer')

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
