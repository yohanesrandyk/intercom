<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
  </div>
  <ul class="nav navbar-top-links navbar-right">
  <li>
                    <span class="m-r-sm text-muted welcome-message">Selamat datang di aplikasi InterCom</span>
                </li>
    <li>
      <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out"></i> Keluar
      </a>
    </li>
  </ul>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
</nav>
