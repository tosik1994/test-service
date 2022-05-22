<div class="personal-inner">
    <h1>{{trans('content.orders_history')}}</h1>
    <div class="personal__list-box">
        <div class="caption d-flex">
            <div class="name">{{trans('content.product')}}</div>
            <div class="serial">{{trans('content.serial_number')}}</div>
            <div class="defects">{{trans('content.defect_description')}}</div>
            <div class="status">{{trans('content.order_status')}}</div>
        </div>
        <div class="personal__list">
            @foreach(Auth::user()->orders as $order)
                <div class="personal__item d-flex">
                    <div class="name" data-attr="{{trans('content.product')}}"><span>{{$order->product}}</span></div>
                    <div class="serial" data-attr="{{trans('content.serial_number')}}"><span></span></div>
                    <div class="defects" data-attr="{{trans('content.defect_description')}}"><span>{{$order->description}}</span>
                    </div>
                    <div class="status" data-attr="{{trans('content.order_status')}}"><span>{{trans('content.'.$order->order_status)}}
                            </span></div>
                </div>
            @endforeach
        </div>
    </div>
    @include('parts.personal-nav-bar')
</div>
