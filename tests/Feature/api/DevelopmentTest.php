<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\EloquentDevelopmentModel;
use App\Contracts\DevelopmentServiceInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DevelopmentTest extends TestCase
{
    /**
     * @test
     */
    public function index_developments_route_exists(): void
    {
        $this->get('api/developments')->assertStatus(200);
    }
}