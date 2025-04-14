<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SignUp</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br  from-blue-300 to-gray-100">

  <div class="min-h-screen flex items-center justify-center py-6 px-4">
    <div class="w-full max-w-4xl bg-white rounded-xl shadow-lg overflow-hidden flex flex-col md:flex-row">
      
     <!-- Gambar Sign Up -->
      <div class="md:w-1/2 w-full h-64 md:h-auto bg-cover bg-center relative" style="background-image: url('/image/poliban.jpeg');">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
      </div>
      
      <!-- Form -->
      <div class="md:w-1/2 w-full py-8 px-6 sm:px-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Sign-Up</h2>
        <p class="mb-6 text-gray-600">Buat akunmu sekarang.</p>
        <form action="{{ route('signup.store') }}" method="POST">
          @csrf
          <div class="mb-4">
            <input type="text" name="name" placeholder="Nama Lengkap" class="border border-gray-300 py-2 px-3 w-full rounded focus:outline-none focus:ring-2 focus:ring-orange-300" value="{{ old('name') }}" required>
          </div>

          <div class="mb-4">
            <input type="text" name="email" placeholder="Email" class="border border-gray-300 py-2 px-3 w-full rounded focus:outline-none focus:ring-2 focus:ring-orange-300" value="{{ old('email') }}" required>
          </div>

          <div class="mb-4">
            <input type="password" name="password" placeholder="Masukkan Password" class="border border-gray-300 py-2 px-3 w-full rounded focus:outline-none focus:ring-2 focus:ring-orange-300" required>
          </div>

          <div class="mb-4">
            <label class="block mb-1 text-gray-700">Program Studi</label>
            <select name="kode_prodi" class="w-full border border-gray-300 py-2 px-3 rounded focus:outline-none focus:ring-2 focus:ring-orange-300" required>
              <option value="">-- Pilih Prodi --</option>
              @foreach($prodis as $prodi)
                <option value="{{ $prodi->kode_prodi }}" {{ old('kode_prodi') == $prodi->kode_prodi ? 'selected' : '' }}>{{ $prodi->nama_prodi }}</option>
              @endforeach
            </select>
          </div>

          <div class="mb-4">
            <label class="block mb-1 text-gray-700">Peran</label>
            <select name="role" class="w-full border border-gray-300 py-2 px-3 rounded focus:outline-none focus:ring-2 focus:ring-orange-300" required>
              <option value="">-- Pilih Peran --</option>
              <option value="kaprodi" {{ old('role') == 'kaprodi' ? 'selected' : '' }}>Kaprodi</option>
              <option value="tim" {{ old('role') == 'tim' ? 'selected' : '' }}>Tim</option>
            </select>
          </div>

          <div class="mb-4 flex items-start gap-2">
            <input type="checkbox" class="mt-1">
            <p class="text-sm text-gray-600">
              Saya menerima <a href="#" class="text-[#5460B5] font-semibold">Ketentuan Penggunaan</a> & 
              <a href="#" class="text-[#5460B5]  font-semibold">Kebijakan Privasi</a>.
            </p>
          </div>

          <div class="mt-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <button type="submit" class="bg-[#5460B5] hover:bg-[#363b63] text-white font-semibold py-2 px-6 rounded transition duration-300 w-full sm:w-auto">
              Daftar
            </button>
            <a href="{{ route('login') }}" class="text-sm text-[#5460B5] hover:underline text-center sm:text-left">Sudah punya akun?</a>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
