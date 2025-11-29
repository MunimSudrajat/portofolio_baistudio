@props(['name'])
<input
    {{ $attributes->merge([
        'class' =>
            'form-input h-14 w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg border border-[#dbe0e6] bg-white p-[15px] text-base font-normal leading-normal text-[#111418] placeholder:text-[#617589] focus:border-primary focus:outline-0 focus:ring-2 focus:ring-primary/20 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:placeholder-gray-500 dark:focus:border-primary',
    ]) }}/>
@error($name)
    <p class="text-red-600">{{ $message }}</p>
@enderror
