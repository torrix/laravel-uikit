<?php

Route::middleware('web')->group(function () {
    Route::get('/demo', static function () {
        return view('laravel-uikit::demo');
    })->name('demo');
});
