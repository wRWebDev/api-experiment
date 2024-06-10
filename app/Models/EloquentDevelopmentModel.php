<?php

namespace App\Models;

use App\Dto\DevelopmentDto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EloquentDevelopmentModel extends Model
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
}
