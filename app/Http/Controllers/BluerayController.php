<?php

namespace App\Http\Controllers;

use App\Models\Blueray;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BluerayController extends Controller
{
    // Menampilkan semua data blueray
    public function index()
    {
        $bluerays = Blueray::all();
        return view('blueray.indexBlueray', compact('bluerays'));
    }

    // Menampilkan form tambah blueray
    public function create()
    {
        return view('blueray.createBlueray');
    }

    // Menyimpan data blueray baru
    public function store(Request $request)
    {
        $request->validate([
            'merkblueray'   => 'required|max:30',
            'stockblueray'  => 'required|integer|min:0',
            'tersedia'      => 'required|in:Y,N',
        ]);

        Blueray::create([
            'merkblueray'   => $request->merkblueray,
            'stockblueray'  => $request->stockblueray,
            'tersedia'      => $request->tersedia,
        ]);

        return redirect('/blueray')->with('success', 'Data blueray berhasil ditambahkan!');
    }

    // Menampilkan form edit blueray
    public function edit($id)
    {
        $blueray = Blueray::findOrFail($id);
        return view('blueray.editBlueray', compact('blueray'));
    }

    // Mengupdate data blueray
    public function update(Request $request, $id)
    {
        $request->validate([
            'merkblueray'   => 'required|max:30',
            'stockblueray'  => 'required|integer|min:0',
            'tersedia'      => 'required|in:Y,N',
        ]);

        $blueray = Blueray::findOrFail($id);
        $blueray->update([
            'merkblueray'   => $request->merkblueray,
            'stockblueray'  => $request->stockblueray,
            'tersedia'      => $request->tersedia,
        ]);

        return redirect('/blueray')->with('success', 'Data blueray berhasil diupdate!');
    }

    // Menghapus data blueray
    public function destroy($id)
    {
        $blueray = Blueray::findOrFail($id);
        $blueray->delete();

        return redirect('/blueray')->with('success', 'Data blueray berhasil dihapus!');
    }
}
