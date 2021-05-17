<?php

use Illuminate\Support\Facades\Route;
use Dev1024\StorageLinkRoute\Http\Controllers\StorageLinkController;

Route::get('storage-link', StorageLinkController::class);
