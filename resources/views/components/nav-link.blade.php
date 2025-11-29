@props(['routeName'])
<a {{$attributes->merge([
    'class' => '' . (Route::currentRouteName() == $routeName ? 'text-sm font-medium leading-normal text-primary/80 hover:text-primary dark:text-primary dark:hover:text-primary/800' : 'text-sm font-medium leading-normal text-[#222222] hover:text-primary/80 dark:text-[#222222]dark:hover:text-primary/80')
   ])}}>{{$slot}}</a>

