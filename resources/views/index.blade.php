<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Medal Tally System</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <!-- [Favicon] icon -->
  <link rel="icon" href="{{ asset('images/web_logo.png') }}" type="image/x-icon" style = "border-radius: 50%;"> <!-- [Google Font] Family -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('template/tallyboard/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/tallyboard/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('template/tallyboard/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('template/tallyboard/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/tallyboard/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
<link href="{{asset('template/tallyboard/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/@tabler/icons-webfont@latest/tabler-icons.min.css">
  <!-- Main CSS File -->
  <link href="{{asset('template/tallyboard/assets/css/main.css')}}" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

   <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto medal-tally-logo">
    <img src="{{ asset('images/slsu_logo.jpeg') }}" alt="Medal Tally Logo" style="width: 50px; height: 100px; border-radius: 50%; margin-right: 12px;">
    <div class="logo-text" style="display: flex; flex-direction: column; align-items: flex-start;">
        <h1 class="sitename mb-0" style="font-size: 2rem; font-weight: bold;">Medal Tally</h1>
        </div>
    </a>

    <style>
    @media (max-width: 576px) {
        .medal-tally-logo .logo-text {
            display: none !important;
        }
    }
    </style>

      <nav id="navmenu" class="navmenu">
    <ul>
    <li><a href="#hero" class="active">Home</a></li>
    <li><a href="#medalRanking">Medal Tally Board</a></li>
     <li><a href="#services">Services</a></li>
    <li><a href="#about-alt">About Us</a></li>
    <li><a href="#contact">Contact</a></li>
</ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#about">Get Started</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section" data-aos="fade-up" data-aos-delay="100">

      <img src="assets/img/hero-bg-abstract.jpg" alt="" data-aos="fade-in" class="">

      <div class="container">
      <div class="row justify-content-center" data-aos="zoom-out">
    <div class="col-xl-7 col-lg-9 text-center">
        <h1 class="mb-3" style="font-weight: bold; font-size: 2.5rem;">Medal Tally System</h1>
        <p class="lead">Track, rank, and celebrate the achievements of every team. View live medal standings and rankings for College and Secondary levels.</p>
    </div>
</div>
<div class="text-center" data-aos="zoom-out" data-aos-delay="100">
    <a href="#medalRanking" class="btn-get-started">View Ranking</a>
</div>

       <div class="row gy-4 mt-5">
    <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="100">
        <div class="icon-box">
            <div class="icon"><i class="bi bi-trophy"></i></div>
            <h4 class="title"><a href="{{ route('admin.manage') }}">Total College Teams</a></h4>
            <p class="description">{{ $collegeTeams->count() }} teams competing at the college level.</p>
        </div>
    </div><!--End Icon Box-->

    <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="200">
        <div class="icon-box">
            <div class="icon"><i class="bi bi-trophy"></i></div>
            <h4 class="title"><a href="{{ route('admin.manage') }}">Total LHS Teams</a></h4>
            <p class="description">{{ $secondaryTeams->count() }} teams competing at the secondary level.</p>
        </div>
    </div><!--End Icon Box-->

    <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="300">
        <div class="icon-box"> 
             <div class="icon"><i class="bi bi-award"></i></div>
            <h4 class="title"><a href="{{ route('admin.manage') }}">Total Gold Medals</a></h4>
            <p class="description">{{ $collegeTeams->sum('gold') + $secondaryTeams->sum('gold') }} gold medals awarded so far.</p>
        </div>
    </div><!--End Icon Box-->

    <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="400">
        <div class="icon-box">
            <div class="icon"><i class="bi bi-award"></i></div>
            <h4 class="title"><a href="{{ route('admin.manage') }}">Total Silver & Bronze</a></h4>
            <p class="description">
                {{ $collegeTeams->sum('silver') + $secondaryTeams->sum('silver') }} silver &amp;
                {{ $collegeTeams->sum('bronze') + $secondaryTeams->sum('bronze') }} bronze medals awarded.
            </p>
        </div>
    </div><!--End Icon Box-->
</div>

        </div>
      </div>

    </section><!-- /Hero Section -->

<!-- medalRanking Section -->
<section id="medalRanking" class="medal section" data-aos="fade-up" data-aos-delay="100">
    <div class="container section-title" data-aos="fade-up">
        <h2><i class="bi bi-trophy-fill text-warning me-2"></i>Medal Tally Board</h2>
        <p>Live ranking and medal tally for College and Secondary teams.</p>
    </div>
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <h4 class="mb-3 fw-bold text-primary"><i class="bi bi-mortarboard-fill me-2"></i>College Level Teams</h4>
                <div class="table-responsive mb-5">
                    <table class="table table-hover table-striped align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center text-nowrap py-3 px-2"><i class="bi bi-trophy-fill text-warning"></i> RANK</th>
                                <th class="text-center text-nowrap py-3 px-2"><i class="bi bi-image"></i> LOGO</th>
                                <th class="text-center text-nowrap py-3 px-2"><i class="bi bi-people-fill"></i> TEAM NAME</th>
                                <th class="text-center text-nowrap py-3 px-2"><i class="bi bi-building"></i> DEPARTMENT</th>
                                <th class="text-center text-nowrap py-3 px-2"><i class="bi bi-award text-warning"></i> GOLD</th>
                                <th class="text-center text-nowrap py-3 px-2"><i class="bi bi-award text-secondary"></i> SILVER</th>
                                <th class="text-center text-nowrap py-3 px-2"><i class="bi bi-award" style="color: #cd7f32;"></i> BRONZE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($collegeTeams as $team)
                            <tr>
                                <td class="text-center align-middle text-nowrap py-2 px-2">
                                    <span class="d-inline-flex align-items-center justify-content-center rounded-circle shadow-sm"
                                        style="background: linear-gradient(90deg, #e9ecef 60%, #f8f9fa 100%); width: 44px; height: 44px; font-weight: bold; font-size: 1.2rem; border: 2px solid #C0C0C0; padding: 6px;">
                                        <i class="bi bi-trophy-fill me-1 text-warning" style="font-size: 1.3rem;"></i> {{ $loop->iteration }}
                                    </span>
                                </td>
                                <td class="text-center align-middle text-nowrap py-2 px-2">
                                    <img src="{{ $team->logo ? asset('storage/' . $team->logo) : asset('assets/images/teams/default.png') }}"
                                        alt="{{ $team->team_name }} Logo" width="40" height="40" class="rounded-circle border border-2">
                                </td>
                                <td class="text-center align-middle text-nowrap py-2 px-2">{{ $team->team_name }}</td>
                                <td class="text-center align-middle text-nowrap py-2 px-2">{{ $team->department }}</td>
                                <td class="text-center align-middle text-nowrap py-2 px-2">
                                    <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill shadow-sm"
                                        style="background: linear-gradient(90deg, #ffe066 60%, #fffbe6 100%); color: #bfa100; font-weight: 600;">
                                        <i class="bi bi-award me-1 text-secondary"></i> {{ $team->gold }}
                                    </span>
                                </td>
                                <td class="text-center align-middle text-nowrap py-2 px-2">
                                    <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill shadow-sm"
                                        style="background: linear-gradient(90deg, #e9ecef 60%, #f8f9fa 100%); color: #7d7d7d; font-weight: 600;">
                                        <i class="bi bi-award me-1 text-secondary"></i> {{ $team->silver }}
                                    </span>
                                </td>
                                <td class="text-center align-middle text-nowrap py-2 px-2">
                                    <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill shadow-sm"
                                        style="background: linear-gradient(90deg, #ffe5b4 60%, #fff8e1 100%); color: #a97142; font-weight: 600;">
                                        <i class="bi bi-award me-1" style="color: #cd7f32;"></i> {{ $team->bronze }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                <h4 class="mb-3 fw-bold text-success"><i class="bi bi-book-fill me-2"></i>Secondary Level Teams</h4>
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center text-nowrap py-3 px-2"><i class="bi bi-trophy-fill text-warning"></i> RANK</th>
                                <th class="text-center text-nowrap py-3 px-2"><i class="bi bi-image"></i> LOGO</th>
                                <th class="text-center text-nowrap py-3 px-2"><i class="bi bi-people-fill"></i> TEAM NAME</th>
                                <th class="text-center text-nowrap py-3 px-2"><i class="bi bi-building"></i> DEPARTMENT</th>
                                <th class="text-center text-nowrap py-3 px-2"><i class="bi bi-award text-warning"></i> GOLD</th>
                                <th class="text-center text-nowrap py-3 px-2"><i class="bi bi-award text-secondary"></i> SILVER</th>
                                <th class="text-center text-nowrap py-3 px-2"><i class="bi bi-award" style="color: #cd7f32;"></i> BRONZE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($secondaryTeams as $team)
                            <tr>
                                <td class="text-center align-middle text-nowrap py-2 px-2">
                                    <span class="d-inline-flex align-items-center justify-content-center rounded-circle shadow-sm"
                                        style="background: linear-gradient(90deg, #e9ecef 60%, #f8f9fa 100%); width: 44px; height: 44px; font-weight: bold; font-size: 1.2rem; border: 2px solid #C0C0C0; padding: 6px;">
                                        <i class="bi bi-trophy-fill me-1 text-warning" style="font-size: 1.3rem;"></i> {{ $loop->iteration }}
                                    </span>
                                </td>
                                <td class="text-center align-middle text-nowrap py-2 px-2">
                                    <img src="{{ $team->logo ? asset('storage/' . $team->logo) : asset('assets/images/teams/default.png') }}"
                                        alt="{{ $team->team_name }} Logo" width="40" height="40" class="rounded-circle border border-2">
                                </td>
                                <td class="text-center align-middle text-nowrap py-2 px-2">{{ $team->team_name }}</td>
                                <td class="text-center align-middle text-nowrap py-2 px-2">{{ $team->department }}</td>
                                <td class="text-center align-middle text-nowrap py-2 px-2">
                                    <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill shadow-sm"
                                        style="background: linear-gradient(90deg, #ffe066 60%, #fffbe6 100%); color: #bfa100; font-weight: 600;">
                                        <i class="bi bi-award me-1 text-secondary"></i> {{ $team->gold }}
                                    </span>
                                </td>
                                <td class="text-center align-middle text-nowrap py-2 px-2">
                                    <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill shadow-sm"
                                        style="background: linear-gradient(90deg, #e9ecef 60%, #f8f9fa 100%); color: #7d7d7d; font-weight: 600;">
                                        <i class="bi bi-award me-1 text-secondary"></i> {{ $team->silver }}
                                    </span>
                                </td>
                                <td class="text-center align-middle text-nowrap py-2 px-2">
                                    <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill shadow-sm"
                                        style="background: linear-gradient(90deg, #ffe5b4 60%, #fff8e1 100%); color: #a97142; font-weight: 600;">
                                        <i class="bi bi-award me-1" style="color: #cd7f32;"></i> {{ $team->bronze }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /medalRanking Section -->

  <!-- Stats Section -->
<section id="stats" class="stats section light-background" data-aos="fade-up" data-aos-delay="100">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="{{ $collegeTeams->count() + $secondaryTeams->count() }}" data-purecounter-duration="1" class="purecounter"></span>
          <p>Total Teams</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="{{ $collegeTeams->sum('gold') + $secondaryTeams->sum('gold') }}" data-purecounter-duration="1" class="purecounter"></span>
          <p>Gold Medals</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="{{ $collegeTeams->sum('silver') + $secondaryTeams->sum('silver') }}" data-purecounter-duration="1" class="purecounter"></span>
          <p>Silver Medals</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="{{ $collegeTeams->sum('bronze') + $secondaryTeams->sum('bronze') }}" data-purecounter-duration="1" class="purecounter"></span>
          <p>Bronze Medals</p>
        </div>
      </div><!-- End Stats Item -->

    </div>
  </div>
</section><!-- /Stats Section -->



 <!-- Services Section -->
<section id="services" class="services section light-background" data-aos="fade-up" data-aos-delay="100">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Services</h2>
    <p>Discover the features and benefits of the Medal Tally System for your school events and competitions.</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item item-cyan position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
            </svg>
            <i class="bi bi-activity"></i>
          </div>
          <h3>Live Medal Tracking</h3>
          <p>Monitor medal counts and team rankings in real time for both College and Secondary levels. Stay updated as results change instantly.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item item-orange position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
            </svg>
            <i class="bi bi-broadcast"></i>
          </div>
          <h3>Instant Updates</h3>
          <p>Results and medal tallies are updated instantly as events conclude, ensuring everyone has access to the latest standings.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item item-teal position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
            </svg>
            <i class="bi bi-easel"></i>
          </div>
          <h3>Easy Management</h3>
          <p>Admins can easily add, edit, and manage teams and medal counts through a user-friendly dashboard interface.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item item-red position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
            </svg>
            <i class="bi bi-bounding-box-circles"></i>
          </div>
          <h3>Transparent Results</h3>
          <p>All medal tallies and rankings are visible to everyone, promoting fairness and transparency throughout the competition.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item item-indigo position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
            </svg>
            <i class="bi bi-calendar4-week icon"></i>
          </div>
          <h3>Event Scheduling</h3>
          <p>Organize and display event schedules so participants and viewers know when and where competitions are happening.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item item-pink position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
            </svg>
            <i class="bi bi-chat-square-text"></i>
          </div>
          <h3>Support & Feedback</h3>
          <p>Get help and share your feedback to improve the system. Our team is ready to assist with any questions or issues.</p>
        </div>
      </div><!-- End Service Item -->

    </div>
  </div>
</section><!-- /Services Section -->


<!-- About Alt Section -->
<section id="about-alt" class="about-alt section" data-aos="fade-up" data-aos-delay="100">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
        <img src="{{ asset('images/slsu_logo.jpeg') }}" class="img-fluid rounded shadow" alt="About Medal Tally" style = "padding: 40px;">
        <a href="" class="glightbox pulsating-play-btn" aria-label="Watch Video"></a>
      </div>
      <div class="col-lg-6 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <h3 class="fw-bold mb-3"><i class="bi bi-info-circle text-primary me-2"></i>About the Medal Tally System</h3>
        <p class="fst-italic mb-3">
          The Medal Tally System is designed to track, rank, and celebrate the achievements of every team in real time. It provides a transparent and engaging way to view medal standings for both College and Secondary levels.
        </p>
        <ul class="list-unstyled mb-3">
          <li class="mb-2"><i class="bi bi-check2-all text-success me-2"></i> <span>Live medal ranking for all teams.</span></li>
          <li class="mb-2"><i class="bi bi-check2-all text-success me-2"></i> <span>Easy-to-use interface for students and staff.</span></li>
          <li class="mb-2"><i class="bi bi-check2-all text-success me-2"></i> <span>Celebrates excellence and sportsmanship across departments.</span></li>
        </ul>
        <p>
          Our goal is to foster healthy competition and recognize outstanding performance. Stay updated and cheer for your favorite teams as they strive for gold, silver, and bronze!
        </p>
      </div>
    </div>
  </div>
</section><!-- /About Alt Section -->



   

<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Reach out to us for any questions, feedback, or support regarding the Medal Tally System.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
      <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.1359755824865!2d124.98187627354424!3d10.250615568675238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33071625c74a8f11%3A0x55cba8f72edd7fc9!2sSouthern%20Leyte%20State%20University%20-%20Tomas%20Oppus%20Campus!5e0!3m2!1sen!2sph!4v1756038654653!5m2!1sen!2sph" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><!-- End Google Maps -->

    <div class="row gy-4">

      <div class="col-lg-4">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>Address</h3>
            <p>SLSU Tomas Oppus Campus, Brgy. San Isidro, Southern Leyte, Philippines</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Call Us</h3>
            <p>+63 962 790 5690</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email Us</h3>
            <p>programmerejie@gmail.com</p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="col-lg-8">
        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>

</section><!-- /Contact Section -->

  </main>

<hr>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('template/tallyboard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template/tallyboard/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('template/tallyboard/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('template/tallyboard/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('template/tallyboard/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('template/tallyboard/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('template/tallyboard/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('template/tallyboard/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('template/tallyboard/assets/js/main.js')}}"></script>

</body>

</html>