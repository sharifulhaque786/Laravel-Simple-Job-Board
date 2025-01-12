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
                'description' => 'We are looking for a web developer'
            ],
            [
                'id' => 2,
                'title' => 'Graphic Designer',
                'description' => 'We are looking for a graphic designer'
            ],
            [
                'id' => 3,
                'title' => 'Project Manager',
                'description' => 'We are looking for a project manager'
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