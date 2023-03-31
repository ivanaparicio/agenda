@props(['label' => '', 'type' => 'text'])

<div>
    @if ($label)
    <x-commons.label label="{{ $label }}"/>
    @endif
    
    <input {{ $attributes->merge(['class' => 'px-4 py-2 text-sm focus:outline-none rounded shadow border-slate-300']) }} 
    type="{{ $type }}"
    >
    
</div>