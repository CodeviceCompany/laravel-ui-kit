@props(['title' => false, 'description' => false, 'actions' => false])

<div {{$attributes}}>
    <div class="shadow sm:rounded-md">
        <div @class(["bg-white py-6 px-4 space-y-6 sm:p-6 sm:rounded-t-md", "sm:rounded-b-md" => !$actions])>
            @if($title || $description)
                <div>
                    @if($title)<h3 class="text-lg leading-6 font-medium text-gray-900">{{ $title }}</h3>@endif
                    @if($description)<p class="mt-1 text-sm text-gray-500">{{ $description }}</p>@endif
                </div>
            @endif

            {{ $slot }}
        </div>

        @if($actions)
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 sm:rounded-b-md">
                {{ $actions }}
            </div>
        @endif
    </div>
</div>
