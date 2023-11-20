<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $title = "ADMIN PANEL";
        return inertia('Admin/Index', compact('title'));
    }
}
