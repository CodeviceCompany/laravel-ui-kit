@props(['icon' => null, 'href' => null, 'hideTextOnMobile' => false])


<x-ui-button :icon="$icon" :href="$href" :hide-text-on-mobile="$hideTextOnMobile" {{$attributes->merge(['class' => 'border-transparent bg-green-500 text-white hover:bg-green-600 focus:ring-green-400'])}}>
    {{$slot}}
</x-ui-button>
