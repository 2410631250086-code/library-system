<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            'Rahma',
            'Caca',
            'Siti',
            'Ica',
            'Valen',
        ];
        return view ('members.index', compact('members'));
    }
}
