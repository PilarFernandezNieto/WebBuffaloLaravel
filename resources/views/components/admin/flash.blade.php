@if (session()->has('mensaje'))
    <div class="mb-5 border-l-4 border-green-600 bg-green-50 text-green-700 font-bold text-sm p-3 rounded-sharp uppercase">
        {{ session('mensaje') }}
    </div>
@endif
