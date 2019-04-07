<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{

    use RefreshDatabase;
    /**
     *
     * @test
     * @return void
     */
    public function itHasAPath()
    {
        //given we have a project
        $project = factory('App\Project')->create();
        $this->assertEquals('/projects/'.$project->id, $project->path());
    }
}
