<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>

  <link rel="icon" href="{{ url('img/favicon1.png') }}">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('modules/jqvmap/dist/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('modules/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('modules/weather-icon/css/weather-icons.min.css')}}">
  <link rel="stylesheet" href="{{asset('modules/weather-icon/css/weather-icons-wind.min.css')}}">
  <link rel="stylesheet" href="{{asset('modules/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{asset('modules/datatables/datatables.min.css')}}">
  <link rel="stylesheet" href="{{asset('modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/components.css')}}">
  <link rel="stylesheet" href="{{asset('css/custom.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>
<body>
    <div id="app">
      <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
          <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
              <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
              <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
            </ul>
            <div class="search-element">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
              <button class="btn" type="submit"><i class="fas fa-search"></i></button>
              <div class="search-backdrop"></div>
              <div class="search-result">
                <div class="search-header">
                  Histories
                </div>
                <div class="search-item">
                  <a href="#">How to hack NASA using CSS</a>
                  <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-item">
                  <a href="#">Kodinger.com</a>
                  <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-item">
                  <a href="#">#Stisla</a>
                  <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-header">
                  Result
                </div>
                <div class="search-item">
                  <a href="#">
                    <img class="mr-3 rounded" width="30" src="{{asset('img/products/product-3-50.png')}}" alt="product">
                    oPhone S9 Limited Edition
                  </a>
                </div>
                <div class="search-item">
                  <a href="#">
                    <img class="mr-3 rounded" width="30" src="{{asset('img/products/product-2-50.png')}}" alt="product">
                    Drone X2 New Gen-7
                  </a>
                </div>
                <div class="search-item">
                  <a href="#">
                    <img class="mr-3 rounded" width="30" src="{{asset('img/products/product-1-50.png')}}" alt="product">
                    Headphone Blitz
                  </a>
                </div>
                <div class="search-header">
                  Projects
                </div>
                <div class="search-item">
                  <a href="#">
                    <div class="search-icon bg-danger text-white mr-3">
                      <i class="fas fa-code"></i>
                    </div>
                    Stisla Admin Template
                  </a>
                </div>
                <div class="search-item">
                  <a href="#">
                    <div class="search-icon bg-primary text-white mr-3">
                      <i class="fas fa-laptop"></i>
                    </div>
                    Create a new Homepage Design
                  </a>
                </div>
              </div>
            </div>
          </form>
          <ul class="navbar-nav navbar-right">
            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
              <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Messages
                  <div class="float-right">
                    <a href="#">Mark All As Read</a>
                  </div>
                </div>
                <div class="dropdown-list-content dropdown-list-message">
                  <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle">
                      <div class="is-online"></div>
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Kusnaedi</b>
                      <p>Hello, Bro!</p>
                      <div class="time">10 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle">
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Dedik Sugiharto</b>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                      <div class="time">12 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="assets/img/avatar/avatar-3.png" class="rounded-circle">
                      <div class="is-online"></div>
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Agung Ardiansyah</b>
                      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      <div class="time">12 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle">
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Ardian Rahardiansyah</b>
                      <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                      <div class="time">16 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle">
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Alfa Zulkarnain</b>
                      <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                      <div class="time">Yesterday</div>
                    </div>
                  </a>
                </div>
                <div class="dropdown-footer text-center">
                  <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </li>
            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
              <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifications
                  <div class="float-right">
                    <a href="#">Mark All As Read</a>
                  </div>
                </div>
                <div class="dropdown-list-content dropdown-list-icons">
                  <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-icon bg-primary text-white">
                      <i class="fas fa-code"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      Template update is available now!
                      <div class="time text-primary">2 Min Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-info text-white">
                      <i class="far fa-user"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                      <div class="time">10 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-success text-white">
                      <i class="fas fa-check"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                      <div class="time">12 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-danger text-white">
                      <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      Low disk space. Let's clean it!
                      <div class="time">17 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-info text-white">
                      <i class="fas fa-bell"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      Welcome to Stisla template!
                      <div class="time">Yesterday</div>
                    </div>
                  </a>
                </div>
                <div class="dropdown-footer text-center">
                  <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </li>
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Logged in 5 min ago</div>
                <a href="features-profile.html" class="dropdown-item has-icon">
                  <i class="far fa-user"></i> Profile
                </a>
                <a href="features-activities.html" class="dropdown-item has-icon">
                  <i class="fas fa-bolt"></i> Activities
                </a>
                <a href="features-settings.html" class="dropdown-item has-icon">
                  <i class="fas fa-cog"></i> Settings
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item has-icon text-danger">
                  <i class="fas fa-sign-out-alt"></i> Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>


        <div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/dashboard">Kim Payroll App</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <img src="{{asset('img/Group 15.png')}}" alt="logo" height="40px" width="40px" class="shadow-dark rounded-circle">
      </div>
      <ul class="sidebar-menu">
        <li class="dropdown active">
          <a href="/dashboard" class="nav-link">
            <i class="fas fa-fire"></i>
            <span>Summary</span>
          </a>
        </li>
        <li class="dropdown">
          <a href="employee" class="nav-link">
            <i class="fas fa-users"></i>
            <span>Employee Data</span>
          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown">
            <i class="fas fa-wallet"></i>
            <span>Payroll Component</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="/allowance">Allowance</a></li>
            <li><a class="nav-link" href="/deduction">Deduction</a></li>
            <li><a class="nav-link" href="/taxes">Taxes</a></li>
            <li><a class="nav-link" href="/position">Position</a></li>
            <li><a class="nav-link" href="/family_status">Family Status</a></li>
            <li><a class="nav-link" href="/payroll">Payroll</a></li>
          </ul>
        </li>
      
          <div class="p-3 hide-sidebar-mini">
            <a href="/admin-menu" class="btn btn-primary btn-lg btn-block btn-icon-split align-bottom">
              <i class="fas fa-rocket"></i> Admin Menu
            </a>
          </div>

          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <div class="p-3 hide-sidebar-mini">
              <a href="route('logout')"
              onclick="event.preventDefault();
                          this.closest('form').submit();" class="btn btn-primary btn-lg btn-block btn-icon-split align-bottom">
                <i class="fas fa-rocket"></i>Log out
              </a>
            </div>
          </form>

        </div>
      </div>
      
    </aside>
  </div>