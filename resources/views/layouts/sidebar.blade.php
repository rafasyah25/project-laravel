<!--sidebar start-->
<aside>
  <div id="sidebar" class="nav-collapse">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered">
              <a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80" /></a>
          </p>
          <h5 class="centered">User Name</h5>
          <li class="mt">
              <a class="active" href="{{ route('dashboard') }}">
                  <i class="fa fa-dashboard"></i>
                  <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
              <a href="javascript:;" class="dcjq-parent active">
                  <i class="fa fa-desktop"></i>
                  <span>Mahasiswa</span>
              </a>
              <ul class="sub">
                  <li><a href="{{ route('master.mahasiswa.list') }}">List</a></li>
                  <li><a href="{{ route('master.mahasiswa.simpan') }}">Simpan</a></li>
              </ul>
          </li>
          <li class="sub-menu">
              <a href="javascript:;">
                  <i class="fa fa-desktop"></i>
                  <span>Kelas</span>
              </a>
              <ul class="sub">
                  <li><a href="{{ route('master.kelas.list') }}">List</a></li>
                  <li><a href="{{ route('master.kelas.simpan') }}">Simpan</a></li>
              </ul>
          </li>
      </ul>
      <!-- sidebar menu end-->
  </div>
</aside>
<!--sidebar end-->