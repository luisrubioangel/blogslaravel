<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catergory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Catergory::all();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:catergories',
        ]);
        $category = Catergory::create($request->all());

        return redirect()->route('admin.categories.edit', $category)->with('info', 'la categoria se creo con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Catergory $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catergory $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catergory $category)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:catergories,slug,$category->id",
        ]);
        $category->update($request->all());

        return redirect()->route('admin.categories.edit', $category)->with('info', 'la categoria se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catergory $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')->with('info', 'la categoria se eliminar con exito');

    }
}
