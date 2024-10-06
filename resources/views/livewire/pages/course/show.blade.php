<div>
    <div class="bg-white py-3">
        <div class="flex justify-center">
            <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-4xl text-primary text-center">Bem
                vindo ao
                Curso
                de
                {{ $course->name }}!!</h2>
        </div>

        <div class="mx-auto max-w-7xl px-3 lg:px-8 mt-10">
            <div class="mt-3 flex flex-col gap-x-8 gap-y-20 lg:flex-row">
                <div class="flex justify-center">
                    <img src="{{ '/storage/' . $course->image }}" alt="{{ $course->name }}"
                        class="rounded-2xl object-cover" width="200px" height="200px">
                </div>
                <div class="lg:w-full lg:max-w-2xl lg:flex-auto">
                    <p>
                        <x-badge text="{{ $course->minister->name }}" class="bg-primary text-white" />

                    </p>
                    <p class="text-base leading-7 text-gray-700">{{ $course->description }}</p>
                    <p class="space-y-5">
                        <x-badge text="{{ 'Horas: ' . round($lessonsTime / 60 / 60) }}" class="bg-primary text-white" />
                        <x-badge text="{{ 'Módulos: ' . $course->modules->count() }}" class="bg-primary text-white" />
                        <x-badge text="{{ 'Aulas: ' . $lessonsQuantity }}" class="bg-primary text-white " />
                        {{-- <x-badge text="{{ $course->minister->name }}" class="bg-primary text-white" /> --}}


                    </p>
                </div>

            </div>

        </div>
        <div class="flex justify-center my-10">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/gl0NyOVCG6s?si=a92EN2S8Yo9Ky-cx"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</div>
