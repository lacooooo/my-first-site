<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/valtozok', function () {
    $val = "siti";
    return view('valtozok',[
        'val' => $val
    ]);
});

//Route::view('/valtozok' , 'valtozok', ['name' => 'John']);

Route::get('/pass-array', function () {
    $tasks = [
      'Go to the store',
      'Go to the market',
      'Go to the work'
    ];
    /*return view('tasks-list', [
      'tasks' => $tasks
    ]);*/
    /*return view('tasklist')->withTasks($tasks); */

    $foobar = 'foobar';
    return view('tasks-list')->with([
        'foo' => $foobar,
        'tasks' => $tasks
      ]); 
});


Route::get('/request-test', function () {
    return view('request-inputs', [
      'title' => request('title'),
    ]);
  });
  
/*
Route::get('/posts/{post}', function ($post) {
  return view('post', [
    'post' => $post
  ]);
});
  */

  Route::get('/posts/{post}', function ($post) {
    $posts = [
      'first-post' => 'Hello, this is my first blog post!',
      'second-post' => 'Now I am getting the hang of this blogging thing'
    ];
    if ( ! array_key_exists($post, $posts)) {
        abort(404);
      }      
    return view('post', [
      'post' => $posts[$post]
    ]);
  });
  
  
