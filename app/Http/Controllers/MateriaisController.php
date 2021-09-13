<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriaisController extends Controller
{
    public function index(Request $request) {
        $materiais = [
            'Avental',
            'Luva',
            'Máscara'
        ];
        return view('materiais.index', compact('materiais'));
    }

    public function create()
    {
        return view('materiais.create');
    }
};




