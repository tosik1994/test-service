<?php

namespace Database\Seeders;

use App\Models\ContactEmail;
use App\Models\Operator;
use App\Models\Phone;
use App\Models\PhoneType;
use App\Models\Location;
use App\Models\Service;
use App\Models\SocialNetwork;
use App\Models\TypeService;
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
            'name_ru' => 'Мобильный',
            'name_ua' => 'Мобільний',
            'short_name' => 'Моб.'
        ]);

        PhoneType::create([
            'name_ru' => 'Стационарный',
            'name_ua' => 'Стаціонарний',
            'short_name' => 'Стац.'
        ]);

        PhoneType::create([
            'name_ru' => 'Факс',
            'name_ua' => 'Факс',
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

        Location::create([
            'city' => 'г. Харьков',
            'street' => 'проспект Александровский',
            'address' => '99',
            'hours_of_work' => 'с 9:00 до 18:00',
            'weekend' => 'суббота, воскресенье',
            'is_main' => true,
        ]);

        Location::create([
            'city' => 'г. Харьков',
            'street' => 'пр-т Гагарина',
            'address' => '20',
            'hours_of_work' => 'с 9:00 до 18:00',
            'weekend' => 'суббота, воскресенье',
            'is_main' => false,
        ]);

        Location::create([
            'city' => 'г. Чугуев',
            'street' => 'ул. Леонова',
            'address' => '4А',
            'hours_of_work' => 'с 9:00 до 18:00',
            'weekend' => 'суббота, воскресенье',
            'is_main' => false,
        ]);

        Location::create([
            'city' => 'г. Харьков',
            'street' => 'ул. Гагарина',
            'address' => '181 ТРЦ Sun Mall',
            'hours_of_work' => 'с 9:00 до 18:00',
            'weekend' => 'суббота, воскресенье',
            'is_main' => false,
        ]);

        Location::create([
            'city' => 'г. Харьков',
            'street' => 'ул. Академика Павлова',
            'address' => '160',
            'hours_of_work' => 'с 9:00 до 18:00',
            'weekend' => 'суббота, воскресенье',
            'is_main' => false,
        ]);

        SocialNetwork::create([
            'social_network_type' => 'facebook',
            'url' => 'https://www.facebook.com/'
        ]);

        SocialNetwork::create([
            'social_network_type' => 'instagram',
            'url' => 'https://www.instagram.com/'
        ]);

        Phone::create([
            'phone' => '+380526585452',
            'operator_id' => 1,
            'phone_type_id' => 1,
        ]);

        Phone::create([
            'phone' => '+380526789652',
            'operator_id' => 2,
            'phone_type_id' => 2,
        ]);

        Phone::create([
            'phone' => '+380548555558',
            'operator_id' => 3,
            'phone_type_id' => 3,
        ]);

        ContactEmail::create([
            'email' => 'dsfjkskfdk@gmail.com'
        ]);

        ContactEmail::create([
            'email' => 'd59skfdk@gmail.com'
        ]);


        WhatWeDo::create([
            'title_ru' => '100% гарантия качественных услуг',
            'title_ua' => '100% гарантія якісних послуг',
            'description_ru' => 'По окончании ремонта, мастер проинформирует о причинах неисправности и как избежать повторной поломки.',
            'description_ua' => 'По завершенню ремонту, мастер проінформує про причини несправності і як запобігти повторної поломки.',
            'img' => 'images/100.svg',
        ]);

        WhatWeDo::create([
            'title_ru' => 'Поддержка профессионалов',
            'title_ua' => 'Підтримка професіоналів',
            'description_ru' => 'Все работы производятся опытными мастерами на профессиональном оборудовании.',
            'description_ua' => 'Всі роботи проводяться кваліфікованими мастерами на професійному обладнанні.',
            'img' => 'images/02.svg',
        ]);

        WhatWeDo::create([
            'title_ru' => 'Онлайн консультация',
            'title_ua' => 'Онлайн консультація',
            'description_ru' => 'Бесплатные консультации квалифицированных специалистов. Несколько уточняющих вопросов определят вероятную причину поломки и пути решения возникшей проблемы.',
            'description_ua' => 'Безкоштовні консультації кваліфікованих спеціалістів. Декілька уточнюючих запитань виявлять ймовірну причину поломки і варіанти рішення проблеми.',
            'img' => 'images/01.svg',
        ]);

        Advantage::create([
            'title_ru' => 'БЫСТРЫЙ РЕМОНТ',
            'title_ua' => 'ШВИДКИЙ РЕМОНТ',
            'description_ru' => 'Мы стараемся максимально быстро ремонтировать технику клиента',
            'description_ua' => 'Ми стараємося максимально швидко ремонтувати техніку клієнта',
            'img' => 'images/tools.png',
        ]);

        Advantage::create([
            'title_ru' => 'НЕТ РАБОТЫ НЕТ ОПЛАТЫ',
            'title_ua' => 'НЕМА РОБОТИ НЕМА ОПЛАТИ',
            'description_ru' => 'Вы оплачиваете только за качественно выполненную работу нашего мастера',
            'description_ua' => 'Ви оплачуєте тільки за якісно виконану роботу нашого мастера',
            'img' => 'images/hand.png',
        ]);

        Advantage::create([
            'title_ru' => '30 ДНЕЙ ГАРАНТИИ',
            'title_ua' => '30 ДНІВ ГАРАНТІЇ',
            'description_ru' => 'Только оригинальные запчасти для Ваших телефонов, гарантия на весь ремонт',
            'description_ua' => 'Тільки оригінальні запчастини для ваших телефонів, гарантія на весь ремонт',
            'img' => 'images/winner.png',
        ]);

        Advantage::create([
            'title_ru' => 'БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ',
            'title_ua' => 'БЕЗКОШТОВНА КОНСУЛЬТАЦІЯ',
            'description_ru' => 'Мы всегда сможем проконсультировать Вас по телефону, либо у нас в офисе',
            'description_ua' => 'Ми завжди зможемо проконсультувати вас по телефону, або у нас в офісі',
            'img' => 'images/24-hours (1).png',
        ]);

        Service::create([
            'title_ru' => 'Ремонт смартфонов в Харькове',
            'title_ua' => 'Ремонт смартфонів в Харкові',
            'title_for_banner_ru' => 'Ремонт смартфонов в Харькове',
            'title_for_banner_ua' => 'Ремонт смартфонов в Харькове',
            'description_ru' => 'Ищете, где качественно и быстро отремонтировать телефон?'
                . ' Вы попали по адресу. Мы производим ремонт телефонов и планшетов любых' .
                ' производителей, в том числе и китайских.',
            'description_ua' => 'Шукаєте, де якісно та швидко відремонтувати телефон?'
                . 'Ви потрапили за адресою. Ми робимо ремонт телефонів та планшетів будь-яких' .
                ' виробників, у тому числі китайських.',
            'img' => 'images/repair_smartphone.png',
            'is_banner' => false,
            'type_service_id' => 1,
            'content_ru' => '<div class="d-flex">
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
            </div>',
            'content_ua' => '<div class="d-flex">
                <div class="service-text">
                    <h1>Ремонт смартфонів в Харкові</h1>
                    <div class="service-description">
                      <h2 style="text-align: left; outline: 0px;"><span style="color: rgb(28, 30, 42); font-weight: bold;">Перелік послуг з ремонту смартфонів</span></h2>
<h3 style="outline: 0px;"><span style="color: rgb(28, 30, 42);">✔ Заміна дисплея;<br></span><span style="color: rgb(28, 30, 42);">✔ Заміна сенсора;<br></span><span style="color: rgb(28, 30, 42);">✔ Заміна роз\'єму;<br></span><span style="color: rgb(28, 30, 42);">✔ Заміна мікрофона;<br></span><span style="color: rgb(28, 30, 42);">✔ Заміна динаміка;<br></span><span style="color: rgb(28, 30, 42);">✔ Заміна шлейфів;<br></span><span style="color: rgb(28, 30, 42);">✔ Заміна частин корпусу;<br></span><span style="color: rgb(28, 30, 42);">✔ Складний багаторівневий ремонт плати (ребол, заміна чіпів пам\'яті, процесорів, модемів і т.д);<br></span><span style="color: rgb(28, 30, 42);">✔ Відновлення та усунення наслідків вологи;<br></span><span style="color: rgb(28, 30, 42);">✔ Заміна акумулятора (батареї) в смартфоні;<br></span><span style="color: rgb(28, 30, 42);">✔ Відновлення після інших сервісних центрів;</span></h3>
<h4 style="outline: 0px;"><br></h4>
<h3 style="text-align: left; outline: 0px;"><span style="color: rgb(255, 0, 0);"><b>Типові несправності смартфонів</b></span></h3>
<p style="outline: 0px;"><span style="font-weight: bold;">Не включається</span> - причиною даної несправності може бути цілий ряд проблем. Насправді з таким діагнозом телефон може мати просто розряджену акумуляторну батарею, а може мати дефект системної плати, можуть проявлятися збої в роботі контролера живлення або збій в роботі процесора пристрою, або ж раніше в смартфон потрапляла волога або рідина, окислюючи системну плату смартфону і перешкоджаючи нормальній роботі. З усього вищевикладеного ясно випливає одне - цей дефект є самим непередбачуваним. При ремонті такого апарату слід найретельнішим чином проводити діагностику, щоб достеменно розібратися в несправності й усунути всі наявні дефекти в роботі телефону.</p>
<p style="outline: 0px;"><span style="font-weight: bold;">Немає зображення</span> - Дисплей - частина телефону, що відповідає за візуальне відображення інформації. В даний час застосовуються такі види дисплеїв як TFT, CSTN, MSTN, і окремий клас OLED. Однак, незважаючи на такий широкий різновид, заміна дисплея мобільного телефону залишається найбільш поширеним видом ремонту, так як саме ця частина телефону найбільш часто пошкоджується. Існує ряд причин, за якими стає необхідним ремонт екрану телефону. Найчастіше - це несправності, що виникли в результаті удару або падіння телефону. Так само екран може світитися білим, блакитним або зеленим кольором. На дисплеї з\'являються розводи, так звані підтікання рідкого кристала. У цьому випадку в смартфоні необхідно провести заміну екрану. Часто заміна дисплея телефону супроводжується замiною тачскріну, так як при механічному впливі страждає і сенсорна панель апарату. У сервісному центрі можна зробити заміну дисплейної збірки (дисплей, touch screen і захисне скло).</p>
<p style="outline: 0px;"><span style="font-weight: bold;">Швидко розряджається</span> - Проблеми з АКБ. Рідина, яка може бути всерединi або інші сторонні речовини. Пошкоджена системна плата смартфону після удару або механічного впливу. Пошкоджено контролер живлення. Порушено ланцюг заряду батареї. Порушена працездатність ланцюга живлення апарату.</p>
<h5 style="outline: 0px;"><span style="font-family: Verdana;"><br></span></h5><h5 style="outline: 0px;"><span style="font-family: Verdana;">Наш сервісний центр виконує ремонт телефонів ведучих виробників.</span></h5><div><h5 style="color: rgb(0, 0, 0);"><br></h5></div>
                    </div>
                </div>
                <div class="img-holder">
                    <img src="https://service.electrodim.ua/images/repairsmrtph715x2000 copy.jpg" title="" alt="">
                </div>
            </div>'
        ]);

        Service::create([
            'title_ru' => 'Ремонт кондиционеров',
            'title_ua' => 'Ремонт кондиціонерів',
            'title_for_banner_ru' => 'Отремонтируем ваш кондиционер с гарантией на ремонт',
            'title_for_banner_ua' => 'Відремонтуємо ваш кондиціонер з гарантією на ремонт',
            'description_ru' => 'Ремонт кондиционера должен проводиться специалистами, и ни в ' .
                'коем случае «дядей Васей». Кондиционер — это сложный высокотехнологичный ' .
                'прибор, который имеет специфический двигатель — компрессор.',
            'description_ua' => 'Ремонт кондиціонера повинен проводитися фахівцями, і ні в' .
                'якому разі «дядьком Васею». Кондиціонер - це складний високотехнологічний' .
                'прилад, який має специфічний двигун - компресор.',
            'img' => 'images/repair_conditioner.jpg',
            'is_banner' => true,
            'type_service_id' => 1,
            'content_ru' => '<div class="d-flex">
                <div class="service-text">
                    <h1>Ремонт кондиционеров</h1>
                    <div class="service-description">
                      <div>Поломка кондиционера может возникать по разным причинам: перепады в электросети, износ деталей, механические повреждения. Но чаще всего – это сильная изношенность деталей. Попытки самостоятельного ремонта кондиционера приводят к тому, что поломка становится сложнее, чем была изначально, ремонт становится дороже, а в худшем случае самостоятельно можно безвозвратно испортить вполне ремонтопригодную технику. Чтобы этого не произошло – обращайтесь к специалистам!</div><div><br></div><h4><span style="color: rgb(255, 0, 0);">Типичные неисправности кондиционера:</span></h4><div><br></div><div><span style="font-weight: bold;">Неправильно подобран кондиционер</span> - только купили, а проблемы уже начались. Причина проста – комната большая, а мощности прибора не хватает. Он работает на износ, и в итоге ломается.</div><div><br></div><div><span style="font-weight: bold;">Криво установлен</span> - монтажники работали без уровня? Есть все шансы, что вода будет капать на пол вашей комнаты, а не на улицу. К установке нужно подойти не менее ответственно, чем к выбору.</div><div><br></div><div><span style="font-weight: bold;">Засорился воздушный фильтр</span> - когда барьер, который не пускает пыль в квартиру, забивается, то кондиционеру труднее работать. Механизм может сломаться. Чтобы такого не было, каждый сезон очищайте фильтр. Особенно после июньского тополиного пуха.</div><div><br></div><div><span style="font-weight: bold;">Утечка фреона</span> - небольшая утечка фреона заложена в саму конструкцию. И это не вредит здоровью. Но если прибор не холодит, а на трубке видно иней, как на ветке в январе, то выключайте его и звоните мастеру.</div><div><br></div><div><span style="font-weight: bold;">Кондиционер вместо батарей</span> - почти все кондиционеры не могут долго работать при температуре ниже -5°С. Так они изнашиваются быстрее. Если зимой хочется летнего тепла в доме – включите обогреватель.</div><div><br></div><div><span style="font-weight: bold;">Если чего-то не знаете – прочтите инструкцию<span style="color: rgb(0, 0, 0); font-family: " source="" sans="" pro",="" "helvetica="" neue",="" helvetica,="" arial,="" sans-serif;="" font-size:="" 14px;="" font-style:="" normal;="" font-variant-ligatures:="" font-variant-caps:="" letter-spacing:="" orphans:="" 2;="" text-align:="" start;="" text-indent:="" 0px;="" text-transform:="" none;="" white-space:="" widows:="" word-spacing:="" -webkit-text-stroke-width:="" background-color:="" rgb(255,="" 255,="" 255);="" text-decoration-style:="" initial;="" text-decoration-color:="" float:="" display:="" inline="" !important;"=""></span>. </span>Там много полезной информации, которая поможет уберечь от поломок и преждевременного износа деталей.</div><div><br></div><div><span style="font-weight: bold;">Негерметичность</span> - современные кондиционеры состоят из множества трубок, шлангов и штуцеров, которые со временем перетираются и растягиваются. Могут разгерметизироваться в любой момент.</div><div><br></div><div><span style="font-weight: bold;">Нет ухода – нет прохлады.</span> Если у вас стучит машина, вы едете в сервисный центр. Относитесь к кондиционеру, как к своей машине. Если заметили проблему – доверяйте ремонт профильным специалистам, а не зовите соседей или родственников. Все проблемы с ремонтом поможет решить квалифицированный специалист.</div>
                    </div>
                </div>
                <div class="img-holder">
                    <img src="https://service.electrodim.ua/images/repairsmrtph715x2000 copy.jpg" title="" alt="">
                </div>
            </div>',
            'content_ua' => '<div class="d-flex">
                <div class="service-text">
                    <h1>Ремонт кондиціонерів</h1>
                    <div class="service-description">
                      <div>Вихід з ладу кондиціонера може виникати з різних причин: перепади в електромережі, знос деталей, механічні пошкодження. Але найчастіше - це сильна зношеність деталей. Спроби самостійного ремонту кондиціонера призводять до того, що поломка стає складніше, ніж була спочатку, ремонт стає дорожче, а в гіршому випадку самостійно можна безповоротно зіпсувати цілком ремонтопридатність техніку. Щоб цього не сталося - звертайтеся до фахівців!</div><div><br></div><h4><span style="color: rgb(255, 0, 0);">Типові несправності кондиціонера:</span></h4><div><br></div><div><span style="font-weight: bold;">Неправильно підібраний кондиціонер</span> - тільки купили, а проблеми вже почалися. Причина проста - кімната велика, а потужності приладу не вистачає. Він працює на знос, і в підсумку ламається.</div><div><br></div><div><span style="font-weight: bold;">Криво встановлений</span> - монтажники працювали без рівня? Є всі шанси, що вода буде капати на підлогу вашої кімнати, а не на вулицю. До встановлення потрібно підійти не менш відповідально, ніж до вибору.</div><div><br></div><div><span style="font-weight: bold;">Засмітився повітряний фільтр</span> - коли фільтр забивається, то кондиціонеру важче працювати. Механізм може зламатися. Щоб такого не було, кожен сезон очищайте фільтр. Особливо після червневого тополиного пуху.</div><div><br></div><div><span style="font-weight: bold;">Витік фреону</span> - невеликий витік фреону закладений в саму конструкцію. І це не шкодить здоров"ю. Але якщо пристрій не холодить, а на трубці видно іній, як на гілці в січні, то вимикайте його і телефонуйте майстру.</div><div><br></div><div><span style="font-weight: bold;">Кондиціонер замість батарей</span> - майже всі кондиціонери не можуть довго працювати при температурі нижче -5 ° С. Так вони зношуються швидше. Якщо взимку хочеться літнього тепла в будинку - увімкніть обігрівач.</div><div><br></div><div><span style="font-weight: bold;">Якщо чогось не знаєте - прочитайте інструкцію</span>. Там багато корисної інформації, яка допоможе вберегти від поломок і передчасного зносу деталей.</div><div><br></div><div><span style="font-weight: bold;">Негерметичність</span> - сучасні кондиціонери складаються з безлічі трубок, шлангів і штуцерів, які з часом перетираються і розтягуються. Можуть розгерметизуватися в будь-який момент.</div><div><br></div><div><span style="font-weight: bold;">Немає догляду - немає прохолоди.</span> Якщо у вас стукає машина, ви їдете в сервісний центр. Ставтеся до кондиціонера, як до своєї машини. Якщо помітили проблему - довіряйте ремонт профільним фахівцям, а не кличте сусідів або родичів. Всі проблеми з ремонтом допоможе вирішити кваліфікований фахівець.</div>
                    </div>
                </div>
                <div class="img-holder">
                    <img src="https://service.electrodim.ua/images/kondrepair copy.jpg" title="" alt="">
                </div>
            </div>',
        ]);


        Service::create([
            'title_ru' => 'Монтаж телевизора на стену',
            'title_ua' => 'Монтаж телевізора на стіну',
            'title_for_banner_ru' => 'Без проблем повесим ваш телевизор на стену',
            'title_for_banner_ua' => 'Без проблем повісима ваш телевізор на стіну',
            'description_ru' => 'Монтаж телевизора на стену задача казалось бы простая,' .
                ' но требующая умелых рук, сноровки и соответствующего инструмента.' .
                ' Наши монтажники избавят вас от хлопот связанных с этим.',
            'description_ua' => "Монтаж телевізора на стіну завдання здавалося б просте, ".
                " але вимагає вмілих рук, вправності та відповідного інструменту." .
                " Наші монтажники позбавлять вас клопоту пов'язаних з цим.",
            'img' => 'images/montaj_TV.jpg',
            'is_banner' => true,
            'type_service_id' => 2,
            'content_ru' => 'Место для контента',
            'content_ua' => 'Місце для контенту',
        ]);

        Service::create([
            'title_ru' => 'Установка кондиционера',
            'title_ua' => 'Встановлення кондиціонерів',
            'title_for_banner_ru' => 'Установка кондиционеров',
            'title_for_banner_ua' => 'Встановлення кондиціонерів',
            'description_ru' => 'Опытные установщики и качественные материалы. Быстрая' .
                ' и профессиональная установка кондиционеров в харькове и Харьковской области.',
            'description_ua' => 'Досвідчені установники та якісні матеріали. Швидка ' .
                ' та професійна установка кондиціонерів у Харкові та Харківській області.',
            'img' => 'images/repair_conditioner.jpg',
            'is_banner' => true,
            'type_service_id' => 2,
            'content_ru' => 'Место для контента',
            'content_ua' => 'Місце для контенту',
        ]);

        TypeService::create([
            'name_ru' => 'Услуги ремонта',
            'name_ua' => 'Послуги ремонту',
        ]);

        TypeService::create([
            'name_ru' => 'Услуги монтажа',
            'name_ua' => 'Послуги встановлення',
        ]);

        TypeService::create([
            'name_ru' => 'Услуги настройки',
            'name_ua' => 'Послуги налаштування',
        ]);

        TypeService::create([
            'name_ru' => 'Заказ деталей',
            'name_ua' => 'Замовлення деталей',
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
