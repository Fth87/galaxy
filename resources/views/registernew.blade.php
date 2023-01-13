@extends('templates.main')

@section('container')
    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
        <style>
            .background-radial-gradient {
                background-color: hsl(218, 41%, 15%);
                background-image: radial-gradient(650px circle at 0% 0%,
                        hsl(218, 41%, 35%) 15%,
                        hsl(218, 41%, 30%) 35%,
                        hsl(218, 41%, 20%) 75%,
                        hsl(218, 41%, 19%) 80%,
                        transparent 100%),
                    radial-gradient(1250px circle at 100% 100%,
                        hsl(218, 41%, 45%) 15%,
                        hsl(218, 41%, 30%) 35%,
                        hsl(218, 41%, 20%) 75%,
                        hsl(218, 41%, 19%) 80%,
                        transparent 100%);
            }

            #radius-shape-1 {
                height: 220px;
                width: 220px;
                top: -60px;
                left: -130px;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;
            }

            #radius-shape-2 {
                border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
                bottom: -60px;
                right: -110px;
                width: 300px;
                height: 300px;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;
            }

            .bg-glass {
                background-color: hsla(0, 0%, 100%, 0.9) !important;
                backdrop-filter: saturate(200%) blur(25px);
            }

            .atas1 {
                margin-top: 100px;
            }

            .form-radio {
                margin: 15px 0px;
            }

            .form-floating {
                margin: 15px 0px;
            }
        </style>

        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Tatacara Pendaftaran <br />
                        <span style="color: hsl(218, 81%, 75%)">online</span>
                    </h1>


                    <ol class="list opacity-70" style="color: hsl(218, 81%, 85%)">
                        <li style="margin-bottom:5px;">peserta mengisi formulir yang telah disediakan dengan baik dan benar.
                        </li>
                        <li style="margin-bottom:5px;">link twibbon : <a
                                href="http://twb.nz/olimpiadegalaxy">http://twb.nz/olimpiadegalaxy</a></li>
                        <li style="margin-bottom:5px;">Password akan digunakan pada saat log in website ujian online</li>
                        <li style="margin-bottom:5px;">untuk bagian nomor telepon peserta diharapkan memberikan nomor
                            Whatsapp yang aktif atau masih digunakan.
                        <li style="margin-bottom:5px;">setelah mendaftar peserta akan diberikan link yang berupa grup untuk
                            masuk grup whatsapp.</li>
                        <li style="margin-bottom:5px;">Untuk info atau perubahan akan disampaikan melalui grub whatsapp
                            Galaxy.</li>

                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass atas1">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form action="{{ url('register') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                {{-- <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1" class="form-control" />
                                            <label class="form-label" for="form3Example1">First name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example2" class="form-control" />
                                            <label class="form-label" for="form3Example2">Last name</label>
                                        </div>
                                    </div>
                                </div> --}}

                                <!-- Nama input -->
                                <div class="form-floating">
                                    <input type="nama" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror" id="nama "
                                        placeholder="Astro" autofocus required value="{{ old('nama') }}">
                                    <label for="nama">
                                        <p>Nama</p>
                                    </label>
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Username --}}
                                {{-- <div class="form-floating">
                                    <input type="username" name="username"
                                        class="form-control @error('username') is-invalid @enderror" id="username "
                                        placeholder="username" autofocus required value="{{ old('username') }}">
                                    <label for="username">username</label>
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div> --}}
                                <!-- Nomor hp input -->
                                <div class="form-floating">
                                    <input type="telp" name="telp"
                                        class="form-control @error('telp') is-invalid @enderror" id="telp "
                                        placeholder="08..." autofocus required value="{{ old('telp') }}">
                                    <label for="telp">
                                        <p> Nomor telpon</p>
                                    </label>
                                    @error('telp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- NISN input -->
                                <div class="form-floating">
                                    <input type="nisn" name="nisn"
                                        class="form-control @error('nisn') is-invalid @enderror" id="nisn "
                                        placeholder="nisn" autofocus required value="{{ old('nisn') }}" maxlength="10">
                                    <label for="nisn">
                                        <p>nisn</p>
                                    </label>
                                    @error('nisn')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- Sekolah input -->
                                <div class="form-floating">
                                    <input type="sekolah" name="sekolah"
                                        class="form-control @error('sekolah') is-invalid @enderror" id="sekolah "
                                        placeholder="sekolah" autofocus required value="{{ old('sekolah') }}">
                                    <label for="sekolah">
                                        <p> Asal sekolah</p>
                                    </label>
                                    @error('sekolah')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- Email input -->
                                <div class="form-floating">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="email "
                                        placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                                    <label for="email">Email address</label>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- Password input -->
                                <div class="form-floating">
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" id="password"
                                        placeholder="Password" required>
                                    <label for="password">Password</label>
                                </div>
                                <div class="form-radio">
                                    <p class="mb-0">pilih jenis kelamin</p>
                                    <label>
                                        <input type="radio" class="option-input radio" name="jk" value="laki-laki"
                                            checked />
                                        Laki-laki
                                    </label>
                                    <label>
                                        <input type="radio" class="option-input radio" name="jk" value="perempuan" />
                                        Perempuan
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label for="image"
                                        class="form-label @error('image')
                                        is-invalid
                                    @enderror">Upload
                                        bukti twibbon</label>
                                    <input class="form-control" type="file" id="image" name="image">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-radio">
                                    <p class="mb-0">pilih jenis kompetisi</p>
                                    <label>
                                        <input type="radio" class="option-input radio" name="type" value="mipa"
                                            checked />
                                        Olimpiade MIPA
                                    </label>
                                    <label>
                                        <input type="radio" class="option-input radio" name="type"
                                            value="pai" />
                                        Olimpiade PAI
                                    </label>
                                    <br>
                                    <label class="mt-1">
                                        <input type="radio" class="option-input radio" name="type"
                                            value="ips" />
                                        Olimpiade IPS
                                    </label>
                                    <label>
                                        <input type="radio" class="option-input radio" name="type"
                                            value="inggris" />
                                        Olimpiade Bahasa Inggris
                                    </label>

                                </div>


                                <!-- Submit button -->
                                <div class="text-center mt-1 form-radio">
                                    <button type="submit" class="btn btn-primary btn-block mb- rounded-3">
                                        Daftar
                                    </button>
                                </div>



                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>Sudah punya akun? <a href="{{ url('login') }}">Login</a></p>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
@endsection
