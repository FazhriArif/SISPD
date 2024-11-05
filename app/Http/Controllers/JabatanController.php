<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Surat;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlahSuratMenunggu = Surat::where('status_id', 1)->count();
        return view('dashboard.jabatan.index',[
            'jabatans' => Jabatan::get()->all(),
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
        return view('dashboard.jabatan.create',['jumlahSuratMenunggu' => $jumlahSuratMenunggu]);
        
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

        Jabatan::create($validate);
        return redirect('/jabatan')->with('success','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jabatan $jabatan)
    {
        $jumlahSuratMenunggu = Surat::where('status_id', 1)->count();
        return view('dashboard.jabatan.edit',[
            'jabatans' => Jabatan::find($jabatan),
            'jumlahSuratMenunggu' => $jumlahSuratMenunggu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jabatan $jabatan)
    {
        $rules = [
            'nama' => 'required',
        ];

        $validate = $request->validate($rules);
        Jabatan::where('id',$jabatan->id)->update($validate);
        return redirect('/jabatan')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jabatan $jabatan)
    {
        Jabatan::destroy($jabatan->id);

        return redirect('/jabatan')->with('success','Deleted Successfully!');
    }

    public function data()
    {
        return Datatables::of(Jabatan::query())->make(true);
    }
}
