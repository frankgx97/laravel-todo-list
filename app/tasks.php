<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    protected $table = 'tasks';
    public function retrieve()
    {
        $task_result = tasks::all();
        return $task_result;
    }
}
