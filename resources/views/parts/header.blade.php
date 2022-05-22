<header class="header">
    <div class="header__upperline d-flex flex-end a-center padding-container">
        <div class="header__logo">
            <a href="/" class="md"><img src="{{asset('styles/img/ЭлектроДом%201.png')}}" title="" alt=""></a>
            <a href="/" class="xs dn">
                <ЭД></ЭД>
            </a>
        </div>
        <div class="header__links d-flex a-center">
            <a href="/contacts">{{trans('content.contacts')}}</a>
            <a href="https://rozetka.com.ua">{{trans('content.shop')}}</a>
            @if(app()->getLocale() === "uk")
                <a style="color: brown" href="{{route('set-lang', ['lang'=>'uk'])}}">UA</a>
                <a href="{{route('set-lang', ['lang'=>'ru'])}}">RU</a>
            @elseif(app()->getLocale() === "ru")
                <a href="{{route('set-lang', ['lang'=>'uk'])}}">UA</a>
                <a style="color: brown" href="{{route('set-lang', ['lang'=>'ru'])}}">RU</a>
            @endif
            <a href=""></a>
        </div>

        <div class="menu dn">
            <div class="sandwich">
                <span class="line line-1"></span>
                <span class="line line-2"></span>
                <span class="line line-3"></span>
            </div>
        </div>
        <div class="header__login">
            @if(auth()->check())
                <a href="/personal-info" class="d-flex j-center a-center">
                    <img src="{{asset('styles/img/user.png')}}" alt="" title=""></a>
            @else
                <a href="/login" class="d-flex j-center a-center">
                    <img src="{{asset('styles/img/user.png')}}"  alt="" title=""></a>
            @endif
        </div>
        @if(auth()->check())
            <div class="header__login">
                <a href="/logout" class="d-flex j-center a-center">
                    <img src="{{asset('styles/img/logout.png')}}" class="logout" alt="" title=""></a>
                @endif
            </div>
    </div>
    <div class="header__bottom-line">
        <div class="header__links-xs d-flex a-center dn">
            <a href="/contacts">{{trans('content.contacts')}}</a>
            <a href="https://rozetka.com.ua">{{trans('content.shop')}}</a>
        </div>
        <ul class="d-flex j-between main-nav">
            @foreach($type_services as $type_service)
                <li>
                    @if(app()->getLocale()==="uk")
                        <a href="#" class="dropdown">{{$type_service->name_ua}}</a>
                        <ul>
                            @foreach($services as $service)
                                @if ($type_service->id == $service->type_service_id)
                                    <li>
                                        <a href="{{route('service.show', ['id'=>$service->id])}}">{{$service->title_ua}}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @elseif(app()->getLocale()==="ru")
                        <a href="#" class="dropdown">{{$type_service->name_ru}}</a>
                        <ul>
                            @foreach($services as $service)
                                @if ($type_service->id == $service->type_service_id)
                                    <li>
                                        <a href="{{route('service.show', ['id'=>$service->id])}}">{{$service->title_ru}}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @endif

                </li>
            @endforeach
        </ul>
    </div>
</header>
