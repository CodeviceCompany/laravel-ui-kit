@props(['icon' => null, 'href' => null, 'hideTextOnMobile' => false])


<x-ui-button :icon="$icon" :href="$href" :hide-text-on-mobile="$hideTextOnMobile" {{$attributes->merge(['class' => 'border-transparent bg-red-600 text-white hover:bg-red-700 focus:ring-red-500'])}}>
    {{$slot}}
</x-ui-button>
