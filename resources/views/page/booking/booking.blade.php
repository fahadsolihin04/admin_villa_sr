<x-app-layout>
    <div class="booking-container">
        @include('page.booking.admin-booking')
    </div>
</x-app-layout>

<style>
    .booking-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px;
        box-sizing: border-box;
    }

    @media (max-width: 768px) {
        .booking-container {
            padding: 10px;
        }
    }
</style>



