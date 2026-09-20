<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard Library System';
        $description = 'Welcome to Library System';
        $totalBooks = 150;
        $totalMembers = 50;
        $totalCategories = 10;

        return view('dashboard.index', compact(
            'title',
            'description',
            'totalBooks',
            'totalMembers',
            'totalCategories'
        ));

    }
}
