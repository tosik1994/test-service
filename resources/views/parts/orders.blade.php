<div class="personal-inner">
    <h1>История заказов</h1>
    <div class="personal__list-box">
        <div class="caption d-flex">
            <div class="name">Изделия</div>
            <div class="serial">Серийный номер</div>
            <div class="defects">Описание деффектов</div>
            <div class="status">Статус заказа</div>
        </div>
        <div class="personal__list">
            @foreach(Auth::user()->orders as $order)
                <div class="personal__item d-flex">
                    <div class="name" data-attr="Изделия"><span>{{$order->product}}</span></div>
                    <div class="serial" data-attr="Серийный номер"><span></span></div>
                    <div class="defects" data-attr="Описание деффектов"><span>{{$order->description}}</span>
                    </div>
                    <div class="status" data-attr="Статус заказа"><span></span></div>
                </div>
            @endforeach
        </div>
    </div>
    @include('parts.personal-nav-bar')
</div>
