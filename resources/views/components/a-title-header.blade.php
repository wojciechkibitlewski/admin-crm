@props([
    'title' => ""
])

<h1 {{ $attributes->merge(['class' => 'font-bold text-lg mt-6 md:mt-0']) }}>
    {{ $title }}
</h1>
