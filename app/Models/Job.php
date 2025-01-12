<?php

namespace App\Models;
use Illuminate\Support\Arr;
class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Web Developer',
                'salary' => '$40000'
            ],
            [
                'id' => 2,
                'title' => 'Graphic Designer',
                'salary' => '$50000'
            ],
            [
                'id' => 3,
                'title' => 'Project Manager',
                'salary' => '$70000'
            ]
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}