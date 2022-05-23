<?php

namespace App\Admin\Controllers;

use App\Models\Service;
use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ServiceController extends AdminController
{
    protected $title = 'Services';

    protected function grid()
    {
        $grid = new Grid(new Service());
        $grid->column('id', __('Id'));
        $grid->column('title_ua', __('Title ua'));
        $grid->column('title_ru', __('Title ru'));
        $grid->column('title_for_banner_ua', __('Title for banner ua'));
        $grid->column('title_for_banner_ru', __('Title for banner ru'));
        $grid->column('description_ua', __('Description ua'));
        $grid->column('description_ru', __('Description ru'));
        $grid->column('is_banner', __('Is banner'));
        $grid->column('type_service_id', __('Type service id'));
        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Service::findOrFail($id));


        $show->field('id', __('Id'));
        $show->field('title_ua', __('Title ua'));
        $show->field('title_ru', __('Title ru'));
        $show->field('title_for_banner_ua', __('Title for banner ua'));
        $show->field('title_for_banner_ru', __('Title for banner ru'));
        $show->field('description_ua', __('Description ua'));
        $show->field('description_ru', __('Description ru'));
        $show->field('is_banner', __('Is banner'));
        $show->field('type_service_id', __('Type service id'));
        $show->field('content_ua', __('Content ua'));
        $show->field('content_ru', __('Content ru'));
        return $show;
    }

    protected function form()
    {
        $form = new Form(new Service());
        $form->text('title_ua', __('Title ua'));
        $form->text('title_ru', __('Title ru'));
        $form->text('title_for_banner_ua', __('Title for banner ua'));
        $form->text('title_for_banner_ru', __('Title for banner ru'));
        $form->textarea('description_ua', __('Description ua'));
        $form->textarea('description_ru', __('Description ru'));
        $form->radioButton('is_banner', 'Is banner')->options([true => __('Yes'), false => __('No')])
            ->default(false);
        $form->text('type_service_id', __('Type service id'));
        $form->text('content_ua', __('Content ua'));
        $form->text('content_ru', __('Content ru'));

        return $form;
    }
}
