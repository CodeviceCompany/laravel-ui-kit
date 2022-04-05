@props(['title' => false])

@php($title = $title ? str($title)->append(' | ' . config('app.name')) : config('app.name'))

<x-html :title="$title" {{ $attributes->class('h-full')->merge(['x-data' => '']) }}>
    <x-slot name="head">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
        @stack('head')
    </x-slot>

    {{ $slot }}

    <script src="{{ mix('js/app.js') }}" defer></script>
    @stack('scripts')
</x-html>
