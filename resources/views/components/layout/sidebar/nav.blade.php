@php
    $navigation = [
        // ['name' => __('Dashboard'), 'href' => route('dashboard.index'), 'icon' => 'heroicon-o-presentation-chart-line', 'isActive' => request()->routeIs('dashboard.index')],
    ];
@endphp

<div x-data="{ open: false }"
     @keydown.window.escape="open = false"
     @open-sidebar.window="open = true"
     @close-sidebar.window="open = false"
     @toggle-sidebar.window="open = !open"
>

    <div class="fixed inset-0 flex z-40 md:hidden"
         x-show="open"
         x-cloak
         x-ref="dialog"
         aria-modal="true"
    >
        <div x-show="open"
             x-cloak
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-gray-600 bg-opacity-75"
             @click="open = false"
             aria-hidden="true"></div>

        <div x-show="open"
             x-cloak
             x-transition:enter="transition ease-in-out duration-300 transform"
             x-transition:enter-start="-translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in-out duration-300 transform"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full"
             class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-gray-800"
        >
            <div x-show="open"
                 x-cloak
                 x-transition:enter="ease-in-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="ease-in-out duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="absolute top-0 right-0 -mr-12 pt-2"
            >
                <button type="button" @click="open = false"
                        class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="sr-only">@lang('Close sidebar')</span>
                    <x-heroicon-o-x class="h-6 w-6 text-white" />
                </button>
            </div>

            <div class="flex-shrink-0 flex items-center px-4">
                <span class="text-indigo-100 uppercase font-bold text-3xl tracking-wider leading-5">{{config('app.name')}}</span>
            </div>

            <div class="mt-5 flex-1 h-0 overflow-y-auto">
                <nav class="px-2 space-y-1">
                    @foreach($navigation as $item)
                        <x-ui-layout.sidebar.nav-link
                            :href="$item['href']"
                            :icon="$item['icon']"
                            :name="$item['name']"
                            :isActive="$item['isActive']"
                            is-mobile
                        />
                    @endforeach
                </nav>
            </div>
        </div>

        <div class="flex-shrink-0 w-14" aria-hidden="true">
            <!-- Dummy element to force sidebar to shrink to fit close icon -->
        </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex-1 flex flex-col min-h-0 bg-gray-800">
            <div class="flex items-center h-16 flex-shrink-0 px-4 bg-gray-900">
                <span class="text-indigo-100 uppercase font-bold text-3xl tracking-wider leading-5">{{config('app.name')}}</span>
            </div>

            <div class="flex-1 flex flex-col overflow-y-auto">
                <nav class="flex-1 px-2 py-4 space-y-1">

                    @foreach($navigation as $item)
                        <x-ui-layout.sidebar.nav-link
                            :href="$item['href']"
                            :icon="$item['icon']"
                            :name="$item['name']"
                            :isActive="$item['isActive']"
                        />
                    @endforeach

                </nav>
            </div>
        </div>
    </div>
</div>
