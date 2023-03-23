<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\OneSelf;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class OneSelfController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new OneSelf(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('head_portrait');
            $grid->column('expected_position');
            $grid->column('sex');
            $grid->column('age');
            $grid->column('working_years');
            $grid->column('we_chat');
            $grid->column('phone');
            $grid->column('education');
            $grid->column('self_evaluation');
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
        return Show::make($id, new OneSelf(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('head_portrait');
            $show->field('expected_position');
            $show->field('sex');
            $show->field('age');
            $show->field('working_years');
            $show->field('we_chat');
            $show->field('phone');
            $show->field('education');
            $show->field('self_evaluation');
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
        return Form::make(new OneSelf(), function (Form $form) {
            $form->display('id');
            $form->text('name')->required();
            $form->image('head_portrait')->autoUpload()->required();
            $form->text('expected_position')->required();
            $form->radio('sex')->options([0 => '女', 1=> '男'])->default(0);
            $form->number('age')->required();
            $form->number('working_years')->required();
            $form->text('we_chat')->required();
            $form->mobile('phone')->required();
            $form->editor('education')->required();
            $form->textarea('self_evaluation')->required();

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
