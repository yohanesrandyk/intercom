@extends('layout.wrapper')
@section('content')
    <div class="col-lg-12">
    	<div class="row  border-bottom white-bg dashboard-header">

                    <div class="col-md-3">
                        <h2>Selamat Datang {{Auth::user()->nama}}</h2>
                        <small>Kamu memiliki beberapa tugas.</small>
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
                                <span class="label label-primary">5</span> Masukkan data siswa
                            </li>
                            <li class="list-group-item">
                                <span class="label label-default">6</span> Kelola surat
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Monthly</span>
                                <h5>Data Siswa</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">2</h1>
                                <div class="stat-percent font-bold text-success">100% <i class="fa fa-bolt"></i></div>
                                <small>Total siswa</small>
                            </div>
                        </div>
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Monthly</span>
                                <h5>Data Perusahaan</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">2</h1>
                                <div class="stat-percent font-bold text-success">100% <i class="fa fa-bolt"></i></div>
                                <small>Total perusahaan</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Monthly</span>
                                <h5>Data User</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">8</h1>
                                <div class="stat-percent font-bold text-success">100% <i class="fa fa-bolt"></i></div>
                                <small>Total user</small>
                            </div>
                        </div>
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Monthly</span>
                                <h5>Data Surat</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">3</h1>
                                <div class="stat-percent font-bold text-success">100% <i class="fa fa-bolt"></i></div>
                                <small>Total surat</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-success pull-right">Monthly</span>
                        <h5>Referensi siswa</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-4">
                                <small class="stats-label">Jurusan</small>
                                <h4>3</h4>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-4">
                                <small class="stats-label">Rayon</small>
                                <h4>12</h4>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-4">
                                <small class="stats-label">Rombel</small>
                                <h4>10</h4>
                            </div>
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
                                            <div class="col-lg-6">
                                                <table class="table table-hover margin bottom">
                                                    <thead>
                                                    <tr>
                                                        <th style="width: 1%" class="text-center">No.</th>
                                                        <th>Perusahaan</th>
                                                        <th class="text-center">Kota</th>
                                                        <th class="text-center">Kode Pos</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>Auditsi
                                                            </td>
                                                        <td class="text-center small">Jakarta</td>
                                                        <td class="text-center"><span class="label label-primary">16740</span></td>

                                                    </tr>
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
