<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MateriaisController extends Controller
{
    public function index(Request $request) {
        $materiais = Material::all();
        return view('materiais.index', compact('materiais'));
    }

    public function create()
    {
        return view('materiais.create');
    }

    public function store(Request $request)
    {
        Material::create($request->all());
        return redirect('/materiais');
    }
};
