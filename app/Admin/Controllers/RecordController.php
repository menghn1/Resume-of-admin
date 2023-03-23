<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Record;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class RecordController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Record(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('sex');
            $grid->column('photo');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Record(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('sex');
            $show->field('photo');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Record(), function (Form $form) {
            $form->display('id');
            $form->text('name')->required();
            $form->radio('sex')->options([0 => '女', 1=> '男'])->default(0);
            $form->image('photo')->autoUpload()->required();

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
