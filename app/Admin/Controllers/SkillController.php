<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Skill;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class SkillController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Skill(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('content');
            $grid->column('type');
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
        return Show::make($id, new Skill(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('content');
            $show->field('type');
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
        return Form::make(new Skill(), function (Form $form) {
            $form->display('id');
            $form->text('name')->required();
            $form->textarea('content')->required();
            $form->radio('type')->options([0 => '上面', 1=> '下面'])->default(0)->required();

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
