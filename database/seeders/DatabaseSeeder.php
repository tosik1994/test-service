<?php

namespace Database\Seeders;

use App\Models\Email;
use App\Models\Operator;
use App\Models\Phone;
use App\Models\PhoneType;
use App\Models\Position;
use App\Models\Service;
use App\Models\SocialNetwork;
use App\Models\SocialNetworkType;
use App\Models\TypeService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WhatWeDo;
use App\Models\Advantage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        PhoneType::create([
            'name' => 'Мобильный',
            'short_name' => 'Моб.'
        ]);

        PhoneType::create([
            'name' => 'Стационарный',
            'short_name' => 'Стац.'
        ]);

        PhoneType::create([
            'name' => 'Факс',
            'short_name' => 'Факс'
        ]);

        Operator::create([
            'name' => 'Kyivstar',
        ]);

        Operator::create([
            'name' => 'Vodafone',
        ]);

        Operator::create([
            'name' => 'LifeCell',
        ]);

        Position::create([
            'city' => 'г. Харьков',
            'street' => 'проспект Александровский',
            'address' => '99',
            'hours_of_work' => 'с 9:00 до 18:00',
            'weekend' => 'суббота, воскресенье',
            'is_main' => true,
        ]);

        Position::create([
            'city' => 'г. Харьков',
            'street' => 'пр-т Гагарина',
            'address' => '20',
            'hours_of_work' => 'с 9:00 до 18:00',
            'weekend' => 'суббота, воскресенье',
            'is_main' => false,
        ]);

        Position::create([
            'city' => 'г. Чугуев',
            'street' => 'ул. Леонова',
            'address' => '4А',
            'hours_of_work' => 'с 9:00 до 18:00',
            'weekend' => 'суббота, воскресенье',
            'is_main' => false,
        ]);

        Position::create([
            'city' => 'г. Харьков',
            'street' => 'ул. Гагарина',
            'address' => '181 ТРЦ Sun Mall',
            'hours_of_work' => 'с 9:00 до 18:00',
            'weekend' => 'суббота, воскресенье',
            'is_main' => false,
        ]);

        Position::create([
            'city' => 'г. Харьков',
            'street' => 'ул. Академика Павлова',
            'address' => '160',
            'hours_of_work' => 'с 9:00 до 18:00',
            'weekend' => 'суббота, воскресенье',
            'is_main' => false,
        ]);

        SocialNetworkType::create([
            'name' => 'facebook',
        ]);

        SocialNetworkType::create([
            'name' => 'instagram',
        ]);

        SocialNetwork::create([
            'social_network_type_id' => 1,
            'url' => 'https://www.facebook.com/'
        ]);

        SocialNetwork::create([
            'social_network_type_id' => 2,
            'url' => 'https://www.instagram.com/'
        ]);

        Phone::create([
            'phone' => '+380526585452',
            'operator_id' => 1,
            'phone_type_id'=> 1,
        ]);

        Phone::create([
            'phone' => '+380526789652',
            'operator_id' => 2,
            'phone_type_id'=> 2,
        ]);

        Phone::create([
            'phone' => '+380548555558',
            'operator_id' => 3,
            'phone_type_id'=> 3,
        ]);

        Email::create([
            'email' => 'dsfjkskfdk@gmail.com'
        ]);

        Email::create([
            'email' => 'd59skfdk@gmail.com'
        ]);


        WhatWeDo::create([
            'title' => '100% гарантия качественных услуг',
            'description' => 'По окончании ремонта мастер проинформирует о причинах неисправности и как избежать повторной поломки.',
            'img' => 'styles/img/100.svg',
        ]);

        WhatWeDo::create([
            'title' => 'Поддержка профессионалов',
            'description' => 'Все работы производятся опытными мастерами на профессиональном оборудовании.',
            'img' => 'styles/img/02.svg',
        ]);

        WhatWeDo::create([
            'title' => 'Онлайн консультация',
            'description' => 'Бесплатные консультации квалифицированных специалистов. Несколько уточняющих вопросов определят вероятную причину поломки и пути решения возникшей проблемы.',
            'img' => 'styles/img/01.svg',
        ]);

        Advantage::create([
            'title' => 'БЫСТРЫЙ РЕМОНТ',
            'description' => 'Мы стараемся максимально быстро ремонтировать технику клиента',
            'img' => 'styles/img/tools.png',
        ]);

        Advantage::create([
            'title' => 'НЕТ РАБОТЫ НЕТ ОПЛАТЫ',
            'description' => 'Вы оплачиваете только за качественно выполненную работу нашего мастера',
            'img' => 'styles/img/hand.png',
        ]);

        Advantage::create([
            'title' => '30 ДНЕЙ ГАРАНТИИ',
            'description' => 'Только оригинальные запчасти для Ваших телефонов, гарантия на весь ремонт',
            'img' => 'styles/img/winner.png',
        ]);

        Advantage::create([
            'title' => 'БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ',
            'description' => 'Мы всегда сможем проконсультировать Вас по телефону, либо у нас в офисе',
            'img' => 'styles/img/24-hours (1).png',
        ]);

        Service::create([
            'title' => 'Ремонт смартфонов в Харькове',
            'title_for_banner' => 'Ремонт смартфонов в Харькове',
            'description' => 'Ищете, где качественно и быстро отремонтировать телефон?'
                . ' Вы попали по адресу. Мы производим ремонт телефонов и планшетов любых' .
                ' производителей, в том числе и китайских.',
            'img' => 'styles/img/repair_smartphone.png',
            'is_banner' => false,
            'type_service_id' => 1,
            'content' => '<div class="d-flex">
                <div class="service-text">
                    <h1>Ремонт смартфонов в Харькове</h1>
                    <div class="service-description">
                      <h2 style="text-align: left;">Перечень услуг по ремонту смартфонов</h2>
<h3><span style="font-family: Helvetica;">✔ Замена дисплея;<br></span><span style="font-family: Helvetica;">✔ Замена сенсора;<br></span><span style="font-family: Helvetica;">✔ Замена разъема;<br></span><span style="font-family: Helvetica;">✔ Замена микрофона;<br></span><span style="font-family: Helvetica;">✔ Замена динамика;<br></span><span style="font-family: Helvetica;">✔ Замена шлейфов;<br></span><span style="font-family: Helvetica;">✔ Замена частей корпуса;<br></span><span style="font-family: Helvetica;">✔ Сложный многоуровневый ремонт платы (реболл, замена чипов памяти, процессоров, модемов и т.д);<br></span><span style="font-family: Helvetica;">✔ Восстановление и устранение последствий влаги;<br></span><span style="font-family: Helvetica;">✔ Замена аккумулятора (батареи) в смартфоне;<br></span><span style="font-family: Helvetica;">✔ Восстановление после других сервисных центров;</span></h3>
<h3 style="text-align: left;"><span style="font-family: Helvetica; color: rgb(255, 0, 0);">Типовые неисправности смартфона</span></h3>
<div><span style="font-family: Helvetica;"><span style="font-weight: bold;">Не включается</span> - причиной данной неисправности может являться целый ряд проблем. На самом деле с таким диагнозом телефон может иметь просто разряженную аккумуляторную батарею, а может иметь дефект системной платы, могут проявляться сбои в работе контроллера питания или сбой в работе процессора устройства, либо же попадавшая ранее в изделие влага или жидкость, окисляя системную плату аппарата и препятствуя нормальной работе телефона. Из всего вышеизложенного ясно следует одно – данный дефект является самым непредсказуемым. При ремонте такого аппарата следует самым тщательным образом проводить диагностику, чтобы доподлинно разобраться в неисправности и устранить все имеющиеся дефекты в работе телефона.</span></div>
<div><br></div>
<div><span style="font-family: Helvetica;"><span style="font-weight: bold;">Нет изображения</span> - Дисплей - часть телефона, отвечающая за визуальное отображение информации. В настоящее время применяются такие виды дисплеев как TFT, CSTN, MSTN, и отдельный класс OLED. Однако, несмотря, на столь широкую разновидность, замена дисплея сотового телефона остается наиболее распространенным видом ремонта, так как именно эта часть аппарата наиболее часто повреждается. Существует ряд причин, по которым становится необходимым ремонт экрана телефона. Зачастую - это неисправности, возникшие в результате удара или падения телефона. Так же экран может светиться белым, голубоватым или зеленым цветом. На дисплее появляются разводы, так называемые подтекания жидкого кристалла. В этом случае на телефоне необходимо произвести замену дисплея. Часто замена дисплея телефона сопровождается ремонтом тачскрина, так как при механическом воздействии страдает и сенсорная панель аппарата. В сервисном центре можно произвести замену дисплейной сборки (дисплей, touch screen и защитное стекло).</span></div>
<div><br></div>
<div><span style="font-family: Helvetica;"><span style="font-weight: bold;">Быстро разряжается</span> - Проблемы с АКБ. Попадание жидкости или других инородных веществ. Повреждена системная плата аппарата после удара или механического воздействия. Повреждён контроллер питания. Нарушена цепь заряда АКБ. Нарушена работоспособность цепи питания аппарата.</span></div>
<div><span style="font-family: Helvetica;"><br></span></div>
<div><span style="font-family: Verdana;">Если возникла потребность реанимировать Ваш гаджет, который до этого ни разу не подводил, и подыскиваете качественный и доступный ремонт смартфонов, Харьков рекомендует обратить внимание на «ЭлектроДом», функционирующий не только как магазин и площадка по бытовой технике и электронике в интернете, но и предлагающий оперативную и недорогую починку мобильных телефонов, планшетов, а также другой техники, с полным перечнем которой Вы можете ознакомиться на соответствующей странице нашего сайта, а удобная навигация поможет без труда перейти в нужный раздел и ознакомиться с предлагаемыми услугами и стоимостью выполнения подобного рода работ!</span></div>
<div><span style="font-family: Verdana;"><br></span></div>
<div><span style="font-family: Verdana;">Наш сервисный центр производит ремонт телефонов ведущих производителей.</span></div><div>
<h5>
</h5>
<h5 style="color: rgb(0, 0, 0);"><br></h5>
<h5 style="color: rgb(0, 0, 0);"><br></h5>
</div>
                    </div>
                </div>
                <div class="img-holder">
                    <img src="https://service.electrodim.ua/images/repairsmrtph715x2000 copy.jpg" title="" alt="">
                </div>
            </div>'
        ]);

        Service::create([
            'title' => 'Ремонт кондиционеров',
            'title_for_banner' => 'Отремонтируем ваш кондиционер с гарантией на ремонт',
            'description' => 'Ремонт кондиционера должен проводиться специалистами, и ни в ' .
                'коем случае «дядей Васей». Кондиционер — это сложный высокотехнологичный ' .
                'прибор, который имеет специфический двигатель — компрессор.',
            'img' => 'styles/img/repair_conditioner.jpg',
            'is_banner' => true,
            'type_service_id' => 1,
            'content' => '<div class="d-flex">
                <div class="service-text">
                    <h1>Ремонт кондиционеров</h1>
                    <div class="service-description">
                      <div>Поломка кондиционера может возникать по разным причинам: перепады в электросети, износ деталей, механические повреждения. Но чаще всего – это сильная изношенность деталей. Попытки самостоятельного ремонта кондиционера приводят к тому, что поломка становится сложнее, чем была изначально, ремонт становится дороже, а в худшем случае самостоятельно можно безвозвратно испортить вполне ремонтопригодную технику. Чтобы этого не произошло – обращайтесь к специалистам!</div><div><br></div><h4><span style="color: rgb(255, 0, 0);">Типичные неисправности кондиционера:</span></h4><div><br></div><div><span style="font-weight: bold;">Неправильно подобран кондиционер</span> - только купили, а проблемы уже начались. Причина проста – комната большая, а мощности прибора не хватает. Он работает на износ, и в итоге ломается.</div><div><br></div><div><span style="font-weight: bold;">Криво установлен</span> - монтажники работали без уровня? Есть все шансы, что вода будет капать на пол вашей комнаты, а не на улицу. К установке нужно подойти не менее ответственно, чем к выбору.</div><div><br></div><div><span style="font-weight: bold;">Засорился воздушный фильтр</span> - когда барьер, который не пускает пыль в квартиру, забивается, то кондиционеру труднее работать. Механизм может сломаться. Чтобы такого не было, каждый сезон очищайте фильтр. Особенно после июньского тополиного пуха.</div><div><br></div><div><span style="font-weight: bold;">Утечка фреона</span> - небольшая утечка фреона заложена в саму конструкцию. И это не вредит здоровью. Но если прибор не холодит, а на трубке видно иней, как на ветке в январе, то выключайте его и звоните мастеру.</div><div><br></div><div><span style="font-weight: bold;">Кондиционер вместо батарей</span> - почти все кондиционеры не могут долго работать при температуре ниже -5°С. Так они изнашиваются быстрее. Если зимой хочется летнего тепла в доме – включите обогреватель.</div><div><br></div><div><span style="font-weight: bold;">Если чего-то не знаете – прочтите инструкцию<span style="color: rgb(0, 0, 0); font-family: " source="" sans="" pro",="" "helvetica="" neue",="" helvetica,="" arial,="" sans-serif;="" font-size:="" 14px;="" font-style:="" normal;="" font-variant-ligatures:="" font-variant-caps:="" letter-spacing:="" orphans:="" 2;="" text-align:="" start;="" text-indent:="" 0px;="" text-transform:="" none;="" white-space:="" widows:="" word-spacing:="" -webkit-text-stroke-width:="" background-color:="" rgb(255,="" 255,="" 255);="" text-decoration-style:="" initial;="" text-decoration-color:="" float:="" display:="" inline="" !important;"=""></span>. </span>Там много полезной информации, которая поможет уберечь от поломок и преждевременного износа деталей.</div><div><br></div><div><span style="font-weight: bold;">Негерметичность</span> - современные кондиционеры состоят из множества трубок, шлангов и штуцеров, которые со временем перетираются и растягиваются. Могут разгерметизироваться в любой момент.</div><div><br></div><div><span style="font-weight: bold;">Нет ухода – нет прохлады.</span> Если у вас стучит машина, вы едете в сервисный центр. Относитесь к кондиционеру, как к своей машине. Если заметили проблему – доверяйте ремонт профильным специалистам, а не зовите соседей или родственников. Все проблемы с ремонтом поможет решить квалифицированный специалист.</div>
                    </div>
                </div>
                <div class="img-holder">
                    <img src="https://service.electrodim.ua/images/repairsmrtph715x2000 copy.jpg" title="" alt="">
                </div>
            </div>'
        ]);


        Service::create([
            'title' => 'Монтаж телевизора на стену',
            'title_for_banner' => 'Без проблем повесим Ваш телевизор на стену',
            'description' => 'Монтаж телевизора на стену задача казалось бы простая,' .
                ' но требующая умелых рук, сноровки и соответствующего инструмента.' .
                ' Наши монтажники избавят вас от хлопот связанных с этим.',
            'img' => 'styles/img/montaj_TV.jpg',
            'is_banner' => true,
            'type_service_id' => 2,
            'content' => 'here is content'
        ]);

        Service::create([
            'title' => 'Установка кондиционера',
            'title_for_banner' => 'Установка кондиционеров',
            'description' => 'Опытные установщики и качественные материалы. Быстрая' .
                ' и профессиональная установка кондиционеров в харькове и Харьковской области.',
            'img' => 'styles/img/repair_conditioner.jpg',
            'is_banner' => true,
            'type_service_id' => 2,
            'content' => 'here is content'
        ]);

        TypeService::create([
            'name' => 'Услуги ремонта'
        ]);

        TypeService::create([
            'name' => 'Услуги монтажа'
        ]);

        TypeService::create([
            'name' => 'Услуги настройки'
        ]);

        TypeService::create([
            'name' => 'Заказ деталей'
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
