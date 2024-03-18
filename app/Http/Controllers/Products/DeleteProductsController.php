<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class DeleteProductsController extends Controller
{
    public function __invoke(Products $product)
    {
        $product->delete();
        return to_route('products/');
    }
}
