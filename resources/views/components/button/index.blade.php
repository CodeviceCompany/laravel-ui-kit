@props(['icon' => null, 'href' => null, 'hideTextOnMobile' => false])

@php($iconClasses = str()->of('h-5 w-5')->when($slot->isNotEmpty(), fn ($str) => $str->append($hideTextOnMobile ? ' ml-0 mr-0' : ' -ml-1 mr-2')->append(' md:-ml-1 md:mr-2')))

@php($buttonClass = ['inline-flex items-center py-2 shadow-sm font-medium rounded-md text-sm border focus:outline-none focus:ring-2 focus:ring-offset-2', $slot->isNotEmpty() ? 'md:px-4' : 'md:px-2', $hideTextOnMobile ? 'px-2.5' : 'px-4' ])

@isset($href)
    <a href="{{$href}}" {{$attributes->class($buttonClass)}} >
        @if($icon)
            <x-dynamic-component :component="$icon" class="{{$iconClasses}}" />
        @endif
        <div @class(['hidden md:block' => $hideTextOnMobile])>
            {{$slot}}
        </div>
    </a>
@else
    <button
        type="{{$attributes->get('type', 'button')}}" {{$attributes->class($buttonClass)}}>
        @if($icon)
            <x-dynamic-component :component="$icon" class="{{$iconClasses}}" />
        @endif()
        <div @class(['hidden md:block' => $hideTextOnMobile])>
            {{$slot}}
        </div>
    </button>
@endisset
