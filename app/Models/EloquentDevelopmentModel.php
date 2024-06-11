<?php

namespace App\Models;

use App\Contracts\DevelopmentServiceInterface;
use App\Dto\DevelopmentDto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class EloquentDevelopmentModel extends Model implements DevelopmentServiceInterface
{
    use HasFactory;

    protected $table = 'developments';

    public function toDto(): DevelopmentDto
    {
        return new DevelopmentDto(
            id: $this->id,
            name: $this->name,
            postcode: $this->postcode,
        );
    }

    /**
     * @return Collection<DevelopmentDto>
     */
    public function fetchByPostcode(string $postcode): Collection
    {
        return EloquentDevelopmentModel::where('postcode', $postcode)->get();
    }
}
