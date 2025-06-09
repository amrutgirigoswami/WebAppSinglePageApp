<?php

use App\Livewire\Blog;
use App\Livewire\Team;
use App\Livewire\FaqPage;
use App\Livewire\ShowHome;
use App\Livewire\ContactUs;
use App\Livewire\BlogDetail;
use App\Livewire\ShowService;
use App\Livewire\CommonShowPage;
use App\Livewire\ShowServicePage;
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

Route::get('/faq',FaqPage::class)->name('faq');
Route::get('/page/{id}',CommonShowPage::class)->name('page.show');

Route::get('/contact-us', ContactUs::class)->name('contact-us');
