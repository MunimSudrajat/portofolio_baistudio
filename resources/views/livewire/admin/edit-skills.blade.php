<div>
    <div class="relative flex min-h-screen w-full">
        <x-sidebar />
        <main class="flex-1 p-8">
            <div class="max-w-3xl mx-auto">
                <div class="flex flex-wrap gap-2 mb-4">
                    <a class="text-[#617589] dark:text-slate-400 text-base font-medium leading-normal hover:text-primary"
                        href="#">Admin</a>
                    <span class="text-[#617589] dark:text-slate-400 text-base font-medium leading-normal">/</span>
                    <a class="text-[#617589] dark:text-slate-400 text-base font-medium leading-normal hover:text-primary"
                        href="#">Skills</a>
                    <span class="text-[#617589] dark:text-slate-400 text-base font-medium leading-normal">/</span>
                    <span class="text-[#111418] dark:text-white text-base font-medium leading-normal">Edit Skill</span>
                </div>
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
                    <div class="flex flex-col gap-6">
                        <label class="flex flex-col">
                            <p class="text-[#111418] dark:text-white text-base font-medium leading-normal pb-2">Skill
                                Name</p>
                            <input
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dbe0e6] dark:border-slate-700 bg-white dark:bg-slate-900/50 focus:border-primary/50 h-14 placeholder:text-[#617589] dark:placeholder:text-slate-500 p-[15px] text-base font-normal leading-normal"
                                value="Portrait Photography" />
                        </label>
                        <label class="flex flex-col">
                            <div class="flex items-baseline justify-between pb-2">
                                <p class="text-[#111418] dark:text-white text-base font-medium leading-normal">
                                    Description</p>
                                <span class="text-sm text-[#617589] dark:text-slate-400">Optional</span>
                            </div>
                            <textarea
                                class="form-textarea w-full min-h-[120px] resize-y rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dbe0e6] dark:border-slate-700 bg-white dark:bg-slate-900/50 focus:border-primary/50 placeholder:text-[#617589] dark:placeholder:text-slate-500 p-4 text-base font-normal leading-normal"
                                placeholder="Add a short description about this skill..."></textarea>
                        </label>
                    </div>
                    <div class="flex justify-stretch mt-8 border-t border-[#dbe0e6] dark:border-slate-800 pt-6">
                        <div class="flex flex-1 gap-3 flex-wrap justify-end">
                            <button
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#f0f2f4] dark:bg-slate-700 text-[#111418] dark:text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-slate-200 dark:hover:bg-slate-600">
                                <span class="truncate">Cancel</span>
                            </button>
                            <button
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90">
                                <span class="truncate">Save Changes</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
