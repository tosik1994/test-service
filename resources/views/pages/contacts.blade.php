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
@include('parts.style')
@include('parts.header')

<div class="contacts padding-container">
    <div class="breadcrumbs">
        <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
    </div>
    <div class="contacts__inner d-flex j-between">
        <div class="contacts__box ">
            <div class="contacts__block first">
                <div class="title">
                    Контакты
                </div>
                <ul>
                    @foreach($phones as $phone)
                        <li><a href="tel:{{$phone->phone}}"> {{$phone->phoneType->short_name}}
                                ({{$phone->operator->name}}): {{$phone->phone}}</a>
                    @endforeach
                    @foreach($emails as $email)
                        <li><a href="mailto:{{$email->email}}">e-mail: {{$email->email}}</a></li>
                    @endforeach

                </ul>
            </div>
            <div class="contacts__block">
                <div class="title">
                    Точки ремонта
                </div>
                <ul>
                    @foreach($positions as $position)
                        <li><a href="" class="d-flex a-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" fill="none"
                                     viewBox="0 0 23 22">
                                    <g fill="#000" clip-path="url(#a)">
                                        <path
                                            d="M11.115 9.533c1.43 0 2.593-1.151 2.593-2.566 0-1.415-1.163-2.567-2.593-2.567S8.52 5.552 8.52 6.967c0 1.415 1.164 2.566 2.594 2.566zm0-4.4c1.021 0 1.852.823 1.852 1.834 0 1.01-.83 1.833-1.852 1.833a1.845 1.845 0 0 1-1.853-1.833c0-1.011.831-1.834 1.853-1.834z"/>
                                        <path
                                            d="M11.049 20.078l5.684-8.125c2.131-2.812 1.823-7.436-.66-9.893A7.095 7.095 0 0 0 11.049 0a7.096 7.096 0 0 0-5.024 2.06c-2.483 2.457-2.791 7.08-.668 9.882l5.692 8.136zm-4.5-17.5a6.357 6.357 0 0 1 4.5-1.845c1.7 0 3.298.656 4.5 1.845 2.241 2.218 2.517 6.394.583 8.946l-5.083 7.265-5.09-7.276c-1.927-2.541-1.65-6.717.59-8.935z"/>
                                        <path
                                            d="M15.603 15.77a.368.368 0 0 0-.41.32.367.367 0 0 0 .324.407c3.896.454 5.97 1.678 5.97 2.386 0 .995-3.946 2.384-10.373 2.384S.741 19.878.741 18.883c0-.708 2.075-1.932 5.971-2.386a.368.368 0 0 0 .324-.407.368.368 0 0 0-.41-.32C2.723 16.223 0 17.503 0 18.882 0 20.433 3.818 22 11.114 22c7.297 0 11.115-1.568 11.115-3.117 0-1.379-2.725-2.66-6.626-3.114z"/>
                                    </g>
                                    <defs>
                                        <clipPath id="a">
                                            <path fill="#fff" d="M0 0h22.229v22H0z"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>{{$position->city}}, {{$position->street}}, {{$position->address}}</span></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="contacts__map">
            <!--https://snazzymaps.com/style/151/ultra-light-with-labels это ссылка на карту -->

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d41040.403348174696!2d36.229344395551!3d49.99213682359656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1560850248314!5m2!1sru!2sua"
                frameborder="0" style="border:0" allowfullscreen></iframe>
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
