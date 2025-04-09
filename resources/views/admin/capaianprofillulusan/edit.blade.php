@extends('layouts.app')

@section('content')
<h2>Edit Profil Lulusan</h2>

@if ($errors->any())
    <div style="color: red;">
       <ul>
            @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.capaianprofillulusan.update', $capaianprofillulusan->kode_cpl) }}" method="POST">
    
    @csrf
    @method('PUT')

    <label for="kode_cpl">Kode Capaian Profil Lulusan:</label>
    <input type="text" name="kode_cpl" id="kode_cpl" class="border border-black w-full rounded-lg p-3 mt-1" value="{{ old('kode_cpl', $capaianprofillulusan->kode_cpl) }}" required>
    <br>

    <label for="deskripsi_cpl">Deskripsi Capaian Profil Lulusan:</label>
    <textarea type="text" name="deskripsi_cpl" id="deskripsi_cpl" class="border border-black w-full rounded-lg p-3" required>{{ old('deskripsi_cpl', $capaianprofillulusan->deskripsi_cpl) }}</textarea>
    <br>

    <label for="status_cpl">Status CPL:</label>
    <select name="status_cpl" id="status_cpl" required>
        <option value="Kompetensi Utama Bidang" {{ $capaianprofillulusan->status_cpl == "Kompetensi Utama Bidang" ? 'selected' : '' }}>Kompetensi Utama Bidang</option>
        <option value="Kompetensi Tambahan" {{ $capaianprofillulusan->status_cpl == "Kompetensi Tambahan" ? 'selected' : '' }}>Kompetensi Tambahan</option>
    </select>
    <br>
    <button type="submit">Update</button>
</form>

<a href="{{ route('admin.capaianprofillulusan.index') }}">Kembali</a>
@endsection