<?php

namespace App\Http\Controllers;

use App\Models\Funfact;
use App\Models\Category;
use Illuminate\Http\Request;

class FunfactController extends Controller
{
    // index
    public function index()
    {   
        $funfacts = Funfact::latest()->paginate(10);
        return view('components.about', ["funfact" => $funfacts]);
    }

    // create
    public function create()
    {   
        $categories = Category::all();
        
        return view('components.createfunfacts', ["categories" => $categories]);
    }

    // store
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'name' => 'required|string|max:100', 
            'fact' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        Funfact::create($request->all());

        return redirect()->route('funfact.index')->with('success', 'Funfact created successfully.');
    }


    // show
    public function show(Funfact $funfact)
    {   
        return view('components.details', ["funfact" => $funfact]);
    }

    // edit
    public function edit($id)
    {
        return view('funfact.edit', compact('id'));
    }
}
