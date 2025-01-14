<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Post;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::with('employer')->get()
    ]);
});


Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', [
        'job' => $job
    ]);

});

Route::get('/posts', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('/post/{id}', function ($id) {
    $post = Post::find($id);

    return view('post', [
        'post' => $post
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});