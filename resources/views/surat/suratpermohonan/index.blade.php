@extends('layout.wrapper')
    @section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Data Surat Permohonan</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <!-- <li>
                    Surat
                </li> -->
                <li class="active">
                    <strong>Surat Permohonan</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
    @endsection

    @section('content')
      @if(Session::has('message'))
        <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            {{ Session::get('message') }}
        </div>
      @endif
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
          <div class="ibox-title">
              <h5>Tabel Data Surat Permohonan</h5>
          </div>
          <div class="ibox-content">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                  <tr>
                    <th>No Surat</th>
                    <th>Nama Perusahaan</th>
                    <th>Tanggal Keluar</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $r)
                  <tr>
                    <td>{{$r->nomersurat}}</td>
                    <td>{{$r->getPerusahaan->perusahaan}}</td>
                    <td>{{$r->tgl_keluar}}</td>
                    <td>
                      <a href="{{url('suratpermohonan/e/'.encrypt($r->id_surat))}}">Edit</a> |
                      <a href="{{url('suratpermohonan/del/'.encrypt($r->id_surat))}}" onclick="return confirm('Surat dengan nomer {{$r->nomersurat}} akan dihapus ?')">Hapus</a> |
                      <a href="{{url('suratpermohonan/print/'.encrypt($r->id_surat))}}" target="_blank">Print</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <a href="suratpermohonan/add" class="btn btn-primary">Tambah</a>
          </div>
      </div>
    </div>
    @endsection
