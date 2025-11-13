<div>
    <main class="flex flex-1 items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div
                class="bg-white dark:bg-background-dark/80 backdrop-blur-sm p-8 sm:p-10 rounded-xl shadow-lg border border-gray-200 dark:border-gray-700">
                <div class="flex flex-col gap-3 mb-8 text-center">
                    <p class="text-[#111418] dark:text-white text-3xl sm:text-4xl font-black tracking-[-0.033em]">Reset
                        Your Password</p>
                    <p class="text-[#617589] dark:text-gray-400 text-base font-normal">Silahkan masukkan password yang baru</p>
                </div>
                @if (session('message'))
                    <x-alert-success subMessage="Silahkan login kembali">{{ session('message') }}</x-alert-success>
                @endif
                <form wire:submit="resetpassword" class="space-y-6 mt-3">
                    <div class="space-y-4">
                        <div>
                            <x-label for="new-password">Email</x-label>
                            <x-input wire:model.live="email" type="email" name="email" id="new-password"></x-input>
                        </div>
                        <div>
                            <x-label for="new-password">Password baru</x-label>
                            <x-input wire:model.live="password" type="password" name="password" id="new-password"></x-input>
                        </div>
                        <div>
                            <x-label for="password_confirmation">Konfirmasi Password Baru</x-label>
                            <x-input wire:model.live="password_confirmation" type="password" name="password_confirmation"
                                id="password_confirmation"></x-input>
                        </div>
                    </div>

                    <div>
                        <x-button-auth>Reset Password</x-button-auth>
                    </div>
                </form>
                  <div class="text-center">
                    <a class="text-sm font-normal text-[#617589] underline transition-colors hover:text-primary dark:text-gray-400 dark:hover:text-primary"
                        href="{{ route('login') }}">Back to Login</a>
                </div>
            </div>
        </div>
    </main>
</div>
