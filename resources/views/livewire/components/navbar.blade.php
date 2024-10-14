<div x-data="{ open: false }" x-cloak>
    <div>

        <!-- Off-canvas menu for mobile -->
        <div class="relative z-50 lg:hidden" role="dialog" aria-modal="true">
            <!-- Overlay -->
            <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-900/80" aria-hidden="true"></div>

            <!-- Sidebar -->
            <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
                x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                class="fixed inset-y-0 left-0 z-50 w-64 bg-white shadow-xl">

                <!-- Botão para fechar o menu -->
                <div class="absolute right-0 top-0 mt-4 mr-4">
                    <button @click="open = false" class="p-2 text-gray-600 hover:text-gray-900">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Conteúdo do Sidebar -->
                <div class="flex flex-col h-full py-6 px-4">
                    <a href="{{ route('home') }}" wire:navigate class="mb-6">
                        <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=white"
                            alt="Your Company">
                    </a>

                    <nav class="flex-1">
                        <ul role="list" class="space-y-2">
                            <li>
                                <!-- Current: "bg-primary text-white", Default: "text-primary hover:text-white hover:bg-primary" -->
                                <a href="{{ route('home') }}" wire:navigate
                                    class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6
                                    {{ request()->is('/') ? 'bg-primary text-white' : 'text-primary hover:text-white hover:bg-primary' }}">
                                    <svg class="h-6 w-6 shrink-0 {{ request()->is('/') ? 'text-white' : 'text-primary group-hover:text-white' }}"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true" data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    Início
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('course') }}" wire:navigate
                                    class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->is('cursos*') ? 'bg-primary text-white' : 'text-primary hover:text-white hover:bg-primary' }}">
                                    <svg class="h-6 w-6 shrink-0 {{ request()->is('cursos*') ? 'text-white' : 'text-primary group-hover:text-white' }}"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                    </svg>

                                    Cursos
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('team') }}" wire:navigate
                                    class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->is('time') ? 'bg-primary text-white' : 'text-primary hover:text-white hover:bg-primary' }}">
                                    <svg class="h-6 w-6 shrink-0 {{ request()->is('time') ? 'text-white' : 'text-primary group-hover:text-white' }}"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        data-slot="icon" fill="none">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                    </svg>
                                    Time
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('changelog') }}" wire:navigate
                                    class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->is('atualizacoes') ? 'bg-primary text-white' : 'text-primary hover:text-white hover:bg-primary' }}">
                                    <svg class="h-6 w-6 shrink-0 {{ request()->is('atualizacoes') ? 'text-white' : 'text-primary group-hover:text-white' }}"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 0 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46" />
                                    </svg>

                                    Atualizações
                                </a>
                            </li>
                            {{-- <li>
                                <a href="#"
                                    class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->is('suporte') ? 'bg-primary text-white' : 'text-primary hover:text-white hover:bg-primary' }}">
                                    <svg class="h-6 w-6 shrink-0 {{ request()->is('suporte') ? 'text-white' : 'text-primary group-hover:text-white' }}"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                    </svg>
                                    Suporte
                                </a>
                            </li> --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-white-600 px-6">
            <div class="flex h-16 shrink-0 items-center justify-center mt-5">
                <a href="{{ route('home') }}" wire:navigate>
                    <img class="text-center" src="{{ asset('assets/images/Full-A.png') }}" alt="Your Company"
                        height="150px" width="150px">
                </a>
            </div>
            <nav class="flex flex-1 flex-col">
                <ul role="list" class="flex flex-1 flex-col gap-y-7">
                    <li>
                        <ul role="list" class="-mx-2 space-y-1">
                            <li>
                                <!-- Current: "bg-primary text-white", Default: "text-primary hover:text-white hover:bg-primary" -->
                                <a href="{{ route('home') }}" wire:navigate
                                    class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6
                                    {{ request()->is('/') ? 'bg-primary text-white' : 'text-primary hover:text-white hover:bg-primary' }}">
                                    <svg class="h-6 w-6 shrink-0 {{ request()->is('/') ? 'text-white' : 'text-primary group-hover:text-white' }}"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true" data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    Início
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('course') }}" wire:navigate
                                    class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->is('cursos*') ? 'bg-primary text-white' : 'text-primary hover:text-white hover:bg-primary' }}">
                                    <svg class="h-6 w-6 shrink-0 {{ request()->is('cursos*') ? 'text-white' : 'text-primary group-hover:text-white' }}"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                    </svg>

                                    Cursos
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('team') }}" wire:navigate
                                    class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->is('time') ? 'bg-primary text-white' : 'text-primary hover:text-white hover:bg-primary' }}">
                                    <svg class="h-6 w-6 shrink-0 {{ request()->is('time') ? 'text-white' : 'text-primary group-hover:text-white' }}"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true" data-slot="icon" fill="none">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                    </svg>
                                    Time
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('changelog') }}" wire:navigate
                                    class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->is('atualizacoes') ? 'bg-primary text-white' : 'text-primary hover:text-white hover:bg-primary' }}">
                                    <svg class="h-6 w-6 shrink-0 {{ request()->is('atualizacoes') ? 'text-white' : 'text-primary group-hover:text-white' }}"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 0 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46" />
                                    </svg>

                                    Atualizações
                                </a>
                            </li>
                            {{-- <li>
                                <a href="#"
                                    class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->is('suporte') ? 'bg-primary text-white' : 'text-primary hover:text-white hover:bg-primary' }}">
                                    <svg class="h-6 w-6 shrink-0 {{ request()->is('suporte') ? 'text-white' : 'text-primary group-hover:text-white' }}"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                    </svg>
                                    Suporte
                                </a>
                            </li> --}}

                        </ul>
                    </li>
                    <li>
                        <div class="text-xs font-semibold leading-6 text-primary">
                            Principais cursos
                        </div>
                        <ul role="list" class="-mx-2 mt-2 space-y-1">
                            @foreach ($courses as $course)
                                <li>
                                    <!-- Current: "bg-primary text-white", Default: "text-primary hover:text-white hover:bg-primary" -->
                                    <a href="#"
                                        class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-primary hover:bg-primary hover:text-white">
                                        <span
                                            class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-verde bg-verde text-[0.625rem] font-medium text-white">
                                            {{ substr($course->name, 0, 1) }}
                                        </span>
                                        <span class="truncate">
                                            Curso de {{ $course->name }}
                                        </span>
                                    </a>
                                </li>
                            @endforeach


                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </div>

    <div class="sticky top-0 z-40 flex items-center gap-x-6 bg-primary px-4 py-4 shadow-sm sm:px-6 lg:hidden">
        <button @click="open = true" type="button" class="-m-2.5 p-2.5 text-primary lg:hidden">
            <span class="sr-only">Open sidebar</span>
            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
        <div class="flex-1 text-sm font-semibold leading-6 text-white">Dashboard</div>

    </div>
</div>
