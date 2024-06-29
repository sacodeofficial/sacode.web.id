<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Guest\AboutUs as AboutUs;
use App\Livewire\Guest\CodingCourses\Index as CodingCourses;
use App\Livewire\Guest\Contributor\Index as Contributor;
use App\Livewire\Guest\Donation as Donation;
use App\Livewire\Guest\Merchandise as Merchandise;
use App\Livewire\Guest\TechShare\Index as TechShare;
use App\Livewire\Guest\Playgrounds\Index as Playgrounds;
use App\Livewire\Guest\Blog\Index as Blogs;
use App\Livewire\Guest\Blog\Show as BlogsShow;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about-us', AboutUs::class)->name('aboutus');
Route::get('/codingcourses', CodingCourses::class)->name('codingcourses');
Route::get('/contributor', Contributor::class)->name('contributors');
Route::get('/techshare-events/2024', TechShare::class)->name('techshare');
Route::get('/playground', Playgrounds::class)->name('playgrounds');
Route::get('/merchandise', Merchandise::class)->name('merchandise');

Route::get('/blogs', Blogs::class)->name('blogs');
Route::get('/blogs/{slug}', BlogsShow::class)->name('blogs.show');

Route::get('/donation', Donation::class)->name('donation');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});