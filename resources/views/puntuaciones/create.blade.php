<x-layouts.layout>
    <div class="flex justify-center items-center min-h-full bg-indigoDye">
        <form action="{{ route('puntuaciones.store') }}" method="POST">
            @csrf
            <div class="bg-lapisLazuli rounded-2xl p-5 w-full max-w-4xl">
                <div class="grid grid-cols-2 gap-4">
                    <!-- Campo puntuaciones -->
                    <div>
                        <x-input-label for="puntuacion" value="Puntuación"/>
                        <x-text-input id="puntuacion" class="block mt-1 w-full" type="text" name="puntuacion" value="{{ old('puntuacion') }}"/>
                        @error("puntuacion")
                            <div class="text-sm text-red-600">{{$message}}</div>
                        @enderror
                    </div>

                    <!-- Campo usuarios_id -->
                    <div>
                        <x-input-label for="usuarios_id" value="Usuario"/>
                        <select id="usuarios_id" name="usuarios_id" class="block mt-1 w-full dark:bg-gray-900">
                            @foreach($usuarios as $usuario)
                                <option value="{{ $usuario->id }}">
                                    {{ $usuario->usuario }} (ID: {{ $usuario->id }})
                                </option>
                            @endforeach
                        </select>

                        @error("usuarios_id")
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="mt-4 flex justify-end gap-2">
                    <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                    <a class="btn btn-sm btn-danger" href="{{ route('puntuaciones.index') }}">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</x-layouts.layout>
