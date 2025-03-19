<?php

namespace App\Http\Controllers;

use App\Models\TblMaterial;
use App\Models\TblKebijakan;
use App\Models\TblPenugasan;
use Illuminate\Http\Request;
use App\Models\TblHasilPenugasan;

class DashboardController extends Controller
{
    public function index()
    {
        $kebijakans = TblKebijakan::all();
        $totalMaterials = TblMaterial::count();
        $totalPenugasans = TblPenugasan::count();
        $totalHasilTugas = TblHasilPenugasan::count();

        return view('page.dashboard', compact('kebijakans', 'totalMaterials', 'totalPenugasans', 'totalHasilTugas'));
    }

    public function show(string $id)
    {
        $kebijakan = TblKebijakan::findOrFail($id);
        return view('page.dashboard.show', compact('kebijakan'));
    }
}
