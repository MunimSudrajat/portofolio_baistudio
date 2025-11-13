<div>
    <div class="relative flex min-h-screen w-full">
        <x-sidebar />
        <main class="flex-1 flex flex-col">
            <div class="flex-1 p-8 overflow-y-auto">
                <div class="mx-auto max-w-4xl">
                    <div class="flex flex-wrap items-center justify-between gap-4 mb-8">
                        <div class="flex min-w-72 flex-col gap-2">
                            <h1
                                class="text-text-light-primary dark:text-text-dark-primary text-3xl font-bold leading-tight">
                                Edit 'About Me' Page</h1>
                            <p
                                class="text-text-light-secondary dark:text-text-dark-secondary text-base font-normal leading-normal">
                                Update your biography, headshot, and skills.</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <button
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-hover-light dark:bg-hover-dark text-text-light-primary dark:text-text-dark-primary text-sm font-medium">
                                <span class="truncate">View Live Page</span>
                            </button>
                            <button
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-medium">
                                <span class="truncate">Save Changes</span>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8">
                        <div
                            class="flex flex-col gap-4 rounded-xl border border-border-light dark:border-border-dark bg-surface-light dark:bg-surface-dark p-6">
                            <label class="text-lg font-bold text-text-light-primary dark:text-text-dark-primary"
                                for="biography">Biography</label>
                            <div class="flex flex-col">
                                <div
                                    class="flex items-center gap-2 border border-border-light dark:border-border-dark rounded-t-lg bg-hover-light dark:bg-hover-dark px-3 py-2">
                                    <button class="p-1 rounded hover:bg-black/10 dark:hover:bg-white/10"><span
                                            class="material-symbols-outlined text-base">format_bold</span></button>
                                    <button class="p-1 rounded hover:bg-black/10 dark:hover:bg-white/10"><span
                                            class="material-symbols-outlined text-base">format_italic</span></button>
                                    <button class="p-1 rounded hover:bg-black/10 dark:hover:bg-white/10"><span
                                            class="material-symbols-outlined text-base">format_underlined</span></button>
                                    <div class="w-px h-5 bg-border-light dark:bg-border-dark mx-1"></div>
                                    <button class="p-1 rounded hover:bg-black/10 dark:hover:bg-white/10"><span
                                            class="material-symbols-outlined text-base">format_list_bulleted</span></button>
                                    <button class="p-1 rounded hover:bg-black/10 dark:hover:bg-white/10"><span
                                            class="material-symbols-outlined text-base">format_list_numbered</span></button>
                                    <div class="w-px h-5 bg-border-light dark:bg-border-dark mx-1"></div>
                                    <button class="p-1 rounded hover:bg-black/10 dark:hover:bg-white/10"><span
                                            class="material-symbols-outlined text-base">link</span></button>
                                </div>
                                <textarea
                                    class="w-full min-h-60 rounded-b-lg border border-border-light dark:border-border-dark bg-surface-light dark:bg-surface-dark p-3 text-sm focus:border-primary focus:ring-primary dark:placeholder-text-dark-secondary/50 placeholder-text-light-secondary/50"
                                    id="biography" placeholder="Tell your story..."></textarea>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div
                                class="flex flex-col gap-4 rounded-xl border border-border-light dark:border-border-dark bg-surface-light dark:bg-surface-dark p-6">
                                <h2 class="text-lg font-bold text-text-light-primary dark:text-text-dark-primary">
                                    Professional Headshot</h2>
                                <div class="flex flex-col items-center gap-4">
                                    <div class="w-40 h-40 rounded-full bg-cover bg-center"
                                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDCHUoMsu0EgtJAEWrrfOXi5VJp5p3GRWbRNOY-QvGlJC6PKUt7177Ur9aXet_osuvsNTx--XCho-Xpo9tkm52I7LLvxgKj-GEVLElH5rGDGe4R2w8IG5tJYn8mSlsi6r0z_JFLyHcBBl_63Fq5vMA0p0pOufB9MvhCl6gI9bnP9wkYpU8fKWQ0QoiVhEylr1eIpHJdvXOFE61WY65i9M9T_3l3aDnamEGcofOnUYUe8BWLuy1OzmBMjlQpX-Drvp8fTuFcJMeLc8E')">
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <button
                                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-9 px-3 bg-primary text-white text-sm font-medium">
                                            <span class="truncate">Upload New</span>
                                        </button>
                                        <button
                                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-9 px-3 bg-hover-light dark:bg-hover-dark text-text-light-primary dark:text-text-dark-primary text-sm font-medium">
                                            <span class="truncate">Remove</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex flex-col gap-4 rounded-xl border border-border-light dark:border-border-dark bg-surface-light dark:bg-surface-dark p-6">
                                <div class="flex items-center justify-between gap-4">
                                    <h2 class="text-lg font-bold text-text-light-primary dark:text-text-dark-primary">
                                        Skills
                                        &amp; Expertise</h2>
                                    <button
                                        class="flex items-center justify-center size-8 rounded-lg bg-primary/10 text-primary hover:bg-primary/20">
                                        <span class="material-symbols-outlined text-base">add</span>
                                    </button>
                                </div>
                                <div class="flex flex-col gap-3">
                                    <div
                                        class="flex items-center gap-2 rounded-lg bg-hover-light dark:bg-hover-dark p-2">
                                        <div class="flex-1 flex flex-col gap-1">
                                            <p class="text-sm font-medium">Portrait Photography</p>
                                            <div class="w-full bg-border-light dark:bg-border-dark rounded-full h-1.5">
                                                <div class="bg-primary h-1.5 rounded-full" style="width: 90%"></div>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <button
                                                class="size-7 flex items-center justify-center rounded-md text-text-light-secondary dark:text-text-dark-secondary hover:bg-black/5 dark:hover:bg-white/5"><span
                                                    class="material-symbols-outlined text-base">edit</span></button>
                                            <button
                                                class="size-7 flex items-center justify-center rounded-md text-text-light-secondary dark:text-text-dark-secondary hover:bg-black/5 dark:hover:bg-white/5"><span
                                                    class="material-symbols-outlined text-base">delete</span></button>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center gap-2 rounded-lg bg-hover-light dark:bg-hover-dark p-2">
                                        <div class="flex-1 flex flex-col gap-1">
                                            <p class="text-sm font-medium">Landscape Photography</p>
                                            <div class="w-full bg-border-light dark:bg-border-dark rounded-full h-1.5">
                                                <div class="bg-primary h-1.5 rounded-full" style="width: 75%"></div>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <button
                                                class="size-7 flex items-center justify-center rounded-md text-text-light-secondary dark:text-text-dark-secondary hover:bg-black/5 dark:hover:bg-white/5"><span
                                                    class="material-symbols-outlined text-base">edit</span></button>
                                            <button
                                                class="size-7 flex items-center justify-center rounded-md text-text-light-secondary dark:text-text-dark-secondary hover:bg-black/5 dark:hover:bg-white/5"><span
                                                    class="material-symbols-outlined text-base">delete</span></button>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center gap-2 rounded-lg bg-hover-light dark:bg-hover-dark p-2">
                                        <div class="flex-1 flex flex-col gap-1">
                                            <p class="text-sm font-medium">Photo Editing (Lightroom &amp; Photoshop)</p>
                                            <div class="w-full bg-border-light dark:bg-border-dark rounded-full h-1.5">
                                                <div class="bg-primary h-1.5 rounded-full" style="width: 95%"></div>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <button
                                                class="size-7 flex items-center justify-center rounded-md text-text-light-secondary dark:text-text-dark-secondary hover:bg-black/5 dark:hover:bg-white/5"><span
                                                    class="material-symbols-outlined text-base">edit</span></button>
                                            <button
                                                class="size-7 flex items-center justify-center rounded-md text-text-light-secondary dark:text-text-dark-secondary hover:bg-black/5 dark:hover:bg-white/5"><span
                                                    class="material-symbols-outlined text-base">delete</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
