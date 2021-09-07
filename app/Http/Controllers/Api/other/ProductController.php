<?php

namespace App\Http\Controllers\Api\other;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $products = Product::with('type')
            ->where('team_id', $team_id)
            ->get();
        return $products;
    }

    public function create()
    {
        $products = ProductType::all(['id', 'nickname']);
        return $products;
    }
}
