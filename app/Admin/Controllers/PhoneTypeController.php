<?php

namespace App\Admin\Controllers;

use App\Models\PhoneType;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PhoneTypeController extends AdminController
{
    protected $title = 'Phone Type';

    protected function grid()
    {
        $grid = new Grid(new PhoneType());
        $grid->column('id', __('Id'));
        $grid->column('name_ru', __('Operator name in Russian'));
        $grid->column('name_ua', __('Operator name in Ukrainian'));
        $grid->column('short_name', __('Abbreviation'));
        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(PhoneType::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name_ru', __('Operator name in Russian'));
        $show->field('name_ua', __('Operator name in Ukrainian'));
        $show->field('short_name', __('Abbreviation'));
        return $show;
    }

    protected function form()
    {
        $form = new Form(new PhoneType());

        $form->text('name_ru', __('Operator name in Russian'))->rules(
            'required|max:255'
        );
        $form->text('name_ua', __('Operator name in Ukrainian'))->rules(
            'required|max:255'
        );
        $form->text('short_name', __('Abbreviation'))->rules(
            'required|max:255'
        );
        return $form;
    }
}
