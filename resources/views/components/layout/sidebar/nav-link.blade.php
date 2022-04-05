@props(['name', 'icon', 'href', 'isActive' => false, 'isMobile' => false])

<a href="{{$href}}" @class([
        "bg-gray-900 text-white" => $isActive,
        "text-gray-300 hover:bg-gray-700 hover:text-white" => !$isActive,
        "group flex items-center px-2 py-2 font-medium rounded-md",
        "text-sm"=> !$isMobile,
        "text-base"=> $isMobile,
])>
    @if($icon)<x-dynamic-component :component="$icon" class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" />@endif

    {{$name}}
</a>
