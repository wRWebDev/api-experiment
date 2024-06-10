<?php

namespace App\Services;

use App\Contracts\DevelopmentServiceInterface;
use App\Models\EloquentDevelopmentModel;
use Illuminate\Support\Collection;

class EloquentDevelopmentService implements DevelopmentServiceInterface
{
    public function fetchByPostcode(string $postcode): Collection
    {
        return EloquentDevelopmentModel::query()
            ->where('postcode', $postcode)
            ->get()
            ->map(fn (EloquentDevelopmentModel $development) => $development->toDto());
    }
}
