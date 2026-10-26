<div class="flex items-center justify-between bg-white p-3">
    <div class="ml-[75px]">
        <img src="{{ asset ('img/klassy-logo.png') }}" class="w-3/4" alt="Klassy Logo">
    </div>

    <div class="flex gap-[35px]">
        <div class="text-xl font-semibold">
            <a href="{{route ('home') }}"class="text-gray-800 hover:text-red-500 transition-colors duration-300">Home</a>
        </div>

        <div class="text-xl font-semibold">
            <a href=""class="text-gray-800 hover:text-red-500 transition-colors duration-300">About</a>
        </div>

        <div class="text-xl font-semibold">
            <a href="{{ route('menu') }}"class="text-gray-800 hover:text-red-500 transition-colors duration-300">Menu</a>
        </div>

        <div class="text-xl font-semibold">
            <a href=""class="text-gray-800 hover:text-red-500 transition-colors duration-300">Chefs</a>
        </div>

        <div class="text-xl font-semibold">
            <a href="{{route ('contact')}}"class="text-gray-800 hover:text-red-500 transition-colors duration-300">Contact Us</a>
        </div>
    </div>
</div>
