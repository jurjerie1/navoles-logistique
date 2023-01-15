@props(['value'])

<label {{ $attributes->merge(['class' => 'form-label color-orange']) }}>
    {{ $value ?? $slot }}
</label>
