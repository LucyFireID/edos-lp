<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::school.landing')->name('home');
Route::livewire('/kebijakan-privasi', 'pages::school.privacy')->name('privacy');
