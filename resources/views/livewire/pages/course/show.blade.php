<div class="bg-white py-10">
    <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
        <div class="animate__animated animate__bounceInDown flex w-full">
            <div class="justify-start">
                <h2 class="text-base/7 font-semibold text-primary">Cursos / Curso de {{ $course->name }}</h2>
                <p class="mt-2 max-w-xl text-pretty text-4xl font-medium tracking-tight text-gray-950 sm:text-5xl">
                    Bem vindo ao Curso de {{ $course->name }}
                </p>
            </div>
            <div class="hidden lg:flex mx-auto justify-end">
                <img src="{{ asset('assets/svg/undraw_electricity_k2ft.svg') }}" alt="Vários cursos" class="w-96 h-52">
            </div>
        </div>

        <div class="flex justify-center lg:my-10 animate__animated animate__bounceInRight">
            <div class="flex justify-center flex-col lg:flex-row">
                <div class="flex justify-center my-10 lg:my-0">
                    <img src="{{ '/storage/' . $course->image }}" alt="{{ $course->name }}"
                        class="rounded-2xl object-cover" width="200px" height="200px" class="mx-auto">
                </div>

                <div class="lg:w-full mx-10 flex justify-start">
                    <p class="md:space-y-5">
                        <x-badge text="{{ $course->minister->name }}" class="bg-primary text-white" />
                    </p>
                    <p class="text-base leading-7 text-gray-700 lg:mt-5">{{ $course->description }}</p>
                    <p class="md:space-y-5">
                        <x-badge text="{{ 'Horas: ' . round($lessonsTime / 60 / 60) . 'h' }}"
                            class="bg-primary text-white" />
                        <x-badge text="{{ 'Módulos: ' . $course->modules->count() }}" class="bg-primary text-white" />
                        <x-badge text="{{ 'Aulas: ' . $lessonsQuantity }}" class="bg-primary text-white " />
                        {{-- <x-badge text="{{ $course->minister->name }}" class="bg-primary text-white" /> --}}
                    </p>
                </div>
            </div>
        </div>
        @if ($lessonShow)
            <div class="mt-10 animate__animated animate__bounceInRight">
                <div class="flex justify-start lg:mt-11">
                    <h2 class="text-3xl font-bold tracking-tight sm:text-2xl text-primary text-center">
                        {{ $lessonShow->name }}
                    </h2>
                </div>
            </div>
            <div class="flex justify-between flex-col lg:flex-row my-5 ">
                <div class="relative w-full h-64 lg:h-96 animate__animated animate__bounceInRight">
                    <iframe class="absolute top-0 left-0 w-full h-full rounded-2xl"
                        src="{{ "https://www.youtube.com/embed/{$lessonShow->video}" }}" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>

                <div x-data="{ openModule: null }"
                    class="space-y-4 w-full mt-5 lg:mt-0 lg:px-10 animate__animated animate__bounceInRight">
                    @foreach ($course->modules as $module)
                        <div class="border border-indigo-900 dark:border-gray-700 rounded-lg overflow-hidden">
                            <!-- Cabeçalho do Módulo -->
                            <button
                                @click="openModule === {{ $module->id }} ? openModule = null : openModule = {{ $module->id }}"
                                class="flex justify-between items-center w-full p-4 bg-primary dark:bg-gray-700 text-left text-white dark:text-gray-100 hover:bg-indigo-900 dark:hover:bg-gray-600 transition-colors">
                                <span class="font-medium">
                                    Módulo {{ $loop->iteration }} - {{ $module->name }}
                                </span>
                                <svg :class="{ 'rotate-180': openModule === {{ $module->id }} }"
                                    class="w-5 h-5 transition-transform" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <!-- Corpo do Módulo com as Aulas -->
                            <div x-show="openModule === {{ $module->id }}" x-collapse>
                                <div class="bg-gray-100 dark:bg-gray-800 p-4 space-y-2">
                                    @foreach ($module->lessons as $lesson)
                                        @if ($lesson->id == $lessonShow->id)
                                            <div
                                                class="flex justify-between items-center p-2 bg-primary dark:bg-gray-700 rounded-lg shadow cursor-pointer">
                                                <span class="text-white dark:text-gray-100">
                                                    {{ $lesson->name }}
                                                </span>
                                                <span class="text-white text-sm">
                                                    {{ $lesson->duration }}
                                                </span>
                                            </div>
                                        @else
                                            <div class="flex justify-between items-center p-2 bg-white dark:bg-gray-900 rounded-lg shadow cursor-pointer"
                                                wire:click="showLesson('{{ $lesson->uuid }}')">
                                                <span class="text-gray-700 dark:text-gray-200">
                                                    {{ $lesson->name }}
                                                </span>
                                                <span class="text-gray-500 dark:text-gray-400 text-sm">
                                                    {{ $lesson->duration }}
                                                </span>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>
