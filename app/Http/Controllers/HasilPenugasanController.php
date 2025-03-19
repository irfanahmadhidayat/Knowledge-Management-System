<?php

namespace App\Http\Controllers;

use App\Models\TblPenugasan;
use Illuminate\Http\Request;
use App\Models\TblHasilPenugasan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;
use Spatie\Permission\Middleware\PermissionMiddleware;

class HasilPenugasanController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware(PermissionMiddleware::using('hasilPenugasan-view'), only: ['index', 'show']),
            new Middleware(PermissionMiddleware::using('hasilPenugasan-create'), only: ['create', 'store']),
            new Middleware(PermissionMiddleware::using('hasilPenugasan-update'), only: ['edit', 'update']),
            new Middleware(PermissionMiddleware::using('hasilPenugasan-delete'), only: ['destroy']),
        ];
    }

    public function index()
    {
        $tugass = TblHasilPenugasan::with('user')->get();
        return view('page.hasil-penugasan.index', compact('tugass'));
    }

    public function create(Request $request)
    {
        $penugasan_id = $request->query('penugasan_id');
        $penugasan = TblPenugasan::find($penugasan_id);

        if (!$penugasan) {
            return redirect()->back()->with('error', 'Penugasan tidak ditemukan.');
        }

        return view('page.hasil-penugasan.create', compact('penugasan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'penugasan_id' => 'required|exists:tbl_penugasans,id',
            'file' => 'nullable|mimes:jpg,png,pdf|max:2048',
            'link' => 'nullable|url',
            'comment' => 'required|string',
        ]);

        $filePath = null;

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('uploads/tugas', 'public');
        }

        TblHasilPenugasan::create([
            'user_id' => Auth::user()->id,
            'penugasan_id' => $request->penugasan_id,
            'file_path' => $filePath,
            'link' => $request->link,
            'comment' => $request->comment,
        ]);

        $redirectRoutes = [
            'admin' => 'hasil-penugasan.index',
            'design' => 'design-penugasan.index',
            'rnd' => 'rnd-penugasan.index',
        ];

        $userRole = Auth::user()->roles->first()->name ?? null;

        return redirect()->route($redirectRoutes[$userRole] ?? 'dashboard')
            ->with('success', 'Tugas berhasil dikirim!');
    }

    public function show($id)
    {
        $tugas = TblHasilPenugasan::with('user', 'penugasan')->findOrFail($id);
        return view('page.hasil-penugasan.show', compact('tugas'));
    }

    public function destroy($id)
    {
        $tugas = TblHasilPenugasan::findOrFail($id);

        if ($tugas->file_path) {
            Storage::disk('public')->delete($tugas->file_path);
        }

        $tugas->delete();

        return redirect()->route('hasil-penugasan.index')->with('success', 'Hasil tugas berhasil dihapus.');
    }
}
