<?php

namespace App\Admin\Controllers;

use App\Models\Operator;
use App\Models\Phone;
use App\Models\PhoneType;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PhonesController extends AdminController
{
    protected $title = 'Phone';

    protected function grid()
    {
        $grid = new Grid(new Phone());
        $grid->column('id', __('Id'));
        $grid->phone(__('Phone number'));
        $grid->phoneType()->name_ru();
        $grid->phoneType()->name_ua();
        $grid->operator()->name();
        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Phone::findOrFail($id));
//        dd(Phone::findOrFail($id)->operator->name);
        $show->field('id', __('Id'));
        $show->field('phone', __('Phone number'));

        $show->field('phone_type_id', __('Phone type'));
        $show->field('operator_id', __('Operator'));


        return $show;
    }

    protected function form()
    {
        $form = new Form(new Phone());

        $form->mobile('phone', 'Telephone Number')->options(['mask' => '+38(099) 999-99-99']);
        $form->select('phone_type_id', 'Phone type')
            ->options(PhoneType::all()->pluck('name_ru', 'id'));
        $form->select('operator_id', "Operators")
            ->options(Operator::all()->pluck('name', 'id'));

        return $form;
    }
}
