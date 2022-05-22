<?php

namespace App\Admin\Controllers;

use App\Models\Operator;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;


class OperatorController extends AdminController
{
    protected $title ='Operators';

    protected function grid()
    {
        $grid = new Grid(new Operator());
        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Operator::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        return $show;
    }

    protected function form()
    {
        $form = new Form(new Operator());

        $form->text('name', __('Name'))->rules(
            'required|max:255'
        );
        return $form;
    }
}
