<?php

declare(strict_types=1);

namespace App\Repositories\Backend;

use App\Contracts\ResultRepositoryInterface;

final class ResultRepository implements ResultRepositoryInterface
{
    public function results()
    {
        return [];
    }

    public function showResult(string $key)
    {
        // TODO: Implement showResult() method.
    }

    public function stored($attributes)
    {
        // TODO: Implement stored() method.
    }

    public function updated(string $key, $attributes)
    {
        // TODO: Implement updated() method.
    }

    public function deleted(string $key)
    {
        // TODO: Implement deleted() method.
    }
}
