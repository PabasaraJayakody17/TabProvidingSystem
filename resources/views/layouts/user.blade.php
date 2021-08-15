
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="img/ico" href='images/favicon.png'>
    <title>TPS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="{{asset('css/header.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('js/header.js')}}"></script>

</head>

<body>

    <nav class="navbar navbar-expand-sm" style="background-color: 0F2453;">
        <div class="hamburger">
            <div class="cta">
                <div class="toggle-btn type14"></div>
            </div>
        </div>



        <h3 class="text-white">Tab Providing System</h3>
        <!--a class="navbar-brand" href="#">
            EMS
            <img src="images/logo.png" alt="logo" style="width:140px;">
        </a-->

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <p class="text-white "><i class="fa fa-user pr-2"></i>{{ Auth::user()->name }}</p>
            <!--li class="nav-item">
                <a class="nav-link" href="#"><img src="images/notification.png" alt="dfdfd"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="images/sms.png" alt="dfd"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="images/user.png" alt="dfdfd"></a>
            </li-->
        </ul>
    </nav>


    <section class="side-bar-warp">
        <div class="sidebar-menu small-side-bar flowHide">
            <nav class="">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.viewDashboard')}}">
                        <span class="sidebar-icon"><i class="fas fa-tachometer-alt"></i>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('tab.choosedistrict')}}">
                        <span class="sidebar-icon"><i class="fa fa-plus-circle"></i>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Book Now</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('tab.viewrequest')}}">
                        <span class="sidebar-icon"><i class="fas fa-list"></i>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Booking History</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.profileView') }}">
                        <span class="sidebar-icon"><i class="fas fa-cog"></i>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Profile Settings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.changePassword') }}">
                        <span class="sidebar-icon"><i class="fas fa-wrench"></i>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Change Password</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        <span class="sidebar-icon"><i class="fas fa-sign-out-alt"></i>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Log Out</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <div class="container">

        @yield('content')


    </div>


</body>

</html>
