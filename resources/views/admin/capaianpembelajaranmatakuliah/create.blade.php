@extends('layouts.app')

@section('content')

<div class="mr-20 ml-20">
    <h2 class="text-4xl font-extrabold text-center mb-4">Tambah Capaian Pembelajaran Matakuliah</h2>
    <hr class="w-full border border-black mb-4">

    <form action="{{ route('admin.capaianpembelajaranmatakuliah.store') }}" method="POST">
        @csrf

        <label for="id_cpls" class="text-2xl font-semibold mb-2">Profil Lulusan Terkait:</label>
        <select id="id_cpls" name="id_cpls[]" class="border border-gray-300 p-3 w-full rounded-lg mt-1 mb-3 focus:outline-none focus:ring-2 focus:ring-[#5460B5] focus:bg-[#f7faff]" multiple required>
        @foreach($capaianProfilLulusans as $cpl)
            <option value="{{ $cpl->id_cpl }}" title="{{ $cpl->kode_cpl }} - {{ $cpl->deskripsi_cpl }}">
        {{ $cpl->kode_cpl }} - {{ $cpl->deskripsi_cpl }}
        </option>
        @endforeach
        </select>
        <p class="text-sm text-gray-500 mb-2">Tekan shift/Tahan Klik mouseuntuk memilih lebih dari satu.</p>
        
        <label for="kode_cpmk">Kode CPMK</label>
        <input type="text" name="kode_cpmk" id="kode_cpmk" required>

        <label for="deskripsi_cpmk">Deskripsi CPMK</label>
        <input type="text" name="deskripsi_cpmk" id="deskripsi_cpmk" required>

        <button type="submit" class="px-4 py-2 bg-green-400">simpan</button>
    </form>
@endsection