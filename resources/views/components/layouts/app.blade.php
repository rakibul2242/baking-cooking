<x-layouts.app.header :title="$title ?? null">
    <flux:main class="mx-auto w-full h-full [:where(&)]:max-w-7xl flex">
        {{ $slot }}
    </flux:main>
</x-layouts.app.header>
