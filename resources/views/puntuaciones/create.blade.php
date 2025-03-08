<x-layouts.layout>
    <div class="flex justify-center items-center min-h-full bg-indigoDye">
        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf
            <div class="bg-lapisLazuli rounded-2xl p-5 w-full max-w-4xl">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <x-input-label for="nombre" value="Nombre"/>
                        <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                                      value="{{ old('nombre') }}"/>
                        @error("nombre")
                        <div class="text-sm text-red-600">{{$message}}</div>
                        @enderror
                    </div>

                    <div>
                        <x-input-label for="usuario" value="Usuario"/>
                        <x-text-input id="usuario" class="block mt-1 w-full" type="text" name="usuario"
                                      value="{{ old('usuario') }}"/>
                        @error("usuario")
                        <div class="text-sm text-red-600">{{$message}}</div>
                        @enderror
                    </div>

                    <div>
                        <x-input-label for="email" value="Email"/>
                        <x-text-input id="email" class="block mt-1 w-full"
                                      type="email" name="email"
                                      value="{{ old('email') }}" autofocus autocomplete="email"/>
                        @error("email")
                        <div class="text-sm text-red-600">{{$message}}</div>
                        @enderror
                    </div>

                    <div>
                        <x-input-label for="password" value="Contraseña"/>
                        <x-text-input id="password" class="block mt-1 w-full" type="text" name="password"/>
                        @error("password")
                        <div class="text-sm text-red-600">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="mt-4 flex justify-end gap-2">
                    <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                    <a class="btn btn-sm btn-danger" href="{{ route('usuarios.index') }}">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</x-layouts.layout>
