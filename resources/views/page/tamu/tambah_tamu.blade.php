
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah TAMU') }}
        </h2>
    </x-slot> --}}

                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold mb-4 text-center">Tambah Pelanggan</h1>
            <div class="grid grid-cols-1 gap-4 max-w-lg mx-auto">
                <form action="{{ route('tambah-tamu') }}" method="POST" class="space-y-4">
                    @csrf

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="email">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan email" required>
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="password">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan password" required>
            </div>

            <!-- Nama -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan nama" required>
            </div>

            <!-- Nomor Telepon -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="no_tlp">Nomor Telepon</label>
                <input type="text" id="no_tlp" name="no_tlp" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan nomor telepon" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none">Tambah Pelanggan</button>
        </form>
    </div>

</body>
</html>


