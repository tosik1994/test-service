<?php

namespace App\Admin\Controllers;

use App\Models\Order;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OrderController extends AdminController
{
    protected $title = 'Orders';

    protected function grid()
    {
        $grid = new Grid(new Order());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->name(__('Name'));
        $grid->phone(__('Phone number'));
        $grid->serial_number(__('Serial number'));
        $grid->email(__('ContactEmail'));
        $grid->product(__('Product'));
        $grid->column('order_status', __('Order status'));
        $grid->description(__('Description'));
        $grid->address(__('Address'));
        $grid->house_number(__('House number'));
        $grid->apartment_number(__('Apartment number'));
        $grid->disableCreateButton();

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Order::findOrFail($id));
        $show->name(__('Name'));
        $show->phone(__('Phone number'));
        $show->serial_number(__('Serial number'));
        $show->email(__('ContactEmail'));
        $show->product(__('Product'));
        $show->field('order_status', __('Order status'));
        $show->description(__('Description'));
        $show->address(__('Address'));
        $show->house_number(__('House number'));
        $show->apartment_number(__('Apartment number'));


        return $show;
    }

    protected function form()
    {
        $form = new Form(new Order());
        $form->text('name', __('Name'))->rules('required|max:255');
        $form->mobile('phone', 'Telephone Number')->options(['mask' => '+38(099) 999-9999'])
            ->rules('required|max:255');
        $form->text('serial_number', __('Serial number'));
        $form->email('email', __('ContactEmail'))->rules('required|max:255');
        $form->text('product', __('Product'))->rules('required|max:255');
        $form->select('order_status', __('Order_status'))
            ->options([
                'new-order' => 'new-order',
                'in-progress' => 'in-progress',
                'executed' => 'executed',
                'finish' => 'finish',
            ]);
        $form->textarea('description', __('Description'));
        $form->text('address', __('Address'));
        $form->text('house_number', __('House number'));
        $form->text('apartment_number', __('Apartment number'));

        return $form;
    }
}
