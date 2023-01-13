@extends('adminNew.templates.main')

@section('container')
    <main id="main" class="main">


        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/dashboard">dashboard</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        @foreach ($users as $user)
            @if ($user->email == $userr->email)
                <section class="section profile">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div
                                    class="card-body profile-card pt-4 d-flex flex-column align-items-center nav-tabs-bordered mx-3">
                                    <h2>{{ $user->nama }}</h2>
                                    <h3>{{ $user->type }}</h3>
                                    @if ($user->is_lolos == 'lolos')
                                        <div class="alert alert-success" role="alert">
                                            <div class="col-lg-12">
                                                <h3
                                                    style="font-family: unset; font-size: 30px; font-weight: 500; margin-bottom:10px;">
                                                    Selamat Anda lolos!!</h2>
                                                    <ol class="list cara-daftar">
                                                        <li style="margin-bottom:5px;">Selamat, anda lolos, Jadi harus bayar
                                                            dong wkwkwk:)</li>
                                                        <li style="margin-bottom:5px;">Saat kamu lolos, kamu akan
                                                            mendapatkan
                                                            kode untuk ditambahkan saat pembayaran.<br>
                                                            Contoh kode yang kamu dapatkan adalah 021. Maka, untuk
                                                            mempermudah pelacakan data, uang pendaftaran yang harus kamu
                                                            bayarkan menjadi Rp 45.021,-</li>
                                                        <li style="margin-bottom:5px;">Lakukan pembayaran melalui transfer
                                                            ke rekening Bank Mandiri - 13600165557271 atas nama Noer Syoim
                                                        <li style="margin-bottom:5px;">Setelah melakukan pembayaran, harap
                                                            lakukan konfirmasi melalui contact person yang tercantum pada
                                                            website.</li>
                                                        <li style="margin-bottom:5px;">Setelah verifikasi pembayaran maka
                                                            akan di verifikasi oleh admin dibawah ini,silahkan tunggu
                                                            maksimal 3x24 jam, jika belum silahkan hubungi admin</li>
                                                        <li style="margin-bottom:5px;">Lolos doang kagak bayar awkoakokw,
                                                            bayar dong, lomba aja dibayar, buat web keren kek gini kgk :(
                                                        </li>
                                                    </ol>
                                            </div>
                                        </div>
                                    @elseif ($user->is_lolos == 'tidak')
                                        <div class="alert alert-danger" role="alert">
                                            Mohon maap nih, anda ga lolos :(
                                        </div>
                                    @else
                                        <h6>pengumuman akan ditampilkan disini</h6>
                                    @endif

                                </div>
                                <div class="mx-3 tab-pane fade show active profile-overview" id="profile-overview">
                                    @if ($user->is_lolos == 'lolos')
                                        <h5 class="card-title">Kode Pembayaran</h5>
                                        <div class="row">
                                            <div class="col-lg-5 col-md-4 label ">kode</div>
                                            <div class="col-lg-7 col-md-8">{{ $user->kode }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-md-4 label ">Status pembayaran</div>
                                            @if ($user->status_pembayaran)
                                                <div class="col-lg-7 col-md-8">belum melakukan pembayaran</div>
                                            @else
                                                <div class="col-lg-7 col-md-8">Sudah melakukan pembayaran</div>
                                            @endif

                                        </div>
                                    @endif

                                    <h5 class="card-title">Akun website E-Ujian</h5>

                                    <div class="row">
                                        <div class="col-lg-5 col-md-4 label ">Username</div>
                                        <div class="col-lg-7 col-md-8">{{ $user->username }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-4 label ">Nomor peserta</div>
                                        <div class="col-lg-7 col-md-8">{{ $user->nomor_peserta }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-4 label ">Password</div>
                                        <div class="col-lg-7 col-md-8">{{ $user->password_peserta }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-4 label ">Link Penysihan </div>
                                        <div class="col-lg-7 col-md-8"><a
                                                href="https://www.e-ujian.com/login">https://www.e-ujian.com/login</a></div>
                                    </div>
                                </div>
                            </div>




                        </div>

                        <div class="col-xl-8">

                            <div class="card">
                                <div class="card-body pt-3">
                                    <!-- Bordered Tabs -->
                                    <ul class="nav nav-tabs nav-tabs-bordered">

                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab"
                                                data-bs-target="#profile-overview">Overview</button>
                                        </li>



                                    </ul>

                                    <div class="tab-content pt-2">

                                        <div class="tab-pane fade show active profile-overview" id="profile-overview">


                                            <h5 class="card-title">Detail profil</h5>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label ">Nama lengkap</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->nama }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label ">Username</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->username }}</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Sekolah</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->sekolah }}</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">NISN</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->nisn }}</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Nomor Telpon</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->telp }}</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Email</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->jk }}</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Jenis Lomba</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->type }}</div>
                                            </div>

                                        </div>




                                    </div><!-- End Bordered Tabs -->




                                </div>


                            </div>



                        </div>




                    </div>


                </section>
            @endif
        @endforeach


    </main><!-- End #main -->
@endsection
