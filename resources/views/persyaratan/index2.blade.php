@extends('layout.wrapper')
@if(Auth::user()->id_role==1)
@section('breadcrumb')

      <div class="row wrapper border-bottom white-bg page-heading">
          <div class="col-lg-10">
              <h2>Detail Persyaratan Siswa</h2>
              <ol class="breadcrumb">
                  <li>
                      <a href="{{url('/')}}">Home</a>
                  </li>
                  <li>
                      <a href="{{url('/siswa')}}">Data Siswa</a>
                  </li>
                  <li class="active">
                      <strong>Detail Persyaratan Siswa</strong>
                  </li>
              </ol>
          </div>
          <div class="col-lg-2">
          </div>
      </div>

    @endsection
@endif
@section('content')
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
    <div class="ibox-content">

      <div class="col-md-6">

                  <div class="profile-image">
                      <img src="{{ asset('img/elliot.jpg')}}" style="width:96px;height:96px" class="img-circle circle-border m-b-md" alt="profile">
                  </div>
                  <div class="profile-info">
                      <div class="">
                          <div>
                              <h2 class="no-margins">
                                  {{ $siswa->nama }} (NIS)
                              </h2>
                              <h4> Rombel - Rayon </h4>
                              <small>
                                Murid SMK Wikrama Bogor
                              </small>
                          </div>
                      </div>
                  </div>
              </div>
        <div class="ibox-content">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" >
              <thead>
                <th>No.</th>
                <th>Persyaratan</th>
                <th>Status</th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Bantara</td>
                  <td>@if($res->bantara == 1) Done @else Belum terpenuhi @endif</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Nilai</td>
                  <td>@if($res->nilai == 1) Done @else Belum terpenuhi @endif</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Keuangan</td>
                  <td>@if($res->keuangan == 1) Done @else Belum terpenuhi @endif</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Kesiswaan</td>
                  <td>@if($res->kesiswaan == 1) Done @else Belum terpenuhi @endif</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>CBT Produktif</td>
                  <td>@if($res->cbt_prod == 1) Done @else Belum terpenuhi @endif</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Kehadiran Pengayaan PKL</td>
                  <td>@if($res->kehadiran_pengayaan_pkl == 1) Done @else Belum terpenuhi @endif</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Lulus Uji Kelayakan</td>
                  <td>@if($res->lulus_ujikelayakan == 1) Done @else Belum terpenuhi @endif</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Perpustakaan</td>
                  <td>@if($res->perpustakaan == 1) Done @else Belum terpenuhi @endif</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection
