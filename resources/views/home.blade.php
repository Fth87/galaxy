@extends('templates.main')

@section('container')

    <section class="hero-section overlay bg-cover" data-background="assets/images/galaxy_4.0/Background.jpg">
        <div class="container">
            <div class="hero-slider">
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-white" data-animation-out="fadeOutRight" data-delay-out="5"
                                data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">WELCOME TO</p>
                            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5"
                                data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">GALAXY</h1>
                            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5"
                                data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">
                                Greatest Academic in The Large Andromeda In X-tion of Creativity
                            </p>
                            <br><br>
                            <a href="menu/about/" class="btn btn-primary" data-animation-out="fadeOutRight"
                                data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft"
                                data-delay-in=".7">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5"
                                data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">The Future Of
                                New Nusantara</h1>

                            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5"
                                data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">membangun
                                generasi penerus bangsa yang memiliki kemampuan serta
                                bakat yang bagus untuk di aplikasikan dalam betuk lomba olimpiade MIPA, PAI, IPS, dan
                                Bahasa Inggris. GALAXY mengajak para pelajar indonesia untuk berpatisipasi dengan aksi
                                hebatnya pada bidang akademik untuk mewujudkan
                                cita-cita bangsa indonesia.</p>
                        </div>
                    </div>
                </div>
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5"
                                data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1"> Olimpiade MIPA,
                                PAI, IPS, dan Bahasa Inggris</h1>
                            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5"
                                data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">Olimpiade MIPA,
                                PAI, IPS, dan Bahasa Inggris SMP/MTs tingkat nasional</p>
                            <a href="register/type/penyisihan/" class="btn btn-primary"
                                data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3"
                                data-animation-in="fadeInLeft" data-delay-in=".7">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /hero slider -->

    <!-- banner-feature -->
    <section class="bg-gray">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-4 col-lg-5 align-self-end">
                    <img class="img-fluid w-100" src="assets/images/banner/ini postre.webp" alt="banner-feature">
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="row feature-blocks bg-gray justify-content-between jenis-lomba">
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">Olimpiade</h3>
                            <p>Mengasah kemampuan dengan ajang bergengsi Olimpiade MIPA,PAI,IPS & Bahasa Inggris yang
                                memperebutkan piala Gubernur</p>
                        </div>
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-medall mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">Seminar & Lomba</h3>
                            <p>Mengembangkan minat dan bakat dengan Seminar dan Lomba di berbagai bidang</p>
                        </div>
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">Wajah Santri</h3>
                            <p>Mengembangkan kreativitas dan inovasi dalam bidang pendidikan dan kebudayaan di Pesantren
                            </p>
                        </div>
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-music-alt mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">Malam Puncak</h3>
                            <p>Mempersembahkan karya cipta yang dipadu dengan musik dengan kolaborasi yang apik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /banner-feature -->

    <!-- success story -->
    <section class="section bg-cover" data-background="assets/images/galaxy_6.0/febi.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-4 position-relative success-video">
                    <a class="play-btn venobox" href="https://www.youtube.com/watch?v=3-Tnwunru8k" data-vbtype="video">
                        <i class="ti-control-play" style="font-size: 50px;"></i>
                    </a>
                    <h1 style="color: white;">Lihat Video Keseruan Galaxy</h1>
                </div>
                <div class="col-lg-6 col-sm-8">
                    <div class="bg-white p-5">
                        <h2 class="section-title">Tentang Galaxy</h2>
                        <p>Galaxy merupakan sebuah event tahunan yang diselenggarakan oleh MA istimewa Amanatul Ummah
                            layanan SKS. Kegiatan Galaxy ini sangat prospektif untuk dikembangkan dalam upaya untuk
                            meningkatkan kualitas generasi muda untuk menghadapi era millennial mengingat bangsa
                            Indonesia saat ini semakin tertinggal karena tidak memiliki SDM yang mumpuni. Galaxy
                            diharapkan dapat menjadi wadah yang pas untuk menampung bakat dan kemampuan pelajar serta
                            bentuk kontribusi dalam menghadapi globalisasi yang semakin berkembang pesat dan memajukan
                            kemampuan generasi muda bangsa indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /success story -->

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="section-title">Guest Star</h2>
                </div>
                <div class="col-lg-5 col-sm-6 mb-5 mb-lg-0" style="margin-right:25px \">
            <div class="card
                    border-0 rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="assets/images/galaxy_4.0/Guest star laki.jpg"
                        alt="teacher">
                    <div class="card-body">
                        <h4 class="card-title" style="text-align:center; font-size:40px;">COMING SOON</h4>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- cta -->
    <section class="section bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="text-center">
                        <h2 class="text-white">Total Hadiah</h2>
                        <div class="mx-auto">
                            <div class="d-flex justify-content-center">
                                <h1 class="text-white">Rp<h1>
                                        <h1 class="count text-white" data-count="13"></h1>
                                        <h1 class="text-white"> Juta Rupiah<h1>
                            </div>
                        </div>
                    </div>
                    <a href="menu/index/olimpiade" class="btn olimpiade">Yuk,Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </section>



    @endsection
