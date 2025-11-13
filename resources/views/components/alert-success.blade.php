@props(['subMessage'])

<div class="w-full max-w-md overflow-hidden rounded-lg bg-white dark:bg-slate-800 shadow-lg ring-1 ring-background-light ring-opacity-5"
    role="alert">
    <div class="p-4">
        <div class="flex items-start gap-4">
            <div class="shrink-0">
                <span class="material-symbols-outlined text-success text-2xl">
                    check_circle
                </span>
            </div>
            <div class="flex-1">
                <p class="text-sm font-medium text-slate-900 dark:text-white"> {{$slot}} </p>
                <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">{{$subMessage}}</p>
            </div>
        </div>
    </div>
    <!-- Progress Bar -->
    <div class="bg-success/20 h-1">
        <div class="bg-success h-1" style="width: 100%;"></div>
        <!-- Width can be controlled by JS for countdown effect -->
    </div>
</div>

