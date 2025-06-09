<?php

use App\Livewire\Blog;
use App\Livewire\BlogDetail;
use App\Livewire\ShowHome;
use App\Livewire\ShowService;
use App\Livewire\ShowServicePage;
use App\Livewire\Team;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',ShowHome::class)->name('home');
Route::get('/service', ShowServicePage::class)->name('service');
Route::get('/service/{id}', ShowService::class)->name('service.show');

Route::get('/team',Team::class)->name('team');

Route::get('/blog',Blog::class)->name('blog');
Route::get('/blog/{id}',BlogDetail::class)->name('blog.detail');
