@props(['icon' => null, 'href' => null, 'hideTextOnMobile' => false])


<x-ui-button :icon="$icon" :href="$href" :hide-text-on-mobile="$hideTextOnMobile" {{$attributes->merge(['class' => 'border-gray-300 text-gray-700 bg-white hover:bg-gray-50 focus:ring-indigo-500', 'type' => 'button'])}}>{{$slot}}</x-ui-button>
