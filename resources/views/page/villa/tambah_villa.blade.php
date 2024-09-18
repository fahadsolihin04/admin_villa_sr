
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Villa') }}
        </h2>
    </x-slot> --}}
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Villa</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-100 h-screen flex items-center justify-center">

        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
            <h1 class="text-2xl font-bold mb-4 text-center">Tambah Villa</h1>
            <div class="grid grid-cols-1 gap-4 max-w-lg mx-auto">
                <form action="{{ route('tambah-pelanggan') }}" method="POST" class="space-y-4">
                    @csrf
                @csrf

                <!-- Nama Villa -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="nama_villa">Nama Villa</label>
                    <input type="text" id="nama_villa" name="nama_villa" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan nama villa" required>
                </div>

                <!-- Fasilitas -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="fasilitas">Fasilitas</label>
                    <textarea id="fasilitas" name="fasilitas" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan fasilitas villa" required></textarea>
                </div>

                <!-- ID Harga -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="id_harga">ID Harga</label>
                    <input type="number" id="id_harga" name="id_harga" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan ID harga" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none">Tambah Villa</button>
            </form>
        </div>

    </body>
    </html>

