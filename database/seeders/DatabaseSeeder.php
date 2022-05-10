<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WhatWeDo;
use App\Models\Advantage;
use App\Models\Banner;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
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

        Banner::create([
            'title' => 'Без проблем повесим Ваш телевизор на стену',
            'description' => 'Монтаж телевизора на стену задача казалось бы простая,'.
                ' но требующая умелых рук, сноровки и соответствующего инструмента.'.
                ' Наши монтажники избавят вас от хлопот связанных с этим.',
            'img' => 'styles/img/02ece2be5bcd5574920b95a0316bbbff.jpg',
            'href' => '/service/kreplenye-tv-na-stenu'
        ]);

        Banner::create([
            'title' => 'Установка кондиционеров',
            'description' => 'Опытные установщики и качественные материалы. Быстрая'.
                ' и профессиональная установка кондиционеров в харькове и Харьковской области.',
            'img' => 'styles/img/c18977617441afe39d7cc133491d43d1.jpg',
            'href' => '/service/ustanovka-kondicionera'
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
