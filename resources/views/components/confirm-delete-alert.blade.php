@props([
    'event',
    'title' => '¿Quieres eliminar este elemento?',
    'text' => 'Esta acción no se puede deshacer!',
    'confirmButtonText' => 'Sí, elimínalo!',
    'cancelButtonText' => 'Cancelar',
])

@once
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @endpush
@endonce

@push('scripts')
    <script>
        Livewire.on('mostrarAlerta', id => {
            Swal.fire({
                title: @js($title),
                text: @js($text),
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#AC2C28',
                cancelButtonColor: '#5A4938',
                confirmButtonText: @js($confirmButtonText),
                cancelButtonText: @js($cancelButtonText)
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch(@js($event), {
                        id: id
                    });
                }
            })
        })

        Livewire.on('resultadoEliminacion', resultado => {
            if (resultado[0].success) {
                Swal.fire({
                    title: '¡Eliminado!',
                    text: resultado[0].message,
                    icon: 'success'
                });
            } else {
                Swal.fire({
                    title: 'Error',
                    text: resultado[0].message,
                    icon: 'error'
                });
            }
        });
    </script>
@endpush
