<?php
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

include 'Products/routesProducts.php';
