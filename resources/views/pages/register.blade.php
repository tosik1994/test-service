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

<div class="login-body">
    <div class="login-title">
        <lable class="tab-link">{{trans('content.registration')}}</lable>
    </div>
    <div>
        <div class="tabs-content registration">
            <form method="POST" action="/register">
                @csrf
                <label>
                    <span>{{trans('content.name')}}</span>
                    <input type="text" name="name" value="{{old('name')}}">
                </label>
                <label>
                    <span>{{trans('content.last_name')}}</span>
                    <input type="text" name="last_name" value="{{old('last_name')}}">
                </label>
                <label>
                    <span>{{trans('content.phone')}}</span>
                    <input type="text" name="phone" class="inputmask" value="{{old('phone')}}">
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email" value="{{old('email')}}">
                </label>
                <label>
                    <span>{{trans('content.password')}}</span>
                    <input type="password" name="password">
                </label>
                <label>
                    <span>{{trans('content.password_confirmation')}}</span>
                    <input type="password" name="password_confirmation">
                </label>
                <button type="submit">{{trans('content.continue')}}</button>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <p><li style="color: red">{{ $error }}</li></p>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </form>
            <div class="enter-reg text-center">
                <div class="text-center">{{trans('content.or')}}</div>
                <a href="/login" class="tab-link"><u>{{trans('content.log_on')}}</u></a>
            </div>
        </div>
    </div>
</div>


@include('parts.footer')
</body>

<script type="text/javascript" src="{{asset('styles/js/lightcase.js')}}"></script>

<script type="text/javascript" src="{{asset('styles/js/script.js')}}"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('styles/css/normalize.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('styles/css/mystyle.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('styles/css/lightcase.css')}}"/>
</html>
