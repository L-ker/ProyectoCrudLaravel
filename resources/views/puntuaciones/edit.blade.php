<x-layouts.layout>
    <div class="flex justify-center items-center min-h-full bg-indigoDye">
        <form id="edit-form" action="{{ route('puntuaciones.update', $puntuacion->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="bg-lapisLazuli rounded-2xl p-5 w-full max-w-4xl">
                <div class="grid grid-cols-2 gap-4">
                    <!-- Campos del formulario -->
                    <div>
                        <x-input-label for="puntuacion" value="puntuacion"/>
                        <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="puntuacion" value="{{ $puntuacion->puntuacion }}"/>
                        @error("puntuacion")
                            <div class="text-sm text-red-600">{{$message}}</div>
                        @enderror
                        </div>

                        <div>
                        <x-input-label for="usuarios_id" value="usuarios_id"/>
                        <select id="usuarios_id" name="usuarios_id" class="block mt-1 w-full dark:bg-gray-900">
                            @foreach($usuarios as $usuario)
                                <option value="{{ $usuario->id }}" 
                                    {{ $usuario->id == $puntuacion->usuarios_id ? 'selected' : '' }}>
                                    {{ $usuario->usuario }} (ID: {{ $usuario->id }})
                                </option>
                            @endforeach
                        </select>

                        @error("usuarios_id")
                            <div class="text-sm text-red-600">{{ $message }}</>
                        @enderror
                    </div>


                <div class="mt-4 flex justify-end gap-2">
                    <button type="button" class="btn btn-sm btn-primary" onclick="confirmSubmit()">Guardar</button>
                    <a class="btn btn-sm btn-primary" href="{{ route('puntuaciones.index') }}">Cancelar</a>
                </div>
            </div>
        </form>
    </div>

    <script>
        function confirmSubmit() {
            Swal.fire({
                title: '¿Estás seguro?',
                text: '¿Deseas guardar los cambios de esta puntuacion?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sí, guardar',
                cancelButtonText: 'Cancelar',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('edit-form').submit();
                }
            });
        }
    </script>
</x-layouts.layout>
