<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $title = env('APP_NAME');
        return inertia('Shop/Index', compact('title'));
    }
}
