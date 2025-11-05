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
                                                Access Your Creative Space</p>
                                            <p class="text-base text-gray-500 dark:text-gray-400">Log in to manage your
                                                professional portfolio and showcase your work to the world.</p>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <span
                                                class="material-symbols-outlined text-primary text-2xl">verified_user</span>
                                            <span class="text-sm font-medium text-gray-600 dark:text-gray-300">Secure
                                                &amp; Professional Platform</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-center items-center p-8 sm:p-12 md:p-16 w-full">
                                    <div class="w-full max-w-md">
                                        <div class="flex flex-col gap-8">
                                            <x-alert-success />
                                            <div class="flex flex-col gap-2">
                                                <p
                                                    class="text-[#111418] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">
                                                    Welcome Back</p>
                                                <p class="text-base text-gray-500 dark:text-gray-400">Please enter your
                                                    details to sign in.</p>
                                            </div>
                                            <div class="flex flex-col gap-4">
                                                <x-label>Username</x-label>
                                                <x-input placeholder="Masukkan username" type="text"
                                                    name="name" wire:model="name" />
                                                </label>
                                                <x-label>Password</x-label>
                                                <x-input placeholder="Masukkan password" type="text"
                                                    name="password" wire:model="password" />
                                                </label>
                                            </div>
                                            <div class="flex w-full">
                                                <x-button-auth>Login</x-button-auth>
                                            </div>
                                            <div class="text-center">
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Don't have an account? <a
                                                        class="font-bold text-primary hover:underline"
                                                        href="/register">Register</a>
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
