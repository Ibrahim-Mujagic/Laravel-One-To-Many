<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Category $category)
    {
        $data = $request->validate(
            [
            'name' => 'required|unique:categories'
            ]
        );
        $slug = Str::slug($data['name']);
        $data['slug'] = $slug;

        $category->create($data);


        return redirect()->back()->with('message',"Categoria $request->name creata corretamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->validate(
            [
            'name' => 'required|unique:categories'
            ]
        );
        $slug = Str::slug($data['name']);
        $data['slug'] = $slug;

        $category->update($data);


        return redirect()->back()->with('message',"Categoria $request->name aggiornata corretamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('message',"Categoria eliminata corretamente");
    }
}
