<x-app-layout pageTitle="Noticias">
<!-- LISTADO CON TODAS LAS NOTICIAS -->
    <div class=" mt-10 w-95p lg:w-4/5 mx-auto max-w-1300px  ">
        <h1 class="text-5xl mb-10">Noticias</h1>
        <x-noticias-public :noticias="$noticias" />
    </div>

</x-app-layout>
