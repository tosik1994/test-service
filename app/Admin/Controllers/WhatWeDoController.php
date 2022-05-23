<?php

namespace App\Admin\Controllers;

use App\Models\WhatWeDo;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class WhatWeDoController extends AdminController
{
    protected $title = 'What we do';

    protected function grid()
    {
        $grid = new Grid(new WhatWeDo());
        $grid->column('id', __('Id'));
        $grid->column('title_ua', __('Title ua'));
        $grid->column('title_ru', __('Title ru'));
        $grid->column('description_ua', __('Description ua'));
        $grid->column('description_ru', __('Description ru'));
        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(WhatWeDo::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('title_ua', __('Title ua'));
        $show->field('title_ru', __('Title ru'));
        $show->field('description_ua', __('Description ua'));
        $show->field('description_ru', __('Description ru'));
        $show->field('img', __('Image'))->image(env('APP_URL'),50,50);
        return $show;
    }

    protected function form()
    {
        $form = new Form(new WhatWeDo());
        $form->text('title_ua', __('Title ua'))->rules('required|max:255');
        $form->text('title_ru', __('Title ru'))->rules('required|max:255');
        $form->textarea('description_ua', __('Description ua'))->rules('required');
        $form->textarea('description_ru', __('Description ru'))->rules('required');
        $form->image('img', __('Image'))->rules('required');
        return $form;
    }
}
