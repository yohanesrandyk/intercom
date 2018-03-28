@extends('layout.wrapper')
@section('dashboard-header')
  <div class="col-lg-12">
    <div class="row border-bottom white-bg dashboard-header">
      <div class="row">
        <div class="col-md-5">

                                    <h2 class="font-bold m-b-xs">
                                        Permainan
                                    </h2>
                                    <small>Sub judul halaman.</small>
                                    <hr>
                                    <div class="small text-muted">
                                        penjelasan 1

                                        <br>
                                        <br>
                                        penjelasan 2
                                    </div><br><br>
                                    
                                    



                                </div>
        <div class="col-md-7">
          <div class="carousel slide" id="carousel2">
                                <ol class="carousel-indicators">
                                    <li data-slide-to="0" data-target="#carousel2" class="active"></li>
                                    <li data-slide-to="1" data-target="#carousel2"></li>
                                    <li data-slide-to="2" data-target="#carousel2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img alt="image" class="img-responsive" src="{{ asset('img/p_big1.jpg')}}">
                                        <div class="carousel-caption">
                                            <p>Pacman. </p>
                                        </div>
                                    </div>
                                    <div class="item ">
                                        <img alt="image" class="img-responsive" src="{{ asset('img/p_big2.jpg')}}">
                                        <div class="carousel-caption">
                                            <p>Super Mario Bros</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img alt="image" class="img-responsive" src="{{ asset('img/p_big3.jpg')}}">
                                        <div class="carousel-caption">
                                            <p>HarvestMoon Adventure</p>
                                        </div>
                                    </div>
                                </div>
                                <a data-slide="prev" href="#carousel2" class="left carousel-control">
                                    <span class="icon-prev"></span>
                                </a>
                                <a data-slide="next" href="#carousel2" class="right carousel-control">
                                    <span class="icon-next"></span>
                                </a>
                            </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
      <div class="col-lg-12">
          <div class="ibox float-e-margins">

                    <div class="ibox-content">

                        <h2>Kumpulan Permainan</h2>
                        <p>
                            penjelasan
                        </p>

                        <div class="lightBoxGallery">
                            <a href="permainan/pacman" title="Pacman" data-gallery=""><img src="{{ asset('img/1s.jpg')}}"></a>
                            <a href="permainan/supermario" title="Super Mario" data-gallery=""><img src="{{ asset('img/2s.jpg')}}"></a>
                            <!-- <a href="permainan/harvestmoon" title="HarvestMoon" data-gallery=""><img src="{{ asset('img/3s.jpg')}}"></a> -->
                            
                        </div>

                    </div>
                </div>
      </div>
@endsection
