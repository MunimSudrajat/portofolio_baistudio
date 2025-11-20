<div>
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
        <div class="flex h-full grow">
            <x-sidebar />
            <main class="flex-1 p-6 sm:p-8 md:p-10">
                <div class="mx-auto max-w-4xl">
                    <!-- Page Heading -->
                    <div class="mb-8">
                        <p class="text-[#111418] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">
                            Manage
                            Categories</p>
                    </div>
                    <!-- Add Category Section -->
                    <section class="mb-10">
                        <div
                            class="rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800/50 shadow-sm">
                            <h2
                                class="text-[#111418] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-6 pb-3 pt-5 border-b border-gray-200 dark:border-gray-700">
                                Add a New Category</h2>
                            <div class="flex flex-col sm:flex-row sm:items-end gap-4 p-6">
                                <label class="flex flex-col flex-1">
                                    <p
                                        class="text-[#111418] dark:text-gray-200 text-base font-medium leading-normal pb-2">
                                        Category Name</p>
                                    <input
                                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dbe0e6] dark:border-gray-600 bg-white dark:bg-gray-700 focus:border-primary dark:focus:border-primary h-14 placeholder:text-[#617589] p-[15px] text-base font-normal leading-normal"
                                        placeholder="e.g., Weddings, Portraits, Landscapes" value="" />
                                </label>
                                <button
                                    class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-14 px-6 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90 transition-colors">
                                    <span class="truncate">Save Category</span>
                                </button>
                            </div>
                        </div>
                    </section>
                    <!-- Existing Categories Section -->
                    <section>
                        <div
                            class="rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800/50 shadow-sm">
                            <h2
                                class="text-[#111418] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-6 pb-3 pt-5 border-b border-gray-200 dark:border-gray-700">
                                Your Categories</h2>
                            <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                                <li
                                    class="flex items-center justify-between p-4 px-6 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                                    <p class="text-base text-gray-800 dark:text-gray-200">Weddings</p>
                                    <div class="flex items-center gap-2">
                                        <button aria-label="Edit category"
                                            class="flex items-center justify-center size-9 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white transition-colors">
                                            <span class="material-symbols-outlined text-xl">edit</span>
                                        </button>
                                        <button aria-label="Delete category"
                                            class="flex items-center justify-center size-9 rounded-lg text-red-500 hover:bg-red-100 dark:hover:bg-red-500/20 hover:text-red-600 dark:hover:text-red-400 transition-colors">
                                            <span class="material-symbols-outlined text-xl">delete</span>
                                        </button>
                                    </div>
                                </li>
                                <li
                                    class="flex items-center justify-between p-4 px-6 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                                    <p class="text-base text-gray-800 dark:text-gray-200">Commercial</p>
                                    <div class="flex items-center gap-2">
                                        <button aria-label="Edit category"
                                            class="flex items-center justify-center size-9 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white transition-colors">
                                            <span class="material-symbols-outlined text-xl">edit</span>
                                        </button>
                                        <button aria-label="Delete category"
                                            class="flex items-center justify-center size-9 rounded-lg text-red-500 hover:bg-red-100 dark:hover:bg-red-500/20 hover:text-red-600 dark:hover:text-red-400 transition-colors">
                                            <span class="material-symbols-outlined text-xl">delete</span>
                                        </button>
                                    </div>
                                </li>
                                <li
                                    class="flex items-center justify-between p-4 px-6 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                                    <p class="text-base text-gray-800 dark:text-gray-200">Events</p>
                                    <div class="flex items-center gap-2">
                                        <button aria-label="Edit category"
                                            class="flex items-center justify-center size-9 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white transition-colors">
                                            <span class="material-symbols-outlined text-xl">edit</span>
                                        </button>
                                        <button aria-label="Delete category"
                                            class="flex items-center justify-center size-9 rounded-lg text-red-500 hover:bg-red-100 dark:hover:bg-red-500/20 hover:text-red-600 dark:hover:text-red-400 transition-colors">
                                            <span class="material-symbols-outlined text-xl">delete</span>
                                        </button>
                                    </div>
                                </li>
                                <li
                                    class="flex items-center justify-between p-4 px-6 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                                    <p class="text-base text-gray-800 dark:text-gray-200">Portraits</p>
                                    <div class="flex items-center gap-2">
                                        <button aria-label="Edit category"
                                            class="flex items-center justify-center size-9 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white transition-colors">
                                            <span class="material-symbols-outlined text-xl">edit</span>
                                        </button>
                                        <button aria-label="Delete category"
                                            class="flex items-center justify-center size-9 rounded-lg text-red-500 hover:bg-red-100 dark:hover:bg-red-500/20 hover:text-red-600 dark:hover:text-red-400 transition-colors">
                                            <span class="material-symbols-outlined text-xl">delete</span>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                            <!-- Empty State -->
                            <!-- <div class="p-8 text-center text-gray-500 dark:text-gray-400">
                                <p>You haven't added any categories yet.</p>
                                <p class="text-sm">Use the form above to get started.</p>
                            </div> -->
                        </div>
                    </section>
                </div>
            </main>
        </div>
    </div>
</div>
