<x-app-layout pageTitle="La Banda">
    <div class=" my-10 w-95p lg:w-4/5 max-w-1300px mx-auto ">
        <h1 class="text-5xl mb-10">La banda ahora</h1>
        <div class="md:grid md:grid-cols-2 gap-8">
            <x-banda :musicos="$musicos" />
        </div>
    </div>
</x-app-layout>
