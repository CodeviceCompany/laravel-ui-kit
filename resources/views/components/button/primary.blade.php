@props(['icon' => null, 'href' => null, 'hideTextOnMobile' => false])


<x-ui-button :icon="$icon" :href="$href" :hide-text-on-mobile="$hideTextOnMobile" {{$attributes->merge(['class' => 'border-transparent text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500'])}}>
    {{$slot}}
</x-ui-button>
