<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $title = 'ADMIN PANEL';

        return inertia('Admin/Index', compact('title'));
    }
}
