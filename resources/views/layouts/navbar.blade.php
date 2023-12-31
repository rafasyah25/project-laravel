<!--header start-->
<header class="header black-bg">
    <div class="sidebar-toggle-box">
      <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <!--logo start-->
    <a href="index.html" class="logo"><b>RAFA<span>SYAH</span></b></a>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
      <!--  notification start -->
      <ul class="nav top-menu">

        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
            <i class="fa fa-bell-o"></i>
            <span class="badge bg-warning">7</span>
            </a>
          <ul class="dropdown-menu extended notification">
            <div class="notify-arrow notify-arrow-yellow"></div>
            <li>
              <p class="yellow">kamu mendapatkan 7 Pemberitahuan</p>
            </li>
            <li>
              <a href="index.html#">
                <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                Server Overloaded.
                <span class="small italic">4 mins.</span>
                </a>
            </li>
            <li>
              <a href="index.html#">
                <span class="label label-warning"><i class="fa fa-bell"></i></span>
                Memory #2 Not Responding.
                <span class="small italic">30 mins.</span>
                </a>
            </li>
            <li>
              <a href="index.html#">
                <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                Disk Space Reached 85%.
                <span class="small italic">2 hrs.</span>
                </a>
            </li>
            <li>
              <a href="index.html#">
                <span class="label label-success"><i class="fa fa-plus"></i></span>
                New User Registered.
                <span class="small italic">3 hrs.</span>
                </a>
            </li>
            <li>
              <a href="index.html#">See all notifications</a>
            </li>
          </ul>
        </li>
        <!-- notification dropdown end -->
      </ul>
      <!--  notification end -->
    </div>
    <div class="top-menu">
      <ul class="nav pull-right top-menu">
        <li>
          <form action="{{route('logout')}}" class="d-block" method="POST" id="logoutform"></form>
          @csrf
          <button class="logout">Logout</button>
        </li>
      </ul>
      
    </div>
  </header>
  <!--header end-->
