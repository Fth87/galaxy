@extends('adminNew.templates.main')
@section('container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Administrator</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">dashboard</a></li>
                    <li class="breadcrumb-item active">Admin</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">
                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        {{-- <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <form method="GET" action="/dashboard/admin">
                                            @csrf

                                            <li class="dropdown-item">
                                                <label for="day">Hari:</label>
                                                <select name="day">
                                                    <option value="">Semua</option>
                                                    @for ($i = 1; $i <= 31; $i++)
                                                        <option value="{{ $i }}"
                                                            {{ request()->day == $i ? 'selected' : '' }}>{{ $i }}
                                                        </option>
                                                    @endfor
                                                </select>
                                            </li>
                                            <li class="dropdown-item">
                                                <label for="month">Bulan:</label>
                                                <select name="month">
                                                    <option value="">Semua</option>
                                                    @foreach (range(1, 12) as $month)
                                                        <option value="{{ $month }}"
                                                            {{ request()->month == $month ? 'selected' : '' }}>
                                                            {{ $month }}</option>
                                                    @endforeach
                                                </select>
                                            </li>
                                            <li class="dropdown-item">
                                                <label for="year">Tahun:</label>
                                                <select name="year">
                                                    <option value="">Semua</option>
                                                    @foreach (range(2019, 2023) as $year)
                                                        <option value="{{ $year }}"
                                                            {{ request()->year == $year ? 'selected' : '' }}>
                                                            {{ $year }}</option>
                                                    @endforeach
                                                </select>

                                            </li>
                                            <li class="dropdown-item"><button class=" btn btn-primary" value="Submit"
                                                    type="submit">Filter</button>
                                            </li>

                                        </form> --}}
                                        <li class="dropdown-header text-start">
                                            <h6>Data</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ url('export') }}">Export</a>
                                        </li>
                                        <li class="dropdown-item ">
                                            Import data, Untuk format & urutan di file excel tanya admin
                                            <form action="{{ url('import') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control " id="inputGroupFile02"
                                                        name="file" aria-describedby="button-addon2">

                                                    <input type="submit" value="Import" class="btn btn-outline-secondary"
                                                        type="button" id="inputGroupFileAddon04">
                                                </div>


                                            </form></a>
                                        </li>
                                        <li class="dropdown-item ">
                                            Update data
                                            <form action="{{ url('importUpdate') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control " id="inputGroupFile02"
                                                        name="file" aria-describedby="button-addon2">

                                                    <input type="submit" value="Update" class="btn btn-outline-secondary"
                                                        type="button" id="inputGroupFileAddon04">
                                                </div>


                                            </form></a>
                                        </li>
                                    </ul>

                                </div>


                                <div class="card-body">
                                    <h5 class="card-title">data peserta <span>| galaxy 6.0</span></h5>
                                    @if (session()->has('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">tanggal</th>
                                                <th scope="col">nama</th>
                                                <th scope="col">username</th>
                                                <th scope="col">sekolah</th>
                                                <th scope="col">lomba</th>
                                                <th scope="col">Detail</th>
                                                <th scope="col">Transaksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $index => $user)
                                                <tr>
                                                    <th scope="row">{{ $user->created_at }}</th>
                                                    <td>{{ $user->nama }}</td>
                                                    <td>{{ $user->username }}</td>
                                                    <td>{{ $user->sekolah }}</td>
                                                    <td>{{ $user->type }}</td>
                                                    <td>
                                                        <a class="btn btn-primary" data-bs-toggle="modal"
                                                            href="#exampleModal-{{ $index }}"
                                                            role="button">Detail</a>
                                                    </td>
                                                    <td>
                                                        @if ($user->status_pembayaran)
                                                            <form action="{{ url('dashboard/admin/verify', $user->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <button type="submit"
                                                                    class="btn btn-success">Verifikasi</button>
                                                            </form>
                                                        @else
                                                            <form action="{{ url('dashboard/admin/unverify', $user->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <button type="submit"
                                                                    class="btn btn-danger">Unverif</button>
                                                            </form>
                                                        @endif

                                                    </td>
                                                    {{-- <td><span class="badge bg-success">Approved</span></td> --}}
                                                </tr>


                                                <div class="modal fade" id="exampleModal-{{ $index }}"
                                                    aria-hidden="true"
                                                    aria-labelledby="exampleModal-{{ $index }}Label" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="exampleModal-{{ $index }}Label">Modal 1
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container mt-5">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <img src=""
                                                                                class="img-fluid rounded-circle mb-3">
                                                                            <h3>{{ $user->nama }}</h3>
                                                                            <p>{{ $user->username }}</p>
                                                                            <p>nomor Peserta</p>
                                                                            <p>{{ $user->nomor_peserta }}</p>
                                                                            <p>nomor Password</p>
                                                                            <p>{{ $user->password_peserta }}</p>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <ul class="list-group">
                                                                                <li class="list-group-item">Email:
                                                                                    {{ $user->email }}</li>
                                                                                <li class="list-group-item">jenis
                                                                                    kelamin:
                                                                                    {{ $user->jk }}</li>
                                                                                <li class="list-group-item">Daftar:
                                                                                    {{ $user->created_at }}</li>
                                                                                <li class="list-group-item">sekolah:
                                                                                    {{ $user->sekolah }}</li>
                                                                                <li class="list-group-item">nisn:
                                                                                    {{ $user->nisn }}</li>
                                                                                <li class="list-group-item">telpon:
                                                                                    {{ $user->telp }}</li>
                                                                                <li class="list-group-item">Daftar:
                                                                                    {{ $user->created_at }}</li>
                                                                                <li class="list-group-item">lomba:
                                                                                    {{ $user->type }}</li>
                                                                                <li class="list-group-item">kode:
                                                                                    {{ $user->kode }}</li>
                                                                                <li class="list-group-item">lolos?:
                                                                                    {{ $user->is_lolos }}</li>
                                                                                <li class="list-group-item">Upload
                                                                                    twibbon:
                                                                                    <img width="200px"
                                                                                        src="{{ asset('storage/' . $user->image) }}"
                                                                                        alt="Bukti twibbon">
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-warning"
                                                                    data-bs-target="#exampleModal-{{ $index }}2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-dismiss="modal">Edit</button>
                                                                <form action="{{ route('destroy', $user->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger"
                                                                        onclick="javascript: return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                                                                </form>
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="exampleModal-{{ $index }}2"
                                                    aria-hidden="true"
                                                    aria-labelledby="exampleModal-{{ $index }}Label2"
                                                    tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="exampleModal-{{ $index }}Label2">
                                                                    Modal 2</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ url('dashboard/admin', $user->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group">
                                                                        <label for="nama">Nama</label>
                                                                        <input type="text" name="nama"
                                                                            id="nama" class="form-control"
                                                                            value="{{ $user->nama }}" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="username">Username</label>
                                                                        <input type="text" name="username"
                                                                            id="username" class="form-control"
                                                                            value="{{ $user->username }}" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="nisn">Telp</label>
                                                                        <input type="text" name="nisn"
                                                                            id="nisn" class="form-control"
                                                                            value="{{ $user->nisn }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="telp">telp</label>
                                                                        <input type="text" name="telp"
                                                                            id="telp" class="form-control"
                                                                            value="{{ $user->telp }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="sekolah">Sekolah</label>
                                                                        <input type="text" name="sekolah"
                                                                            id="sekolah" class="form-control"
                                                                            value="{{ $user->sekolah }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="image">image</label>
                                                                        <input type="text" name="image"
                                                                            id="image" class="form-control"
                                                                            value="{{ $user->image }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="email">email</label>
                                                                        <input type="text" name="email"
                                                                            id="email" class="form-control"
                                                                            value="{{ $user->email }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="password">password (untuk password jika
                                                                            lupa maka harus ganti password...)</label>
                                                                        <input type="text" name="password"
                                                                            id="password" class="form-control">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="nomor_peserta">Nomor peserta</label>
                                                                        <input type="text" name="nomor_peserta"
                                                                            id="nomor_peserta" class="form-control"
                                                                            value="{{ $user->nomor_peserta }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="password_peserta">Password
                                                                            Peserta</label>
                                                                        <input type="text" name="password_peserta"
                                                                            id="password_peserta" class="form-control"
                                                                            value="{{ $user->password_peserta }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="kode">kode</label>
                                                                        <input type="text" name="kode"
                                                                            id="kode" class="form-control"
                                                                            value="{{ $user->kode }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="is_lolos">Lolos?</label>
                                                                        <br>
                                                                        @foreach (['belum', 'tidak', 'lolos'] as $is_lolos)
                                                                            <input type="radio" name="is_lolos"
                                                                                id="is_lolos"
                                                                                value="{{ $is_lolos }}"
                                                                                {{ $user->is_lolos == $is_lolos ? 'checked' : '' }}>
                                                                            {{ $is_lolos }}
                                                                        @endforeach
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="jk">Jenis Kelamin</label>
                                                                        <br>
                                                                        @foreach (['laki-laki', 'perempuan'] as $jk)
                                                                            <input type="radio" name="jk"
                                                                                id="jk"
                                                                                value="{{ $jk }}"
                                                                                {{ $user->jk == $jk ? 'checked' : '' }}>
                                                                            {{ $jk }}
                                                                        @endforeach
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="type">Mapel</label>
                                                                        <br>
                                                                        @foreach (['mipa', 'ips', 'pai', 'inggris'] as $type)
                                                                            <input type="radio" name="type"
                                                                                id="type"
                                                                                value="{{ $type }}"
                                                                                {{ $user->type == $type ? 'checked' : '' }}>
                                                                            {{ $type }}
                                                                        @endforeach
                                                                    </div>



                                                                    <button type="submit"
                                                                        onclick="javascript: return confirm('Yakin ingin update data ini?')"
                                                                        class="btn btn-primary">Update</button>
                                                                </form>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-primary"
                                                                    data-bs-target="#exampleModal-{{ $index }}"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-dismiss="modal">Kembali</button>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                            <!-- Button trigger modal -->




                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->
                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">
                    <!-- Website Traffic -->
                    <div class="card">
                        {{-- <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>
                                <form method="GET" action="/dashboard/admin">
                                    @csrf

                                    <li class="dropdown-item">
                                        <label for="day">Hari:</label>
                                        <select name="day">
                                            <option value="">Semua</option>
                                            @for ($i = 1; $i <= 31; $i++)
                                                <option value="{{ $i }}"
                                                    {{ request()->day == $i ? 'selected' : '' }}>{{ $i }}
                                                </option>
                                            @endfor
                                        </select>
                                    </li>
                                    <li class="dropdown-item">
                                        <label for="month">Bulan:</label>
                                        <select name="month">
                                            <option value="">Semua</option>
                                            @foreach (range(1, 12) as $month)
                                                <option value="{{ $month }}"
                                                    {{ request()->month == $month ? 'selected' : '' }}>
                                                    {{ $month }}</option>
                                            @endforeach
                                        </select>
                                    </li>
                                    <li class="dropdown-item">
                                        <label for="year">Tahun:</label>
                                        <select name="year">
                                            <option value="">Semua</option>
                                            @foreach (range(2019, 2023) as $year)
                                                <option value="{{ $year }}"
                                                    {{ request()->year == $year ? 'selected' : '' }}>
                                                    {{ $year }}</option>
                                            @endforeach
                                        </select>

                                    </li>
                                    <li class="dropdown-item"><button class=" btn btn-primary" value="Submit"
                                            type="submit">Filter</button>
                                    </li>

                                </form>
                            </ul>
                        </div> --}}

                        <div class="card-body pb-0">
                            <h5 class="card-title">jumlah Peserta <span>| Today</span></h5>

                            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    echarts.init(document.querySelector("#trafficChart")).setOption({
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        legend: {
                                            top: '5%',
                                            left: 'center'
                                        },
                                        series: [{
                                            name: 'Access From',
                                            type: 'pie',
                                            radius: ['40%', '70%'],
                                            avoidLabelOverlap: false,
                                            label: {
                                                show: false,
                                                position: 'center'
                                            },
                                            emphasis: {
                                                label: {
                                                    show: true,
                                                    fontSize: '18',
                                                    fontWeight: 'bold'
                                                }
                                            },
                                            labelLine: {
                                                show: false
                                            },
                                            data: [{
                                                    value: {{ $countMipa }},
                                                    name: 'Mipa'
                                                },
                                                {
                                                    value: {{ $countPai }},
                                                    name: 'Pai'
                                                },
                                                {
                                                    value: {{ $countInggris }},
                                                    name: 'Bahasa Inggris'
                                                },
                                                {
                                                    value: {{ $countIps }},
                                                    name: 'ips'
                                                },
                                                // {
                                                //     value: 300,
                                                //     name: 'Video Ads'
                                                // }
                                            ]
                                        }]
                                    });
                                });
                            </script>

                            <h6>Total : {{ $countMipa + $countPai + $countIps + $countInggris }}</h6>

                        </div>
                    </div><!-- End Website Traffic -->
                </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->
@endsection
