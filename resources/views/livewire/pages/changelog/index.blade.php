<div class="bg-white py-10">
    <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
        <div class="animate__animated animate__bounceInDown flex w-full">
            <div class="justify-start">
                <h2 class="text-base/7 font-semibold text-primary">Atualizações</h2>
                <p class="mt-2 max-w-xl text-pretty text-4xl font-medium tracking-tight text-gray-950 sm:text-5xl">
                    Fique por dentro de nossas atualizações e lançamentos
                </p>
            </div>
            <div class="hidden lg:flex mx-auto justify-end">
                <img src="{{ asset('assets/svg/undraw_version_control_re_mg66.svg') }}" alt="Vários cursos"
                    class="w-96 h-60">
            </div>
        </div>
        <div class="mt-10 grid grid-cols-1 gap-4 sm:mt-16 lg:grid-cols-6 animate__animated animate__bounceInRight">
            @foreach ($changelogs as $changelog)
                <div class="relative lg:col-span-2">
                    <div class="absolute inset-px rounded-lg bg-white lg:rounded-bl-[2rem]"></div>
                    <div
                        class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-bl-[calc(2rem+1px)]">
                        <img class="h-80 object-cover object-left" src="{{ '/storage/' . $changelog->image }}"
                            alt="{{ $changelog->title }}">
                        <div class="p-10 pt-4">
                            <h3 class="text-sm/4 font-semibold text-primary">{{ $changelog->type }}</h3>
                            <p class="mt-2 text-lg/7 font-medium tracking-tight text-gray-950">{{ $changelog->title }}
                            </p>
                            <p class="mt-2 max-w-lg text-sm/6 text-gray-600">
                                {{ $changelog->description }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 lg:rounded-bl-[2rem]">
                    </div>
                </div>
            @endforeach
        </div>
        <div class="my-3">
            {{ $changelogs->links() }}
        </div>
    </div>
</div>
