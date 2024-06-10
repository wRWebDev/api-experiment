<?php

namespace App\Dto;

readonly class DevelopmentDto
{
    public function __construct(
        public int $id,
        public string $name,
        public string $postcode,
    ) {
    }
}
