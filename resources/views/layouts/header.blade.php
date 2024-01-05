<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        @php
            $words = explode(' ','Oil Clinic');
            $word  = '';
            foreach ($words as $w) {
                $word .= $w[0];
            }
        @endphp
         <img src="{{ asset('oil-clinic.png') }}" alt="logo" style="height: 3em; width: 2em;">
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Oil Clinic</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img class="user-image img-profil" src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_profile.svg"  alt="User Image">
                        <span> {{ auth()->user()->name }}
                            <br>
                            <small>{{ auth()->user()->level }}</small></span>

                    </a>
                    {{-- <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ url(auth()->user()->foto ?? '') }}" class="img-circle img-profil"
                                alt="User Image">

                            <p>
                                {{ auth()->user()->name }} - {{ auth()->user()->email }}
                            </p>
                        </li> --}}
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            {{-- <div class="pull-left">
                                <a href="{{ route('user.profil') }}" class="btn btn-default btn-flat">Profil</a>
                            </div> --}}
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat"
                                    onclick="$('#logout-form').submit()">Keluar</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<form action="{{ route('logout') }}" method="GET" id="logout-form" style="display: none;">
    @csrf
</form>
