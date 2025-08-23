<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Medal Tally System - Management</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="CodedThemes">

  <!-- [Favicon] icon -->
  <link rel="icon" href="{{ asset('images/web_logo.png') }}" type="image/x-icon" style = "border-radius: 50%;"> <!-- [Google Font] Family -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="{{ asset('template/admin/dist/assets/fonts/tabler-icons.min.css') }}" >
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="{{ asset('template/admin/dist/assets/fonts/feather.css') }}" >
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="{{ asset('template/admin/dist/assets/fonts/fontawesome.css') }}" >
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="{{ asset('template/admin/dist/assets/fonts/material.css') }}" >
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="{{ asset('template/admin/dist/assets/css/style.css') }}" id="main-style-link" >
<link rel="stylesheet" href="{{ asset('template/admin/dist/assets/css/style-preset.css') }}" >

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="{{ url('/admin/dashboard') }}" class="b-brand text-primary d-flex align-items-center gap-2" style="text-decoration: none;">
            <!-- Trophy Icon (Font Awesome or Tabler Icons) -->
            <i class="ti ti-trophy" style="font-size: 2rem; color: #8a8888;"></i>
            <span class="fw-bold fs-4" style="letter-spacing: 1px; color: #8a8888;">Medal Tally</span>
        </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
       <li class="pc-item">
           <a href="{{ route('admin.manage') }}" class="pc-link">
                    <span class="pc-micon"><i class="ti ti-award"></i></span>
                    <span class="pc-mtext">Manage Tally</span>
                </a>
            </li>

        {{-- <li class="pc-item pc-caption">
          <label>UI Components</label>
          <i class="ti ti-dashboard"></i>
        </li>
        <li class="pc-item">
          <a href="../elements/bc_typography.html" class="pc-link">
            <span class="pc-micon"><i class="ti ti-typography"></i></span>
            <span class="pc-mtext">Typography</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="../elements/bc_color.html" class="pc-link">
            <span class="pc-micon"><i class="ti ti-color-swatch"></i></span>
            <span class="pc-mtext">Color</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="../elements/icon-tabler.html" class="pc-link">
            <span class="pc-micon"><i class="ti ti-plant-2"></i></span>
            <span class="pc-mtext">Icons</span>
          </a>
        </li>

        <li class="pc-item pc-caption">
          <label>Pages</label>
          <i class="ti ti-news"></i>
        </li>
        <li class="pc-item">
          <a href="../pages/login.html" class="pc-link">
            <span class="pc-micon"><i class="ti ti-lock"></i></span>
            <span class="pc-mtext">Login</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="../pages/register.html" class="pc-link">
            <span class="pc-micon"><i class="ti ti-user-plus"></i></span>
            <span class="pc-mtext">Register</span>
          </a>
        </li>

        <li class="pc-item pc-caption">
          <label>Other</label>
          <i class="ti ti-brand-chrome"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-menu"></i></span><span class="pc-mtext">Menu
              levels</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">Level 2.2<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">Level 2.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="pc-item">
          <a href="../other/sample-page.html" class="pc-link">
            <span class="pc-micon"><i class="ti ti-brand-chrome"></i></span>
            <span class="pc-mtext">Sample page</span>
          </a>
        </li> --}}
      </ul>
      <div class="card text-center">
     <div class="card-body d-flex flex-column align-items-center justify-content-center py-4">
                <span class="rounded-circle bg-warning bg-opacity-25 d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                    <i class="ti ti-mail" style="font-size: 2.2rem; color: #ffc107;"></i>
                </span>
                <h5 class="fw-bold text-primary mb-2">Contact the Developer</h5>
                <p class="text-muted mb-3 text-center" style="max-width: 350px;">
                    If you encounter any problems while using the Medal Tally System, please reach out to me as the developer for support.<br>
                    <span class="fw-semibold text-dark d-block mt-2">programmerejie@gmail.com</span>
                </p>
                <div class="d-flex justify-content-center">
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=programmerejie@gmail.com" 
                        class="btn btn-warning text-white d-flex align-items-center justify-content-center px-4 py-2" 
                        target="_blank" rel="noopener">
                            <i class="ti ti-mail me-2"></i>
                            <span class="w-100 text-center">Send Email</span>
                        </a>
                </div>
            </div>
      </div>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <!-- ======= Menu collapse Icon ===== -->
    <li class="pc-h-item pc-sidebar-collapse">
      <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item d-inline-flex d-md-none">
      {{-- <a
        class="pc-head-link dropdown-toggle arrow-none m-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ti ti-search"></i>
      </a> --}}
      {{-- <div class="dropdown-menu pc-h-dropdown drp-search">
        <form class="px-3">
          <div class="form-group mb-0 d-flex align-items-center">
            <i data-feather="search"></i>
            <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
          </div>
        </form>
      </div> --}}
    </li>
    {{-- <li class="pc-h-item d-none d-md-inline-flex">
      <form class="header-search">
        <i data-feather="search" class="icon-search"></i>
        <input type="search" class="form-control" placeholder="Search here. . .">
      </form>
    </li> --}}
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
    {{-- <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ti ti-mail"></i>
      </a>
      <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Message</h5>
          <a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-x text-danger"></i></a>
        </div>
        <div class="dropdown-divider"></div>
        <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
          <div class="list-group list-group-flush w-100">
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar">
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">3:00 AM</span>
                  <p class="text-body mb-1">It's <b>Cristina danny's</b> birthday today.</p>
                  <span class="text-muted">2 min ago</span>
                </div>
              </div>
            </a>
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar">
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">6:00 PM</span>
                  <p class="text-body mb-1"><b>Aida Burg</b> commented your post.</p>
                  <span class="text-muted">5 August</span>
                </div>
              </div>
            </a>
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="../assets/images/user/avatar-3.jpg" alt="user-image" class="user-avtar">
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">2:45 PM</span>
                  <p class="text-body mb-1"><b>There was a failure to your setup.</b></p>
                  <span class="text-muted">7 hours ago</span>
                </div>
              </div>
            </a>
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="../assets/images/user/avatar-4.jpg" alt="user-image" class="user-avtar">
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">9:10 PM</span>
                  <p class="text-body mb-1"><b>Cristina Danny </b> invited to join <b> Meeting.</b></p>
                  <span class="text-muted">Daily scrum meeting time</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="dropdown-divider"></div>
        <div class="text-center py-2">
          <a href="#!" class="link-primary">View all</a>
        </div>
      </div>
    </li> --}}
    <li class="dropdown pc-h-item header-user-profile">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        data-bs-auto-close="outside"
        aria-expanded="false"
      >
        <img src="{{asset('images/admin_picture.webp')}}" alt="user-image" class="user-avtar">
        <span>Administrator</span>
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header">
          <div class="d-flex mb-1">
            <div class="flex-shrink-0">
              <img src="{{asset('images/admin_picture.webp')}}" alt="user-image" class="user-avtar wid-35">
            </div>
            <div class="flex-grow-1 ms-3">
              <h6 class="mb-1">Administrator</h6>
              <span>Sports Coordinator</span>
            </div>
            <a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-power text-danger"></i></a>
          </div>
        </div>
        <ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist">
          {{-- <li class="nav-item" role="presentation">
            <button
              class="nav-link active"
              id="drp-t1"
              data-bs-toggle="tab"
              data-bs-target="#drp-tab-1"
              type="button"
              role="tab"
              aria-controls="drp-tab-1"
              aria-selected="true"
              ><i class="ti ti-user"></i> Profile</button
            >
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="drp-t2"
              data-bs-toggle="tab"
              data-bs-target="#drp-tab-2"
              type="button"
              role="tab"
              aria-controls="drp-tab-2"
              aria-selected="false"
              ><i class="ti ti-settings"></i> Setting</button
            >
          </li> --}}
        </ul>
        {{-- <div class="tab-content" id="mysrpTabContent">
          <div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel" aria-labelledby="drp-t1" tabindex="0">
            <a href="#!" class="dropdown-item">
              <i class="ti ti-edit-circle"></i>
              <span>Edit Profile</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-user"></i>
              <span>View Profile</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-clipboard-list"></i>
              <span>Social Profile</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-wallet"></i>
              <span>Billing</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-power"></i>
              <span>Logout</span>
            </a>
          </div>
          <div class="tab-pane fade" id="drp-tab-2" role="tabpanel" aria-labelledby="drp-t2" tabindex="0">
            <a href="#!" class="dropdown-item">
              <i class="ti ti-help"></i>
              <span>Support</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-user"></i>
              <span>Account Settings</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-lock"></i>
              <span>Privacy Center</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-messages"></i>
              <span>Feedback</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-list"></i>
              <span>History</span>
            </a>
          </div>
        </div> --}}
      </div>
    </li>
  </ul>
</div>
 </div>
</header>
<!-- [ Header ] end -->



  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
             
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard/index.html">Admin</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Manage Tally</a></li>
              
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted">Total Page Views</h6>
              <h4 class="mb-3">4,42,236 <span class="badge bg-light-primary border border-primary"><i
                    class="ti ti-trending-up"></i> 59.3%</span></h4>
              <p class="mb-0 text-muted text-sm">You made an extra <span class="text-primary">35,000</span> this year
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted">Total Users</h6>
              <h4 class="mb-3">78,250 <span class="badge bg-light-success border border-success"><i
                    class="ti ti-trending-up"></i> 70.5%</span></h4>
              <p class="mb-0 text-muted text-sm">You made an extra <span class="text-success">8,900</span> this year</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted">Total Order</h6>
              <h4 class="mb-3">18,800 <span class="badge bg-light-warning border border-warning"><i
                    class="ti ti-trending-down"></i> 27.4%</span></h4>
              <p class="mb-0 text-muted text-sm">You made an extra <span class="text-warning">1,943</span> this year</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted">Total Sales</h6>
              <h4 class="mb-3">$35,078 <span class="badge bg-light-danger border border-danger"><i
                    class="ti ti-trending-down"></i> 27.4%</span></h4>
              <p class="mb-0 text-muted text-sm">You made an extra <span class="text-danger">$20,395</span> this year
              </p>
            </div>
          </div>
        </div>

     

        <div class="col-md-12 col-xl-12">
          <h5 class="mb-3">College Teams</h5>
          <div class="card tbl-card">
            <div class="card-body">
               <div class="d-flex mb-3">
                  <a href="#" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#addTeamOffcanvas">
                      <i class="ti ti-users me-2"></i> Add Team
                  </a>
              </div>
              <!-- Add Team Offcanvas -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="addTeamOffcanvas" aria-labelledby="addTeamOffcanvasLabel">
                    <div class="offcanvas-header border-bottom">
                        <h5 class="offcanvas-title fw-bold text-warning" id="addTeamOffcanvasLabel">
                            <i class="ti ti-users me-2"></i> Add Team
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body px-4 py-3">
                       <form method="POST" action="{{ route('admin.collegeSaveTeam') }}" class="needs-validation" enctype="multipart/form-data" novalidate>
    @csrf
    <div class="mb-3 text-center">
        <!-- Display selected logo preview or default logo -->
        <img id="logoPreview" src="{{ asset('images/default_team_logo.webp') }}" alt="Team Logo Preview" width="150" height="150" class="rounded-circle mb-2 shadow-sm" style="object-fit: cover; border: 2px solid grey;">
    </div>
    <div class="mb-3">
        <label for="teamLogo" class="form-label fw-semibold">Logo</label>
        <input type="file" class="form-control shadow-sm" id="teamLogo" name="logo" accept="image/*" required>
        <div class="invalid-feedback">Please upload a team logo.</div>
    </div>
    <div class="mb-3">
        <label for="teamName" class="form-label fw-semibold">Team Name</label>
        <input type="text" class="form-control shadow-sm" id="teamName" name="team_name" placeholder="Enter team name" required>
        <div class="invalid-feedback">Please enter the team name.</div>
    </div>
    <div class="mb-3">
        <label for="altName" class="form-label fw-semibold">Alt Name</label>
        <input type="text" class="form-control shadow-sm" id="altName" name="alt_name" placeholder="Enter alternate name">
    </div>
    <div class="mb-3">
        <label for="department" class="form-label fw-semibold">Department</label>
        <input type="text" class="form-control shadow-sm" id="department" name="department" placeholder="Enter department" required>
        <div class="invalid-feedback">Please enter the department.</div>
    </div>
    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-success btn-m shadow">
            <i class="ti ti-plus me-1"></i> Submit Team
        </button>
    </div>
</form>

<script>
document.getElementById('teamLogo').addEventListener('change', function(event) {
    const [file] = event.target.files;
    const preview = document.getElementById('logoPreview');
    if (file) {
        preview.src = URL.createObjectURL(file);
    } else {
        preview.src = "{{ asset('images/default_team_logo.webp') }}";
    }
});
</script>
                        <div class="alert alert-info mt-4" style="font-size: 0.95rem;">
                            <i class="ti ti-info-circle me-2"></i>
                            <b>Tip:</b> Please ensure all team details are correct before submitting.
                        </div>
                    </div>
                </div>
              <div class="table-responsive">
                <table class="table table-hover table-hover table-striped mb-0">
                  <thead>
              <tr class="table-secondary">
                  <th>RANK</th>
                  <th>LOGO</th>
                  <th>TEAM NAME</th>
                  <th>DEPARTMENT</th>
                  <th>GOLD</th>
                  <th>SILVER</th>
                  <th>BRONZE</th>
                  <th>ACTION</th>
              </tr>
          </thead>
          <tbody>
                  @foreach($collegeTeams as $team)
                  <tr>
                      <td>
                          <span class="d-inline-flex align-items-center justify-content-center rounded-circle shadow-sm"
                              style="background: linear-gradient(90deg, #e9ecef 60%, #f8f9fa 100%); width: 38px; height: 38px; font-weight: bold; margin: 10px; font-size: 1.2rem; border: 2px solid #C0C0C0;">
                              <i class="ti ti-crown me-1" style="color: #C0C0C0; font-size: 14px;;"></i> {{ $loop->iteration }}
                          </span>
                      </td>
                      <td>
                          <img src="{{ $team->logo ? asset('storage/' . $team->logo) : asset('assets/images/teams/default.png') }}"
                              alt="{{ $team->team_name }} Logo" width="40" height="40" class="rounded-circle">
                      </td>
                      <td>{{ $team->team_name }}</td>
                      <td>{{ $team->department }}</td>
                      <td>
                          <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill shadow-sm"
                                style="background: linear-gradient(90deg, #ffe066 60%, #fffbe6 100%); color: #bfa100; font-weight: 600; font-size: 1rem;">
                              <i class="ti ti-medal me-1" style="color: #757575; font-size: 1.2rem;"></i> {{ $team->gold }}
                          </span>
                      </td>
                      <td>
                          <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill shadow-sm"
                                style="background: linear-gradient(90deg, #e9ecef 60%, #f8f9fa 100%); color: #7d7d7d; font-weight: 600; font-size: 1rem;">
                              <i class="ti ti-medal me-1" style="color: #666363; font-size: 1.2rem;"></i> {{ $team->silver }}
                          </span>
                      </td>
                      <td>
                          <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill shadow-sm"
                                style="background: linear-gradient(90deg, #ffe5b4 60%, #fff8e1 100%); color: #a97142; font-weight: 600; font-size: 1rem;">
                              <i class="ti ti-medal me-1" style="color: #cd7f32; font-size: 1.2rem;"></i> {{ $team->bronze }}
                          </span>
                      </td>
                      <td>
                          <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#editTeam{{ $team->id }}" title="Edit">
                              <i class="ti ti-edit"></i>
                          </a>
                          <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="offcanvas" data-bs-target="#deleteTeam{{ $team->id }}" title="Delete">
                              <i class="ti ti-trash"></i>
                          </a>
                      </td>
                  </tr>

                  <!-- Edit Team Offcanvas -->
                  <div class="offcanvas offcanvas-end" tabindex="-1" id="editTeam{{ $team->id }}" aria-labelledby="editTeamLabel{{ $team->id }}">
                      <div class="offcanvas-header border-bottom">
                          <h5 class="offcanvas-title text-success" id="editTeamLabel{{ $team->id }}">
                              <i class="ti ti-edit me-2"></i> Edit Team
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body px-4 py-3">
                          <form method="POST" action="{{ route('admin.collegeTeam.update', $team->id) }}" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                              <div class="mb-3 text-center">
                                  <!-- Display current logo or default logo, and preview selected logo -->
                                  <img id="editLogoPreview{{ $team->id }}" src="{{ $team->logo ? asset('storage/' . $team->logo) : asset('assets/images/teams/default.png') }}" alt="Logo" width="150" height="150" class="rounded-circle mb-2 shadow-sm" style="object-fit: cover; border: 2px solid grey;">
                              </div>
                              <div class="mb-3">
                                  <label class="form-label fw-semibold">Logo</label>
                                  <input type="file" class="form-control" name="logo" id="editTeamLogo{{ $team->id }}">
                              </div>
                              <div class="mb-3">
                                  <label class="form-label fw-semibold">Team Name</label>
                                  <input type="text" class="form-control" name="team_name" value="{{ $team->team_name }}" required>
                              </div>
                              <div class="mb-3">
                                  <label class="form-label fw-semibold">Alt Name</label>
                                  <input type="text" class="form-control" name="alt_name" value="{{ $team->alt_name }}">
                              </div>
                              <div class="mb-3">
                                  <label class="form-label fw-semibold">Department</label>
                                  <input type="text" class="form-control" name="department" value="{{ $team->department }}" required>
                              </div>
                              <div class="row mb-3">
                                  <div class="col">
                                      <label class="form-label fw-semibold">Gold</label>
                                      <input type="number" class="form-control" name="gold" min="0" value="{{ $team->gold }}" required>
                                  </div>
                                  <div class="col">
                                      <label class="form-label fw-semibold">Silver</label>
                                      <input type="number" class="form-control" name="silver" min="0" value="{{ $team->silver }}" required>
                                  </div>
                                  <div class="col">
                                      <label class="form-label fw-semibold">Bronze</label>
                                      <input type="number" class="form-control" name="bronze" min="0" value="{{ $team->bronze }}" required>
                                  </div>
                              </div>
                              <div class="d-grid gap-2">
                                  <button type="submit" class="btn btn-success">
                                      <i class="ti ti-check me-1"></i> Save Changes
                                  </button>
                              </div>
                          </form>

                          <script>
                          document.getElementById('editTeamLogo{{ $team->id }}').addEventListener('change', function(event) {
                              const [file] = event.target.files;
                              const preview = document.getElementById('editLogoPreview{{ $team->id }}');
                              if (file) {
                                  preview.src = URL.createObjectURL(file);
                              }
                          });
                          </script>
                          <div class="alert alert-info mt-4" style="font-size: 0.95rem;">
                              <i class="ti ti-info-circle me-2"></i>
                              <b>Edit Tip:</b> You can update all team details. Double-check before saving changes.
                          </div>
                      </div>
                  </div>

                  <!-- Delete Team Offcanvas -->
                  <div class="offcanvas offcanvas-end" tabindex="-1" id="deleteTeam{{ $team->id }}" aria-labelledby="deleteTeamLabel{{ $team->id }}">
                      <div class="offcanvas-header border-bottom">
                          <h5 class="offcanvas-title text-danger" id="deleteTeamLabel{{ $team->id }}">
                              <i class="ti ti-trash me-2"></i> Confirm Team Deletion
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body d-flex flex-column justify-content-center text-center" style="min-height: 300px;">
                          <div class="mb-4">
                              <div class="text-danger mb-2">
                                  <i class="ti ti-alert-triangle" style="font-size: 3rem;"></i>
                              </div>
                              <p class="fs-5 mb-1">Are you sure you want to delete this team?</p>
                              <p class="text-muted small">This action cannot be undone.</p>
                          </div>
                          <form method="POST" action="{{ route('admin.collegeTeam.delete', $team->id) }}">
                              @csrf
                              @method('DELETE')
                              <div class="d-grid gap-2">
                                  <button type="submit" class="btn btn-danger">
                                      <i class="ti ti-trash me-1"></i> Yes, Delete Team
                                  </button>
                                  <button type="button" class="btn btn-light border" data-bs-dismiss="offcanvas">
                                      Cancel
                                  </button>
                              </div>
                          </form>
                      </div>
                  </div>
                  @endforeach
                </tbody>
                  
             
                 
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>


            <div class="col-md-12 col-xl-12">
    <h5 class="mb-3">Secondary Level Teams</h5>
    <div class="card tbl-card">
        <div class="card-body">
            <div class="d-flex mb-3">
                <a href="#" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#addSecondaryTeamOffcanvas">
                    <i class="ti ti-users me-2"></i> Add Secondary Team
                </a>
            </div>
            <!-- Add Secondary Team Offcanvas -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="addSecondaryTeamOffcanvas" aria-labelledby="addSecondaryTeamOffcanvasLabel">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title fw-bold text-warning" id="addSecondaryTeamOffcanvasLabel">
                        <i class="ti ti-users me-2"></i> Add Secondary Team
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body px-4 py-3">
                    <form method="POST" action="{{ route('admin.secondarySaveTeam') }}" class="needs-validation" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="mb-3 text-center">
                            <img id="secondaryLogoPreview" src="{{ asset('images/default_team_logo.webp') }}" alt="Team Logo Preview" width="150" height="150" class="rounded-circle mb-2 shadow-sm" style="object-fit: cover; border: 2px solid grey;">
                        </div>
                        <div class="mb-3">
                            <label for="secondaryTeamLogo" class="form-label fw-semibold">Logo</label>
                            <input type="file" class="form-control shadow-sm" id="secondaryTeamLogo" name="logo" accept="image/*" required>
                            <div class="invalid-feedback">Please upload a team logo.</div>
                        </div>
                        <div class="mb-3">
                            <label for="secondaryTeamName" class="form-label fw-semibold">Team Name</label>
                            <input type="text" class="form-control shadow-sm" id="secondaryTeamName" name="team_name" placeholder="Enter team name" required>
                            <div class="invalid-feedback">Please enter the team name.</div>
                        </div>
                        <div class="mb-3">
                            <label for="secondaryAltName" class="form-label fw-semibold">Alt Name</label>
                            <input type="text" class="form-control shadow-sm" id="secondaryAltName" name="alt_name" placeholder="Enter alternate name">
                        </div>
                        <div class="mb-3">
                            <label for="secondaryDepartment" class="form-label fw-semibold">Department</label>
                            <input type="text" class="form-control shadow-sm" id="secondaryDepartment" name="department" placeholder="Enter department" required>
                            <div class="invalid-feedback">Please enter the department.</div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success btn-m shadow">
                                <i class="ti ti-plus me-1"></i> Submit Team
                            </button>
                        </div>
                    </form>
                    <script>
                        document.getElementById('secondaryTeamLogo').addEventListener('change', function(event) {
                            const [file] = event.target.files;
                            const preview = document.getElementById('secondaryLogoPreview');
                            if (file) {
                                preview.src = URL.createObjectURL(file);
                            } else {
                                preview.src = "{{ asset('images/default_team_logo.webp') }}";
                            }
                        });
                    </script>
                    <div class="alert alert-info mt-4" style="font-size: 0.95rem;">
                        <i class="ti ti-info-circle me-2"></i>
                        <b>Tip:</b> Please ensure all team details are correct before submitting.
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-striped mb-0">
                    <thead>
                        <tr class="table-secondary">
                            <th>RANK</th>
                            <th>LOGO</th>
                            <th>TEAM NAME</th>
                            <th>DEPARTMENT</th>
                            <th>GOLD</th>
                            <th>SILVER</th>
                            <th>BRONZE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($secondaryTeams as $team)
                        <tr>
                            <td>
                                <span class="d-inline-flex align-items-center justify-content-center rounded-circle shadow-sm"
                                    style="background: linear-gradient(90deg, #e9ecef 60%, #f8f9fa 100%); width: 38px; height: 38px; font-weight: bold; margin: 10px; font-size: 1.2rem; border: 2px solid #C0C0C0;">
                                    <i class="ti ti-crown me-1" style="color: #C0C0C0; font-size: 14px;"></i> {{ $loop->iteration }}
                                </span>
                            </td>
                            <td>
                                <img src="{{ $team->logo ? asset('storage/' . $team->logo) : asset('assets/images/teams/default.png') }}"
                                    alt="{{ $team->team_name }} Logo" width="40" height="40" class="rounded-circle">
                            </td>
                            <td>{{ $team->team_name }}</td>
                            <td>{{ $team->department }}</td>
                            <td>
                                <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill shadow-sm"
                                    style="background: linear-gradient(90deg, #ffe066 60%, #fffbe6 100%); color: #bfa100; font-weight: 600; font-size: 1rem;">
                                    <i class="ti ti-medal me-1" style="color: #757575; font-size: 1.2rem;"></i> {{ $team->gold }}
                                </span>
                            </td>
                            <td>
                                <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill shadow-sm"
                                    style="background: linear-gradient(90deg, #e9ecef 60%, #f8f9fa 100%); color: #7d7d7d; font-weight: 600; font-size: 1rem;">
                                    <i class="ti ti-medal me-1" style="color: #666363; font-size: 1.2rem;"></i> {{ $team->silver }}
                                </span>
                            </td>
                            <td>
                                <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill shadow-sm"
                                    style="background: linear-gradient(90deg, #ffe5b4 60%, #fff8e1 100%); color: #a97142; font-weight: 600; font-size: 1rem;">
                                    <i class="ti ti-medal me-1" style="color: #cd7f32; font-size: 1.2rem;"></i> {{ $team->bronze }}
                                </span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#editSecondaryTeam{{ $team->id }}" title="Edit">
                                    <i class="ti ti-edit"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="offcanvas" data-bs-target="#deleteSecondaryTeam{{ $team->id }}" title="Delete">
                                    <i class="ti ti-trash"></i>
                                </a>
                            </td>
                        </tr>

                        <!-- Edit Secondary Team Offcanvas -->
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="editSecondaryTeam{{ $team->id }}" aria-labelledby="editSecondaryTeamLabel{{ $team->id }}">
                            <div class="offcanvas-header border-bottom">
                                <h5 class="offcanvas-title text-success" id="editSecondaryTeamLabel{{ $team->id }}">
                                    <i class="ti ti-edit me-2"></i> Edit Secondary Team
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body px-4 py-3">
                                <form method="POST" action="{{ route('admin.secondaryTeam.update', $team->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3 text-center">
                                        <img id="editSecondaryLogoPreview{{ $team->id }}" src="{{ $team->logo ? asset('storage/' . $team->logo) : asset('assets/images/teams/default.png') }}" alt="Logo" width="150" height="150" class="rounded-circle mb-2 shadow-sm" style="object-fit: cover; border: 2px solid grey;">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Logo</label>
                                        <input type="file" class="form-control" name="logo" id="editSecondaryTeamLogo{{ $team->id }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Team Name</label>
                                        <input type="text" class="form-control" name="team_name" value="{{ $team->team_name }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Alt Name</label>
                                        <input type="text" class="form-control" name="alt_name" value="{{ $team->alt_name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Department</label>
                                        <input type="text" class="form-control" name="department" value="{{ $team->department }}" required>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label class="form-label fw-semibold">Gold</label>
                                            <input type="number" class="form-control" name="gold" min="0" value="{{ $team->gold }}" required>
                                        </div>
                                        <div class="col">
                                            <label class="form-label fw-semibold">Silver</label>
                                            <input type="number" class="form-control" name="silver" min="0" value="{{ $team->silver }}" required>
                                        </div>
                                        <div class="col">
                                            <label class="form-label fw-semibold">Bronze</label>
                                            <input type="number" class="form-control" name="bronze" min="0" value="{{ $team->bronze }}" required>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-success">
                                            <i class="ti ti-check me-1"></i> Save Changes
                                        </button>
                                    </div>
                                </form>
                                <script>
                                    document.getElementById('editSecondaryTeamLogo{{ $team->id }}').addEventListener('change', function(event) {
                                        const [file] = event.target.files;
                                        const preview = document.getElementById('editSecondaryLogoPreview{{ $team->id }}');
                                        if (file) {
                                            preview.src = URL.createObjectURL(file);
                                        }
                                    });
                                </script>
                                <div class="alert alert-info mt-4" style="font-size: 0.95rem;">
                                    <i class="ti ti-info-circle me-2"></i>
                                    <b>Edit Tip:</b> You can update all team details. Double-check before saving changes.
                                </div>
                            </div>
                        </div>

                        <!-- Delete Secondary Team Offcanvas -->
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="deleteSecondaryTeam{{ $team->id }}" aria-labelledby="deleteSecondaryTeamLabel{{ $team->id }}">
                            <div class="offcanvas-header border-bottom">
                                <h5 class="offcanvas-title text-danger" id="deleteSecondaryTeamLabel{{ $team->id }}">
                                    <i class="ti ti-trash me-2"></i> Confirm Team Deletion
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body d-flex flex-column justify-content-center text-center" style="min-height: 300px;">
                                <div class="mb-4">
                                    <div class="text-danger mb-2">
                                        <i class="ti ti-alert-triangle" style="font-size: 3rem;"></i>
                                    </div>
                                    <p class="fs-5 mb-1">Are you sure you want to delete this team?</p>
                                    <p class="text-muted small">This action cannot be undone.</p>
                                </div>
                                <form method="POST" action="{{ route('admin.secondaryTeam.delete', $team->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="ti ti-trash me-1"></i> Yes, Delete Team
                                        </button>
                                        <button type="button" class="btn btn-light border" data-bs-dismiss="offcanvas">
                                            Cancel
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


                    <div class="col-md-12 col-xl-8">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <h5 class="mb-0">Unique Visitor</h5>
                      <ul class="nav nav-pills justify-content-end mb-0" id="chart-tab-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="chart-tab-home-tab" data-bs-toggle="pill" data-bs-target="#chart-tab-home"
                            type="button" role="tab" aria-controls="chart-tab-home" aria-selected="true">Month</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="chart-tab-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#chart-tab-profile" type="button" role="tab" aria-controls="chart-tab-profile"
                            aria-selected="false">Week</button>
                        </li>
                      </ul>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div class="tab-content" id="chart-tab-tabContent">
                          <div class="tab-pane" id="chart-tab-home" role="tabpanel" aria-labelledby="chart-tab-home-tab"
                            tabindex="0">
                            <div id="visitor-chart-1"></div>
                          </div>
                          <div class="tab-pane show active" id="chart-tab-profile" role="tabpanel"
                            aria-labelledby="chart-tab-profile-tab" tabindex="0">
                            <div id="visitor-chart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-xl-4">
                    <h5 class="mb-3">Income Overview</h5>
                    <div class="card">
                      <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">This Week Statistics</h6>
                        <h3 class="mb-3">$7,650</h3>
                        <div id="income-overview-chart"></div>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-12 col-xl-4">
                    <h5 class="mb-3">Analytics Report</h5>
                    <div class="card">
                      <div class="list-group list-group-flush">
                        <a href="#"
                          class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Company
                          Finance Growth<span class="h5 mb-0">+45.14%</span></a>
                        <a href="#"
                          class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Company
                          Expenses Ratio<span class="h5 mb-0">0.58%</span></a>
                        <a href="#"
                          class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Business
                          Risk Cases<span class="h5 mb-0">Low</span></a>
                      </div>
                      <div class="card-body px-2">
                        <div id="analytics-report-chart"></div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 col-xl-8">
                    <h5 class="mb-3">Sales Report</h5>
                    <div class="card">
                      <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">This Week Statistics</h6>
                        <h3 class="mb-0">$7,650</h3>
                        <div id="sales-report-chart"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-xl-4">
                    <h5 class="mb-3">Transaction History</h5>
                    <div class="card">
                      <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="d-flex">
                            <div class="flex-shrink-0">
                              <div class="avtar avtar-s rounded-circle text-success bg-light-success">
                                <i class="ti ti-gift f-18"></i>
                              </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-1">Order #002434</h6>
                              <p class="mb-0 text-muted">Today, 2:00 AM</P>
                            </div>
                            <div class="flex-shrink-0 text-end">
                              <h6 class="mb-1">+ $1,430</h6>
                              <p class="mb-0 text-muted">78%</P>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="d-flex">
                            <div class="flex-shrink-0">
                              <div class="avtar avtar-s rounded-circle text-primary bg-light-primary">
                                <i class="ti ti-message-circle f-18"></i>
                              </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-1">Order #984947</h6>
                              <p class="mb-0 text-muted">5 August, 1:45 PM</P>
                            </div>
                            <div class="flex-shrink-0 text-end">
                              <h6 class="mb-1">- $302</h6>
                              <p class="mb-0 text-muted">8%</P>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="d-flex">
                            <div class="flex-shrink-0">
                              <div class="avtar avtar-s rounded-circle text-danger bg-light-danger">
                                <i class="ti ti-settings f-18"></i>
                              </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-1">Order #988784</h6>
                              <p class="mb-0 text-muted">7 hours ago</P>
                            </div>
                            <div class="flex-shrink-0 text-end">
                              <h6 class="mb-1">- $682</h6>
                              <p class="mb-0 text-muted">16%</P>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Main Content ] end -->
            <footer class="pc-footer">
              <div class="footer-wrapper container-fluid">
                <div class="row">
                  <div class="col-sm my-1">
                    <p class="m-0"
                      >Mantis &#9829; crafted by Team <a href="https://themeforest.net/user/codedthemes" target="_blank">Codedthemes</a> Distributed by <a href="https://themewagon.com/">ThemeWagon</a>.</p
                    >
                  </div>
                  <div class="col-auto my-1">
                    <ul class="list-inline footer-link mb-0">
                      <li class="list-inline-item"><a href="../index.html">Home</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </footer>

  <!-- [Page Specific JS] start -->
  <script src="{{ asset('template/admin/dist/assets/js/plugins/apexcharts.min.js') }}"></script>
  <script src="{{ asset('template/admin/dist/assets/js/pages/dashboard-default.js') }}"></script>
  <!-- [Page Specific JS] end -->
  <!-- Required Js -->
  <script src="{{ asset('template/admin/dist/assets/js/plugins/popper.min.js') }}"></script>
  <script src="{{ asset('template/admin/dist/assets/js/plugins/simplebar.min.js') }}"></script>
  <script src="{{ asset('template/admin/dist/assets/js/plugins/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template/admin/dist/assets/js/fonts/custom-font.js') }}"></script>
  <script src="{{ asset('template/admin/dist/assets/js/pcoded.js') }}"></script>
  <script src="{{ asset('template/admin/dist/assets/js/plugins/feather.min.js') }}"></script>

  
  
  
  
  <script>layout_change('light');</script>
  
  
  
  
  <script>change_box_container('false');</script>
  
  
  
  <script>layout_rtl_change('false');</script>
  
  
  <script>preset_change("preset-1");</script>
  
  
  <script>font_change("Public-Sans");</script>
  
    

</body>
<!-- [Body] end -->

</html>