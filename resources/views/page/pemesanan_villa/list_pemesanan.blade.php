<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PEMESANAN VILLA') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2>PEMESANAN</h2>
            <x-primary-button tag="a" href="page/booking/booking">Add Booking</x-primary-button>
            <x-primary-button tag="a" href="page/pemesanan_villa/list_pemesanan">Booking</x-primary-button>
            <x-primary-button tag="a" href="{{ url('page/booking/cancel') }}">Booking Cancel</x-primary-button>

            <x-table>
                <x-slot name="header">
                    <tr>
                        <th>#</th>
                        <th>Nama / Kode Villa</th>
                        <th>Tgl Check-in</th>
                        <th>Pukul Estimasi Check-in</th>
                        <th>Tgl Check-out</th>
                        <th>Pukul Estimasi Check-out</th>
                        <th>Jumlah Orang</th>
                        <th>Total Pembayaran</th>
                        <th>Jumlah DP</th>
                        <th>Tgl DP</th>
                        <th>Lampiran Tanda Bukti Transfer</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </x-slot>

                {{-- @php
                    $num = 1;
                @endphp --}}
                @php
                $bookings = [
                    [
                        'id' => 1,
                        'nama_villa' => 'Villa ABC',
                        'tgl_checkin' => '2024-09-20',
                        'estimasi_checkin' => '14:00',
                        'tgl_checkout' => '2024-09-25',
                        'estimasi_checkout' => '12:00',
                        'jumlah_orang' => 4,
                        'total_pembayaran' => 5000000,
                        'jumlah_dp' => 2000000,
                        'tgl_dp' => '2024-09-18',
                        'bukti_dp' => 'bukti_transfer_abc.jpg',
                        'status' => 'Confirmed'
                    ],
                    [
                        'id' => 2,
                        'nama_villa' => 'Villa XYZ',
                        'tgl_checkin' => '2024-09-22',
                        'estimasi_checkin' => '15:00',
                        'tgl_checkout' => '2024-09-28',
                        'estimasi_checkout' => '13:00',
                        'jumlah_orang' => 2,
                        'total_pembayaran' => 3500000,
                        'jumlah_dp' => 1500000,
                        'tgl_dp' => '2024-09-20',
                        'bukti_dp' => 'bukti_transfer_xyz.jpg',
                        'status' => 'Pending'
                    ],
                ];

                $num = 1;
            @endphp
            @foreach ($bookings as $booking)
            <tr>
                <td>{{ $num++ }}</td>
                <td>{{ $booking['nama_villa'] }}</td>
                <td>{{ $booking['tgl_checkin'] }}</td>
                <td>{{ $booking['estimasi_checkin'] }}</td>
                <td>{{ $booking['tgl_checkout'] }}</td>
                <td>{{ $booking['estimasi_checkout'] }}</td>
                <td>{{ $booking['jumlah_orang'] }}</td>
                <td>{{ number_format($booking['total_pembayaran'], 0, ',', '.') }}</td>
                <td>{{ number_format($booking['jumlah_dp'], 0, ',', '.') }}</td>
                <td>{{ $booking['tgl_dp'] }}</td>
                <td><img src="{{ asset('storage/' . $booking['bukti_dp']) }}" alt="Bukti DP" width="100"></td>
                <td>{{ $booking['status'] }}</td>
                <td>
                    <a href="{{ route('booking.show', $booking['id']) }}" class="btn btn-info">Detail</a>
                </td>
            </tr>
        @endforeach

            </x-table>
        </div>
    </div>
</x-app-layout>
