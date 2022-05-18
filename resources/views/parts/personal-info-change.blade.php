<div class="personal-inner">
    <h1>{{auth()->user()->name}}, добро пожаловать в личный кабинет!</h1>
    <div class="personal__data form">
        <div class="title">
            Ваши персональные данные
        </div>
        <div class="d-flex warning">
            <img class="" src="styles/img/warning.png" alt="" title="">
            <span>Заполните ваши данные, что в дальнейшем вам поможет в оформлении заказов</span>
        </div>
        <form class="">
            <input type="text" placeholder="Имя*" value="{{auth()->user()->name}}">
            <input type="text" placeholder="Фамилия*" value="{{auth()->user()->last_name}}">
            <input type="email" placeholder="Email*" value="{{auth()->user()->email}}">
            <input type="text" placeholder="Телефон*" value="{{auth()->user()->phone}}" class="inputmask">
            <button type="submit">Сохранить</button>
        </form>

    </div>
    @include('parts.personal-nav-bar')
</div>
