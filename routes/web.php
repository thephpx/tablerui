<?php

use Illuminate\Support\Facades\Route;

Route::prefix('tablerui')->middleware(['web'])->group(function () {
	Route::get('/blank', \Thephpx\Tablerui\Http\Controllers\Index::class)->name('tablerui.blank');
	Route::get('/form', \Thephpx\Tablerui\Http\Controllers\Form::class)->name('tablerui.form');
});

