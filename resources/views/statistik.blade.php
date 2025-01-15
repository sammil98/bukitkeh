@extends('layouts.landing')

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(images/bg/bg1.jpg);">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);">
        </div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3 text-white">Statistik </h1> <!-- Ubah warna teks -->
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="text-light">Home</a></li>
                            <!-- Ubah warna teks -->
                            <li class="breadcrumb-item active" aria-current="page"><span class="text-light">Statistik</span>
                            </li> <!-- Ubah warna teks -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 mb-4"> <!-- Tambahkan margin bawah -->
                <div class="card shadow"> <!-- Tambahkan efek bayangan -->
                    <div class="card-body p-4">
                        <p class="font-weight-bold">Pilih Tahun</p> <!-- Ubah gaya teks -->
                        <select class="form-control" onchange="location = this.value;"> <!-- Ganti tombol dengan select -->
                            <option value="">Pilih Tahun</option>
                            @foreach ($tahun as $item)
                                <option value="{{ route('landing.statistik.tahun', $item->tahun) }}">{{ $item->tahun }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <h3 class="text-primary">Statistik Pengunjung Wisata Bukit Kehi Pamekasan</h3> <!-- Ubah warna teks -->
        <div class="row">
            @foreach ($tahun as $item)
                <div class="col-lg-6 mb-4"> <!-- Tambahkan margin bawah -->
                    <div class="card shadow"> <!-- Tambahkan efek bayangan -->
                        <div class="card-header bg-info text-white"> <!-- Ubah warna latar belakang dan teks -->
                            <h5 class="card-title">Statistik Pengunjung {{ $item->tahun }}</h5>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart{{ $item->tahun }}" style="width:100%;max-width:600px"></canvas>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container py-5">
        <h3 class="text-primary">Statistik Penghasilan Wisata Bukit Kehi Pamekasan</h3> <!-- Ubah warna teks -->
        <div class="row">
            @foreach ($income_tahun as $item)
                @php
                    // Ambil data income berdasarkan tahun
                    $income = $incomes->where('tahun', $item->tahun);
                @endphp
                <div class="col-md-6 mb-4"> <!-- Tambahkan margin bawah -->
                    <div class="card shadow"> <!-- Tambahkan efek bayangan -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="card-title">Report Penghasilan
                                        {{ $item->tahun ?? 'Tidak ada data' }}</h5> <!-- Tampilkan tahun yang benar -->
                                </div>
                                @foreach ($income as $detail)
                                    <div class="col-12 mt-3">
                                        <div class="box d-flex justify-content-between">
                                            <label for="" class="text-dark">Penghasilan : Rp.
                                                <!-- Ubah warna teks -->
                                                {{ number_format($detail->amount, 0, ',', '.') }}</label>
                                            <label for="" class="text-dark">Target : Rp. <!-- Ubah warna teks -->
                                                {{ number_format($detail->target, 0, ',', '.') }}</label>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="{{ $detail->amount }}" aria-valuemin="0"
                                                aria-valuemax="{{ $detail->target }}"
                                                style="width: {{ ($detail->amount / $detail->target) * 100 }}%">
                                                {{ number_format(($detail->amount / $detail->target) * 100, 2) }}%
                                            </div> <!-- Format persentase -->
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection

@section('script')
    <script>
        var barColors = ["#FF6384", "#36A2EB", "#FFCE56"]; // Ubah warna grafik

        @foreach ($tahun as $item)
            var xValues{{ $item->tahun }} = [
                @php
                    $statistikTahun = $statistik->where('tahun', $item->tahun);
                @endphp
                @foreach ($statistikTahun as $statistikItem)
                    "Laki - laki - {{ date('F', mktime(0, 0, 0, $statistikItem->bulan, 1)) }}",
                    "Perempuan - {{ date('F', mktime(0, 0, 0, $statistikItem->bulan, 1)) }}",
                    "Tidak diketahui - {{ date('F', mktime(0, 0, 0, $statistikItem->bulan, 1)) }}",
                @endforeach
            ];

            var yValues{{ $item->tahun }} = [
                @foreach ($statistikTahun as $statistikItem)
                    {{ $statistikItem->jumlah_lakilaki }},
                    {{ $statistikItem->jumlah_perempuan }},
                    {{ $statistikItem->tidak_diketahui }},
                @endforeach
            ];

            new Chart("myChart{{ $item->tahun }}", {
                type: "bar",
                data: {
                    labels: xValues{{ $item->tahun }},
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues{{ $item->tahun }}
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: "Statistik Pengunjung {{ $item->tahun }}",
                        fontColor: "#333" // Ubah warna teks judul
                    }
                }
            });
        @endforeach
    </script>
@endsection
