<div>
    <div class="relative flex min-h-screen w-full flex-col group/design-root">
        <div class="flex grow">
            <x-sidebar />
            <main class="flex-1 p-6 lg:p-10">
                <div class="max-w-4xl mx-auto">
                    <div class="flex flex-wrap justify-between gap-4 items-center mb-8">
                        <div class="flex flex-col">
                            <h1
                                class="text-[#111418] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">
                               Data Skill</h1>
                            <p class="text-[#617589] dark:text-slate-400 text-base font-normal leading-normal mt-2">
                                Tambah,
                                edit, atau hapus data skill untuk ditampilkan di halaman 'About Me'.</p>
                        </div>
                        @if (session('save'))
                            <x-alert-success subMessage="Berhasil menambahkan data">{{ session('save') }}</x-alert-success>
                        @elseif (session('update'))
                            <x-alert-success subMessage="Berhasil update data">{{ session('update') }}</x-alert-success>
                        @elseif (session('delete'))
                            <x-alert-success subMessage="Berhasil hapus data">{{ session('delete') }}</x-alert-success>
                        @endif
                    </div>
                    <div
                        class="bg-white dark:bg-background-dark border border-slate-200 dark:border-slate-800 rounded-xl p-6">
                        <h2
                            class="border-b border-gray-200 dark:border-gray-700 text-[#111418] dark:text-white text-[22px] font-bold leading-tight pb-3 tracking-[-0.015em] mb-3">
                           Tambah skill baru</h2>
                        <form wire:submit="save" class="flex flex-col sm:flex-row items-end gap-4">
                            <div class="flex flex-col flex-1 gap-3">
                                <x-label for="skill">Skill</x-label>
                                <x-input placeholder="Silahkan masukkan skill anda" name="skill" wire:model="skill"
                                    id="skill" id="skill" />
                                <x-label for="deskripsi">Deskripsi</x-label>
                                <x-textarea id="biography" placeholder="Masukkan deskripsi skill anda" name="deskripsi"
                                    wire:model="deskripsi" id="deskripsi"></x-textarea>
                                <button
                                    class="cursor-pointer flex items-center justify-center gap-2 h-12 px-6 rounded-lg bg-primary text-white text-base font-semibold leading-normal hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-background-dark transition-colors w-full sm:w-auto">
                                    <span wire:loading.remove>
                                        Add
                                        Skill
                                    </span>
                                    <i class="fa-solid fa-circle-notch animate-spin" wire:loading></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="mt-12">
                        <h2
                            class="text-[#111418] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] mb-5">
                            Daftar Skill anda</h2>
                        <div class="space-y-3">
                            @forelse ($skills as $s)
                                <div
                                    class="group flex items-center gap-4 rounded-xl p-4 bg-white dark:bg-background-dark border border-slate-200 dark:border-slate-800">
                                    <p class="flex-1 text-[#111418] dark:text-slate-200 text-base font-medium">
                                        {{ $s->name }}</p>
                                    <div
                                        class="flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <a href="{{route('admin.edit.skills', $s->id)}}"
                                            class="flex items-center justify-center size-10 rounded-lg hover:bg-black/5 dark:hover:bg-white/5 text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors cursor-pointer">
                                            <span class="material-symbols-outlined text-xl"
                                                >edit</span>
                                        </a>
                                        <button wire:click="delete({{$s->id}})" wire:confirm="Apakah anda yakin ingin menghapus skill {{$s->name}} ?"
                                            class="flex items-center justify-center size-10 rounded-lg hover:bg-black/5 dark:hover:bg-white/5 text-slate-500 dark:text-slate-400 hover:text-red-500 dark:hover:text-red-500 transition-colors cursor-pointer">
                                            <span class="material-symbols-outlined text-xl">delete</span>
                                        </button>
                                    </div>
                                </div>
                            @empty
                                <p class="flex-1 text-[#111418] dark:text-slate-200 text-base font-medium">Data tidak
                                    ada</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
