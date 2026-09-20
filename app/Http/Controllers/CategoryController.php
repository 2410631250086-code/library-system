<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [
            'Pemograman Web Framework',
            'Blockchain',
            'Basis Data',
            'Etika Profesi dan Profesional',
            'Pengantar Kecerdasan Buatan'
        ];
        return view('categories.index', compact('categories'));
    }
}
