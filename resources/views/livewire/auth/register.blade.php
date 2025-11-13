<div>
    <div
        class="relative flex min-h-screen w-full flex-col items-center justify-center bg-background-light dark:bg-background-dark group/design-root overflow-hidden p-4">
        <main class="flex w-full max-w-6xl flex-1 items-center justify-center">
            <div
                class="grid w-full grid-cols-1 overflow-hidden rounded-xl bg-white dark:bg-background-dark md:grid-cols-2 md:shadow-lg">
                <div
                    class="relative hidden h-full items-center justify-center bg-gray-100 p-12 dark:bg-gray-900/50 md:flex">
                    <div class="absolute inset-0 z-0 bg-primary/10 dark:bg-primary/20"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD8D50JYVNGN4Ebpk1wNLs8sShqc09t5z0wNO908tZLUdxjosBLEFngKxivJz0PzxtW_HvAK4zJrMck_IYSCYKYbjMl3n4GTLj9cXvi4vBPmOZmaOv4y415yCUp258FJjCtRWcgC_ELMpbZ_7KdvnHUQWgoGU8qJ3KfDSyegBYVuSym0EA0MoWFXCMcyPheNqi0ln68Ev9JWDpFimqcGFSLd1ua5sk8jMbEWxsCNDK5RO02InjzNZKN0ximkqG9BwbWRpdgegKYc4Q'); background-size: cover; background-position: center; filter: blur(8px);">
                    </div>
                    <div class="absolute inset-0 z-10 bg-gradient-to-br from-primary/20 via-transparent to-primary/30">
                    </div>
                    <div class="z-20 text-center text-white">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-800 dark:text-white">Abadikan. Ciptakan.
                            Bagikan.</h1>
                        <p class="mt-4 text-lg text-gray-600 dark:text-gray-300">Bergabunglah untuk membuat momen bersama
                            dan tunjukkan momen itu kepada dunia.</p>
                    </div>
                </div>
                <div class="flex w-full flex-col justify-center bg-white p-8 dark:bg-background-dark sm:p-12">
                    <div class="w-full max-w-md">
                        <div class="mb-8">
                            <p
                                class="text-4xl font-black leading-tight tracking-[-0.033em] text-[#111418] dark:text-white">
                                Buat akun anda</p>
                        </div>
                        <form wire:submit="save" class="flex flex-col gap-3">
                            <x-label for="username">Username</x-label>
                            <x-input placeholder="Masukkan username" type="text" name="name"
                                wire:model.live="name" id="username" />

                            <x-label for="email">Email</x-label>
                            <x-input placeholder="Masukkan email" type="email" name="email" wire:model.live="email"
                                id="email" />

                            <x-label for="password">Password</x-label>
                            <x-input placeholder="Masukkan password" type="{{ $showPassword ? 'text' : 'password' }}"
                                name="password" wire:model="password" id="password" />

                            <x-label for="password_confirmation">Konfirmasi Password</x-label>
                            <x-input placeholder="Masukkan password" type="{{ $showPassword ? 'text' : 'password' }}"
                                name="password_confirmation" wire:model="password_confirmation"
                                id="password_confirmation" />

                            <x-button-auth>Registrasi</x-button-auth>
                        </form>
                        <div class="mt-6 text-center">
                            <p class="text-sm text-gray-600 dark:text-gray-400">Sudah mempunyai akun ? <a
                                    class="font-semibold text-primary hover:underline" href="/login">Log in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
