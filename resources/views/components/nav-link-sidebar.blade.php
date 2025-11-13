 @props(['icon', 'routeName'])

 <a
 {{$attributes->merge([
    'class' => ''. (Route::currentRouteName() == $routeName ? 'flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary cursor-pointer' : 'flex items-center gap-3 px-3 py-2 text-text-light-secondary dark:text-text-dark-secondary hover:bg-hover-light dark:hover:bg-hover-dark rounded-lg cursor-pointer' )
 ])}}>
     <span class="material-symbols-outlined">{{$icon}}</span>
     <p class="text-sm font-medium leading-normal">{{$slot}}</p>
 </a>
