<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Siswa;
use App\User;
use App\Perusahaan;
use App\Rayon;
use App\Rombel;
use App\Jurusan;

// class siswaObj{
//   public $id, $nis, $nama, $rayon, $jurusan, $rombel, $jk, $email, $telp, $alamat, $agama, $bop, $bod, $id_perusahaan, $status_perusahaan, $area;
// }

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(){
      if (Auth::user()->status==0) {
        return view("dashboard.status0");
      }
      else if (Auth::user()->status==1 || Auth::user()->status==4) {
        return view("dashboard.status1or4");
      }
      if(Auth::user()->status==2){
        return (new PersyaratanController)->index2(Siswa::where("id", Auth::user()->id)->first()->nis);
      }else if (Auth::user()->status==3) {
        return view("dashboard.status3");
      }else if (Auth::user()->status==5) {
        $id = Auth::user()->id;
        $siswa = Siswa::where("id", $id)->first();
        $id_perusahaan = $siswa->id_perusahaan;
        $rekan_get = Siswa::where([["id_perusahaan", $id_perusahaan], ["id", "<>", $id]])->get();
        $perusahaan = Perusahaan::where("id_perusahaan", $id_perusahaan)->first();
        $rekan = [];
        $x = 0;
        foreach ($rekan_get as $data) {
          $obj = new siswaObj();
          $user = User::where("id", $data->id)->first();
          $obj->nis = $data->nis;
           $obj->nama = $user->nama;
           $obj->rayon = Rayon::where("id_rayon", $data->id_rayon)->first()->rayon;
           $obj->jurusan = Jurusan::where("id_jurusan", $data->id_jurusan)->first()->jurusan;
           $obj->rombel = Rombel::where("id_rombel", $data->id_rombel)->first()->rombel;
           $obj->jk = $data->jk;
           $obj->email = $user->email;
           $obj->telp = $user->telp;
           $obj->alamat = $user->alamat;
          $rekan[$x] = $obj;
          $x++;
        }
        return view("dashboard.status5", compact("siswa", "perusahaan", "rekan"));
      }
    }

    public function set_area(Request $req){
      Siswa::where("id", Auth::user()->id)->update([
        "id_area" => $req->area
      ]);
      if (Auth::user()->status == 4) {
        User::where("id", Auth::user()->id)->update([
          "status" => 3
        ]);
      }else if (Auth::user()->status == 1){
        User::where("id", Auth::user()->id)->update([
          "status" => 2
        ]);
      }
      return redirect('home');
    }
}
