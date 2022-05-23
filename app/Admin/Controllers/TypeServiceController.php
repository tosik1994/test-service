<?php

namespace App\Admin\Controllers;

use App\Models\TypeService;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TypeServiceController extends AdminController
{
    protected $title = 'Type services';

    protected function grid()
    {
        $grid = new Grid(new TypeService());
        $grid->column('id', __('Id'));
        $grid->column('name_ua', __('Name ua'));
        $grid->column('name_ru', __('Name ru'));
        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(TypeService::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('name_ua', __('Name ua'));
        $show->field('name_ru', __('Name ru'));
        return $show;
    }

    protected function form()
    {
        $form = new Form(new TypeService());
        $form->text('name_ua', __('Name ua'))->rules('required|max:255');
        $form->text('name_ru', __('Name ru'))->rules('required|max:255');
        return $form;
    }
}
