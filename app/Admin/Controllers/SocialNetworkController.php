<?php

namespace App\Admin\Controllers;

use App\Models\SocialNetwork;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SocialNetworkController extends AdminController
{
    protected $title = 'Social Networks';

    protected function grid()
    {
        $grid = new Grid(new SocialNetwork());
        $grid->column('id', __('Id'));
        $grid->column('social_network_type', __('Social network name'));
        $grid->url(__('Url'));
        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(SocialNetwork::findOrFail($id));
        $show->field('id', __('Id'));
        $show->social_network_type(__('Social network name'));
        $show->url(__('Url'));
        return $show;
    }

    protected function form()
    {
        $form = new Form(new SocialNetwork());
        $form->text('social_network_type', __('Social network name'))
            ->rules('required|max:255');
        $form->text('url', __('Url'))
            ->rules('required|max:255');
        return $form;
    }
}
