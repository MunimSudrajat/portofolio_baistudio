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
                                Skills Management</h1>
                            <p class="text-[#617589] dark:text-slate-400 text-base font-normal leading-normal mt-2">Add,
                                edit, or remove the skills displayed on your 'About Me' page.</p>
                        </div>
                    </div>
                    <div
                        class="bg-white dark:bg-background-dark border border-slate-200 dark:border-slate-800 rounded-xl p-6">
                        <h2
                            class="text-[#111418] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] mb-6">
                            Add a New Skill</h2>
                        <div class="flex flex-col sm:flex-row items-end gap-4">
                            <label class="flex flex-col flex-1">
                                <p class="text-[#111418] dark:text-gray-200 text-base font-medium leading-normal pb-2">
                                    Add Skill</p>
                                <input
                                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dbe0e6] dark:border-gray-600 bg-white dark:bg-gray-700 focus:border-primary dark:focus:border-primary h-14 placeholder:text-[#617589] p-[12px] text-base font-normal leading-normal"
                                    placeholder="e.g., Adobe Photoshop, Videografer, Fotografer" value="" />
                            </label>
                            <button
                                class="flex items-center justify-center gap-2 h-12 px-6 rounded-lg bg-primary text-white text-base font-semibold leading-normal hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-background-dark transition-colors w-full sm:w-auto">Add
                                Skill</button>
                        </div>
                    </div>
                    <div class="mt-12">
                        <h2
                            class="text-[#111418] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] mb-5">
                            Current Skills</h2>
                        <div class="space-y-3">
                            <div
                                class="group flex items-center gap-4 rounded-xl p-4 bg-white dark:bg-background-dark border border-slate-200 dark:border-slate-800">
                                <p class="flex-1 text-[#111418] dark:text-slate-200 text-base font-medium">Drone
                                    Videography</p>
                                <div
                                    class="flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <button
                                        class="flex items-center justify-center size-10 rounded-lg hover:bg-black/5 dark:hover:bg-white/5 text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors">
                                        <span class="material-symbols-outlined text-xl">edit</span>
                                    </button>
                                    <button
                                        class="flex items-center justify-center size-10 rounded-lg hover:bg-black/5 dark:hover:bg-white/5 text-slate-500 dark:text-slate-400 hover:text-red-500 dark:hover:text-red-500 transition-colors">
                                        <span class="material-symbols-outlined text-xl">delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
