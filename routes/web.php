<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CompanyOverview;
use App\Livewire\OurTeam;
use App\Livewire\OurPartners;
use App\Livewire\Projects;
use App\Livewire\OurServices;
use App\Livewire\Experience;
use App\Livewire\ContactUs;
use App\Livewire\CoreValues;
use App\Livewire\Mission;
use App\Livewire\Vision;
use App\Livewire\AboutUs;

Route::get('/', CompanyOverview::class)->name('company-overview');
Route::get('about-us', AboutUs::class)->name('about-us');
Route::get('mission', Mission::class)->name('mission');
Route::get('vision', Vision::class)->name('vision');
Route::get('core-values', CoreValues::class)->name('core-values');
Route::get('our-team', OurTeam::class)->name('our-team');
Route::get('our-partners', OurPartners::class)->name('our-partners');
Route::get('projects', Projects::class)->name('projects');
Route::get('our-services', OurServices::class)->name('our-services');
Route::get('experience', Experience::class)->name('experience');
Route::get('contact-us', ContactUs::class)->name('contact-us');
