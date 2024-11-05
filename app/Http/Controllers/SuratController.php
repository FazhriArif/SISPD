<?php

namespace App\Http\Controllers;

// use PDF;
use App\Models\Surat;
use App\Models\Status;
use App\Models\Jabatan;
use App\Models\Pangkat;
use App\Models\Pegawai;
use App\Models\Instansi;
use App\Models\Perjalanan;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           // Hitung jumlah surat dengan status "menunggu"
    $jumlahSuratMenunggu = Surat::where('status_id', 1)->count();

    // Mengambil daftar surat dengan hubungan pegawai, perjalanan, dan status
    $surats = Surat::latest()->with(['pegawai','perjalanan','status'])->get();

    return view('dashboard.surat_perintah.index', [
        'surats' => $surats,
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
        return view('dashboard.surat_perintah.create',[
            'pegawais' => Pegawai::get()->all(),
            'perjalanans' => Perjalanan::get()->all(),
            'statuses' => Status::get()->all(),
            'jumlahSuratMenunggu' => $jumlahSuratMenunggu
        ]);
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
            'pegawai_id' => 'required',
            'perjalanan_id' => 'required',
            'nomor' => 'required|max:255',
            'uraian' => 'required|max:255'
        ]);

        if(!$request->status){
            $validate['status_id'] = 1;
        }

        if($request->status){
            $validate['status_id'] = 'required';
        }

        $validate['user_id'] = auth()->user()->id;

        $surat=Surat::create($validate);
        $surat->update(['unread_notification' => true]);
        return redirect('/surat')->with('success','Added Successfully!');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.surat_perintah.show', [
            'surats' => Surat::with(['pegawai', 'perjalanan'])->findOrFail($id),
            'pangkats' => Pangkat::get(),
            'jabatans' => Jabatan::get(),
            'instansis' => Instansi::get()
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jumlahSuratMenunggu = Surat::where('status_id', 1)->count();
        return view('dashboard.surat_perintah.edit',[
            'surats' => Surat::find($id),
            'pegawais' => Pegawai::get(),
            'perjalanans' => Perjalanan::get(),
            'statuses' => Status::get()->all(),
            'jumlahSuratMenunggu' => $jumlahSuratMenunggu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surat $surat)
    {
        $rules = [
            'nomor' => 'required',
            'uraian' => 'required',
        ];

        if($surat->pegawai != $request->pegawai){
            $rules['pegawai_id'] = 'required';
        }

        if($surat->perjalanan != $request->perjalanan){
            $rules['perjalanan_id'] = 'required';
        }

        if($surat->status != $request->status){
            $rules['status_id'] = 'required';
        }

        $validate['user_id'] = auth()->user()->id;
        $validate = $request->validate($rules);

        Surat::where('id',$surat->id)->update($validate);
        return redirect('/surat')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surat $surat)
    {
        Surat::destroy($surat->id);

        return redirect('/surat')->with('success','Deleted Successfully!');
    }

    public function data()
    {
        return Datatables::of(Surat::query())->make(true);
    }

    public function cetakSurat($id)
    {
        $path_to_signature = public_path('assets/images/ttd.jpg');
        return view('dashboard.surat_perintah.cetak',[
            'surats' => Surat::with(['pegawai','perjalanan','instansi'])->findOrFail($id),
            'pangkats' => Pangkat::get(),
            'jabatans' => Jabatan::get(),
            'instansis' => Instansi::get()
        ]);
    }

    // public function pdfSurat()
    // {
    //     $data = [
    //         'surats' => Surat::with(['pegawai','perjalanan'])->get(),
    //         'pangkats' => Pangkat::get(),
    //         'jabatans' => Jabatan::get()
    //     ];
    //     $pdf = \PDF::loadView('dashboard.surat_perintah.cetak', $data);
    //     $pdf->getMpdf();
    //     return $pdf->stream('sppd.pdf');
    // }
}
