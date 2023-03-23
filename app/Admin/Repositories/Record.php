<?php

namespace App\Admin\Repositories;

use App\Models\Record as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Record extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
