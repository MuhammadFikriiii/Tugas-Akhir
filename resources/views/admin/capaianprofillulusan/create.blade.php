@extends('layouts.app')

@section('content')

<div class="mr-20 ml-20">

<h2 class="text-4xl font-extrabold mb-4 text-center">Tambah Capaian Profil Lulusan</h2>
<hr class="w-full border border-black mb-4">

@if ($errors->any())
    <div style="color: red;">
       <ul>
            @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.capaianprofillulusan.store') }}" method="POST">
@csrf

<label for="id_pls" class="text-2xl">Profil Lulusan Terkait:</label>
<select id="id_pls" name="id_pls[]" class="border border-black p-3 w-full rounded-lg mt-1 mb-3" multiple required>
    @foreach($profilLulusans as $pl)
        <option value="{{ $pl->id_pl }}">{{ $pl->kode_pl }} - {{ $pl->deskripsi_pl }}</option>
    @endforeach
</select>
<p class="text-sm text-gray-500 mt-1">Tekan Ctrl (Windows) atau Cmd (Mac) untuk memilih lebih dari satu.</p>
<br>

<label for="kode_cpl" class="text-2xl">Kode CPL:</label>
<input type="text" id="kode_cpl" name="kode_cpl" class="border border-black p-3 w-full rounded-lg mt-1 mb-3" required></input>
<br>

<label for="deskripsi_cpl" class="text-2xl">Deskripsi CPL:</label>
<textarea id="deskripsi_cpl" type="text" name="deskripsi_cpl" class="border border-black p-3 w-full rounded-lg mt-1 mb-3" required></textarea>
<br>

<label for="status_cpl" class="text-2xl">Status CPL:</label>
<select id="status_cpl" name="status_cpl" class="border border-black p-3 w-full rounded-lg mt-1 mb-3" required>
    <option value="" selected disabled>Pilih Status CPL</option>
    <option value="Kompetensi Utama Bidang">Kompetensi Utama</option>
    <option value="Kompetensi Tambahan">Kompetensi Tambahan</option>
</select>
<br>

<button type="submit" class="bg-green-400 hover:bg-green-800 mt-2 rounded-lg px-5 py-2">Simpan</button>
<a href="{{ route('admin.capaianprofillulusan.index') }}" class="bg-blue-400 hover:bg-blue-800 px-5 py-2 rounded-lg">Kembali</a>
</form>
</div>
@endsection