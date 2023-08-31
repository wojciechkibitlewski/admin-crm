@props([
    'type' => "text",
])
<input
    {{ $attributes->merge(['class' => 'block mt-2 w-full border-gray-300 rounded-md dark:text-black' ]) }}   
    type = {{$type}}
 />


