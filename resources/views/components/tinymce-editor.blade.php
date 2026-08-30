@props([
    'field',
    'height' => 'h-52',
])

<div wire:ignore>
    <textarea wire:model.defer="{{ $field }}" id="{{ $field }}"
        class="block w-full {{ $height }} bg-cream-field border border-rule-input rounded-sharp focus:border-oxide-focus focus:ring-oxide-focus"></textarea>
</div>

@push('scripts')
    <script>
        tinymce.init({
            selector: '#{{ $field }}',
            plugins: 'link code lists',
            toolbar: 'undo redo | bold italic underline | bullist numlist | outdent indent link code',
            language_url: '/js/langs/es.js',
            language: 'es',
            setup: function(editor) {
                editor.on('init change', function() {
                    editor.save();
                });
                editor.on('change', function(e) {
                    @this.set(@js($field), editor.getContent());
                });
            }
        });
    </script>
@endpush
