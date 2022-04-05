@props(['icon' => null, 'href' => null, 'hideTextOnMobile' => false])


<x-ui-button :icon="$icon" :href="$href" :hide-text-on-mobile="$hideTextOnMobile" {{$attributes->merge(['class' => 'border-transparent text-white disabled:bg-gray-600 bg-gray-800 hover:bg-gray-900 focus:ring-gray-700'])}}>
    {{$slot}}
</x-ui-button>
