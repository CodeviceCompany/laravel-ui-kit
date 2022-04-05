@php($hasError = isset($name) ? $errors?->getBag($bag)->has($name) : false)

<div {{$attributes->only(['class', 'x-show'])}}>
    @isset($label)
        <div class="flex justify-between">
            <label for="{{$for}}" class="block text-sm font-medium text-gray-700">{{$label}}</label>
            @isset($required)<span class="text-sm text-red-500">*</span>@endisset
        </div>
    @endisset

    <div @class([
        "mt-1" => isset($label),
        "rounded-md shadow-sm" => $hasError || isset($prefix) || isset($suffix),
        "flex" => isset($prefix) || isset($suffix),
        "relative" => $hasError
        ])>

        @isset($prefix)
            <div @class(["inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm whitespace-nowrap", $prefixClass])>
                {{$prefix}}
            </div>
        @endisset

        {{$slot}}

        @isset($suffix)
            <div class="inline-flex items-center px-3 rounded-r-md border border-l-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm whitespace-nowrap">
                {{$suffix}}
            </div>
        @endisset

        @if($hasError)
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <x-heroicon-s-exclamation-circle class="h-5 w-5 text-red-500" />
            </div>
        @endif
    </div>

    @isset($name)
        <x-error :field="$name" :bag="$bag" id="{{$for}}-error">
            <ul>
                @foreach ($component->messages($errors) as $error)
                    <li class="mt-2 text-sm text-red-600">{{ $error }}</li>
                @endforeach
            </ul>
        </x-error>
    @endisset

    @isset($hint)
        <p class="mt-2 text-sm text-gray-500" id="{{$for}}-description">{{$hint}}</p>
    @endisset
</div>
