<?php

namespace App\Admin\Controllers;

use App\Models\Advantage;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AdvantageController extends AdminController
{
    protected $title = 'Advantages';

    protected function grid()
    {
        $grid = new Grid(new Advantage());

        $grid->column('id', __('Id'));
        $grid->column('title_ru', __('Title ru'));
        $grid->column('title_ua',__('Title ua'));
        $grid->column('description_ru',__('Description ru'));
        $grid->column('description_ua',__('Description ua'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Advantage::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('title_ru', __('Title ru'));
        $show->field('title_ua',__('Title ua'));
        $show->field('description_ru',__('Description ru'));
        $show->field('description_ua',__('Description ua'));
        $show->field('img', __('Image'))->image(env('APP_URL'),50,50);

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Advantage());
        $form->text('title_ru', __('Title ru'));
        $form->text('title_ua', __('Title ua'));
        $form->textarea('description_ru',__('Description ru'));
        $form->textarea('description_ua',__('Description ua'));
        $form->image('img', __('Image'));
        return $form;
    }
}
