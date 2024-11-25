@props(['label', 'name', 'defaultValue' => ''])

@php
    $value = old($name, $defaultValue);
        $defaults = [
            'type' => 'text',
            'id' => $name,
            'name' => $name,
            'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full my-1',
            'value' => $value
        ];
@endphp
<x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }}>
</x-forms.field>
