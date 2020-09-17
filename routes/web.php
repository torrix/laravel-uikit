<?php

Route::get('/demo', static function () {
    return view('laravel-uikit::demo');
})->name('demo');
