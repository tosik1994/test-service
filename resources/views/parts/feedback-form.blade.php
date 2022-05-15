<div class="service-form" id="service-form">
    <div class="title">Свяжитесь с нами</div>
    <div class="desc">Мы поможем решить вашу проблему</div>

    <form method="POST" action="/send-feedback" id="block-form">
        @csrf
        <input type="text" class="form_errors" name="name" id="name" placeholder="Имя">
        <input type="text" class="inputmask form_errors" name="phone" id="phone" placeholder="Телефон">
        <input type="email" class="form_errors" name="email" id="email" placeholder="Почта">
        <input type="text" class="form_errors" name="product" id="product" placeholder="Изделие">
        <!--<input type="text" class="form_errors" name="number" id="number" placeholder="Серийный номер">-->

        <label class="d-flex">
            <input type="checkbox" name="repair_home" id="repair_home" value="1">
            <span class="checkbox"></span>
            <span>Указать адрес</span>
        </label>
        <div class="addres_home" style="opacity: 0; height: 0; transform: scaleY(0);">
            <input type="text" class="" placeholder="Адрес" name="address" id="address">
            <div class="d-flex half">
                <input type="text" placeholder="Дом" name="house" id="house">
                <input type="text" placeholder="Кв." name="apartment" id="apartment">
            </div>
        </div>
        <button type="submit" id="buttons_requres" data-id="6">Отправить</button>
    </form>
</div>
