@extends('layout.wrapper')
@section('content')
    <div class="col-lg-12">
    	<div class="row  border-bottom white-bg dashboard-header">

                    <div class="col-md-3">
                        <h2>Selamat Datang {{Auth::user()->nama}}</h2>
                        <small>Kamu memiliki beberapa tugas :</small>
                        <ul class="list-group clear-list m-t">
                            <li class="list-group-item fist-item">
                                <span class="label label-success">1</span> Lengkapi referensi siswa
                            </li>
                            <li class="list-group-item">
                                <span class="label label-info">2</span> Isi bidang perusahaan
                            </li>
                            <li class="list-group-item">
                                <span class="label label-primary">3</span> Masukkan data perusahaan
                            </li>
                            <li class="list-group-item">
                                <span class="label label-default">4</span> Masukkan data user
                            </li>
                            <li class="list-group-item">
                                <span class="label label-warning">5</span> Masukkan data siswa
                            </li>
                            <li class="list-group-item">
                                <span class="label label-danger">6</span> Kelola surat
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                      <div class="widget style1 red-bg">
                          <div class="row">
                              <div class="col-xs-4">
                                  <i class="fa fa-male fa-5x"></i>
                              </div>
                              <div class="col-xs-8 text-right">
                                  <span> Total Siswa </span>
                                  <h2 class="font-bold">{{$siswa}}</h2>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="widget style1 yellow-bg">
                          <div class="row">
                              <div class="col-xs-4">
                                  <i class="fa fa-building-o fa-5x"></i>
                              </div>
                              <div class="col-xs-8 text-right">
                                  <span> Total Perusahaan </span>
                                  <h2 class="font-bold">{{$perusahaan}}</h2>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="widget style1 lazur-bg">
                          <div class="row">
                              <div class="col-xs-4">
                                  <i class="fa fa-bookmark fa-5x"></i>
                              </div>
                              <div class="col-xs-8 text-right">
                                  <span> Total Bidang Per. </span>
                                  <h2 class="font-bold">{{$bidangperusahaan}}</h2>
                              </div>
                          </div>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="widget style1 navy-bg">
                          <div class="row">
                              <div class="col-xs-4">
                                  <i class="fa fa-graduation-cap fa-5x"></i>
                              </div>
                              <div class="col-xs-8 text-right">
                                  <span> Total Jurusan </span>
                                  <h2 class="font-bold">{{$jurusan}}</h2>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="widget style1 navy-bg">
                          <div class="row">
                              <div class="col-xs-4">
                                  <i class="fa fa-home fa-5x"></i>
                              </div>
                              <div class="col-xs-8 text-right">
                                  <span> Total Rayon </span>
                                  <h2 class="font-bold">{{$rayon}}</h2>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="widget style1 navy-bg">
                          <div class="row">
                              <div class="col-xs-4">
                                  <i class="fa fa-university fa-5x"></i>
                              </div>
                              <div class="col-xs-8 text-right">
                                  <span> Total Rombel </span>
                                  <h2 class="font-bold">{{$rombel}}</h2>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="row">

        <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Kerja Sama Perusahaan</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <table class="table table-hover margin bottom dataTables-example">
                                                    <thead>
                                                    <tr>
                                                        <th style="width: 1%" class="text-center">No.</th>
                                                        <th>Perusahaan</th>
                                                        <th class="text-center">Kota</th>
                                                        <th class="text-center">Kode Pos</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $no=1; ?>
                                                    @foreach($perusahaan_p as $data)
                                                    <tr>
                                                        <td class="text-center">{{$no++}}</td>
                                                        <td>{{$data->perusahaan}}
                                                            </td>
                                                        <td class="text-center small">{{$data->kota}}</td>
                                                        <td class="text-center"><span class="label label-primary">{{$data->kode_pos}}</span></td>

                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-6">

                                            </div>

                                    </div>
                                    </div>

                                </div>
                            </div>

        </div>

            </div>
   	</div>
@endsection
