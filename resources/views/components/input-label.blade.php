@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm']) }} style="color:#070952">
    {{ $value ?? $slot }}
</label>
