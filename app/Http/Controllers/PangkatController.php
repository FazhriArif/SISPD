<?php

namespace App\Http\Controllers;

use App\Models\Pangkat;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Surat;

class PangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlahSuratMenunggu = Surat::where('status_id', 1)->count();
        return view('dashboard.pangkat.index',[
            'pangkats' => Pangkat::get()->all(),
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
        return view('dashboard.pangkat.create',['jumlahSuratMenunggu' => $jumlahSuratMenunggu]);
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
            'golongan' => 'required',
            'ruang' => 'required',
        ]);

        Pangkat::create($validate);
        return redirect('/pangkat')->with('success','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pangkat  $pangkat
     * @return \Illuminate\Http\Response
     */
    public function show(Pangkat $pangkat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pangkat  $pangkat
     * @return \Illuminate\Http\Response
     */
    public function edit(Pangkat $pangkat)
    {
        $jumlahSuratMenunggu = Surat::where('status_id', 1)->count();
        return view('dashboard.pangkat.edit',[
            'pangkats' => Pangkat::find($pangkat),
            'jumlahSuratMenunggu' => $jumlahSuratMenunggu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pangkat  $pangkat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pangkat $pangkat)
    {
        $rules = [
            'golongan' => 'required',
            'ruang' => 'required',
        ];

        $validate = $request->validate($rules);
        Pangkat::where('id',$pangkat->id)->update($validate);
        return redirect('/pangkat')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pangkat  $pangkat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pangkat $pangkat)
    {
        Pangkat::destroy($pangkat->id);

        return redirect('/pangkat')->with('success','Deleted Successfully!');
    }

    public function data()
    {
        return Datatables::of(Pangkat::query())->make(true);
    }
}
