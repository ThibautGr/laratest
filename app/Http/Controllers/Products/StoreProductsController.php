<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreProductsController extends Controller
{
    public function __invoke(Request $request): void
    {
           Products::create([
             'name' => $request->name,
             'user_id' => Auth::id()
           ]);
    }
}
