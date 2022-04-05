@props(['icon' => null, 'href' => null, 'hideTextOnMobile' => false])


<x-ui-button :icon="$icon" :href="$href" :hide-text-on-mobile="$hideTextOnMobile" {{$attributes->merge(['class' => 'border-transparent bg-yellow-500 text-white hover:bg-yellow-600 focus:ring-yellow-400'])}}>
    {{$slot}}
</x-ui-button>
