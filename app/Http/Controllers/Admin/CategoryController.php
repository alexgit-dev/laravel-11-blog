<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::query()->paginate(10);

        return view(
            'admin.category.index',
            ['categories' => $categories]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //session()->flash('success', 'OK');
        //session()->flash('error', 'NOT OK');

        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'max:255', 'min:5'],
            'meta_desc' => ['max:255'],
        ]);

        // dd($validated);

        Category::query()->create($validated);

        // для генерации слагов
        // https://github.com/cviebrock/eloquent-sluggable

        return redirect()
            ->route('categories.index')
            ->with('success', 'Category [' . $validated['title'] . '] added successfully');
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
        $category = Category::query()->findOrFail($id);

        return view(
            'admin.category.edit',
            ['category' => $category]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::query()->findOrFail($id);

        $validated = $request->validate([
            'title' => ['required', 'max:255', 'min:5'],
            'meta_desc' => ['max:255'],
        ]);

        $category->update($validated);

        return redirect()
            ->route('categories.index')
            ->with('success', 'Category [' . $validated['title'] . '] updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
