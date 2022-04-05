@props(['title', 'actions'])

<div class="mx-auto px-4 sm:px-6 md:px-8">
    <div class="md:flex md:items-center md:justify-between">
        <div class="flex-1 min-w-0">
            <h1 class="text-2xl font-semibold font-bold leading-7 text-gray-900 sm:truncate">{{$title}}</h1>
        </div>
        @isset($actions)<div class="mt-4 flex md:mt-0 md:ml-4">{!! $actions !!}</div>@endisset
    </div>
</div>
