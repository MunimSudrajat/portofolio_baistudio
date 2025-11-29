@props(['name'])
<textarea
    {{ $attributes->merge([
        'class' =>
            'w-full min-h-60 rounded-lg border border-border-light bg-surface-light p-3 text-sm placeholder-text-light-secondary/50 focus:border-primary focus:outline-0 focus:ring-2 focus:ring-primary/20 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:placeholder-gray-500 dark:focus:border-primary text-[#111418] placeholder:text-[#617589]',
    ]) }}></textarea>
@error($name)
    <p class="text-red-600">{{ $message }}</p>
@enderror
