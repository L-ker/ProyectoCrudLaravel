<x-layouts.layout>
    @php
        $passDecrypted = \Illuminate\Support\Facades\Crypt::decryptString($usuario->password);
    @endphp
    <div class="flex justify-center items-center min-h-full bg-indigoDye">
        <form id="edit-form" action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="bg-lapisLazuli rounded-2xl p-5 w-full max-w-4xl">
                <div class="grid grid-cols-2 gap-4">
                    <!-- Campos del formulario -->
                    <div>
                        <x-input-label for="nombre" value="Nombre"/>
                        <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" value="{{ $usuario->nombre }}"/>
                        @error("nombre")
                            <div class="text-sm text-red-600">{{$message}}</div>
                        @enderror
                    </div>

                    <div>
                        <x-input-label for="usuario" value="Usuario"/>
                        <x-text-input id="usuario" class="block mt-1 w-full" type="text" name="usuario" value="{{ $usuario->usuario }}"/>
                        @error("usuario")
                            <div class="text-sm text-red-600">{{$message}}</div>
                        @enderror
                    </div>

                    <div>
                        <x-input-label for="email" value="Email"/>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $usuario->email }}" autofocus autocomplete="email"/>
                        @error("email")
                            <div class="text-sm text-red-600">{{$message}}</div>
                        @enderror
                    </div>

                    <div>
                        <x-input-label for="password" value="Contraseña"/>
                        <x-text-input id="password" class="block mt-1 w-full" type="text" name="password" value="{{ $passDecrypted }}"/>
                        @error("password")
                            <div class="text-sm text-red-600">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="mt-4 flex justify-end gap-2">
                    <button type="button" class="btn btn-sm btn-primary" onclick="confirmSubmit()">Guardar</button>
                    <a class="btn btn-sm btn-primary" href="{{ route('usuarios.index') }}">Cancelar</a>
                </div>
            </div>
        </form>
    </div>

    <script>
        function confirmSubmit() {
            Swal.fire({
                title: '¿Estás seguro?',
                text: '¿Deseas guardar los cambios en este usuario?',
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
