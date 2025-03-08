<x-layouts.layout>
    <div class="flex justify-center items-center min-h-full bg-indigoDye">
        <div class="bg-lapisLazuli rounded-2xl p-5 w-full max-w-4xl">
            <h2 class="text-xl font-bold text-white mb-4 text-center">Detalles del Usuario</h2>

            <table class="w-full text-white border-collapse border border-gray-500">
                <tr>
                    <th class="border border-gray-500 p-2 text-left">Nombre</th>
                    <td class="border border-gray-500 p-2">{{ $usuario->nombre }}</td>
                </tr>
                <tr>
                    <th class="border border-gray-500 p-2 text-left">Usuario</th>
                    <td class="border border-gray-500 p-2">{{ $usuario->usuario }}</td>
                </tr>
                <tr>
                    <th class="border border-gray-500 p-2 text-left">Correo Electrónico</th>
                    <td class="border border-gray-500 p-2">{{ $usuario->email }}</td>
                </tr>
                <tr>
                    <th class="border border-gray-500 p-2 text-left">Fecha de Registro</th>
                    <td class="border border-gray-500 p-2">{{ $usuario->created_at->format('d/m/Y H:i') }}</td>
                </tr>
                <tr>
                    <th class="border border-gray-500 p-2 text-left">Puntuaciones</th>
                    <td class="border border-gray-500 p-2">
                        <select class="w-full bg-gray-800 text-white p-2 rounded">
                            @foreach($puntuaciones as $puntuacion)
                                <option>
                                    ID: {{ $puntuacion->id }} | Puntuación: {{ $puntuacion->puntuacion }}
                                </option>
                            @endforeach
                        </select>
                    </td>
                </tr>
            </table>

            <div class="mt-4 flex justify-end gap-2">
                <a href="{{ route('usuarios.index') }}" class="btn btn-sm btn-primary">Volver a la Lista</a>
            </div>
        </div>
    </div>
</x-layouts.layout>
