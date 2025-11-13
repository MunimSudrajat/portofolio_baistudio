 <button
     {{ $attributes->merge([
         'type' => 'submit',
         'class' =>
             'flex h-12 w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg bg-primary px-4 text-base font-bold leading-normal tracking-[0.015em] text-white transition-colors hover:bg-primary/90',
     ]) }}>{{ $slot }}</button>
