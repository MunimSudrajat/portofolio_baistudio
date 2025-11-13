<div>
    <div class="relative flex min-h-screen w-full flex-col items-center justify-center overflow-x-hidden p-4">
        <div class="w-full max-w-md rounded-xl bg-white p-6 shadow-sm dark:bg-[#1a232c] sm:p-8">
            <div class="flex flex-col gap-6">
                <!-- PageHeading Component -->
                @if (session('message'))
                    <x-alert-success subMessage="Silahkan Cek Email Anda">{{ session('message') }}</x-alert-success>
                @endif
                @if (session('invalidMessage'))
                    <x-alert-danger-invalid
                        subMessage="Pastikan email yang anda masukkan sudah benar">{{ session('message') }}</x-alert-danger-invalid>
                @endif
                <div class="flex flex-col gap-2 text-center">
                    <h1 class="text-3xl font-bold tracking-tight text-[#111418] dark:text-white">Reset Your Password</h1>
                    <p class="text-sm text-[#617589] dark:text-gray-400">
                        Enter the email address associated with your account, and we'll send you a link to reset your
                        password.
                    </p>
                </div>
                <!-- Form Section -->
                <form wire:submit='sendresetlink' class="flex flex-col gap-4">
                    <!-- TextField Component -->
                    <div class="flex flex-col">
                        <x-label for="email">Email</x-label>
                        <x-input wire:model.live="email" name="email" type="email" id="email" />
                    </div>
                    <!-- SingleButton Component -->
                    <div class="flex">
                        <x-button-auth>
                            <i class="fa-solid fa-spinner mr-3 animate-spin" wire:loading></i>
                            Send Reset Link</x-button-auth>
                    </div>
                </form>
                <!-- MetaText Component -->
                <div class="text-center">
                    <a class="text-sm font-normal text-[#617589] underline transition-colors hover:text-primary dark:text-gray-400 dark:hover:text-primary"
                        href="{{ route('login') }}">Back to Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
