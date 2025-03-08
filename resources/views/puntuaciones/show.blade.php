<x-layouts.layout>
    <div class="flex justify-center items-center min-h-full bg-indigoDye">
        <div class="bg-lapisLazuli rounded-2xl p-5 w-full max-w-4xl">
        <h2 class="text-xl font-bold text-white mb-4 text-center">{{ __("detalles de la puntuacion") }}</h2>
            <table class="w-full text-white border-collapse border border-gray-500">
                <tr>
                    <th class="border border-gray-500 p-2 text-left">ID</th>
                    <td class="border border-gray-500 p-2">{{ $puntuacion->id }}</td>
                </tr>
                <tr>
                    <th class="border border-gray-500 p-2 text-left">{{ __("puntuacion") }}</th>
                    <td class="border border-gray-500 p-2">{{ $puntuacion->puntuacion }}</td>
                </tr>
                <tr>
                    <th class="border border-gray-500 p-2 text-left">{{ __("usuario") }} ID</th>
                    <td class="border border-gray-500 p-2">{{ $puntuacion->usuarios_id }}</td>
                </tr>
                <tr>
                    <th class="border border-gray-500 p-2 text-left">{{ __("fecha de registro") }}</th>
                    <td class="border border-gray-500 p-2">{{ $puntuacion->created_at }}</td>
                </tr>
                <tr>
                    <th class="border border-gray-500 p-2 text-left">{{ __("usuario") }}</th>
                    <td class="border border-gray-500 p-2">
                        <select class="block w-full dark:bg-gray-900 text-white p-2">
                            <option>{{ __("nombre") }}: {{ $usuario->nombre }}</option>
                            <option>{{ __("usuario") }}: {{ $usuario->usuario }}</option>
                            <option>{{ __("email") }}: {{ $usuario->email }}</option>
                            <option>{{ __("registrado") }}: {{ $usuario->created_at->format('d/m/Y H:i') }}</option>
                        </select>
                    </td>
                </tr>
            </table>

            <div class="mt-4 flex justify-end gap-2">
                <a class="btn btn-sm btn-primary" href="{{ route('puntuaciones.index') }}">{{ __("volver") }}</a>
            </div>
        </div>
    </div>
</x-layouts.layout>
