<x-layouts.app.header :title="$title ?? null">
    <flux:main class="mx-auto w-full h-full">
        {{ $slot }}
    </flux:main>
</x-layouts.app.header>
