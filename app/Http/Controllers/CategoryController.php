<?php

namespace App\Http\Controllers;

use App\Models\TblCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = TblCategory::all();
        $existingCategories = $categories->pluck('category_name')->toArray();

        $allCategories = ['Materi', 'Modul', 'Kebijakan'];
        $remainingCategories = array_diff($allCategories, $existingCategories);
        return view('page.category.index', compact('categories', 'remainingCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = TblCategory::all();
        return view('page.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|in:Materi,Modul,Kebijakan',
        ]);

        TblCategory::create([
            'category_name' => $request->category_name,
        ]);

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories = TblCategory::findorfail($id);
        $categories->delete();
        return redirect()->route('category.index');
    }
}
