<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Pemesanan Baru') }}
        </h2>
    </x-slot>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4 text-center">Tambah Pemesanan</h1>
        <div class="grid grid-cols-1 gap-4 max-w-lg mx-auto">
            <form action="{{ route('tambah-pemesanan-baru') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-gray-700">Villa</label>
                    <input type="text" name="villa" class="border rounded w-full py-2 px-3" required>
                </div>
                <div>
                    <label class="block text-gray-700">Nama Tamu</label>
                    <input type="text" name="guest_name" class="border rounded w-full py-2 px-3" required>
                </div>
                <div>
                    <label class="block text-gray-700">Tanggal Check-in</label>
                    <input type="date" name="check_in" class="border rounded w-full py-2 px-3" required>
                </div>
                <div>
                    <label class="block text-gray-700">Pukul Estimasi Check-in</label>
                    <input type="text" name="guest_name" class="border rounded w-full py-2 px-3" required>
                </div>
                <div>
                    <label class="block text-gray-700">Tanggal Check-out</label>
                    <input type="date" name="check_out" class="border rounded w-full py-2 px-3" required>
                </div>
                <div>
                    <label class="block text-gray-700">Pukul Estimasi Check-out</label>
                    <input type="text" name="guest_name" class="border rounded w-full py-2 px-3" required>
                </div>
                <div>
                    <label class="block text-gray-700">Jumlah Tamu</label>
                    <input type="number" name="guest_count" class="border rounded w-full py-2 px-3" required>
                </div>
                {{-- <div>
                    <label class="block text-gray-700">Status</label>
                    <select name="status" class="border rounded w-full py-2 px-3" required>
                        <option value="baru">Baru</option>
                        <option value="konfirmasi">Konfirmasi</option>
                    </select>
                </div> --}}
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded w-full">Simpan</button>
            </form>
        </div>
    </div>

</x-app-layout>