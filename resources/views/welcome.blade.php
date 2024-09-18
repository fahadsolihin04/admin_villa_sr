<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('DASHBOARD USER') }}
    </h2>
  </x-slot>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Villa Sindang Rastu</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen">

    <div class="flex items-center justify-center h-screen">
        <div class="text-center bg-white p-10 rounded-lg shadow-lg">
            <!-- Welcome Message -->
            <h1 class="text-4xl font-bold text-gray-800 mb-6">Welcome to Villa Sindang Rastu</h1>
            <p class="text-lg text-gray-600 mb-8">Experience the best comfort and relaxation with us.</p>

          <a href="{{ route('booking') }}" class="ml-2 text-sm tracking-wide truncate">BOOKING VILLA</a><br>
            <!-- Login and Register Buttons -->
            <div class="flex justify-center space-x-4">
                <!-- Login Button -->
                {{-- <x-nav-link :href="route('loginuser')" :active="request()->routeIs('loginuser')">
                    <span class="inline-flex justify-center items-center ml-4">

                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">LOGIN</span>
                </x-nav-link>
                <!-- Register Button -->
                <x-nav-link :href="route('registrasi')" :active="request()->routeIs('registrasi')">
                    <span class="inline-flex justify-center items-center ml-4">

                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">REGISTER</span>
                </x-nav-link> --}}
            </div>
        </div>
    </div>

</body>
</html>
</x-app-layout>
