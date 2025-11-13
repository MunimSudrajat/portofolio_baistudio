@props(['subMessage'])
    <div
        class="flex w-full items-center gap-4 rounded-lg bg-white dark:bg-zinc-800 p-4 shadow-lg ring-1 ring-black/5 dark:ring-white/10">
        <div class="flex size-10 shrink-0 items-center justify-center rounded-full bg-red-100">
            <span class="material-symbols-outlined text-red-600 text-2xl">warning</span>
        </div>
        <div class="flex-1">
            <p class="text-sm font-medium text-zinc-900 dark:text-zinc-100">{{$slot}}</p>
            <p class="text-sm text-zinc-600 dark:text-zinc-400">{{$subMessage}}</p>
        </div>
    </div>
