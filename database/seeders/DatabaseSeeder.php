<?php

namespace Database\Seeders;

use App\Models\EloquentDevelopmentModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        EloquentDevelopmentModel::factory()->count(50)->create();
    }
}
