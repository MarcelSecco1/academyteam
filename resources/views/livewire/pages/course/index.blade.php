<div class="bg-white py-10">
    <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
        <div class="animate__animated animate__bounceInDown flex flex-col lg:flex-row w-full">
            <div class="flex-1">
                <h2 class="text-base/7 font-semibold text-primary">Cursos</h2>
                <p class="mt-2 max-w-xl text-pretty text-4xl font-medium tracking-tight text-gray-950 sm:text-5xl">
                    Cursos disponíveis
                </p>
                <div class="flex flex-row md:flex-col">
                    <div class="flex mt-10">
                        <div class="mt-2 flex rounded-md shadow-sm w-full">
                            <span
                                class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 px-3 text-gray-500 sm:text-sm">Curso
                                de </span>
                            <input type="text" name="company-website" id="company-website"
                                class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"
                                placeholder="Pesquise por um curso..." wire:model.live="search"
                                wire:keydown.enter="search" />
                        </div>

                    </div>
                </div>
            </div>
            <div class="hidden lg:flex flex-1 justify-end items-center">
                <img src="{{ asset('assets/svg/undraw_search_app_oso2.svg') }}" alt="Vários cursos"
                    class="w-80 h-60 lg:w-96 lg:h-60">
            </div>
        </div>


        <div class="mt-14 space-y-20  lg:space-y-20 animate__animated animate__bounceInRight">
            @if ($courses->isEmpty())
                <div class="flex flex-col">
                    <h1 class="text-gray-700 text-base font-bold">Nenhum curso encontrado</h1>
                </div>
            @endif

            @foreach ($courses as $course)
                <article class="relative isolate flex flex-col gap-8 lg:flex-row justify-start">
                    <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
                        <a href="{{ route('course.show', ['course' => $course->uuid]) }}" wire:navigate>
                            <img src="{{ '/storage/' . $course->image }}" alt=""
                                class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover" />
                            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        </a>
                    </div>
                    <div>
                        <div class="flex items-center gap-x-4 text-xs">
                            <time datetime="{{ $course->created_at }}" class="text-gray-500">
                                Lançado em
                                {{ \Carbon\Carbon::parse($course->created_at)->format('M d, Y') }}
                            </time>
                        </div>
                        <div class="group relative ">
                            <h3 class="mt-3 text-xl font-bold leading-6 text-gray-900 group-hover:text-gray-600">
                                <a href="{{ route('course.show', ['course' => $course->uuid]) }}" wire:navigate>
                                    <span class="absolute inset-0"></span>
                                    Curso de {{ $course->name }}

                                </a>
                            </h3>
                            <p class="mt-3 text-base leading-6 text-gray-600">
                                {{ $course->description }}
                            </p>
                        </div>
                        <div class="mt-6 flex border-t border-gray-900/5 pt-6">
                            <div class="relative flex items-center gap-x-4">
                                <x-avatar image="{{ '/storage/' . $course->minister->image }}" md />

                                <div class="text-sm leading-6">
                                    <p class="text-sm text-gray-500">
                                        Ministrado por
                                    </p>
                                    <p class="font-bold text-gray-900">

                                        <span class="absolute inset-0"></span>
                                        {{ $course->minister->name }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
            <div class="my-3">
                {{ $courses->links() }}
            </div>
        </div>
    </div>
</div>
