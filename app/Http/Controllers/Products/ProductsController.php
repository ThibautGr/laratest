<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Products;

class ProductsController extends Controller
{
    public function __invoke()
    {

        $products = Products::all();
        return view(
            'products.index',
            [
                'products' => $products
            ]
        );
    }
}
