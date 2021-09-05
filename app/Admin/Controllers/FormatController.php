<?php

namespace App\Admin\Controllers;

use App\Models\Format;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FormatController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Format';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Format());

        $grid->column('id', __('Id'));
        $grid->column('price', __('Price'));
        $grid->column('pages', __('Pages'));
        $grid->column('hard_cover_additional_price', __('Hard cover additional price'));

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
        $show = new Show(Format::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('price', __('Price'));
        $show->field('pages', __('Pages'));
        $show->field('hard_cover_additional_price', __('Hard cover additional price'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Format());

        $form->decimal('price', __('Price'));
        $form->number('pages', __('Pages'));
        $form->decimal('hard_cover_additional_price', __('Hard cover additional price'));

        return $form;
    }
}
