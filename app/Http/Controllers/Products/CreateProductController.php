<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class CreateProductController extends Controller
{
    public function __invoke(): view
    {
        return view('products.create');
    }
}
