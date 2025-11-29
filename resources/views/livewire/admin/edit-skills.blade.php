<div>
    <div class="relative flex min-h-screen w-full">
        <x-sidebar />
        <main class="flex-1 p-8">
            <div class="max-w-3xl mx-auto">
                <div class="flex flex-wrap justify-between gap-3 mb-8">
                    <h1 class="text-[#111418] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">
                        Edit Skill</h1>
                </div>
                <div class="hidden flex items-center gap-4 bg-green-100 dark:bg-green-900/50 text-green-800 dark:text-green-300 p-4 rounded-lg mb-6 border border-green-200 dark:border-green-800"
                    id="success-message">
                    <span class="material-symbols-outlined text-2xl">check_circle</span>
                    <div>
                        <h3 class="font-bold">Success</h3>
                        <p class="text-sm">Skill updated successfully!</p>
                    </div>
                </div>
                <div
                    class="bg-white dark:bg-background-dark dark:border dark:border-slate-800 p-8 rounded-xl shadow-sm">
                    <form wire:submit="update">
                        <div class="flex flex-col gap-3">
                            <x-label for="skill">Skill</x-label>
                            <x-input name="skill" wire:model="skill" id="skill" />
                            <x-label for="deskripsi">Deskripsi</x-label>
                            <x-textarea name="deskripsi" wire:model="deskripsi" id="deskripsi"></x-textarea>
                        </div>
                        <div class="flex justify-stretch mt-8 border-t border-[#dbe0e6] dark:border-slate-800 pt-6">
                            <div class="flex flex-1 gap-3 flex-wrap justify-end">
                                <a wire:navigate href="{{ route('admin.skills') }}"
                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#f0f2f4] dark:bg-slate-700 text-[#111418] dark:text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-slate-200 dark:hover:bg-slate-600">
                                    <span class="truncate">Kembali</span>
                                </a>
                                <button
                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90">
                                    <span class="truncate" wire:loading.remove>Edit</span>
                                    <i class="fa-solid fa-circle-notch animate-spin" wire:loading></i>
                                </button>
                    </form>
                </div>
            </div>
    </div>
</div>
</main>
</div>
</div>
