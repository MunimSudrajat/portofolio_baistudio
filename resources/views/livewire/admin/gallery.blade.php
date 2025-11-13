<div>
    <div
        class="font-display bg-background-light dark:bg-background-dark text-text-light-primary dark:text-text-dark-primary">
        <div class="relative flex min-h-screen w-full">
            <x-sidebar />
            <!-- Main Content Area -->
            <main class="flex-1 flex flex-col">
                <div class="flex-1 p-8 overflow-y-auto">
                    <div class="mx-auto max-w-4xl">
                        <!-- PageHeading -->
                        <div class="flex flex-wrap items-center justify-between gap-4 mb-6">
                            <div class="flex min-w-72 flex-col gap-2">
                                <h1
                                    class="text-text-light-primary dark:text-text-dark-primary text-3xl font-bold leading-tight">
                                    Edit Gallery</h1>
                                <p
                                    class="text-text-light-secondary dark:text-text-dark-secondary text-base font-normal leading-normal">
                                    Manage your photo albums and upload new work.</p>
                            </div>
                            <div class="flex items-center gap-4">
                                <button
                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-hover-light dark:bg-hover-dark text-text-light-primary dark:text-text-dark-primary text-sm font-medium">
                                    <span class="truncate">View Live Site</span>
                                </button>
                                <button
                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-medium">
                                    <span class="truncate">Publish Changes</span>
                                </button>
                            </div>
                        </div>
                        <!-- SegmentedButtons -->
                        <div class="flex w-full mb-6">
                            <div
                                class="flex h-10 flex-1 items-center justify-center rounded-lg bg-hover-light dark:bg-hover-dark p-1">
                                <label
                                    class="flex cursor-pointer h-full grow items-center justify-center overflow-hidden rounded-md px-2 has-checked:bg-surface-light has-checked:dark:bg-surface-dark has-checked:shadow-sm has-checked:text-text-light-primary has-checked:dark:text-text-dark-primary text-text-light-secondary dark:text-text-dark-secondary text-sm font-medium leading-normal">
                                    <span class="truncate">Manage Photos</span>
                                    <input checked="" class="invisible w-0" name="gallery-view" type="radio"
                                        value="Manage Photos" />
                                </label>
                                <label
                                    class="flex cursor-pointer h-full grow items-center justify-center overflow-hidden rounded-md px-2 has-checked:bg-surface-light has-checked:dark:bg-surface-dark has-checked:shadow-sm has-checked:text-text-light-primary has-checked:dark:text-text-dark-primary text-text-light-secondary dark:text-text-dark-secondary text-sm font-medium leading-normal">
                                    <span class="truncate">Create New Album</span>
                                    <input class="invisible w-0" name="gallery-view" type="radio"
                                        value="Create New Album" />
                                </label>
                            </div>
                        </div>
                        <div class="flex flex-col gap-6">
                            <!-- EmptyState for Upload -->
                            <div class="flex flex-col">
                                <div
                                    class="flex flex-col items-center gap-4 rounded-xl border-2 border-dashed border-border-light dark:border-border-dark px-6 py-10 bg-surface-light dark:bg-surface-dark">
                                    <div class="flex max-w-[480px] flex-col items-center gap-2 text-center">
                                        <p
                                            class="text-text-light-primary dark:text-text-dark-primary text-lg font-bold leading-tight">
                                            Upload your work</p>
                                        <p
                                            class="text-text-light-secondary dark:text-text-dark-secondary text-sm font-normal leading-normal">
                                            Drag &amp; drop files here or click the button below to browse.</p>
                                    </div>
                                    <button
                                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-medium">
                                        <span class="truncate">Browse Files</span>
                                    </button>
                                </div>
                            </div>
                            <!-- ImageGrid -->
                            <div class="grid grid-cols-[repeat(auto-fit,minmax(180px,1fr))] gap-4">
                                <div class="relative group bg-cover bg-center flex flex-col gap-3 rounded-xl justify-end p-4 aspect-square"
                                    data-alt="A dramatic sunset over a mountain range with vibrant orange and purple clouds."
                                    style='background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuB73onF_WVJ__Sf70mZaofszK61-f_E8KlhOcDZZuk0ZPKLecJ5WlPIl32DZdF241rwcD3wZ1y5KgUM_QkEAfbCK9jQCWJl-IpnJCgvDYYmqw-bAXqZMzR5U2GJ-zCEvtvdWMByL9zwK5bGDuEHEqr_8uBgh4v8WlnhcpEyKg3Sk6Wdzpt1C52elB1nw0nH4Ac3I5m9jqkv34lJEqau8lZla0yF1oDN8h3ulbVDKRpZVcojSmiYrrUTyKc1sm4qOHtXQXQlpxLsOfQ")'>
                                    <p class="text-white text-base font-bold leading-tight line-clamp-2">Sunset Over
                                        Mountains</p>
                                    <div
                                        class="absolute top-2 right-2 flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button
                                            class="size-8 rounded-full bg-black/50 text-white flex items-center justify-center"><span
                                                class="material-symbols-outlined text-base">edit</span></button>
                                        <button
                                            class="size-8 rounded-full bg-black/50 text-white flex items-center justify-center"><span
                                                class="material-symbols-outlined text-base">delete</span></button>
                                    </div>
                                </div>
                                <div class="relative group bg-cover bg-center flex flex-col gap-3 rounded-xl justify-end p-4 aspect-square"
                                    data-alt="A bustling city street at night with streaks of light from traffic and illuminated skyscrapers."
                                    style='background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDRZUzZceZK0GZGG-bkcugYnydvuR6cUeuczVD4gXJJ7jOP3Tqwe0FUSAeVukDPACKOTf4B_mkyv-NmyWo61gSHGG1z3J1FQAWSXwCp723EvHYqmLbscMV-a0_0hEMl7Ujy6sUtIhJbyVmsm5Z1fKhru81U08jNYxhS96tk_gBFogtWWKBXZgxBwSuYDNrujGmID1nACz52WJewjQvdxcQ_tKDU6_sUD2CtiRTM7oG2QVWDIh3Zf64z9iIvMGZQ6DeR3qCJQsu7N90")'>
                                    <p class="text-white text-base font-bold leading-tight line-clamp-2">City Lights at
                                        Night</p>
                                    <div
                                        class="absolute top-2 right-2 flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button
                                            class="size-8 rounded-full bg-black/50 text-white flex items-center justify-center"><span
                                                class="material-symbols-outlined text-base">edit</span></button>
                                        <button
                                            class="size-8 rounded-full bg-black/50 text-white flex items-center justify-center"><span
                                                class="material-symbols-outlined text-base">delete</span></button>
                                    </div>
                                </div>
                                <div class="relative group bg-cover bg-center flex flex-col gap-3 rounded-xl justify-end p-4 aspect-square"
                                    data-alt="A winding trail through a dense forest with golden autumn leaves covering the ground."
                                    style='background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCIZN8d5GLK_ULUyRlBsPg4SRfNS_zNtArxc8_b7rvwQP2m47xgQ31EI9W1hd7AAlepa3kFvuOjMwELrTGTRVtTYeScxg4bzmmQzG7y_wnY_IpddGD8THGDy4BIMegLmU4taNDP000ZPflmnP64fvNdz2ENyi7ksBNHiWXvae2xNrisCEPRJk_uu1DCMK1xfkogUPKRnLA3MUhMXnpkzYNroVRrMNNbtT9rcHNR9bwKvFRj04JlT1pKoCvF3wi-R22JxuVo6G0Ejug")'>
                                    <p class="text-white text-base font-bold leading-tight line-clamp-2">Forest Trail in
                                        Autumn</p>
                                    <div
                                        class="absolute top-2 right-2 flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button
                                            class="size-8 rounded-full bg-black/50 text-white flex items-center justify-center"><span
                                                class="material-symbols-outlined text-base">edit</span></button>
                                        <button
                                            class="size-8 rounded-full bg-black/50 text-white flex items-center justify-center"><span
                                                class="material-symbols-outlined text-base">delete</span></button>
                                    </div>
                                </div>
                                <div class="relative group bg-cover bg-center flex flex-col gap-3 rounded-xl justify-end p-4 aspect-square"
                                    data-alt="A powerful ocean wave curling and crashing onto a sandy shore with white foam."
                                    style='background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuD1sWYPcBfK3jAfi2BC9SyqEnR5GW_1i9tcO976JDKTRxTxYuo1WAcyFzVFcLQ1unJqn8OSpnYQTR28XKY5KuO1Y2uplal-EcEBNfpPr-HO1tE0ZjxH5-omKGl2tqihU74TkSH_hDMGvJkMXfLRQ7T6MenivCu8gUMQXoYeocrjlM8W5tlwqJiemFkUYQQRvfaLVcxtfWElKNw1HezGvXumVJCS3mwm_sWgz0TQbcGQ6NgBR28ebznw7pNMiq33XB2xEo8YkUGJUkU")'>
                                    <p class="text-white text-base font-bold leading-tight line-clamp-2">Ocean Waves
                                        Crashing</p>
                                    <div
                                        class="absolute top-2 right-2 flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button
                                            class="size-8 rounded-full bg-black/50 text-white flex items-center justify-center"><span
                                                class="material-symbols-outlined text-base">edit</span></button>
                                        <button
                                            class="size-8 rounded-full bg-black/50 text-white flex items-center justify-center"><span
                                                class="material-symbols-outlined text-base">delete</span></button>
                                    </div>
                                </div>
                                <div class="relative group bg-cover bg-center flex flex-col gap-3 rounded-xl justify-end p-4 aspect-square"
                                    data-alt="A close-up portrait of a person bathed in the warm, soft light of the golden hour."
                                    style='background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDv2dymqcc-xvxNfDO_GSE5IhsY_j7cjHOAXJ6SihIstEVIPz1SGSGnTF56s39Gr1JG0y0BICAboeYAxe3QMiuA3h2ZZXKoGA-lBhbT47_O5E19Qvp_zTU-U0g50TF4_CZkvekDxIhlUGcCgzJFOLO0JObCvaawXGWKsMmoxg9BjaMIcsHVKxofta-Y327ox9MvLpsePjZI3yTdMDomYrPsVjFwOGIqvJZRyba5ec-5KZHTNu-bFSSTRG48c2hTwKRSUG4TsyfyHuc")'>
                                    <p class="text-white text-base font-bold leading-tight line-clamp-2">Portrait in
                                        Golden Hour</p>
                                    <div
                                        class="absolute top-2 right-2 flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button
                                            class="size-8 rounded-full bg-black/50 text-white flex items-center justify-center"><span
                                                class="material-symbols-outlined text-base">edit</span></button>
                                        <button
                                            class="size-8 rounded-full bg-black/50 text-white flex items-center justify-center"><span
                                                class="material-symbols-outlined text-base">delete</span></button>
                                    </div>
                                </div>
                                <div class="relative group bg-cover bg-center flex flex-col gap-3 rounded-xl justify-end p-4 aspect-square"
                                    data-alt="A black and white shot focusing on the geometric lines and shadows of a modern building."
                                    style='background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuD63xn8DqcdeIoU_N3GlxV8-jspVj31LFPGxr-O8LOvTlFIb1XJp9kWW2rrcHLdgKtypdfGyCuFttYwkCczEuibeTnxD0em10OXCsrTrJLnb1uovowWu75abeiXbqA23XSLF8Yx33BVhEQgtLc12-7-WzJcc2k9bOpWkqt7KbIbkroab7tYs9RbC6NbyZrDy4ZnubHJ7qip51K-rt2brfFje6aYq-_pSP6gM1EKghptHwefVqpFidpo430YX5y07akIuov81OpioNs")'>
                                    <p class="text-white text-base font-bold leading-tight line-clamp-2">Architectural
                                        Details</p>
                                    <div
                                        class="absolute top-2 right-2 flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button
                                            class="size-8 rounded-full bg-black/50 text-white flex items-center justify-center"><span
                                                class="material-symbols-outlined text-base">edit</span></button>
                                        <button
                                            class="size-8 rounded-full bg-black/50 text-white flex items-center justify-center"><span
                                                class="material-symbols-outlined text-base">delete</span></button>
                                    </div>
                                </div>
                                <div class="relative group bg-cover bg-center flex flex-col gap-3 rounded-xl justify-end p-4 aspect-square"
                                    data-alt="A vibrant meadow filled with colorful wildflowers under a clear blue sky."
                                    style='background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBcurWnUOykdsUs64yW8y8_bokx1xuOa5Yc7PpmzfgTBi66GwCSlI0zgxF3S6J_8-XXnDM0dl29iZSyVu8ptxJn076_f-X7SDhkrCXdgg58VsJgenbUFuz-W1igC8YkJGyQ-J3xE_6c_-GuG37g-8n6mjvyXlkfSNmlR31abDfn9iVA2tuR_XGbfVThumSSgEGqcwIGwwKqY9UkrvXQCv2lyZWDZQj5opwXhR2RfCDoVIOcmP9fUMnetGgHqav55DRshLXg3zqjLSE")'>
                                    <p class="text-white text-base font-bold leading-tight line-clamp-2">Wildflower
                                        Meadow</p>
                                    <div
                                        class="absolute top-2 right-2 flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button
                                            class="size-8 rounded-full bg-black/50 text-white flex items-center justify-center"><span
                                                class="material-symbols-outlined text-base">edit</span></button>
                                        <button
                                            class="size-8 rounded-full bg-black/50 text-white flex items-center justify-center"><span
                                                class="material-symbols-outlined text-base">delete</span></button>
                                    </div>
                                </div>
                                <div class="relative group bg-cover bg-center flex flex-col gap-3 rounded-xl justify-end p-4 aspect-square"
                                    data-alt="A long-exposure photograph of the night sky, showing the Milky Way and countless stars."
                                    style='background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDkQdoQ--PJ2WIM1JWCLFv2bM8SNEVT12MGMeyuIOWk9VNn3PNyW0TLz81kYg0prl_oh-fpm9liJ4QRhu23Rn3lN8e4ZVFKAepZ6T2QhuxoOIpeimKKJs-Ns_IyjrPYSAsEakP6mHc8xj18RmKhm1B6zJwilCKb09xktH5dtzDFPTuuDN84qSt59MQ7uzFKNlLC1yjm-3uA4j4K904N9NTjCnBM6HL4cVYdTL4AqSvn5_0M1WH4sXtZxo8VngoMreItc_dgsBWePhA")'>
                                    <p class="text-white text-base font-bold leading-tight line-clamp-2">Starry Night
                                        Sky</p>
                                    <div
                                        class="absolute top-2 right-2 flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button
                                            class="size-8 rounded-full bg-black/50 text-white flex items-center justify-center"><span
                                                class="material-symbols-outlined text-base">edit</span></button>
                                        <button
                                            class="size-8 rounded-full bg-black/50 text-white flex items-center justify-center"><span
                                                class="material-symbols-outlined text-base">delete</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
