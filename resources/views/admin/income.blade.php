@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Income</h4>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambah Income
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Income</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.income.store') }}" method="POST">
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
                                                <input type="number" class="form-control" id="tahun" name="tahun"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label for="target">Target</label>
                                                <input type="text" class="form-control" id="target" name="target"
                                                    required oninput="this.value = formatRupiah(this.value); this.value = removeRupiah(this.value)">
                                                <small>Rp</small> <!-- Menambahkan simbol Rp -->
                                            </div>
                                            <div class="form-group">
                                                <label for="amount">Amount</label>
                                                <input type="text" class="form-control" id="amount" name="amount"
                                                    required oninput="this.value = formatRupiah(this.value); this.value = removeRupiah(this.value)">
                                                <small>Rp</small> <!-- Menambahkan simbol Rp -->
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
                                       
                                        <th>Tahun</th>
                                        <th>Bulan</th>
                                        <th>Target</th>
                                        <th>Amount</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($incomes as $income)
                                        <tr>
                                            <td>{{ $income->tahun }}</td>
                                            <td>
                                                @php
                                                    $bulanArray = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                                @endphp
                                                {{ $bulanArray[$income->bulan - 1] }}
                                            </td>
                                            <td>Rp. {{ number_format($income->target, 0, ',', '.') }}</td>
                                            <td>Rp. {{ number_format($income->amount, 0, ',', '.') }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $income->id }}">
                                                    Edit
                                                </button>
                                                <div class="modal fade" id="editModal{{ $income->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $income->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editModalLabel{{ $income->id }}">Edit Income</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('admin.income.update') }}" method="POST">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label for="bulan">Bulan</label>
                                                                        <input type="hidden" name="id" value="{{ $income->id }}">
                                                                        <select name="bulan" id="bulan" class="form-control" required>
                                                                            <option value="1" {{ $income->bulan == 1 ? 'selected' : '' }}   >Januari</option>
                                                                            <option value="2" {{ $income->bulan == 2 ? 'selected' : '' }}>Februari</option>
                                                                            <option value="3" {{ $income->bulan == 3 ? 'selected' : '' }}>Maret</option>
                                                                            <option value="4" {{ $income->bulan == 4 ? 'selected' : '' }}>April</option>
                                                                            <option value="5" {{ $income->bulan == 5 ? 'selected' : '' }}>Mei</option>
                                                                            <option value="6" {{ $income->bulan == 6 ? 'selected' : '' }}>Juni</option>
                                                                            <option value="7" {{ $income->bulan == 7 ? 'selected' : '' }}>Juli</option>
                                                                            <option value="8" {{ $income->bulan == 8 ? 'selected' : '' }}>Agustus</option>
                                                                            <option value="9" {{ $income->bulan == 9 ? 'selected' : '' }}>September</option>
                                                                            <option value="10" {{ $income->bulan == 10 ? 'selected' : '' }}>Oktober</option>
                                                                            <option value="11" {{ $income->bulan == 11 ? 'selected' : '' }}>November</option>
                                                                            <option value="12" {{ $income->bulan == 12 ? 'selected' : '' }}>Desember</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="tahun">Tahun</label>
                                                                        <input type="number" class="form-control" id="tahun" name="tahun"
                                                                            required value="{{ $income->tahun }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="target">Target</label>
                                                                        <input type="text" class="form-control" id="target" name="target"
                                                                            required oninput="this.value = formatRupiah(this.value); this.value = removeRupiah(this.value)" value="{{ $income->target }}">
                                                                        <small>Rp</small> <!-- Menambahkan simbol Rp -->
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="amount">Amount</label>
                                                                        <input type="text" class="form-control" id="amount" name="amount"
                                                                            required oninput="this.value = formatRupiah(this.value); this.value = removeRupiah(this.value)" value="{{ $income->amount }}">
                                                                        <small>Rp</small> <!-- Menambahkan simbol Rp -->
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function formatRupiah(angka) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
            return rupiah;
        }
        
        function removeRupiah(angka) {
            return angka.replace(/\./g, '').replace(/[^,\d]/g, '');
        }
    </script>
@endsection
