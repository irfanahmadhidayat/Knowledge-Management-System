<?php

namespace App\Http\Controllers\Rnd;

use App\Models\TblMaterial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;
use Spatie\Permission\Middleware\PermissionMiddleware;

class RndMaterialController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware(PermissionMiddleware::using('rndMaterial-view'), only: ['index', 'show']),
            new Middleware(PermissionMiddleware::using('rndMaterial-create'), only: ['create', 'store']),
            new Middleware(PermissionMiddleware::using('rndMaterial-update'), only: ['edit', 'update']),
            new Middleware(PermissionMiddleware::using('rndMaterial-delete'), only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $userRole = $user->roles->first();

        if (!$userRole) {
            return redirect()->back()->with('error', 'Anda belum memiliki role.');
        }

        $isAdmin = $userRole->name === 'admin';

        if ($isAdmin) {
            $materials = TblMaterial::all();
        } else {
            $materials = TblMaterial::where('role_id', $userRole->id)->get();
        }

        return view('page.rnd.material.index', compact('materials'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $material = TblMaterial::findorfail($id);
        return view('page.rnd.material.show', compact('material'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
