<!-- <x-breadcrumb :paths="$currentPath" /> -->

<nav class="hidden lg:block ml-4">
<ol class="list-reset flex">
    <li>
        <a class="text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600"
        href="{{ route('dashboard') }}"> Dashboard</a>
    </li>
    @foreach ($paths as $path)
    <li>
        <span class="mx-2 text-neutral-500 dark:text-neutral-400">/</span>
    </li>
    <li class=" 
    {{ $loop->last ? 'active' : '' }}">
        <a 
        href="{{ url($path) }}"
        class="text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600"
        >
            {{ str_replace('-', ' ', $path) }}
        </a>
    </li>
    @endforeach
</ol>
</nav>