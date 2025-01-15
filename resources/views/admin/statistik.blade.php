@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Pengunjung</h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Statistik
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Statistik</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.statistik.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="bulan">Bulan</label>
                                        <select name="bulan" id="bulan" class="form-control" required>
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun">Tahun</label>
                                        <input type="number" class="form-control" id="tahun" name="tahun" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pengunjung_perempuan">Pengunjung Perempuan</label>
                                        <input type="number" class="form-control" id="pengunjung_perempuan"
                                            name="pengunjung_perempuan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pengunjung_laki_laki">Pengunjung Laki-laki</label>
                                        <input type="number" class="form-control" id="pengunjung_laki_laki"
                                            name="pengunjung_laki_laki" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tidak_diketahui">Tidak Diketahui</label>
                                        <input type="number" class="form-control" id="tidak_diketahui"
                                            name="tidak_diketahui" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tahun</th>
                                <th>Bulan</th>
                                <th>Pengunjung Perempuan</th>
                                <th>Pengunjung Laki-laki</th>
                                <th>Total Pengunjung</th>
                                <th>Total Pengunjung</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($statistik as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->tahun }}</td>
                                    <td>@if ($item->bulan == 1)
                                        Januari
                                    @elseif ($item->bulan == 2)
                                        Februari
                                    @elseif ($item->bulan == 3)
                                        Maret
                                    @elseif ($item->bulan == 4)
                                        April
                                    @elseif ($item->bulan == 5)
                                        Mei
                                    @elseif ($item->bulan == 6)
                                        Juni
                                    @elseif ($item->bulan == 7)
                                        Juli
                                    @elseif ($item->bulan == 8)
                                        Agustus
                                    @elseif ($item->bulan == 9)
                                        September
                                    @elseif ($item->bulan == 10)
                                        Oktober
                                    @elseif ($item->bulan == 11)
                                        November
                                    @elseif ($item->bulan == 12)
                                        Desember
                                    @endif
                                </td>
                                    <td>{{ $item->jumlah_perempuan }}</td>
                                    <td>{{ $item->jumlah_lakilaki }}</td>
                                    <td>{{ $item->tidak_diketahui }}</td>
                                    <td>{{ $item->jumlah_perempuan + $item->jumlah_lakilaki + $item->tidak_diketahui }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">
                                            Edit
                                        </button>
                                        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Statistik</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('admin.statistik.update') }}" method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="bulan">Bulan</label>
                                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                                <select name="bulan" id="bulan" class="form-control" required>
                                                                    <option value="1" {{ $item->bulan == 1 ? 'selected' : '' }}>Januari</option>
                                                                    <option value="2" {{ $item->bulan == 2 ? 'selected' : '' }}>Februari</option>
                                                                    <option value="3" {{ $item->bulan == 3 ? 'selected' : '' }}>Maret</option>
                                                                    <option value="4" {{ $item->bulan == 4 ? 'selected' : '' }}>April</option>
                                                                    <option value="5" {{ $item->bulan == 5 ? 'selected' : '' }}>Mei</option>
                                                                    <option value="6" {{ $item->bulan == 6 ? 'selected' : '' }}>Juni</option>
                                                                    <option value="7" {{ $item->bulan == 7 ? 'selected' : '' }}>Juli</option>
                                                                    <option value="8" {{ $item->bulan == 8 ? 'selected' : '' }}>Agustus</option>
                                                                    <option value="9" {{ $item->bulan == 9 ? 'selected' : '' }}>September</option>
                                                                    <option value="10" {{ $item->bulan == 10 ? 'selected' : '' }}>Oktober</option>
                                                                    <option value="11" {{ $item->bulan == 11 ? 'selected' : '' }}>November</option>
                                                                    <option value="12" {{ $item->bulan == 12 ? 'selected' : '' }}>Desember</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tahun">Tahun</label>
                                                                <input type="number" class="form-control" id="tahun" name="tahun" value="{{ $item->tahun }}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pengunjung_perempuan">Pengunjung Perempuan</label>
                                                                <input type="number" class="form-control" id="pengunjung_perempuan"
                                                                    name="pengunjung_perempuan" value="{{ $item->jumlah_perempuan }}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pengunjung_laki_laki">Pengunjung Laki-laki</label>
                                                                <input type="number" class="form-control" id="pengunjung_laki_laki"
                                                                    name="pengunjung_laki_laki" value="{{ $item->jumlah_lakilaki }}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tidak_diketahui">Tidak Diketahui</label>
                                                                <input type="number" class="form-control" id="tidak_diketahui"
                                                                    name="tidak_diketahui" value="{{ $item->tidak_diketahui }}" required>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('admin.statistik.destroy', $item->id) }}"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
