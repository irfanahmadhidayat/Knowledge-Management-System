<?php

namespace App\Http\Controllers;

use App\Models\TblMaterial;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;
use Spatie\Permission\Middleware\PermissionMiddleware;

class MaterialController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware(PermissionMiddleware::using('material-view'), only: ['index', 'show']),
            new Middleware(PermissionMiddleware::using('material-create'), only: ['create', 'store']),
            new Middleware(PermissionMiddleware::using('material-update'), only: ['edit', 'update']),
            new Middleware(PermissionMiddleware::using('material-delete'), only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materials = TblMaterial::all();
        return view('page.material.index', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $materials = TblMaterial::all();
        $roles = Role::all();

        return view('page.material.create', compact('materials', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'material_name' => 'required',
            'material_description' => 'required',
            'file' => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048',
            'link' => 'nullable|url',
            'role_id' => 'required',
        ]);

        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('materials', 'public');
        }

        TblMaterial::create([
            'material_name' => $request->material_name,
            'material_description' => $request->material_description,
            'role_id' => $request->role_id,
            'file_path' => $filePath,
            'link' => $request->link,
        ]);

        return redirect()->route('material.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $material = TblMaterial::findorfail($id);
        return view('page.material.show', compact('material'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $material = TblMaterial::findOrFail($id);
        $roles = Role::all();

        return view('page.material.edit', compact('material', 'roles'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'material_name' => 'required',
            'material_description' => 'required',
            'role_id' => 'required',
            'file' => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048',
            'link' => 'nullable|url',
        ]);

        $material = TblMaterial::findOrFail($id);
        $filePath = $material->file_path;

        if ($request->hasFile('file')) {
            if ($material->file_path) {
                Storage::delete('public/' . $material->file_path);
            }
            $file = $request->file('file');
            $filePath = $file->store('materials', 'public');
        }

        $material->update([
            'material_name' => $request->material_name,
            'material_description' => $request->material_description,
            'role_id' => $request->role_id,
            'file_path' => $filePath,
            'link' => $request->link,
        ]);

        return redirect()->route('material.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $material = TblMaterial::findOrFail($id);

        if ($material->file_path) {
            Storage::delete('public/' . $material->file_path);
        }

        $material->delete();

        return redirect()->route('material.index');
    }
}
