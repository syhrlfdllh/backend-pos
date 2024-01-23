<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard');
    }

    public function count()
    {
        //count user and product, return view
        $userCount = \App\Models\User::count();
        $productCount = \App\Models\Product::count();

        return view('pages.dashboard', compact('userCount', 'productCount'));
    }
}
