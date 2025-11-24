<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Define projects directly here
    $projects = [
        ['name' => 'Project One', 'description' => 'Description for project one.'],
        ['name' => 'Project Two', 'description' => 'Description for project two.'],
        ['name' => 'Project Three', 'description' => 'Description for project three.'],
    ];

    // Return the Blade view named "portfolio" and pass $projects
    return view('portfolio', ['projects' => $projects]);
});
