<x-app-layout>
    <div class="flex h-screen bg-gray-100">

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header Section -->
            <div class="bg-white shadow-md p-6">
                <h2 class="text-2xl font-semibold text-gray-800 text-center">Dashboard Admin</h2>
            </div>

            <!-- Card Section -->
<div class="flex-1 p-6 bg-gray-100">
    <section class="grid grid-cols-2 gap-6 xs:grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
        <!-- Card 1 -->
        <a href="{{ route('bookings') }}" class="flex items-center p-4 bg-white shadow-md rounded-lg hover:shadow-lg transition">
            <div class="flex items-center justify-center h-12 w-12 bg-purple-100 text-purple-600 rounded-full">
                <svg aria-hidden="true" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
            <div class="ml-4">
                <p class="text-lg font-semibold">5</p>
                <p class="text-gray-500">Booked</p>
            </div>
        </a>

        <!-- Card 2 -->
        <a href="{{ route('villa') }}" class="flex items-center p-4 bg-white shadow-md rounded-lg hover:shadow-lg transition">
            <div class="flex items-center justify-center h-12 w-12 bg-green-100 text-green-600 rounded-full">
                <svg aria-hidden="true" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                </svg>
            </div>
            <div class="ml-4">
                <p class="text-lg font-semibold">3</p>
                <p class="text-gray-500">Ready</p>
            </div>
        </a>

        <!-- Card 3 -->
        <a href="{{ route('pelanggan') }}" class="flex items-center p-4 bg-white shadow-md rounded-lg hover:shadow-lg transition">
            <div class="flex items-center justify-center h-12 w-12 bg-red-100 text-red-600 rounded-full">
                <svg aria-hidden="true" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                </svg>
            </div>
            <div class="ml-4">
                <p class="text-lg font-semibold">30</p>
                <p class="text-gray-500">Listed</p>
            </div>
        </a>

        <!-- Card 4 -->
        <a href="{{ route('villa') }}" class="flex items-center p-4 bg-white shadow-md rounded-lg hover:shadow-lg transition">
            <div class="flex items-center justify-center h-12 w-12 bg-blue-100 text-blue-600 rounded-full">
                <svg aria-hidden="true" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            </div>
            <div class="ml-4">
                <p class="text-lg font-semibold">2</p>
                <p class="text-gray-500">New Book</p>
            </div>
        </a>
    </section>
</div>


                <!-- Content Section -->
                <section class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <!-- Form Booking -->
                    {{-- <div class="flex justify-center items-center min-h-screen bg-gray-100"> --}}
                        <div class="bg-white p-6 shadow-md rounded-lg">
                            <h3 class="text-lg font-bold text-gray-700 mb-4 text-center">Pemesanan</h3>
                            @include('page.booking.admin-booking')
                        </div>
                    {{-- </div> --}}
                    <!-- Form Villa -->
                    <div class="bg-white p-6 shadow-md rounded-lg">
                        <h3 class="text-lg font-bold text-gray-700 mb-4 text-center">Property</h3>
                        @include('page.villa.tambah_villa')
                    </div>
                    <br>

                    <!-- Form Pelanggan -->
                    {{-- <div class="md:col-span-2 bg-white p-6 shadow-md rounded-lg"> --}}
                        <h3 class="text-lg font-bold text-gray-700 mb-4 text-center">Pelanggan</h3>
                        @include('page.tamu.tambah_tamu')
                    {{-- </div> --}}
                </section>
                <div class="md:col-span-2 bg-white p-6 shadow-md rounded-lg">
                    <footer style="background-color: ; padding: 20px; text-align: center;">
                        <p>&copy; 2024 Nama Perusahaan. All Rights Reserved.</p>
                        <p>
                            <a href="https://www.facebook.com" target="_blank">Facebook</a> |
                            <a href="https://www.twitter.com" target="_blank">Twitter</a> |
                            <a href="https://www.instagram.com" target="_blank">Instagram</a>
                        </p>
                        <p>
                            <a href="/privacy-policy">Privacy Policy</a> |
                            <a href="/terms-of-service">Terms of Service</a> |
                            <a href="/contact-us">Contact Us</a>
                        </p>
                    </footer>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
