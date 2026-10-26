<div class="flex items-center justify-between bg-[#386641] p-3 py-5">
    <div class="ml-[75px]">
        <img src="{{ asset ('img/klassy-logo.png') }}" class="w-3/4" alt="Klassy Logo">
    </div>

    <div class="flex gap-[35px]">
        <div class="text-2xl font-semibold">
            <a href="{{route ('home') }}"class="text-[2A1E18] hover:text-red-500 transition-colors duration-300">Home</a>
        </div>

        <div class="text-2xl font-semibold">
            <a href=""class="text-[#2A1E18] hover:text-red-500 transition-colors duration-300">About</a>
        </div>

        <div class="text-2xl font-semibold">
            <a href="{{ route('menu') }}"class="text-[2A1E18] hover:text-red-500 transition-colors duration-300">Menu</a>
        </div>

        <div class="text-2xl font-semibold">
            <a href=""class="text-[2A1E18] hover:text-red-500 transition-colors duration-300">Chefs</a>
        </div>

        <div class="text-2xl font-semibold">
            <a href="{{route ('contact')}}"class="text-[2A1E18] hover:text-red-500 transition-colors duration-300">Contact Us</a>
        </div>
    </div>
</div>
