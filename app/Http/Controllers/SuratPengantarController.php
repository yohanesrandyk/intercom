<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Perusahaan;
use App\Siswa;
use App\Surat;
use App\Jurusan;
class SuratPengantarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Surat::where('id_typesurat','4')->get();
        return  view('surat.suratpengantar.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $perusahaan = Perusahaan::Where('status','1')->orderBy('perusahaan')->get();
        return view('surat.suratpengantar.add',compact('perusahaan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $surat = Surat::OrderBy('id_surat','dec')->limit(1)->first();
        $perusahaan = Perusahaan::Where('status','1')->orderBy('perusahaan')->get();

        if (count($surat)<>0) {
            $nosurat = $surat->nomersurat+1;
        }else{
            $nosurat=1;
        }

        $datasurat = Surat::where('id_perusahaan',$request->perusahaan)
                            ->where('created_at','like',''.date('Y').'%')
                            ->where('id_typesurat',4)
                            ->count();
        if ($datasurat <> 0 ) {
          Session::flash('message', 'Data Tidak Dapat Disimpan Karena Data Sudah Ada !!!');
          Session::flash('alert-class', 'alert-danger');
          return redirect(url('/suratpengantar'));
        }else{
          $data = new Surat;
          $data->id_typesurat='4';
          $data->id_perusahaan=$request->perusahaan;
          $data->nomersurat=$nosurat;
          $data->tgl_keluar=$request->tanggalkeluar;
          $data->isi= $request->wm.";".
                      $request->ws.";".
                      $request->ks;
          $data->save();
          Session::flash('message', 'Data Berhasil Disimpan');
          Session::flash('alert-class', 'alert-success');
          return redirect(url('/suratpengantar'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $r = Surat::find(decrypt($id));

        $bulan = new Surat;
        $tglkeluar=explode('/', $r->tgl_keluar);
        $namabulan = $bulan->getBulan($tglkeluar[1]);
        $romawi = $bulan->getromawi($tglkeluar[1]);
        $getsiswa = Siswa::where('id_perusahaan',$r->id_perusahaan)->where('tahun',$tglkeluar[2])->get();
        $jurusan = Jurusan::orderBy('jurusan','asc')->get();
        return view('surat.suratpengantar.print',compact('r','namabulan','romawi','jurusan','getsiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $r = Surat::find(decrypt($id));
        $perusahaan = Perusahaan::Where('status','1')->orderBy('perusahaan')->get();
        return view('surat.suratpengantar.print',compact('r','perusahaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = Surat::find(decrypt($id));
        $data->id_perusahaan=$request->input('perusahaan');
        $data->tgl_keluar=$request->input('tanggalkeluar');
        $data->isi= $request->wm.";".
                    $request->ws.";".
                    $request->ks;

        $data->update();
        Session::flash('message', 'Data Berhasil Diupdate');
        Session::flash('alert-class', 'alert-info');
        return redirect(url('/suratpengantar'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Surat::find(decrypt($id));
        $data->delete();
        Session::flash('message', 'Data Berhasil Dihapus');
        Session::flash('alert-class', 'alert-danger');
        return redirect(url('/suratpengantar'));
    }
}
