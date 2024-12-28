<x-app-layout pageTitle="Discografía">
    <!-- LISTADO CON TODAS LOS DISCOS -->
    <div class=" mt-10 w-95p lg:w-4/5 mx-auto max-w-1300px">
        <h1 class="text-5xl mb-10">Discografía</h1>
        @foreach ($discos as $disco)
            <x-disco :disco="$disco" />
        @endforeach
    </div>
</x-app-layout>
