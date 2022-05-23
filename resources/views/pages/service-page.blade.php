<!doctype html>
<html lang="{{app()->getLocale()}}">
@include('parts.head')
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


<div class="service padding-container">
    <div class="breadcrumbs">
        <ul>
            <li><a href="/">{{trans('content.main')}}</a></li>
            @if(app()->getLocale() === "uk")
                <li><a href="">{{$service->title_ua}}</a></li>
            @elseif(app()->getLocale() === "ru")
                <li><a href="">{{$service->title_ru}}</a></li>
            @endif
        </ul>
    </div>

    <div class="service-inner d-flex">
        <div class="d-flex">
            <div class="service-text">
                @if(app()->getLocale() === "uk")
                    {!!$service->content_ua!!}
                @elseif(app()->getLocale() === "ru")
                    {!!$service->content_ru!!}
                @endif
            </div>
            <div class="img-holder">
                <img src="{{asset($service->img_for_content)}}" title="" alt="">
            </div>
        </div>
        @include('parts.send-order')

    </div>
</div>

@include('parts.footer')

</body>

<script type="text/javascript" src="{{asset('styles/js/lightcase.js')}}"></script>

<script type="text/javascript" src="{{asset('styles/js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('styles/js/my_script.js')}}"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('styles/css/normalize.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('styles/css/mystyle.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('styles/css/lightcase.css')}}"/>
</html>
