<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;

class POSController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $suppliers = Supplier::all();

        return view("pos.index", [
            'products' => $products,
            'categories' => $categories,
            'suppliers' => $suppliers
        ]);
    }
}
