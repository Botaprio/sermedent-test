{{--<div id="app">--}}
{{--    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--        <div class="container">--}}
{{--            <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                {{ config('app.name', 'SERMEDENT') }}--}}
{{--            </a>--}}
{{--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}

{{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                <!-- Left Side Of Navbar -->--}}
{{--                <ul class="navbar-nav me-auto">--}}

{{--                </ul>--}}

{{--                <!-- Right Side Of Navbar -->--}}
{{--                <ul class="navbar-nav ms-auto">--}}
{{--                    <!-- Authentication Links -->--}}
{{--                    @guest--}}
{{--                        @if (Route::has('login'))--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}
{{--                    @else--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                {{ Auth::user()->name }}--}}
{{--                            </a>--}}

{{--                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}

{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    @endguest--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}

{{--    <main class="py-4">--}}
{{--        @yield('content')--}}
{{--    </main>--}}
{{--</div>--}}

<nav class="navbar ms-navbar">
    <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
{{--        <span class="ms-toggler-bar bg-white"></span>--}}
{{--        <span class="ms-toggler-bar bg-white"></span>--}}
{{--        <span class="ms-toggler-bar bg-white"></span>--}}
    </div>
    <div class="logo-sn logo-sm ms-d-block-sm">
{{--        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="{{asset('index.html')}}"><img src="{{asset('assets/img/medboard-logo-84x41.png')}}" alt="logo"> </a>--}}
    </div>
    <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">

{{--        <li class="ms-nav-item  ms-d-none">--}}
{{--            <a href="{{asset('#mymodal')}}" class="text-white" data-toggle="modal"><i class="flaticon-spreadsheet mr-2"></i> Make an appointment</a>--}}
{{--        </li>--}}

{{--        <li class="ms-nav-item ms-d-none">--}}
{{--            <a href="{{asset('#prescription')}}" class="text-white" data-toggle="modal"><i class="flaticon-pencil mr-2"></i> Write a prescription</a>--}}
{{--        </li>--}}

{{--        <li class="ms-nav-item ms-d-none">--}}
{{--            <a href="{{asset('#report1')}}" class="text-white" data-toggle="modal"><i class="flaticon-list mr-2"></i> Generate Report</a>--}}
{{--        </li>--}}

{{--        <li class="ms-nav-item dropdown">--}}
{{--            <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-bell"></i></a>--}}
{{--            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">--}}
{{--                <li class="dropdown-menu-header">--}}
{{--                    <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notifications</span></h6>--}}
{{--                    <span class="badge badge-pill badge-info">4 New</span>--}}
{{--                </li>--}}
{{--                <li class="dropdown-divider"></li>--}}
{{--                <li class="ms-scrollable ms-dropdown-list">--}}
{{--                    <a class="media p-2" href="#">--}}
{{--                        <div class="media-body">--}}
{{--                            <span>12 ways to improve your crypto dashboard</span>--}}
{{--                            <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a class="media p-2" href="#">--}}
{{--                        <div class="media-body">--}}
{{--                            <span>You have newly registered users</span>--}}
{{--                            <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 45 minutes ago</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a class="media p-2" href="#">--}}
{{--                        <div class="media-body">--}}
{{--                            <span>Your account was logged in from an unauthorized IP</span>--}}
{{--                            <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 2 hours ago</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a class="media p-2" href="#">--}}
{{--                        <div class="media-body">--}}
{{--                            <span>An application form has been submitted</span>--}}
{{--                            <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 1 day ago</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="dropdown-divider"></li>--}}
{{--                <li class="dropdown-menu-footer text-center">--}}
{{--                    <a href="#">View all Notifications</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
        <li class="ms-nav-item ms-nav-user dropdown">
            <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-right" src="{{asset('assets/img/dashboard/doctor-3.jpg')}}" alt="people"> </a>
            <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
                <li class="dropdown-menu-header">
                    <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Bienvenido</span></h6>
                </li>
                <li class="dropdown-divider"></li>
                <li class="ms-dropdown-list">
                    <a class="media fs-14 p-2" href="{{asset('pages/prebuilt-pages/user-profile.html')}}"> <span><i class="flaticon-user mr-2"></i> Perfil</span> </a>
{{--                    <a class="media fs-14 p-2" href="{{asset('pages/apps/email.html')}}"> <span><i class="flaticon-mail mr-2"></i> Inbox</span> <span class="badge badge-pill badge-info">3</span> </a>--}}
{{--                    <a class="media fs-14 p-2" href="{{asset('pages/prebuilt-pages/user-profile.html')}}"> <span><i class="flaticon-gear mr-2"></i> Account Settings</span> </a>--}}
                </li>
                <li class="dropdown-divider"></li>
                <li class="dropdown-menu-footer">
                    <a class="media fs-14 p-2" href="{{asset('pages/prebuilt-pages/lock-screen.html')}}"> <span><i class="flaticon-security mr-2"></i> Bloquear</span> </a>
                </li>
                <li class="dropdown-menu-footer">
                    <a class="media fs-14 p-2" href="{{url('/')}}"> <span><i class="flaticon-shut-down mr-2"></i> Salir</span> </a>
{{--                    <a class="media fs-14 p-2" href="{{asset('pages/prebuilt-pages/default-login.html')}}"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span> </a>--}}
                </li>
            </ul>
        </li>
    </ul>
    <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
    </div>
</nav>
