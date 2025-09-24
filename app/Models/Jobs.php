<?php

namespace App\Models;


use Illuminate\Support\Arr;

class Jobs {

    public static function all(): array {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40,000'
            ]
        ];
    }

    public static function find($id): array {
// TODO: this is from the lesson, but the filter logic does not work .. why?
//    $job = Arr::first($jobs, function($job) use ($id) {
//        return $id == $job['id'];
//    });

        $job = array_filter(Jobs::all(), function($job) use ($id) {
            return $id == $job['id'];
        });

        if ($job === []) {
            abort(404);
        }

        return Arr::first($job);
    }
};
