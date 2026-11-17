@extends('layouts.admin')

@section('title', 'Tambah Data Barang')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Tambah Data Barang</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Form Tambah Barang
            </h6>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('barang.store') }}" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label>Kode Barang</label>
                    <input type="text"
                           name="kode_barang"
                           class="form-control"
                           value="{{ old('kode_barang') }}"
                           required>
                </div>

                <div class="form-group mb-3">
                    <label>Nama Barang</label>
                    <input type="text"
                           name="nama_barang"
                           class="form-control"
                           value="{{ old('nama_barang') }}"
                           required>
                </div>

                <div class="form-group mb-3">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Elektronik">Elektronik</option>
                        <option value="Komputer & Jaringan">Komputer & Jaringan</option>
                        <option value="Furnitur">Furnitur</option>
                        <option value="ATK">ATK</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label>Jumlah</label>
                    <input type="number"
                           name="jumlah"
                           class="form-control"
                           value="{{ old('jumlah') }}"
                           required>
                </div>

                <div class="form-group mb-3">
                    <label>Kondisi</label>
                    <select name="kondisi" class="form-control" required>
                        <option value="">-- Pilih Kondisi --</option>
                        <option value="Baik">Baik</option>
                        <option value="Rusak Ringan">Rusak Ringan</option>
                        <option value="Rusak Berat">Rusak Berat</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label>Lokasi</label>
                    <input type="text"
                           name="lokasi"
                           class="form-control"
                           value="{{ old('lokasi') }}"
                           required>
                </div>

                <div class="form-group mb-3">
                    <label>Tanggal Masuk</label>
                    <input type="date"
                           name="tanggal_masuk"
                           class="form-control"
                           value="{{ old('tanggal_masuk') }}"
                           required>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Data
                </button>

                <a href="{{ route('barang.index') }}" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>

@endsection