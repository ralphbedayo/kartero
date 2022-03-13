<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    protected string $modelClass;

    public Model $model;


    public function __construct()
    {
        $this->model = resolve($this->modelClass);
    }

}
