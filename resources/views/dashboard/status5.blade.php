@extends('layout.wrapper')
@section('content')
    <div class="col-lg-12">
    <div class="ibox">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        <h2>Detail Magang Perusahaan</h2>
                                    </div>
                                    <dl class="dl-horizontal">
                                        <dt>Status:</dt> <dd><span class="label label-primary">Active</span></dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <dl class="dl-horizontal">
                                    	<dt>Nama :</dt> <dd>{{Auth::user()->nama}}</dd>
                                        <dt>Jurusan :</dt> <dd>{{$jurusan->jurusan}}</dd>
                                        <dt>Rombel :</dt> <dd>{{$rombel->rombel}}</dd>
                                        <dt>Client :</dt> <dd><a href="#" class="text-navy">{{$perusahaan->perusahaan}}</a> </dd>
                                    </dl>
                                </div>
                                <div class="col-lg-7" id="cluster_info">
                                    <dl class="dl-horizontal">

                                        <dt>Mulai magang :</dt> <dd>16.08.2014</dd>
                                        <dt>Selesai pada :</dt> <dd>10.07.2014</dd>
                                        <dt>Lama magang :</dt> <dd>164 hari</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <dl class="dl-horizontal">
                                        <dt>Completed:</dt>
                                        <dd>
                                            <div class="progress progress-striped active m-b-sm">
                                                <div style="width: 10%;" class="progress-bar"></div>
                                            </div>
                                            <small>Progres magang sebesar <strong>10%</strong>. Selamat menyelesaikan kegiatan magang.</small>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    @if($rekan)
                 <div class="ibox">
                        <div class="ibox-content">
                            <h2>Rekan Magang</h2>
                            <p>
                                Teman teman yang akan bergabung dengan anda.
                            </p>
                    </div>
                    </div>
                    <div class="row">
                    @foreach($rekan as $data) 
            <div class="col-lg-4">
                <div class="contact-box">
                    <!-- <a href="profile.html"> -->
                    <div class="col-sm-4">
                        <div class="text-center">
                            <img alt="image" class="img-circle m-t-xs img-responsive" src="{{ asset('img/emptyUser.jpg')}}">
                            <div class="m-t-xs font-bold"> {{$data->jurusan}}</div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h3><strong>{{$data->nama}}</strong></h3>
                        <p>{{$data->rombel}}</p>
                        <address>
                            <i class="fa fa-map-marker"></i> {{$data->alamat}}<br>
                            <abbr title="Phone">P:</abbr> {{$data->telp}}
                        </address>
                    </div>
                    <div class="clearfix"></div>
                        <!-- </a> -->
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
@endsection
