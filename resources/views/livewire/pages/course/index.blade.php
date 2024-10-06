<div>
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-primary text-4xl font-bold">Cursos</h1>
        <div class="flex mt-10">
            <input type="text" name="search" id="search" placeholder="Pesquise por um curso..."
                wire:model.live="search"
                class="block w-full rounded-md border-0 py-2 pr-56 lg:pr-96 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 placeholder:w-60">
            <button
                class="ml-2 inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-primary hover:bg-primary-dark focus:outline-none focus:border-primary focus:ring-primary active:bg-primary-dark transition ease-in-out duration-150">
                Pesquisar
            </button>
        </div>
    </div>

    <div class="mt-14 space-y-20  lg:space-y-20">
        @if ($courses->isEmpty())
            <div class="flex flex-col items-center">
                <h1 class="text-gray-700 text-base font-bold">Nenhum curso encontrado</h1>
            </div>
        @endif

        @foreach ($courses as $course)
            <article class="relative isolate flex flex-col gap-8 lg:flex-row justify-center">
                <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
                    <img src="{{ '/storage/' . $course->image }}" alt=""
                        class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
                    <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                </div>
                <div>
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500">
                            {{ \Carbon\Carbon::parse($course->created_at)->format('M d, Y') }}
                        </time>
                        {{-- <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">

                        </a> --}}
                    </div>
                    <div class="group relative max-w-xl">
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            <a href="{{ route('course.show', ['course' => $course->uuid]) }}" wire:navigate>
                                <span class="absolute inset-0"></span>
                                Curso de {{ $course->name }}

                            </a>
                        </h3>
                        <p class="mt-5 text-sm leading-6 text-gray-600">
                            {{ $course->description }}
                        </p>
                    </div>
                    <div class="mt-6 flex border-t border-gray-900/5 pt-6">
                        <div class="relative flex items-center gap-x-4">
                            <img src="{{ '/storage/' . $course->minister->image }}" alt="{{ $course->minister->name }}"
                                class="h-10 w-10 rounded-full bg-gray-50">
                            <div class="text-sm leading-6">
                                <p class="text-sm text-gray-500">
                                    Ministrado por
                                </p>
                                <p class="font-semibold text-gray-900">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        {{ $course->minister->name }}
                                    </a>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
        {{ $courses->links() }}
    </div>
</div>
