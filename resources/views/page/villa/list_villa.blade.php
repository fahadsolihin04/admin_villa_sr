<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('KELOLA PROPERTY') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2>Villa</h2>
            <x-primary-button tag="a" href="{{}}">Add Villa</x-primary-button>
            <x-primary-button tag="a" href="{{}}">Villa Ready</x-primary-button>
            <x-primary-button tag="a" href="{{}}">Villa Terisi</x-primary-button>
            <x-table>
                <x-slot name="header">
                    <tr>
                        <th>ID</th>
                        <th>Nama Villa</th>
                        <th>Lokasi</th>
                        <th>Harga Per-Malam</th>
                        <th>Kapasitas Tamu</th>
                        <th>Aksi</th>
                    </tr>
                </x-slot>
                <tr>
                    <td>1</td>
                    <td>villa SR12</td>
                    <td>Kotabunga</td>
                    <td>1800.000</td>
                    <td>10 Orang</td>
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