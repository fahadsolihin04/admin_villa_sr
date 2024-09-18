<x-app-layout>
  <x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('KALENDER') }}
  </h2>
</x-slot>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar Booking</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .booked {
            background-color: #f56565;
            color: white;
        }
        .hover-booked:hover {
            background-color: #e53e3e;
        }
    </style>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center mb-5">Calendar Booking System</h1>

        <!-- Calendar -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <!-- Calendar Header -->
            <div class="text-center mb-4">
                <button class="text-gray-500 focus:outline-none">&lt;</button>
                <span class="text-xl font-semibold mx-4">September 2024</span>
                <button class="text-gray-500 focus:outline-none">&gt;</button>
            </div>

            <!-- Days of the Week -->
            <div class="grid grid-cols-7 gap-4 text-center text-lg font-medium">
                <div class="font-bold">Sun</div>
                <div class="font-bold">Mon</div>
                <div class="font-bold">Tue</div>
                <div class="font-bold">Wed</div>
                <div class="font-bold">Thu</div>
                <div class="font-bold">Fri</div>
                <div class="font-bold">Sat</div>

                <!-- Empty spaces for the beginning of the month -->
                <div></div> <!-- Blank day -->
                <div></div> <!-- Blank day -->
                <div></div> <!-- Blank day -->
                <div></div> <!-- Blank day -->

                <!-- Calendar Dates (some are booked) -->
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">1</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">2</div>
                <div class="border p-2 booked hover-booked cursor-pointer" onclick="showBookingDetails('John Doe', '09:00 - 10:00', '1 hour')">3</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">4</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">5</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">6</div>
                <div class="border p-2 booked hover-booked cursor-pointer" onclick="showBookingDetails('Jane Smith', '11:00 - 12:00', '2 hours')">7</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">8</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">9</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">10</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">11</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">12</div>
                <div class="border p-2 booked hover-booked cursor-pointer" onclick="showBookingDetails('Michael Lee', '14:00 - 15:00', '1 hour')">13</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">14</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">15</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">16</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">17</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">18</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">19</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">20</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">21</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">22</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">23</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">24</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">25</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">26</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">27</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">28</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">29</div>
                <div class="border p-2 hover:bg-blue-500 hover:text-white cursor-pointer">30</div>
            </div>
        </div>

        <!-- Booking Details Modal -->
        <div id="booking-details" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex justify-center items-center">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold mb-4">Booking Details</h2>
                <p id="booking-name" class="mb-2"></p>
                <p id="booking-time" class="mb-2"></p>
                <p id="booking-duration" class="mb-4"></p>
                <button onclick="closeBookingDetails()" class="bg-red-500 text-white py-2 px-4 rounded">Close</button>
            </div>
        </div>

        <!-- Form Booking -->
        <div class="bg-white mt-6 p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold mb-4">Book a Slot</h3>
            <form>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" class="mt-1 p-2 border rounded-md w-full" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" class="mt-1 p-2 border rounded-md w-full" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Time Slot</label>
                    <select name="time_slot" class="mt-1 p-2 border rounded-md w-full" required>
                        <option value="09:00 - 10:00">09:00 - 10:00</option>
                        <option value="10:00 - 11:00">10:00 - 11:00</option>
                        <option value="11:00 - 12:00">11:00 - 12:00</option>
                    </select>
                </div>

                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Book Now</button>
            </form>
        </div>
    </div>

    <!-- JavaScript for modal interaction -->
    <script>
        function showBookingDetails(name, time, duration) {
            document.getElementById('booking-name').textContent = 'Name: ' + name;
            document.getElementById('booking-time').textContent = 'Time: ' + time;
            document.getElementById('booking-duration').textContent = 'Duration: ' + duration;
            document.getElementById('booking-details').classList.remove('hidden');
        }

        function closeBookingDetails() {
            document.getElementById('booking-details').classList.add('hidden');
        }
    </script>

</body>
</html>

</x-app-layout>