<?php

declare(strict_types=1);

namespace App\Interfaces;

interface TrashedChapterRepositoryInterface
{
    public function getTrashes($course);

    public function restore($course, string $key, $alert);

    public function deleted($course, string $key, $alert);
}
