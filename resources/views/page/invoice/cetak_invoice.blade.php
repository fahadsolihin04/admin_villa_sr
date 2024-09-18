{{-- <x-app-layout> --}}
  <x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('CETAK INVOICE') }}
  </h2>
</x-slot>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Penyewaan Villa Sindang Rastu</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto py-10">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold">Villa Sindang Rastu</h1>
                <p class="text-sm text-gray-600">Jl. Sindang Rastu No. 12, Cikanyere</p>
                <p class="text-sm text-gray-600">Email: info@villasindangrastu.com | Phone: (021) 123-45678</p>
            </div>

            <div class="mb-4 flex justify-between">
                <div>
                    <h2 class="text-xl font-semibold">Invoice To:</h2>
                    <p id="namaPenyewa" class="text-gray-700">Nama Penyewa: John Doe</p>
                    <p id="alamatPenyewa" class="text-gray-700">Alamat: Jl. Sejahtera No. 5, Bandung</p>
                    <p id="emailPenyewa" class="text-gray-700">Email: johndoe@gmail.com</p>
                </div>
                <div>
                    <h2 class="text-xl font-semibold">Invoice Details:</h2>
                    <p id="invoiceNumber" class="text-gray-700">Invoice No: INV-2024-00123</p>
                    <p id="tanggalInvoice" class="text-gray-700">Tanggal: 7 September 2024</p>
                    <p id="dueDate" class="text-gray-700">Jatuh Tempo: 14 September 2024</p>
                </div>
            </div>

            <div class="mb-6">
                <h2 class="text-xl font-semibold">Detail Penyewaan:</h2>
                <table class="table-auto w-full text-left text-gray-700">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Deskripsi</th>
                            <th class="px-4 py-2">Check-in</th>
                            <th class="px-4 py-2">Check-out</th>
                            <th class="px-4 py-2">Harga per Malam</th>
                            <th class="px-4 py-2">Jumlah Malam</th>
                            <th class="px-4 py-2">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Penyewaan Villa Deluxe</td>
                            <td class="border px-4 py-2">5 September 2024</td>
                            <td class="border px-4 py-2">7 September 2024</td>
                            <td class="border px-4 py-2">Rp 1.500.000</td>
                            <td class="border px-4 py-2">2</td>
                            <td class="border px-4 py-2">Rp 3.000.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mb-6 flex justify-end">
                <table class="table-auto text-left text-gray-700 w-full md:w-1/2">
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 font-semibold">Subtotal:</td>
                            <td class="px-4 py-2">Rp 3.000.000</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold">Diskon:</td>
                            <td class="px-4 py-2">Rp 0</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold">Pajak (10%):</td>
                            <td class="px-4 py-2">Rp 300.000</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-semibold">Total:</td>
                            <td class="px-4 py-2">Rp 3.300.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="text-center">
                <button onclick="window.print()" class="bg-blue-500 text-white py-2 px-4 rounded">Cetak Invoice</button>
            </div>
        </div>
    </div>

</body>
</html>

{{-- </x-app-layout> --}}