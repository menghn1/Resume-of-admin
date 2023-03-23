<?php

namespace App\Admin\Repositories;

use App\Models\Skill as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Skill extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
