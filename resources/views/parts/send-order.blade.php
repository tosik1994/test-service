<div class="service-form" id="service-form">
    <div class="title">Свяжитесь с нами</div>
    <div class="desc">Мы поможем решить вашу проблему</div>

    <form method="POST" action="/send-feedback" id="block-form">
        @csrf
        @if(Auth::check())
            <input type="text" class="form_errors" name="name" id="name"
                   value="{{auth()->user()->name}}" placeholder="{{trans('content.name')}}">
            <input type="text" class="inputmask form_errors" name="phone" id="phone"
                   value="{{auth()->user()->phone}}" placeholder="{{trans('content.phone')}}">
            <input type="email" class="form_errors" name="email" id="email"
                   value="{{auth()->user()->email}}" placeholder="E-mail">
        @else
            <input type="text" class="form_errors" name="name" id="name" placeholder="{{trans('content.name')}}">
            <input type="text" class="inputmask form_errors" name="phone" id="phone" placeholder="{{trans('content.phone')}}">
            <input type="email" class="form_errors" name="email" id="email" placeholder="E-mail">
        @endif

        <input type="text" class="form_errors" name="product" id="product" placeholder="{{trans('content.product')}}">
        <textarea type="text" class="form_errors" name="description" id="comments"
                  placeholder="{{trans('content.defect_description')}}"></textarea>


        <label class="d-flex">
            <input type="checkbox" name="repair_home" id="repair_home" value="1">
            <span class="checkbox"></span>
            <span>{{trans('content.provide_address')}}</span>
        </label>
        <div class="addres_home" style="opacity: 0; height: 0; transform: scaleY(0);">
            <input type="text" class="" placeholder="{{trans('content.address')}}" name="address" id="address">
            <div class="d-flex half">
                <input type="text" placeholder="{{trans('content.house')}}" name="house_number" id="house">
                <input type="text" placeholder="{{trans('content.appart')}}" name="apartment_number" id="apartment">
            </div>
        </div>
        <button type="submit">{{trans('content.send')}}</button>

        @if($errors->isNotEmpty())
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <p>
                            <li style="color: red">{{ $error }}</li></p>
                        @endforeach
                    </ul>
                </div>
            @endif
        @elseif(session()->has('errors'))
            <div class="alert alert-danger">
                <ul>
                    <p>
                    <li style="color:red">{{ __('auth.order') }}</li>
                    </p>
                </ul>
            </div>
        @endif
    </form>
</div>
