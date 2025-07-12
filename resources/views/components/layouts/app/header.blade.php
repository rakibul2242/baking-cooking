<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
        <script src="https://kit.fontawesome.com/a1725e5cd6.js" crossorigin="anonymous"></script>
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800 fo">
        <flux:header container class="bg-white dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <a href="{{ route('home') }}" class="w-1/3 flex items-center space-x-2 rtl:space-x-reverse lg:ms-0 py-2" wire:navigate>
                  <img src="{{ asset('images/logo.png') }}"/>
            </a>

              <flux:spacer />

            <flux:navbar class="w-1/3 justify-center max-lg:hidden">
                <flux:navbar.item :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Courses') }}
                </flux:navbar.item>
                <flux:navbar.item href="#" wire:navigate>
                    {{ __('Recipes') }}
                </flux:navbar.item>
                <flux:navbar.item href="#" wire:navigate>
                    {{ __('About Us') }}
                </flux:navbar.item>
                <flux:navbar.item href="#" wire:navigate>
                    {{ __('Contact') }}
                </flux:navbar.item>
            </flux:navbar>

            <flux:spacer />
            
            <!-- Desktop User Menu -->
            <div class="hidden lg:flex justify-end lg:w-1/3">
                <flux:dropdown position="top" align="end">
                    <flux:profile
                        class="cursor-pointer"
                        :initials="auth()->user()->initials()"
                    />
    
                    <flux:menu>
                        <flux:menu.radio.group>
                            <div class="p-0 text-sm font-normal">
                                <div class="flex items-center gap-2 px-1_py-1.5 text-start text-sm">
                                    <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                        <span
                                            class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                        >
                                            {{ auth()->user()->initials() }}
                                        </span>
                                    </span>
    
                                    <div class="grid flex-1 text-start text-sm leading-tight">
                                        <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                        <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                    </div>
                                </div>
                            </div>
                        </flux:menu.radio.group>
    
                        <flux:menu.separator />
    
                        <flux:menu.radio.group>
                            <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                        </flux:menu.radio.group>
    
                        <flux:menu.separator />
    
                        <form method="POST" action="{{ route('logout') }}" class="w-full">
                            @csrf
                            <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                                {{ __('Log Out') }}
                            </flux:menu.item>
                        </form>
                    </flux:menu>
                </flux:dropdown>
            </div>
        </flux:header>

       <!-- Mobile Sidebar Navigation -->
<flux:sidebar stashable sticky class="lg:hidden border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 w-full max-w-sm">
    <!-- Sidebar Close Button -->
    <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

    <!-- Mobile Logo -->
    <a href="{{ route('home') }}" class="ms-1 flex items-center space-x-2 rtl:space-x-reverse px-4 py-4 pl-0" wire:navigate>
        <img src="{{ asset('images/logo.png') }}" class="h-8 w-auto" alt="Logo" />
    </a>

        <flux:menu.separator />
    <!-- Mobile Nav Links -->
    <flux:navlist variant="outline">
        <flux:navlist.group :heading="__('Navigation')">
            <flux:navlist.item icon="layout-grid" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </flux:navlist.item>
            <flux:navlist.item icon="book-open" href="#" wire:navigate>
                {{ __('Courses') }}
            </flux:navlist.item>
            <flux:navlist.item icon="fire" href="#" wire:navigate>
                {{ __('Recipes') }}
            </flux:navlist.item>
            <flux:navlist.item icon="users" href="#" wire:navigate>
                {{ __('About Us') }}
            </flux:navlist.item>
            <flux:navlist.item icon="envelope" href="#" wire:navigate>
                {{ __('Contact') }}
            </flux:navlist.item>
        </flux:navlist.group>


        <flux:menu.separator />
    <!-- Profile Section (Mobile) -->
    <div class="px-4 py-4 pl-0">
        <div class="flex items-center gap-3">
            <div class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-lg">
                <div class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                    {{ auth()->user()->initials() }}
                </div>
            </div>
            <div class="flex flex-col">
                <span class="font-semibold text-sm text-black dark:text-white">{{ auth()->user()->name }}</span>
                <span class="text-xs text-gray-600 dark:text-gray-400 truncate">{{ auth()->user()->email }}</span>
            </div>
        </div>
    </div>
        <!-- Settings and Logout -->
        <flux:navlist.group :heading="__('Account')">
            <flux:navlist.item icon="cog" :href="route('settings.profile')" wire:navigate>
                {{ __('Settings') }}
            </flux:navlist.item>
            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <flux:navlist.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                    {{ __('Log Out') }}
                </flux:navlist.item>
            </form>
        </flux:navlist.group>


    </flux:navlist>
</flux:sidebar>


        {{ $slot }}

        @fluxScripts
    </body>
</html>
