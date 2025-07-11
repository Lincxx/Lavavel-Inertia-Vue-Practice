<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

// Route::get('/about', function () {
//     return inertia('About', ['user' => 'Mike']);
// });
// works the same as above
Route::inertia('/about', 'About', ['user' => 'Mike']);