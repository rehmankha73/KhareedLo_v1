@props([
'disabled' => false,
'name' => '',
'type' => '',
])

<div class="">
    <label for="{{ $name }}" class="font-bold text-md text-gray-600">{{ ucwords($name) }}</label>
</div>
<div class="">
    <input
        {{ $disabled ? 'disabled' : '' }}
        {!! $attributes->merge(['class' => 'h-2 p-4 w-full mb-2 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}
        @error($name)
        {{ $attributes->class(['border-red-600' => true]) }}
        @enderror
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        placeholder="Please Enter Product Category Name">
    @error($name)
    <span class="text-red-600">{{ $message }}</span>
    @enderror
</div>
