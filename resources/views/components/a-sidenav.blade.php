<nav {{ $attributes->merge(["class" => "fixed left-0 top-0 z-[2035] flex-none h-screen w-60 -translate-x-full overflow-x-hidden bg-white border-r border-black/10 dark:bg-black dark:text-white dark:border-white/30 md:data-[te-sidenav-hidden='false']:translate-x-0"]) }} >
{{ $slot }}
</nav>