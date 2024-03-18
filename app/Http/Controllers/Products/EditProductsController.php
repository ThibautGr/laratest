<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class EditProductsController extends Controller
{

    public function __invoke(Request $request, Products $products)
    {

        return view('products.edit',['product' => $products]);
    }
}
