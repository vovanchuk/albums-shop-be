<?php

namespace App\Admin\Controllers;

use App\Models\Cover;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CoverController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Cover';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Cover());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('description', __('Description'));
        $grid->column('file_name', __('File name'));
        $grid->column('cover_group_id', __('Cover group id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Cover::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('file_name', __('File name'));
        $show->field('cover_group_id', __('Cover group id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Cover());

        $form->text('name', __('Name'));
        $form->text('description', __('Description'));
        $form->text('file_name', __('File name'));
        $form->number('cover_group_id', __('Cover group id'));

        return $form;
    }
}
