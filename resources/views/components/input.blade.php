@aware(['name' => $name, 'bag' => $bag, 'suffix' => false, 'prefix' => false, 'for' => null])

@php($id = $id ?? $for)

@php($hasError = isset($name) ? $errors?->getBag($bag)->has($name) : false)

<input
    type="{{$type}}"
    value="{{$value ?? $name ? old($name, $value) : ''}}"
    name="{{$name}}"
    @if($disabled) disabled @endif
    @class([
        "block w-full shadow-sm sm:text-sm rounded-md",
        "focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 focus:ring-2xl focus:ring-opacity-50" => !$hasError,
        "pr-10 border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500" => $hasError,
        "shadow-none z-10"=> $prefix || $suffix,
        "rounded-l-none"=> $prefix,
        "rounded-r-none"=> $suffix,
        "bg-gray-200" => $disabled,
        $attributes->get('class')
    ])
    autocomplete="false"
    {{$attributes->merge(['id' => $id])}}
>
