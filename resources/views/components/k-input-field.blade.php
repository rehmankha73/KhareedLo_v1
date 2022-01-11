@props([
'disabled' => false,
'name' => '',
'type' => '',
'placeholder' => '',
])

<input {{ $disabled ? 'disabled' : '' }}
       type="{{ $type }}"
       id="{{ $name }}"
       name="{{ $name }}"
       @if($placeholder)
       placeholder="{{ $placeholder }}"
       @endif
    {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}
/>

@error($name)
<span class="text-red-600">{{ $message }}</span>
@enderror
