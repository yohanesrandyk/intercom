@extends('layout.wrapper')
@section('dashboard-header')
  <div class="col-lg-12">
    <div class="row border-bottom white-bg dashboard-header">
      <embed style="width: 100%;height: 400px;" src="{{ asset('swf/'.$game.'.swf')}}"></embed>
    </div>
  </div>
@endsection

@section('content')
      <div class="col-lg-12">
          <div class="ibox float-e-margins">

                    <div class="ibox-content">

                        <h2>Tips Bermain</h2>
                        <p>
                            penjelasan
                        </p>
                    </div>
                </div>
      </div>
@endsection
