<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = [
        ['name' => 'Project One', 'description' => 'Description for project one.'],
        ['name' => 'Project Two', 'description' => 'Description for project two.'],
        ['name' => 'Project Three', 'description' => 'Description for project three.'],
    ];

    return view('portfolio', compact('projects'));
});

