 <aside
     class="flex w-64 flex-col border-r border-zinc-300 dark:border-border-dark bg-surface-light dark:bg-surface-dark p-4">
     <div class="flex h-full flex-col justify-between">
         <div class="flex flex-col gap-4">
             <div class="flex items-center gap-3 px-3">
                 <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                     data-alt="Abstract gradient with blue and purple tones"
                     style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDCHUoMsu0EgtJAEWrrfOXi5VJp5p3GRWbRNOY-QvGlJC6PKUt7177Ur9aXet_osuvsNTx--XCho-Xpo9tkm52I7LLvxgKj-GEVLElH5rGDGe4R2w8IG5tJYn8mSlsi6r0z_JFLyHcBBl_63Fq5vMA0p0pOufB9MvhCl6gI9bnP9wkYpU8fKWQ0QoiVhEylr1eIpHJdvXOFE61WY65i9M9T_3l3aDnamEGcofOnUYUe8BWLuy1OzmBMjlQpX-Drvp8fTuFcJMeLc8E");'>
                 </div>
                 <div class="flex flex-col">
                     <h1
                         class="text-text-light-primary dark:text-text-dark-primary text-base font-medium leading-normal">
                         Anna Lee</h1>
                     <p
                         class="text-text-light-secondary dark:text-text-dark-secondary text-sm font-normal leading-normal">
                         Photographer</p>
                 </div>
             </div>
             <nav class="flex flex-col gap-2">
                 <x-nav-link-sidebar href="{{ route('admin.gallery') }}" wire:navigate routeName="admin.gallery"
                     icon='photo_library'>Gallery</x-nav-link-sidebar>
                 {{-- <x-nav-link-sidebar href="{{route('admin.home')}}" wire:navigate routeName="admin-home" icon="home">Home</x-nav-link-sidebar> --}}
                 {{-- <x-nav-link-sidebar href="{{route('admin.services')}}" wire:navigate routeName="admin-services" icon="photo_camera">Services</x-nav-link-sidebar> --}}
                 <x-nav-link-sidebar href="{{ route('admin.aboutme') }}" wire:navigate routeName="admin.aboutme"
                     icon="person">About Me</x-nav-link-sidebar>
                 <x-nav-link-sidebar href="{{ route('admin.category') }}" wire:navigate routeName="admin.category"
                     icon="book">Category</x-nav-link-sidebar>
                 <x-nav-link-sidebar href="{{ route('admin.skills') }}" wire:navigate routeName="admin.skills"
                     icon="star">Skills</x-nav-link-sidebar>
                 {{-- <x-nav-link-sidebar href="{{route('admin.contact')}}" wire:navigate routeName="admin-contact" icon="mail">Contact Info</x-nav-link-sidebar> --}}
                 {{-- <x-nav-link-sidebar href="{{route('admin.settings')}}" wire:navigate routeName="admin-settings" icon="settings">Settings</x-nav-link-sidebar> --}}
             </nav>
         </div>
         <div class="flex flex-col">
             <a class="flex items-center gap-3 px-3 py-2 text-text-light-secondary dark:text-text-dark-secondary hover:bg-hover-light dark:hover:bg-hover-dark rounded-lg"
                 href="#">
                 <span class="material-symbols-outlined">logout</span>
                 <p class="text-sm font-medium leading-normal">Logout</p>
             </a>
         </div>
     </div>
 </aside>
