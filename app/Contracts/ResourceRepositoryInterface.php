<?php

declare(strict_types=1);

namespace App\Contracts;

interface ResourceRepositoryInterface
{
    public function resources();

    public function showResource(string $key);

    public function stored($attributes);

    public function updated(string $key, $attributes);

    public function deleted(string $key);
}
