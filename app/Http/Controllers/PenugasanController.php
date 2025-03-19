<?php

namespace App\Http\Controllers;

use App\Models\TblPenugasan;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;
use Spatie\Permission\Middleware\PermissionMiddleware;

class PenugasanController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware(PermissionMiddleware::using('penugasan-view'), only: ['index', 'show']),
            new Middleware(PermissionMiddleware::using('penugasan-create'), only: ['create', 'store']),
            new Middleware(PermissionMiddleware::using('penugasan-update'), only: ['edit', 'update']),
            new Middleware(PermissionMiddleware::using('penugasan-delete'), only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penugasans = TblPenugasan::all();
        return view('page.penugasan.index', compact('penugasans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penugasans = TblPenugasan::all();
        $roles = Role::all();

        return view('page.penugasan.create', compact('penugasans', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'penugasan_name' => 'required',
            'penugasan_description' => 'required',
            'file' => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048',
            'link' => 'nullable|url',
            'role_id' => 'required',
        ]);

        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('penugasans', 'public');
        }

        Tblpenugasan::create([
            'penugasan_name' => $request->penugasan_name,
            'penugasan_description' => $request->penugasan_description,
            'role_id' => $request->role_id,
            'file_path' => $filePath,
            'link' => $request->link,
        ]);

        return redirect()->route('penugasan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penugasan = Tblpenugasan::findorfail($id);
        return view('page.penugasan.show', compact('penugasan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $penugasan = Tblpenugasan::findOrFail($id);
        $roles = Role::all();

        return view('page.penugasan.edit', compact('penugasan', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'penugasan_name' => 'required',
            'penugasan_description' => 'required',
            'role_id' => 'required',
            'file' => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048',
            'link' => 'nullable|url',
        ]);

        $penugasan = Tblpenugasan::findOrFail($id);
        $filePath = $penugasan->file_path;

        if ($request->hasFile('file')) {
            if ($penugasan->file_path) {
                Storage::delete('public/' . $penugasan->file_path);
            }
            $file = $request->file('file');
            $filePath = $file->store('penugasans', 'public');
        }

        $penugasan->update([
            'penugasan_name' => $request->penugasan_name,
            'penugasan_description' => $request->penugasan_description,
            'role_id' => $request->role_id,
            'file_path' => $filePath,
            'link' => $request->link,
        ]);

        return redirect()->route('penugasan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penugasan = Tblpenugasan::findOrFail($id);

        if ($penugasan->file_path) {
            Storage::delete('public/' . $penugasan->file_path);
        }

        $penugasan->delete();

        return redirect()->route('penugasan.index');
    }
}
