<?php

use Illuminate\Support\Facades\Route;
use Uasoft\Badaso\Theme\ComfreeTheme\Controllers\DetailController;
use Uasoft\Badaso\Theme\ComfreeTheme\Controllers\HomeController;

$comfree_route_prefix = config('badaso-comfree-theme.comfree_theme_prefix');

Route::prefix($comfree_route_prefix)
    ->as('badaso.comfree-theme.')
    ->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/{slug}', [DetailController::class, 'index'])->name('detail');

    });

