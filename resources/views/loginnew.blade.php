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
                        Tatacara <br />
                        <span style="color: hsl(218, 81%, 75%)">Login</span>
                    </h1>


                    <ol class="list opacity-70" style="color: hsl(218, 81%, 85%)">
                        <li style="margin-bottom:5px;">Masukkan e-mail yang kalian masukkan saat pendaftaran
                        </li>
                        <li style="margin-bottom:5px;">Isi password sesuai password yang kalian masukkan saat pendaftaran
                            juga
                        </li>
                        <li style="margin-bottom:5px;">Jika lupa password silahkan hubungi admin.
                        </li>


                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 py-5 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass atas1 py-5">

                        <div class="card-body px-4 py-5 px-md-5">

                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @elseif (session()->has('loginError'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('loginError') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <form action="{{ url('login') }}" method="post">
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

                                <!-- Email input -->
                                <div class="form-floating">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="email "
                                        placeholder="email" autofocus required value="{{ old('email') }}">
                                    <label for="email">email</label>
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

                                <!-- Submit button -->
                                <div class="text-center mt-1">
                                    <button type="submit" class="btn btn-primary btn-block mb- rounded-3">
                                        Masuk
                                    </button>
                                </div>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>Belum punya akun? <a href="{{ url('register') }}">Daftar!</a></p>
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
