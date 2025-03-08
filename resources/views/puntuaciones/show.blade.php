<x-layouts.layout>
    <div class="flex justify-center items-center min-h-full bg-indigoDye">
        <div class="bg-lapisLazuli rounded-2xl p-5 w-full max-w-4xl">
        <h2 class="text-xl font-bold text-white mb-4 text-center">Detalles de la puntuacion</h2>
            <table class="w-full text-white border-collapse border border-gray-500">
                <tr>
                    <th class="border border-gray-500 p-2 text-left">ID</th>
                    <td class="border border-gray-500 p-2">{{ $puntuacion->id }}</td>
                </tr>
                <tr>
                    <th class="border border-gray-500 p-2 text-left">Puntuación</th>
                    <td class="border border-gray-500 p-2">{{ $puntuacion->puntuacion }}</td>
                </tr>
                <tr>
                    <th class="border border-gray-500 p-2 text-left">Usuario ID</th>
                    <td class="border border-gray-500 p-2">{{ $puntuacion->usuarios_id }}</td>
                </tr>
                <tr>
                    <th class="border border-gray-500 p-2 text-left">Fecha de Registro</th>
                    <td class="border border-gray-500 p-2">{{ $puntuacion->created_at }}</td>
                </tr>
                <tr>
                    <th class="border border-gray-500 p-2 text-left">Usuario</th>
                    <td class="border border-gray-500 p-2">
                        <select class="block w-full dark:bg-gray-900 text-white p-2">
                            <option>Nombre: {{ $usuario->nombre }}</option>
                            <option>Usuario: {{ $usuario->usuario }}</option>
                            <option>Correo: {{ $usuario->email }}</option>
                            <option>Registrado: {{ $usuario->created_at->format('d/m/Y H:i') }}</option>
                        </select>
                    </td>
                </tr>
            </table>

            <div class="mt-4 flex justify-end gap-2">
                <a class="btn btn-sm btn-primary" href="{{ route('puntuaciones.index') }}">Volver</a>
            </div>
        </div>
    </div>
</x-layouts.layout>
