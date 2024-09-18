<x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('LOGIN USER') }}
  </h2>
</x-slot>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Villa Sindang Rastu</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Login</h2>
        
        <!-- Form Login -->
        <form action="#" method="POST">
            <!-- Email Input -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="email">Email Address</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your email" required>
            </div>

            <!-- Password Input -->
            <div class="mb-6">
                <label class="block text-gray-700 mb-2" for="password">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your password" required>
            </div>

            <!-- Login Button -->
            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300">
                    <x-nav-link :href="route('dashboarduser')" :active="request()->routeIs('dashboarduser')">
                        <span class="inline-flex justify-center items-center ml-4">
                            
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">LOGIN</span>
                    </x-nav-link>
                </button>
            </div>

            <!-- Forgot Password Link -->
            <div class="text-center mb-4">
                <a href="#" class="text-blue-500 hover:underline">Forgot Password?</a>
            </div>

            <!-- Register Link -->
            <p class="text-gray-600 text-center">Don't have an account? 
                <a href="registrasi" class="text-blue-500 hover:underline">Register</a>
            </p>
        </form>
    </div>

</body>
</html>
