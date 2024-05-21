<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Guest\AboutUs as AboutUs;
use App\Livewire\Guest\CodingCourses as CodingCourses;
use App\Livewire\Guest\Contributors as Contributors;
use App\Livewire\Guest\Donation as Donation;
use App\Livewire\Guest\Merchandise as Merchandise;
use App\Livewire\Guest\TechShare as TechShare;
use App\Livewire\Guest\Playgrounds as Playgrounds;
use App\Livewire\Guest\Blogs as Blogs;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about-us', AboutUs::class)->name('aboutus');
Route::get('/codingcourses', CodingCourses::class)->name('codingcourses');
Route::get('/our-contributors', Contributors::class)->name('our-contributors');
Route::get('/techshare-events/2024', TechShare::class)->name('techshare');
Route::get('/playgrounds', Playgrounds::class)->name('playgrounds');
Route::get('/merchandise', Merchandise::class)->name('merchandise');
Route::get('/blogs', Blogs::class)->name('blogs');
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