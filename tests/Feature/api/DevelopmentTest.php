<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Contracts\DevelopmentServiceInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\EloquentDevelopmentModel as Development;

class DevelopmentTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_developments_route_exists(): void
    {
        $this->get(route('api.developments'))->assertStatus(200);
    }
}