<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestión de Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    
                    <a href="{{ route('usuario.create') }}" class="px-6 py-4 bg-blue-700 text-white rounded hover:bg-blue-800">
                        Nuevo Usuario
                    </a>

                    <!-- Tabla de usuarios -->
                    <table class="table-auto w-full mt-4 border-collapse border border-gray-300">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Nombre</th>
                                <th class="border px-4 py-2">Correo</th>
                                <th class="border px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usuario)
                            <tr>
                                <td class="border px-4 py-2">{{ $usuario->name }}</td>
                                <td class="border px-4 py-2">{{ $usuario->email }}</td>
                                <td class="border px-4 py-2">

                                    

                                    <!-- Editar -->
                                    <a href="{{ route('usuario.edit', $usuario->id) }}" class="text-blue-500 hover:underline mr-2">
                                        Editar
                                    </a>

                                    <!-- Eliminar -->
                                    <form action="{{ route('usuario.destroy', $usuario->id) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('¿Eliminar este usuario?')" class="text-red-500 hover:underline">
                                            Eliminar
                                        </button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>