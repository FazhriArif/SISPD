<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Surat;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlahSuratMenunggu = Surat::where('status_id', 1)->count();
        return view('dashboard.kendaraan.index',[
            'kendaraans' => Kendaraan::latest()->get(),
            'jumlahSuratMenunggu' => $jumlahSuratMenunggu
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jumlahSuratMenunggu = Surat::where('status_id', 1)->count();
        return view('dashboard.kendaraan.create',['jumlahSuratMenunggu' => $jumlahSuratMenunggu]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
        ]);

        Kendaraan::create($validate);
        return redirect('/kendaraan')->with('success','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function show(Kendaraan $kendaraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kendaraan $kendaraan)
    {
        $jumlahSuratMenunggu = Surat::where('status_id', 1)->count();
        return view('dashboard.kendaraan.edit',[
            'kendaraans' => Kendaraan::find($kendaraan),
            'jumlahSuratMenunggu' => $jumlahSuratMenunggu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kendaraan $kendaraan)
    {
        $rules = [
            'nama' => 'required',
        ];

        $validate = $request->validate($rules);
        Kendaraan::where('id',$kendaraan->id)->update($validate);
        return redirect('/kendaraan')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kendaraan $kendaraan)
    {
        Kendaraan::destroy($kendaraan->id);

        return redirect('/kendaraan')->with('success','Deleted Successfully!');
    }

    public function data()
    {
        return Datatables::of(Kendaraan::query())->make(true);
    }
}
