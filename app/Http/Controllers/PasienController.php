<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PasienImport;
use App\Models\Pasien;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pasien = Pasien::when($request->cari, function ($query) use ($request) {
            $query
            ->where('nama', 'like', "%{$request->cari}%");
        })->paginate(5);

        $pasien->appends($request->only('cari'));

        return view('pasien-294.index', [
            'pasien' => $pasien,
        ])
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();

        return redirect()->route('pasien-294.index')
                ->with('success','Pasien berhasil dihapus');
    }

    /**
    * Import file excel to database
    */
    public function create()
    {
        return view('pasien-294.create');
    }

    /**
    * Import file excel to database
    */
    public function store(Request $request)
    {
        $request->validate([
            'file_excel' => 'required',
        ]);

        Excel::import(new PasienImport, request()->file('file_excel'));

        return redirect()->route('pasien-294.index')
        ->with('success','Berhasil mengimport ke Pasien');
    }
}
