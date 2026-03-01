<x-app-layout pageTitle="La Banda">
    <div class="my-10 w-95p lg:w-4/5 max-w-1300px mx-auto">
        <h1 class="text-4xl font-medium mb-12">La banda ahora</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-10">
            <x-banda :musicos="$musicos" />
        </div>
    </div>
</x-app-layout>
