@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-coolGray-100 text-base font-medium text-coolGray-400 bg-coolGray-50
            focus:outline-none focus:text-coolGray-800 focus:bg-coolGray-100 focus:border-coolGray-800 transition
            duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-red-100 text-base font-medium text-amber-50 hover:text-amber-400
            hover:bg-amber-50 hover:border-amber-300 focus:outline-none focus:text-amber-400 focus:bg-amber-50
            focus:border-amber-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
