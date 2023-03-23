<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\WorkExperience;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class WorkExperienceController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new WorkExperience(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('icon');
            $grid->column('title');
            $grid->column('timeS');
            $grid->column('timeE');
            $grid->column('content');
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
        return Show::make($id, new WorkExperience(), function (Show $show) {
            $show->field('id');
            $show->field('icon');
            $show->field('title');
            $show->field('timeS');
            $show->field('timeE');
            $show->field('content');
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
        return Form::make(new WorkExperience(), function (Form $form) {
            $form->display('id');
            $form->text('icon');
            $form->text('title')->required();
            $form->datetime('timeS')->required();
            $form->datetime('timeE')->required();
            $form->textarea('content')->required();

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
