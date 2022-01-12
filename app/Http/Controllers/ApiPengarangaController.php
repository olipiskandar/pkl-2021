<?php

namespace App\Http\Controllers;

use App\Models\Pengarang;
use Illuminate\Http\Request;

class ApiPengarangaController extends Controller
{
    public function index()
    {
        $pengarang = Pengarang::orderBy('id', 'desc')
                    // ->where('nama', 'HXZf9U4avN')
                    ->get();

        if ($pengarang->count() >=1 ) {
            return response()->json([
                'status' => true,
                'code' => 200,
                'message' => 'Berhasil',
                'data' => $pengarang,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'code' => 404,
                'message' => 'Gagal'
            ]);
        }
    }

    public function store(Request $request)
    {
        $pengarang = new Pengarang();
        $pengarang->nama = $request->nama;
        $pengarang->alamat = $request->alamat;
        $pengarang->save();

        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => 'Berhasil',
            'data' => $pengarang,
        ]);
    }

    public function update(Request $request, $id)
    {
        $pengarang = Pengarang::where('id', $id)->firstOrFail();
        $pengarang->nama = $request->nama;
        $pengarang->alamat = $request->alamat;
        $pengarang->save();

        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => 'Update Berhasil',
            'data' => $pengarang,
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $pengarang = Pengarang::where('id', $id)->delete();

        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => 'Berhasil dihapus',
            'data' => $pengarang,
        ]);
    }
}
