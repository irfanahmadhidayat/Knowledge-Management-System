<?php

namespace App\Http\Controllers;

use App\Models\TblKebijakan;
use Illuminate\Http\Request;

class KebijakanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kebijakans = TblKebijakan::all();
        return view('page.kebijakan.index', compact('kebijakans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page.kebijakan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        TblKebijakan::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('kebijakan.index')->with('success', 'Kebijakan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kebijakan = TblKebijakan::findOrFail($id);
        return view('page.kebijakan.show', compact('kebijakan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kebijakan = TblKebijakan::findOrFail($id);
        return view('page.kebijakan.edit', compact('kebijakan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $kebijakan = TblKebijakan::findOrFail($id);
        $kebijakan->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('kebijakan.index')->with('success', 'Kebijakan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kebijakan = TblKebijakan::findOrFail($id);
        $kebijakan->delete();

        return redirect()->route('kebijakan.index')->with('success', 'Kebijakan berhasil dihapus!');
    }
}
