<div class="personal-inner">
    <h1>{{auth()->user()->name}}, {{trans('content.welcome_to_your_personal_account')}}!</h1>
    <div class="personal__data">
        <div class="title text-center">
            {{trans('content.your_personal_data')}}
        </div>
        <div class="">
            <div class="d-flex j-between a-center personal__data-item" data-attr="{{trans('content.name')}}">
                {{auth()->user()->name}}
            </div>
            <div class="d-flex j-between a-center personal__data-item" data-attr="{{trans('content.last_name')}}">
                {{auth()->user()->last_name}}
            </div>
            <div class="d-flex j-between a-center personal__data-item" data-attr="Email">
                {{auth()->user()->email}}
            </div>
            <div class="d-flex j-between a-center personal__data-item" data-attr="{{trans('content.phone')}}">
                {{auth()->user()->phone}}
            </div>
            <a href="/personal-info-change">{{trans('content.edit')}}</a>
        </div>
    </div>
    @include('parts.personal-nav-bar')
</div>
