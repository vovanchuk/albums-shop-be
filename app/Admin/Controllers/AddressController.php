<?php

namespace App\Admin\Controllers;

use App\Models\Address;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AddressController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Address';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Address());

        $grid->column('id', __('Id'));
        $grid->column('street_name', __('Street name'));
        $grid->column('house_number', __('House number'));
        $grid->column('apartment_number', __('Apartment number'));
        $grid->column('city', __('City'));
        $grid->column('zip_code', __('Zip code'));
        $grid->column('country_id', __('Country id'));
        $grid->column('user_id', __('User id'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Address::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('street_name', __('Street name'));
        $show->field('house_number', __('House number'));
        $show->field('apartment_number', __('Apartment number'));
        $show->field('city', __('City'));
        $show->field('zip_code', __('Zip code'));
        $show->field('country_id', __('Country id'));
        $show->field('user_id', __('User id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Address());

        $form->text('street_name', __('Street name'));
        $form->text('house_number', __('House number'));
        $form->text('apartment_number', __('Apartment number'));
        $form->text('city', __('City'));
        $form->text('zip_code', __('Zip code'));
        $form->number('country_id', __('Country id'));
        $form->number('user_id', __('User id'));

        return $form;
    }
}
