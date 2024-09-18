{{-- <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Tambah BOOKING') }}
    </h2>
</x-slot> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Villa - Villa Sindang Rastu</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Flatpickr CSS (for calendar) -->
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Booking Villa Sindang Rastu</h2>

        <!-- Form Booking -->

        @if(session()->has('message'))

        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            {{ session()->get('message') }}
          </div>
    @endif
        <form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- Nama Input -->
            {{-- <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="name">Nama</label>
                <input type="int" id="name" name="id_pelanggan" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan nama Anda" required>
            </div> --}}

            <!-- Nama / Kode Villa -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="villa">Nama / Kode Villa</label>
                <select id="villa" name="id_villa" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" >
                    <option value="1">SR11</option>
                    <option value="2">SR17</option>
                    <option value="3">SR19</option>
                    <option value="4">SR CISARUA 5BR</option>
                    <option value="5">SR CISARUA 4BR</option>
                </select>
            </div>

            <!-- Tgl Check-in -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="checkin">Tgl Check-in</label>
                <input type="date" id="tgl_checkin" name="tgl_checkin" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" >
            </div>

            <!-- Estimasi Pukul Check-in -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="estimasi_checkin">Pukul (Estimasi Check-in)</label>
                <input type="time" id="estimasi_checkin" name="estimasi_checkin" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" >
            </div>

            <!-- Tgl Check-out -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="checkout">Tgl Check-out</label>
                <input type="date" id="checkout" name="tgl_checkout" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" >
            </div>

            <!-- Estimasi Pukul Check-out -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="estimasi_checkout">Pukul (Estimasi Check-out)</label>
                <input type="time" id="estimasi_checkout" name="estimasi_checkout" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" >
            </div>

            <!-- Nomer Telepon -->
            {{-- <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="phone">Nomer Telepon</label>
                <input type="tel" id="phone" name="phone" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan nomor telepon" >
            </div> --}}

            {{-- <!-- Alamat Email -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="email">Alamat Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan alamat email" >
            </div> --}}

            <!-- Jumlah Orang -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="jumlah_orang">Jumlah Orang</label>
                <input type="int" id="jumlah_orang" name="jumlah_orang" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan jumlah orang" >
            </div>

            <!-- Total Pembayaran -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="total_pembayaran">Total Pembayaran</label>
                <input type="int" id="total_pembayaran" name="total_pembayaran" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan total pembayaran" >
            </div>

            <!-- Jumlah DP -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="jumlah_dp">Jumlah DP</label>
                <input type="int" id="jumlah_dp" name="jumlah_dp" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan jumlah DP" >
            </div>

            <!-- Tanggal DP -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="tgl_dp">Tanggal DP</label>
                <input type="date" id="tgl_dp" name="tgl_dp" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" >
            </div>

            <!-- Bukti DP -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="bukti_dp">Lampirkan Bukti Transfer</label>
                <input type="file" id="bukti_dp" name="bukti_dp" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" accept="image/*" >
            </div>

            <!-- Sisa Pembayaran Cash/Transfer -->
            {{-- <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="sisa_pembayaran">Sisa Pembayaran Cash/Transfer</label>
                <input type="text" id="sisa_pembayaran" name="sisa_pembayaran" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Cash atau Transfer" >
            </div> --}}

            <!-- Total Sisa Pembayaran -->
            {{-- <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="total_sisa">Total Sisa Pembayaran</label>
                <input type="number" id="total_sisa" name="total_sisa" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan total sisa pembayaran" >
            </div> --}}

            <!-- Additional Notes -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="additional">Additional</label>
                <textarea id="additional" name="additional" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Tambahkan catatan tambahan (jika ada)"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none">Submit</button>
        </form>



            <!-- Booking Button -->
            {{-- <div class="mb-4">
              <x-nav-link :href="route('invoice')" :active="request()->routeIs('invoice')">
                <span class="inline-flex justify-center items-center ml-4">

                </span>
                <span class="ml-2 text-sm tracking-wide truncate">CETAK INVOICE</span>
            </x-nav-link>
            </div> --}}

    </div>

    <!-- Flatpickr JavaScript (for calendar functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // Initialize Flatpickr on date input fields
        flatpickr(".flatpickr", {
            dateFormat: "Y-m-d",
            minDate: "today", // Prevent booking in the past
            mode: "range",    // Allow selecting date range
            defaultDate: null
        });
    </script>

</body>

</html>

