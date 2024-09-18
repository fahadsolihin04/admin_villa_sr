<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('KELOLA PROPERTY') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2>Tamu</h2>
            <x-primary-button tag="a" href="{{'page.pemesanan_villa.formulir_reservasi'}}">Tambah Tamu</x-primary-button>
            <x-primary-button tag="a" href="{{}}">Member</x-primary-button>
            <x-table>
                <x-slot name="header">
                    <tr>
                        <th>ID</th>
                        <th>Nama Tamu</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>Tgl Check-in</th>
                        <th>Tgl Check-out</th>
                        <th>Jumlah Tamu</th>
                        <th>Aksi</th>
                    </tr>
                </x-slot>
                <tr>
                    <td>1</td>
                    <td>Fahad</td>
                    <td>fahad@gmail.com</td>
                    <td>085721804603</td>
                    <td>Kp. Ciherang</td>
                    <td>30</td>
                    <td>31</td>
                    <td>5</td>
                    <td>
                        <x-danger-button x-data="">{{
                                __('Edit') }}</x-danger-button>
                        <x-danger-button x-data="">{{
                                __('Delete') }}</x-danger-button>
                    </td>
                </tr>
            </x-table>

        </div>
    </div>
</x-app-layout>