@props(['title', 'actions' => null])

<x-ui-app class="bg-gray-100" :title="$title">
    <div x-data>
        <x-ui-layout.sidebar.nav />
        <div class="md:pl-64 flex flex-col">
            <x-ui-layout.sidebar.header />

            <main class="flex-1">
                <div class="py-6">
                    <x-ui-layout.sidebar.page-heading :title="$title" :actions="$actions" />
                    <div class="mx-auto px-4 sm:px-6 md:px-8 mt-6">
                        {{$slot}}
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-ui-app>
