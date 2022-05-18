<div class="personal-inner">
    <h1>{{auth()->user()->name}}, добро пожаловать в личный кабинет!</h1>
    <div class="personal__data">
        <div class="title text-center">
            Ваши персональные данные
        </div>
        <div class="">
            <div class="d-flex j-between a-center personal__data-item" data-attr="Имя">
                {{auth()->user()->name}}
            </div>
            <div class="d-flex j-between a-center personal__data-item" data-attr="Фамилия">
                {{auth()->user()->last_name}}
            </div>
            <div class="d-flex j-between a-center personal__data-item" data-attr="Email">
                {{auth()->user()->email}}
            </div>
            <div class="d-flex j-between a-center personal__data-item" data-attr="Телефон">
                {{auth()->user()->phone}}
            </div>
            <a href="/personal-info-change">Редактировать</a>
        </div>
    </div>
    @include('parts.personal-nav-bar')
</div>
