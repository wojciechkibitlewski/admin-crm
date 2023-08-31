@props(['for'])

@error($for)
    <div {{ $attributes->merge(['class' => 'mt-2 p-2 rounded bg-red-400']) }}>{{ $message }}</div>
@enderror
