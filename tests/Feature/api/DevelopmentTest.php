<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\EloquentDevelopmentModel as Development;

class DevelopmentTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function test_index_developments_route_exists(): void
    {
        $this->get(route('api.developments'))->assertStatus(200);
    }

    public function test_get_developments_returns_list_of_developments(): void
    {
        $testCount = 3;

        Development::factory()->count($testCount)->create();

        $this->get(route('api.developments'))
            ->assertJsonCount($testCount);
    }

    public function test_get_developments_can_be_queried_by_postcode(): void
    {
        $postcode = $this->faker->postcode;
        $development = Development::factory()->create([
            'postcode' => $postcode,
        ]);

        Development::factory()->create();

        $this->get(route('api.developments', ['postcode' => $postcode]))
            ->assertJsonCount(1)
            ->assertJson([
                [
                    'name' => $development->name,
                    'postcode' => $postcode,
                ],
            ]);
    }

    public function test_get_developments_empty_query_returns_empty_array(): void
    {
        Development::factory()->create();

        $this->get(route('api.developments', ['postcode' => '']))
            ->assertJsonCount(0)
            ->assertJson([]);
    }
}
