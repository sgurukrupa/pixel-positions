@props(['type' => 'sm'])

@php
$size_variant = match ($type) {
     'xs' => 'text-xs px-3 py-1',
     'sm' => 'text-sm px-4 py-1'
}
@endphp

<span class="bg-white/10 text-gray-300 rounded-full font-bold {{ $size_variant }}">{{ $slot }}</span>