<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Models\Kamar;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kamar = Kamar::when($request->cari, function ($query) use ($request) {
            $query
            ->where('id', 'like', "%{$request->cari}%");
        })->paginate(5);

        $kamar->appends($request->only('cari'));

        return view('kamar.index', [
            'kamar' => $kamar,
        ])
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamar $kamar)
    {
        $kamar->delete();

        return redirect()->route('kamar.index')
                ->with('success','Kamar berhasil dihapus');
    }

    /**
    * Import file excel to database
    */
    public function import()
    {
        Excel::import(new UsersImport, request()->file('file_excel'));

        return redirect()->route('kamar.index')
        ->with('success','Berhasil mengimport ke Kamar');
    }
}
