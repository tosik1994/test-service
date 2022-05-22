<div class="personal-inner">
    <h1>{{auth()->user()->name}}, {{trans('content.welcome_to_your_personal_account')}}!</h1>
    <div class="personal__data form">
        <div class="title">
            {{trans('content.your_personal_data')}}
        </div>
        <div class="d-flex warning">
            <img class="" src="styles/img/warning.png" alt="" title="">
            <span>{{trans('content.fill_out_your_information_to_help_you_place_orders_in_the_future')}}</span>
        </div>
        <form method="POST" action="/personal-info-update" class="">
            @method('PUT')
            @csrf
            <input name="name" type="text" placeholder="{{trans('content.name')}}*"
                   value="{{auth()->user()->name}}">
            <input name="last_name" type="text" placeholder="{{trans('content.last_name')}}*"
                   value="{{auth()->user()->last_name}}">
            <input name="email" type="email" placeholder="Email*"
                   value="{{auth()->user()->email}}">
            <input name="phone" type="text" placeholder="{{trans('content.phone')}}*"
                   value="{{auth()->user()->phone}}" class="inputmask">
            <button type="submit">{{trans('content.save')}}</button>
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
    </div>
    @include('parts.personal-nav-bar')
</div>
