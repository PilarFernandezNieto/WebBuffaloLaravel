export function initializeTinyMCE(selector) {
    tinymce.init({
        selector: selector,
        plugins: 'link code lists',
        toolbar: 'undo redo | bold italic underline | bullist numlist | link code',
        language_url: '/js/langs/es.js',
        language: 'es',
        setup: function (editor) {
            editor.on('init', function () {
                editor.save();
            });
            editor.on('change', function (e) {
                if (typeof Livewire !== 'undefined') {
                    Livewire.emit('input', editor.id, editor.getContent());
                }
            });
        }
    });
}

