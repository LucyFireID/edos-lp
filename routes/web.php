<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::school.landing')->name('home');

Route::livewire('/program', 'pages::school.landing')
    ->defaults('section', 'nurture')
    ->name('program');

Route::livewire('/fasilitas', 'pages::school.landing')
    ->defaults('section', 'qurani')
    ->name('facilities');

Route::livewire('/universitas', 'pages::school.landing')
    ->defaults('section', 'universities')
    ->name('universities');

Route::livewire('/berita', 'pages::school.landing')
    ->defaults('section', 'news')
    ->name('news');
