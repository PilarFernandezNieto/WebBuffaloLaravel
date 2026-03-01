<x-app-layout pageTitle="Discografía">
    <div class="mt-10 w-95p lg:w-4/5 mx-auto max-w-1300px space-y-16">
        <h1 class="text-4xl font-medium">Discografía</h1>
        @foreach ($discos as $disco)
            <x-disco :disco="$disco" />
            @if (!$loop->last)
                <hr class="border-gray-200">
            @endif
        @endforeach
    </div>
</x-app-layout>
