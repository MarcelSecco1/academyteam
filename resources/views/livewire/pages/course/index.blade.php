<div class="bg-white py-10">
    <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-base/7 font-semibold text-primary">Cursos</h2>
        <p class="mt-2 max-w-xl text-pretty text-4xl font-medium tracking-tight text-gray-950 sm:text-5xl">
            Cursos disponíveis
        </p>
        <div class="flex flex-col items-start justify-start">
            {{-- <h1 class="text-primary text-4xl font-bold">Cursos</h1> --}}
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
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                <a href="{{ route('course.show', ['course' => $course->uuid]) }}" wire:navigate>
                                    <span class="absolute inset-0"></span>
                                    Curso de {{ $course->name }}

                                </a>
                            </h3>
                            <p class="mt-3 text-sm leading-6 text-gray-600">
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
                                    <p class="font-semibold text-gray-900">

                                        <span class="absolute inset-0"></span>
                                        {{ $course->minister->name }}

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
</div>
