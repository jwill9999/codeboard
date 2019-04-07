<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    /**
     * Project->path() returns current project path
     *
     * @return void
     */
    public function path()
    {
        return "/projects/{$this->id}";
    }
}
