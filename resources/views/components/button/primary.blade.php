<x-ui-button :icon="$icon" :href="$href" :hideTextOnMobile="$hideTextOnMobile"  {{$attributes->merge(['class' => 'border-transparent text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500'])}}>
    {{$slot}}
</x-ui-button>
