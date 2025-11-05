@session('message')

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
                <p class="text-sm font-medium text-slate-900 dark:text-white"> {{session('message')}} </p>
            </div>
            <div class="shrink-0">
                <button
                    class="inline-flex items-center justify-center rounded-full text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-slate-800"
                    type="button">
                    <span class="sr-only">Close</span>
                    <span class="material-symbols-outlined text-base">
                        close
                    </span>
                </button>
            </div>
        </div>
    </div>
    <!-- Progress Bar -->
    <div class="bg-success/20 h-1">
        <div class="bg-success h-1" style="width: 100%;"></div>
        <!-- Width can be controlled by JS for countdown effect -->
    </div>
</div>
@endsession

