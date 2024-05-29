<?php

namespace App\Http\Controllers;

use App\Models\Buildings;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $buildings = Buildings::all();

        return view('index', ['buildings' => $buildings]);
    }

    public function viewMarkers()
    {
        // Ambil semua data dari tabel buildings
        $buildings = Buildings::all();

        // Buat array untuk menyimpan koordinat marker
        $markers = [];

        // Iterasi setiap building
        foreach ($buildings as $building) {
            // Tambahkan koordinat ke array markers
            $markers[] = [
                'lat' => $building->latitude,
                'lng' => $building->longitude,
                'name' => $building->name,
                'description' => $building->description,
            ];
        }
        return view('maps', compact('markers'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $buildings = Buildings::where('name', 'like', '%' . $search . '%')->get();
        return view('index', ['buildings' => $buildings]);
    }
}
