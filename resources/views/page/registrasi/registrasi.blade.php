  <x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('REGISTER') }}
  </h2>
</x-slot>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Villa Sindang Rastu</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Register</h2>
        
        <!-- Form Register -->
        <form action="#" method="POST">
            <!-- Name Input -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="name">Full Name</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your full name" required>
            </div>

            <!-- Email Input -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="email">Email Address</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your email" required>
            </div>

            <!-- Password Input -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="password">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Create a password" required>
            </div>

            <!-- Confirm Password Input -->
            <div class="mb-6">
                <label class="block text-gray-700 mb-2" for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Confirm your password" required>
            </div>

            <!-- Register Button -->
            <div class="mb-4">
                <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 transition duration-300">
                  <x-nav-link :href="route('dashboarduser')" :active="request()->routeIs('dashboarduser')">
                    <span class="inline-flex justify-center items-center ml-4">
                        
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">REGISTER</span>
                </x-nav-link>
                </button>
            </div>

            <!-- Already have an account? -->
            <p class="text-gray-600 text-center">Already have an account? 
                <a href="loginuser" class="text-blue-500 hover:underline">Login</a>
            </p>
        </form>
    </div>

</body>
</html>
