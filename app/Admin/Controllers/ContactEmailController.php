<?php

namespace App\Admin\Controllers;

use App\Models\ContactEmail;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ContactEmailController extends AdminController
{
    protected $title = 'Contact emails';

    protected function grid()
    {
        $grid = new Grid(new ContactEmail());
        $grid->column('id', __('Id'));
        $grid->column('email', __('Email'));
        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(ContactEmail::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('email',__('Email'));
        return $show;
    }

    protected function form()
    {
        $form = new Form(new ContactEmail());
        $form->email('email', __('Email'))->rules('required|max:255|email');
        return $form;
    }
}
