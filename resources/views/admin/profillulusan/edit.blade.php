@extends('layouts.app')

@section('content')

<div class="mr-20 ml-20">
<h2 class="text-4xl text-center font-extrabold mb-4">Edit Profil Lulusan</h2>
<hr class="border border-black mb-4">

@if ($errors->any())
    <div style="color: red;">
       <ul>
            @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.profillulusan.update', $profillulusan->kode_pl) }}" method="POST">
    
    @csrf
    @method('PUT')

    <label for="kode_pl" class="text-2xl">Kode Profil Lulusan:</label>
    <input type="text" name="kode_pl" id="kode_pl" value="{{ old('kode_pl', $profillulusan->kode_pl) }}" class="mt-1 p-3 border border-black rounded-lg w-full mb-3" required>
    <br>

    <label for="kode_prodi" class="text-2xl">Program Studi:</label>
    <select name="kode_prodi" id="kode_prodi" class="mt-1 p-3 border border-black rounded-lg w-full mb-3" required>
        @foreach ($prodis as $prodi)
            <option value="{{ $prodi->kode_prodi }}" {{ $prodi->kode_prodi == $profillulusan->kode_prodi ? 'selected' : '' }}>
                {{ $prodi->nama_prodi }}
            </option>
        @endforeach
    </select>
    <br>

    <label for="deskripsi_pl" class="text-2xl">Deskripsi Profil Lulusan:</label>
    <textarea name="deskripsi_pl" id="deskripsi_pl" class="mt-1 p-3 border border-black rounded-lg w-full mb-3" required>{{ old('deskripsi_pl', $profillulusan->deskripsi_pl) }}</textarea>
    <br>

    <label for="profesi_pl" class="text-2xl">Profesi Profil Lulusan:</label>
    <textarea name="profesi_pl" id="profesi_pl" class="mt-1 p-3 border border-black rounded-lg w-full mb-3" required>{{ old('profesi_pl', $profillulusan->profesi_pl) }}</textarea>
    <br>

    <label for="unsur_pl" class="text-2xl">Unsur PL:</label>
    <select name="unsur_pl" id="unsur_pl" class="mt-1 p-3 border border-black rounded-lg w-full mb-3" required>
        <option value="Pengetahuan" {{ $profillulusan->unsur_pl == "Pengetahuan" ? 'selected' : '' }}>Pengetahuan</option>
        <option value="Keterampilan Khusus" {{ $profillulusan->unsur_pl == "Keterampilan Khusus" ? 'selected' : '' }}>Keterampilan Khusus</option>
        <option value="Sikap dan Keterampilan Umum" {{ $profillulusan->unsur_pl == "Sikap dan Keterampilan Umum" ? 'selected' : '' }}>Sikap dan Keterampilan Umum</option>
    </select>
    <br>

    <label for="keterangan_pl" class="text-2xl">Keterangan:</label>
    <select name="keterangan_pl" id="keterangan_pl" class="mt-1 p-3 border border-black rounded-lg w-full mb-3" required>
        <option value="Kompetensi Utama Bidang" {{ $profillulusan->keterangan_pl == "Kompetensi Utama Bidang" ? 'selected' : '' }}>Kompetensi Utama Bidang</option>
        <option value="Kompetensi Utama" {{ $profillulusan->keterangan_pl == "Kompetensi Utama" ? 'selected' : '' }}>Kompetensi Utama</option>
        <option value="Kompetensi Tambahan" {{ $profillulusan->keterangan_pl == "Kompetensi Tambahan" ? 'selected' : '' }}>Kompetensi Tambahan</option>
    </select>
    <br>

    <label for="sumber_pl" class="text-2xl">Sumber:</label>
    <textarea name="sumber_pl" id="sumber_pl" class="mt-1 p-3 border border-black rounded-lg w-full mb-3" required>{{ old('sumber_pl', $profillulusan->sumber_pl) }}</textarea>
    <br>

    <button type="submit" class="bg-green-400 hover:bg-green-800 px-5 py-2 rounded-lg">Simpan</button>
    <a href="{{ route('admin.profillulusan.index') }}" class="bg-blue-400 hover:bg-blue-800 px-5 py-2 rounded-lg">Kembali</a>
</form>
</div>
@endsection