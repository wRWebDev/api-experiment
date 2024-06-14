<?php

namespace App\Contracts;

use App\Dto\DevelopmentDto;
use Illuminate\Support\Collection;

interface DevelopmentServiceInterface
{
    /**
     * @return Collection<DevelopmentDto>
     */
    public function fetch(): Collection;

    /**
     * @return Collection<DevelopmentDto>
     */
    public function fetchByPostcode(string $postcode): Collection;
}
