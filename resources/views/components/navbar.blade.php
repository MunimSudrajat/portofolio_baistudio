<header
    class="flex items-center justify-between whitespace-nowrap px-4 sm:px-10 py-4 bg-background-light dark:bg-background-dark w-full max-w-[960px] mx-auto sticky top-0 z-50">
    <div class="flex items-center gap-4 text-[#222222] dark:text-white">
        <img src="{{asset('storage/images/logo1.png')}}" class="w-[80px] h-[30px]" alt="">
    </div>
    <div class="hidden md:flex flex-1 justify-end gap-8">
        <div class="flex items-center gap-9">
            <x-nav-link wire:navigate routeName="beranda" href="{{ route('beranda') }}">Home</x-nav-link>
            <x-nav-link wire:navigate routeName="about" href="{{ route('about') }}">About</x-nav-link>
            <x-nav-link wire:navigate routeName="portofolio" href="{{ route('portofolio') }}">Portofolio</x-nav-link>
            <x-nav-link wire:navigate routeName="service" href="{{ route('service') }}">Service</x-nav-link>
            <x-nav-link wire:navigate routeName="contact" href="{{ route('contact') }}">Contact</x-nav-link>
            <x-nav-link wire:navigate routeName="booking" href="{{ route('booking') }}">Booking</x-nav-link>


        </div>
        {{-- <a wire:navigate href="{{route('login')}}"
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary transition-colors">
            <span class="truncate">Login</span>
        </a> --}}
    </div>
</header>
