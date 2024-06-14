<?php

namespace App\Services;

use App\Contracts\DevelopmentServiceInterface;
use App\Models\EloquentDevelopmentModel;
use Illuminate\Support\Collection;

class EloquentDevelopmentService implements DevelopmentServiceInterface
{
    public function fetch(): Collection
    {
        return EloquentDevelopmentModel::all()
            ->map(fn (EloquentDevelopmentModel $development) => $development->toDto());
    }

    public function fetchByPostcode(string $postcode): Collection
    {
        return EloquentDevelopmentModel::query()
            ->where('postcode', $postcode)
            ->get()
            ->map(fn (EloquentDevelopmentModel $development) => $development->toDto());
    }
}
