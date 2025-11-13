<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'BaiStudio' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    @vite(['resources/css/app.css'])
    @livewireStyles

</head>

<body>
    @php
        $routeName = Route::currentRouteName();
        $isAuthPage = in_array($routeName, ['login', 'register', 'forgot-password', 'password.reset']);
        $isAdminPage = Str::startsWith($routeName, 'admin.');
    @endphp


    @if (!$isAuthPage && !$isAdminPage)
        <div class="bg-background-light dark:bg-background-dark font-display text-[#222222] dark:text-gray-200">
            <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
                <div class="layout-container flex h-full grow flex-col">

                    <x-navbar />
                    {{ $slot }}
                </div>
            </div>
        </div>
        <footer
            class="mt-auto px-4 py-8 text-center text-sm text-gray-500 dark:text-gray-400 border-t border-gray-200/80 dark:border-gray-700/80">
            <p>© 2025 Abdul Mun'im Sudrajat. All rights reserved.</p>
        </footer>
    @else
        <div class="bg-background-light dark:bg-background-dark font-display text-[#222222] dark:text-gray-200">
            <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
                <div class="layout-container flex h-full grow flex-col">
                    {{ $slot }}
                </div>
            </div>
        </div>
    @endif


    @livewireScripts
</body>

</html>
