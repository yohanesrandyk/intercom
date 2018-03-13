<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>InterCom</title>
    <link rel="shortcut icon" href="{{asset('img/icons/icon.ico')}}">
    <link href="{{asset('css/bootstrap.min.css')}} "rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}} "rel="stylesheet">
    <link href="{{asset('css/style.css')}} "rel="stylesheet">
    <link href="{{asset('css/plugins/iCheck/custom.css')}} "rel="stylesheet">
    <link href="{{asset('css/plugins/chosen/bootstrap-chosen.css')}} "rel="stylesheet">
    <link href="{{asset('css/plugins/datapicker/datepicker3.css')}} "rel="stylesheet">
    <link href="{{asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css')}} "rel="stylesheet">
    <link href="{{asset('css/plugins/clockpicker/clockpicker.css')}} "rel="stylesheet">
    <link href="{{asset('css/plugins/dualListbox/bootstrap-duallistbox.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/plugins/select2/select2.min.css')}} "rel="stylesheet">
    <link href="{{asset('css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-notifications.min.css">

  </head>
  <body class="pace-done">
    <div id="wrapper">
      @include('layout.sidebar')
      <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            @include('layout.header')
            @yield('dashboard-header')
        </div>
            @yield('breadcrumb')
        <div class="wrapper wrapper-content">
            <div class="row">
              @yield('content')
            </div>
        </div>
      </div>
    </div>
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('js/plugins/dataTables/datatables.min.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('js/inspinia.js')}}"></script>
    <script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>
    <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/plugins/switchery/switchery.js')}}"></script>
    <script src="{{asset('js/plugins/iCheck/icheck.min.js')}}"></script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/plugins/select2/select2.full.min.js')}}"></script>
    <script>

            $(document).ready(function(){
              $(".select2").select2();
                $('.dataTables-example').DataTable({
                    "language": {
                          "url": "http://cdn.datatables.net/plug-ins/1.10.11/i18n/Indonesian.json"
                      },
                    pageLength: 25,
                    responsive: true,
                    buttons: [
                    ]
                });

                $('.dataTables-cus').DataTable({
                    "language": {
                          "url": "http://cdn.datatables.net/plug-ins/1.10.11/i18n/Indonesian.json"
                      },
                    pageLength: 25,
                    responsive: true,
                    searching: false,
                    bFilter: false,
                    buttons: [
                    ]
                });

                $('.form-group .input-group.date').datepicker({
                    todayBtn: "linked",
                    keyboardNavigation: false,
                    forceParse: false,
                    calendarWeeks: true,
                    autoclose: true
                });
            });


        </script>
  </body>
</html>
