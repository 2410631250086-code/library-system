<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['title' => 'Pemograman Web Framework', 'author' => 'Rahma Nur Khotimah', 'year' => 2026],
            ['title' => 'Blockchain', 'author' => 'Arzetti Nisa Zarika', 'year' => 2025],
            ['title' => 'Basis Data', 'author' => 'Siti Aliza', 'year' => 2024],
            ['title' => 'Etika Profesi dan Profesional', 'author' => 'Nisa Ardila', 'year' => 2023],
            ['title' => 'Pengantar Kecerdasan Buatan', 'author' => 'Annisa Arke Valeriana', 'year' => 2022],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}
