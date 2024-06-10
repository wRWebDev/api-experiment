<?php

namespace Tests\Feature;

use App\Contracts\DevelopmentServiceInterface;
use App\Models\EloquentDevelopmentModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DevelopmentServiceInterfaceTest extends TestCase
{
    use RefreshDatabase;

    public function test_development_service_returns_by_postcode()
    {
        EloquentDevelopmentModel::factory()->create([
            'postcode' => 'SW1A 1AA',
            'name' => 'Buckingham Palace',
        ]);

        EloquentDevelopmentModel::factory()->create([
            'postcode' => 'SW1A 1AB',
            'name' => 'Buckingham Palace Gardens',
        ]);

        $results = app(DevelopmentServiceInterface::class)->fetchByPostcode('SW1A 1AA');
        $this->assertCount(1, $results);
        $this->assertEquals('Buckingham Palace', $results->first()->name);
        $this->assertEquals('SW1A 1AA', $results->first()->postcode);
    }
}
