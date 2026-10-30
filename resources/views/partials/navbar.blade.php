<header class="flex py-2 px-4 md:px-8 bg-white border-b border-slate-300 dark:border-neutral-700 dark:bg-neutral-900 min-h-[68px] relative z-20">
    <div class="max-w-7xl mx-auto flex flex-wrap items-center gap-4 w-full">
        <a href="{{ route('home') }}" class="inline-block rounded font-bold text-lg">Elvina Angelina</a>

        <nav id="collapseMenu" tabindex="-1" aria-label="Main navigation"
            class="lg:ml-auto hidden lg:block max-lg:bg-white dark:max-lg:bg-neutral-900 max-lg:border-l max-lg:border-slate-300 dark:max-lg:border-neutral-700 max-lg:w-1/2 max-lg:fixed max-lg:top-0 max-lg:right-0 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto max-sm:w-full z-50 outline-none">

            <div class="py-2 px-4 flex justify-between items-center border-b border-slate-300 sticky top-0 bg-white dark:border-neutral-700 dark:bg-neutral-900 lg:hidden max-lg:min-h-[68px]">
                <a href="{{ route('home') }}" class="inline-block rounded font-bold text-lg">Elvina Angelina</a>
                <button type="button" aria-controls="collapseMenu" id="toggleClose" class="cursor-pointer rounded">
                    <span class="sr-only">Close main menu</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-slate-900 dark:fill-slate-50" aria-hidden="true" viewBox="0 0 329.269 329">
                        <path d="M194.8 164.77 323.013 36.555c8.343-8.34 8.343-21.825 0-30.164-8.34-8.34-21.825-8.34-30.164 0L164.633 134.605 36.422 6.391c-8.344-8.34-21.824-8.34-30.164 0-8.344 8.34-8.344 21.824 0 30.164l128.21 128.215L6.259 292.984c-8.344 8.34-8.344 21.825 0 30.164a21.27 21.27 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25l128.21-128.214 128.216 128.214a21.27 21.27 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25 8.343-8.34 8.343-21.824 0-30.164z"/>
                    </svg>
                </button>
            </div>

            <ul class="flex flex-col gap-8 font-semibold text-sm lg:flex-row max-lg:p-6">
                @foreach ($links as $route => $label)
                    <li>
                        <a href="{{ route($route) }}"
                           @if (request()->routeIs($route)) aria-current="page" @endif
                           @class([
                               'rounded',
                               'text-blue-700 dark:text-blue-400' => request()->routeIs($route),
                               'hover:text-blue-700 dark:hover:text-blue-400' => ! request()->routeIs($route),
                           ])>{{ $label }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>

        <button type="button" aria-controls="collapseMenu" aria-expanded="false" id="toggleOpen" class="cursor-pointer lg:hidden rounded ml-auto">
            <span class="sr-only">Open main menu</span>
            <svg class="size-7 fill-slate-900 dark:fill-slate-50" aria-hidden="true" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
</header>