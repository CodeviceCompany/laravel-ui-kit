@php
    $links = [
        ['title' => __('Profile'),'url' => '/profile'],
    ];
@endphp

<div class="ml-3 relative" x-data="{ open: false }">
    <div>
        <button @click="open = true"
                type="button"
                class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                id="user-menu-button"
                aria-expanded="false"
                aria-haspopup="true">
            <span class="sr-only">@lang('Open user menu')</span>
            <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=User" alt="">
        </button>
    </div>

    <div x-show="open" @click.away="open = false" x-cloak
         class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu"
         aria-orientation="vertical"
         aria-labelledby="user-menu-button"
         tabindex="-1"
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
    >
        {{--
        <div class="px-4 py-2 border-b">
            <p class="text-sm">{{auth()->user()->name}}</p>
        </div>
        --}}

        @foreach($links as $link)
            <a href="{{$link['url']}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">
                {{$link['title']}}
            </a>
        @endforeach

        @if(\Illuminate\Support\Facades\Route::has('logout'))
            <x-form action="{{route('logout')}}">
                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700" tabindex="-1">
                    @lang('Sign out')
                </button>
            </x-form>
        @endif
    </div>
</div>
