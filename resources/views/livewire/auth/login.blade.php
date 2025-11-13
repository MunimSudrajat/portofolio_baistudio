<div>

    <div class="bg-background-light dark:bg-background-dark font-display">
        <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
            <div class="layout-container flex h-full grow flex-col">
                <div class="flex flex-1 justify-center items-center py-5 px-4 md:px-10">
                    <div class="layout-content-container flex flex-col max-w-6xl w-full">
                        <div
                            class="flex w-full grow bg-white dark:bg-background-dark @container rounded-xl shadow-lg overflow-hidden min-h-[550px]">
                            <div class="grid grid-cols-1 lg:grid-cols-2 w-full">
                                <div
                                    class="hidden lg:flex flex-col justify-center items-center p-8 sm:p-12 md:p-16 w-full bg-background-light dark:bg-gray-900">
                                    <div class="w-full max-w-md space-y-6">
                                        <div class="flex flex-col gap-2">
                                            <p
                                                class="text-4xl font-black text-[#111418] dark:text-white leading-tight tracking-[-0.033em]">
                                                Akses Ruang Fotografi Anda</p>
                                            <p class="text-base text-gray-500 dark:text-gray-400">Log in Masuk untuk
                                                memulai mengabadikan momen dengan fotografi profesional dan tunjukkan
                                                kepada dunia.</p>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <span
                                                class="material-symbols-outlined text-primary text-2xl">verified_user</span>
                                            <span class="text-sm font-medium text-gray-600 dark:text-gray-300">
                                                Platform Aman & Terpercaya untuk Menampilkan Karya Visual</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-center items-center p-8 sm:p-12 md:p-16 w-full">
                                    <div class="w-full max-w-md">
                                        <div class="flex flex-col gap-8">
                                            @if (session('message'))
                                                <x-alert-danger-invalid
                                                    subMessage="Silahkan cek kembali email atau password anda">{{ session('message') }}</x-alert-danger-invalid>
                                            @endif
                                            @if (session('berhasil-register'))
                                                <x-alert-success
                                                    subMessage="Silahkan masuk untuk melanjutkan membuat momen mu">{{ session('berhasil-register') }}
                                                </x-alert-success>
                                            @endif
                                            <div class="flex flex-col gap-2">
                                                <p
                                                    class="text-[#111418] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">
                                                    Selamat datang</p>
                                                <p class="text-base text-gray-500 dark:text-gray-400">Silakan masukkan
                                                    email dan password anda untuk masuk.</p>
                                            </div>
                                            <form wire:submit="login">
                                                <div class="flex flex-col gap-4">
                                                    <x-label for="email">Email</x-label>
                                                    <x-input placeholder="Masukkan email" type="email" name="email"
                                                        wire:model="email" id="email" />
                                                        <x-label for="password">Password</x-label>
                                                        <x-input placeholder="Masukkan password"
                                                        type="{{ $showPassword ? 'text' : 'password' }}"
                                                        name="password" wire:model="password" id="password" />
                                                        {{-- <div class="relative w-full gap-4">
                                                            <button
                                                                class="absolute inset-y-0 right-0 flex items-center pr-4 text-[#617589] dark:text-gray-400"
                                                                type="button">
                                                                @if ($showPassword)
                                                                    <x-visibilityoff-password wire:model="showPassword"
                                                                        wire:click="showpassword"></x-visibilityoff-password>
                                                                @else
                                                                    <x-visibility-password wire:model="showPassword"
                                                                        wire:click="showpassword"></x-visibility-password>
                                                                @endif
                                                            </button>
                                                        </div> --}}
                                                </div>
                                                <div class="flex w-full mt-5">
                                                    <x-button-auth>Login</x-button-auth>
                                                </div>
                                            </form>
                                            <div class="flex justify-between items-center w-full">
                                                <div class="flex items-center gap-2">
                                                    <input
                                                        class="form-checkbox h-4 w-4 rounded text-primary border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:ring-primary dark:focus:ring-offset-background-dark"
                                                        id="remember-me" type="checkbox" name="remember"
                                                        wire:model="remember" />
                                                    <label class="text-sm text-gray-700 dark:text-gray-300 select-none"
                                                        for="remember-me">Remember Me</label>
                                                </div>
                                                <a class="text-primary text-sm font-medium hover:underline"
                                                    href="{{ route('forgot-password') }}">Lupa Password?</a>
                                            </div>
                                            <div class="text-center">
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Tidak punya akun ? <a class="font-bold text-primary hover:underline"
                                                        href="{{ route('register') }}">Register</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
