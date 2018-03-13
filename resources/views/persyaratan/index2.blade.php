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


                            <div class="table-responsive">
                                <table class="table shoping-cart-table">

                                    <tbody>
                                    <tr>
                                        <td width="90">
                                            <div class="cart-product-imitation">
                                            </div>
                                        </td>
                                        <td class="desc">
                                            <h3>
                                            <a href="#" class="text-navy">
                                              {{$siswa->nama}}
                                            </a>
                                            </h3>
                                            <p class="small">
                                                
                                            </p>
                                            <dl class="small m-b-none">
                                                <dt></dt>
                                                <dd></dd>
                                            </dl>

                                            <div class="m-t-sm">
                                                
                                            </div>
                                        </td>

                                        <td colspan="3">
                                            
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
        <div class="ibox-content">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
              <thead>
                <th>Persyaratan</th>
                <th>Status</th>
              </thead>
              <tbody>
                <tr>
                  <td>Bantara</td>
                  <td>@if($res->bantara == 1) Done @else Pending @endif</td>
                </tr>
                <tr>
                  <td>Nilai</td>
                  <td>@if($res->nilai == 1) Done @else Pending @endif</td>
                </tr>
                <tr>
                  <td>Keuangan</td>
                  <td>@if($res->keuangan == 1) Done @else Pending @endif</td>
                </tr>
                <tr>
                  <td>Kesiswaan</td>
                  <td>@if($res->kesiswaan == 1) Done @else Pending @endif</td>
                </tr>
                <tr>
                  <td>CBT Produktif</td>
                  <td>@if($res->cbt_prod == 1) Done @else Pending @endif</td>
                </tr>
                <tr>
                  <td>Kehadiran Pengayaan PKL</td>
                  <td>@if($res->kehadiran_pengayaan_pkl == 1) Done @else Pending @endif</td>
                </tr>
                <tr>
                  <td>Lulus Uji Kelayakan</td>
                  <td>@if($res->lulus_ujikelayakan == 1) Done @else Pending @endif</td>
                </tr>
                <tr>
                  <td>Perpustakaan</td>
                  <td>@if($res->perpustakaan == 1) Done @else Pending @endif</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection
