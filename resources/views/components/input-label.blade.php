@props(['value'])

<label {{ $attributes->merge(['class' => 'block  text-sm text-orange-900 font-bold']) }}>
    {{ $value ?? $slot }}
</label>
