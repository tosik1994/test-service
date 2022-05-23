<?php

namespace App\Admin\Controllers;

use App\Models\Location;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LocationController extends AdminController
{
    protected $title = 'Locations';

    protected function grid()
    {
        $grid = new Grid(new Location());
        $grid->column('id', __('Id'));
        $grid->column('city', __('City'));
        $grid->column('street', __('Street'));
        $grid->column('address', __('Address'));
        $grid->column('hours_of_work', __('Hours of work'));
        $grid->column('weekend', __('Weekend'));
        $grid->column('is_main', __('Is main'));
        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Location::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('city', __('City'));
        $show->field('street', __('Street'));
        $show->field('address', __('Address'));
        $show->field('hours_of_work', __('Hours of work'));
        $show->field('weekend', __('Weekend'));
        $show->field('is_main', __('Is main'));
        return $show;
    }

    protected function form()
    {
        $form = new Form(new Location());
        $form->text('city', __('City'))->rules(
            'required|max:255'
        );
        $form->text('street', __('Street'))->rules(
            'required|max:255'
        );
        $form->text('address', __('Address'))->rules(
            'required|max:255'
        );
        $form->text('hours_of_work', __('Hours of work'))->rules(
            'required|max:255'
        );
        $form->text('weekend', __('Weekend'))->rules(
            'required|max:255'
        );
        $form->radioButton('is_main', 'Is main')->options([true => __('Yes'), false => __('No')])
            ->default(false);
        return $form;
    }
}
