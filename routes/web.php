<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::school.landing')->name('home');
Route::livewire('/kebijakan-privasi', 'pages::school.privacy')->name('privacy');
Route::livewire('/syarat-ketentuan', 'pages::school.terms')->name('terms');
Route::livewire('/berita', 'pages::school.blog')->name('blog');
Route::livewire('/berita/{slug}', 'pages::school.post')->name('blog.post');
Route::livewire('/tenaga-pendidik', 'pages::school.teachers')->name('teachers');
