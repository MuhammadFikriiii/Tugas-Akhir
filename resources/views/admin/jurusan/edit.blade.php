@extends('layouts.app')

@section('content')
<h2 class="font-extrabold text-4xl mb-6 text-center">Edit Jurusan</h2>
<hr class="border border-black mb-4">
<form action="{{ route('admin.jurusan.update', $jurusan->kode_jurusan) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="kode_jurusan" class="text-2xl">Kode Jurusan:</label>
    <input type="text" class="mt-1 w-full p-3 border border-black rounded-lg" name="kode_jurusan" id="kode_jurusan" value="{{ old('kode_jurusan', $jurusan->kode_jurusan) }}" required>

    <label for="nama_jurusan" class="text-2xl">Nama Jurusan:</label>
    <input type="text" class="mt-1 w-full p-3 border border-black rounded-lg" name="nama_jurusan" id="nama_jurusan" value="{{ old('nama_jurusan', $jurusan->nama_jurusan) }}" required>

    <div>
        <button type="submit" class="btn btn-primary bg-green-400 hover:bg-green-800 mt-3 px-5 py-2 rounded-lg">Update</button>
        <a href="{{ route('admin.jurusan.index') }}" class="bg-blue-400 hover:bg-blue-800 mt-3 px-5 py-2 rounded-lg">Kembali</a>
    </div>
</form>
@endsection