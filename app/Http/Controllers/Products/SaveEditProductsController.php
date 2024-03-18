<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class SaveEditProductsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Products $products)
    {
        $products->update([
           'name' => $request->name,
        ]);

        return to_route('products/');
    }
}
