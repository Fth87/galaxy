<header class="fixed-top header">
    <div class="top-header  bg-white">

        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 text-center text-lg-left">
                    <!-- <a class="text-color mr-3" href="https://wa.me/082331951952"><strong>Elva</strong> 082331951952 (WA)</a> -->
                    <ul class="list-inline d-inline">
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                href="https://wa.me/6282331951952"><i class="fa fa-whatsapp"
                                    style="font-size: 15px;"></i></a></li>
                        <!--<li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>-->
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                href="https://www.instagram.com/galaxy.olympiad/"><i class="ti-instagram"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                href="https://www.youtube.com/channel/UCu7xkBB8LZdrluR5ow1W27A"><i
                                    class="ti-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-8 text-center text-lg-right">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a
                                class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                                href="http://www.mai-au.sch.id/">MA Istimewa Amanatul Ummah</a></li>
                        <!--<li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="login/">login</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="navigation w-100">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">

                <a class="navbar-brand" href="../galaxy/"><img src="{{ url('assets/images/logo 6.png') }}"
                        alt="logo" style="max-width: 75%;"></a>
                <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        <li <?php if ($dt == '' || $dt == 'home') {
                            echo "class='nav-item active'";
                        } else {
                            echo "class='nav-item'";
                        } ?>>
                            <a class="nav-link" href="{{ url('/home') }}">Beranda</a>
                        </li>
                        <li <?php if ($dt == 'about') {
                            echo "class='nav-item active'";
                        } else {
                            echo "class='nav-item'";
                        } ?>>
                            <a class="nav-link" href="{{ url('/about') }}">Tentang</a>
                        </li>

                        <li <?php if ($dt == '' || $dt == 'menu') {
                            echo "class='nav-item active dropdown view'";
                        } else {
                            echo "class='nav-item dropdown view'";
                        } ?>>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kompetisi
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/menu/olimpiade') }}">Olimpiade</a>
                                <!--<a class="dropdown-item" href="menu/speech_contest/">Speech Contest</a>-->
                                <!--<a class="dropdown-item" href="menu/index/podcast">Podcast</a>-->
                                <a class="dropdown-item" href="{{ url('/menu/fotografi') }}">Fotografi</a>
                                <a class="dropdown-item" href="{{ url('menu/fotografi') }}">Poster</a>
                                <!--<a class="dropdown-item" href="menu/index/videografi">Videografi</a>-->
                                <a class="dropdown-item" href="{{ url('menu/tiktok') }}">Tiktok</a>
                            </div>
                        </li>
                        <!--<li class="nav-item @@olimp">-->
                        <!--  <a class="nav-link" href="register/">Pendaftaran</a>-->
                        <!--</li>-->
                        {{-- <li class="nav-item dropdown view @@olimp">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pendaftaran
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('register/penyisihan/') }}">penyisihan</a>
                                <a class="dropdown-item">Seperempat Final</a>
                                <!--<a class="dropdown-item" href="{{ url('register/type/seperempat/') }}">Seperempat Final</a> -->
                            </div>
                        </li> --}}
                        <li <?php if ($dt == 'article') {
                            echo "class='nav-item active'";
                        } else {
                            echo "class='nav-item'";
                        } ?>>
                            <a class="nav-link" href="{{ url('/article') }}">Galaxy 5.0</a>
                        </li>
                        <li <?php if ($dt == 'contact') {
                            echo "class='nav-item active'";
                        } else {
                            echo "class='nav-item'";
                        } ?>>
                            <a class="nav-link" href="{{ url('/contact') }}">Kontak</a>
                        </li>

                        @auth
                            <li <?php
                            if ($dt == 'register') {
                                echo "class='nav-item active dropdown'";
                            } else {
                                echo "class='nav-item dropdown'";
                            }
                            ?>>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ auth()->user()->nama }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ url('dashboard/profile') }}"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-layout-text-window-reverse"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z" />
                                                <path
                                                    d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z" />
                                            </svg> Dashboard</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <style>
                                            button,
                                            input[type="submit"],
                                            input[type="reset"] {
                                                background: none;
                                                color: inherit;
                                                border: none;
                                                padding: 0;
                                                font: inherit;
                                                cursor: pointer;
                                                outline: inherit;
                                            }
                                        </style>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button class="dropdown-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-box-arrow-in-right"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                                    <path fill-rule="evenodd"
                                                        d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                                </svg> Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li <?php if ($dt == 'register') {
                                echo "class='nav-item active'";
                            } else {
                                echo "class='nav-item'";
                            } ?>>
                                <a class="nav-link" href="{{ url('/login') }}">login</a>
                            </li>
                        @endauth

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
