<div>
    @if($title || $description || $actions)
        <div class="sm:flex sm:items-center">
            @if($title || $description)
                <div class="sm:flex-auto">
                    @if($title)<h1 class="text-xl font-semibold text-gray-900">{{ $title }}</h1>@endif
                    @if($description)<p @class(["text-sm text-gray-700", "mt-2" => $title])>{{ $description }}</p>@endif
                </div>
            @endif

            @if($actions)
                <div class="mt-4 sm:mt-0 sm:ml-auto sm:flex-none">
                    {{ $actions }}
                </div>
            @endif
        </div>
    @endif

    <div class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
        <table class="min-w-full divide-y divide-gray-300">
            @if($thead)
                <thead class="bg-gray-50">
                    {{ $thead }}
                </thead>
            @endif
            <tbody class="divide-y divide-gray-200 bg-white">
                {{ $slot }}
            </tbody>
        </table>
    </div>
</div>
