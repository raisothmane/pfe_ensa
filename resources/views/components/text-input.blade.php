@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-orange-900 focus:border-orange-900 focus:ring-orange-900 rounded-md shadow-sm']) !!}>
