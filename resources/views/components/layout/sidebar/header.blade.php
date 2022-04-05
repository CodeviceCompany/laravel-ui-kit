<div class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-white shadow">
    <button @click="$dispatch('open-sidebar')" type="button"
            class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
        <span class="sr-only">@lang('Open sidebar')</span>
        <x-heroicon-o-menu-alt-2 class="h-6 w-6" />
    </button>
    <div class="flex-1 px-4 flex justify-between">
        <div class="flex-1 flex">
            <form class="w-full flex md:ml-0" action="#" method="GET">
                <label for="search-field" class="sr-only">@lang('Search')</label>
                <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                        <x-heroicon-s-search class="h-5 w-5" />
                    </div>
                    <input id="search-field"
                           class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent sm:text-sm"
                           placeholder="{{__('Search')}}" type="search" name="search">
                </div>
            </form>
        </div>
        <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <span class="sr-only">@lang('View notifications')</span>
                <x-heroicon-o-bell class="h-6 w-6" />
            </button>

            <x-ui-layout.sidebar.profile-dropdown />
        </div>
    </div>
</div>
