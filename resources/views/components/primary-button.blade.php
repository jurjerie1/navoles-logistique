<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn color-orange bg-primary']) }}>
    {{ $slot }}
</button>
