<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de Administración') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50/50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="mb-6 flex items-center p-4 text-emerald-800 rounded-2xl bg-emerald-50 border border-emerald-100 shadow-sm animate-fade-in-down" role="alert">
                    <div class="flex-shrink-0 bg-emerald-100 p-2 rounded-lg">
                        <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="ml-3 text-sm font-semibold">
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-3xl border border-gray-100 p-8">
                
                <div class="mb-10 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                    <div>
                        <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight">Servicios Disponibles</h3>
                        <p class="text-gray-500 mt-1">Gestiona el catálogo de <span class="text-pink-500 font-semibold">Studio Glamour</span></p>
                    </div>
                    
                    <a href="{{ route('servicios.create') }}" 
                       class="group inline-flex items-center px-6 py-3 bg-[#2DCE89] text-white rounded-2xl font-bold text-sm uppercase tracking-wider hover:bg-[#26af74] transition-all duration-300 shadow-lg shadow-green-100 active:scale-95">
                        <svg class="w-5 h-5 mr-2 transform group-hover:rotate-90 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4" />
                        </svg>
                        Nuevo Servicio
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full border-separate" style="border-spacing: 0 15px;">
                        <thead>
                            <tr class="text-gray-400">
                                <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-[0.2em]">Servicio</th>
                                <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-[0.2em]">Precio</th>
                                <th class="px-6 py-3 text-center text-xs font-bold uppercase tracking-[0.2em]">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($servicios as $servicio)
                                <tr class="group transition-all duration-300">
                                    <td class="px-6 py-5 bg-white border-y border-l border-gray-100 rounded-l-2xl shadow-[0_4px_6px_-1px_rgba(0,0,0,0.02)] group-hover:border-pink-200 group-hover:bg-pink-50/30 transition-colors">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 bg-pink-100 rounded-xl flex items-center justify-center text-pink-500 font-bold mr-4 group-hover:scale-110 transition-transform">
                                                {{ substr($servicio->nombre, 0, 1) }}
                                            </div>
                                            <span class="font-bold text-gray-800 text-base">{{ $servicio->nombre }}</span>
                                        </div>
                                    </td>
                                    
                                    <td class="px-6 py-5 bg-white border-y border-gray-100 shadow-[0_4px_6px_-1px_rgba(0,0,0,0.02)] group-hover:border-pink-200 group-hover:bg-pink-50/30 transition-colors">
                                        <div class="flex items-center">
                                            <span class="text-emerald-500 font-extrabold text-lg mr-1">$</span>
                                            <span class="text-gray-700 font-bold text-lg">{{ number_format($servicio->precio, 0, ',', '.') }}</span>
                                        </div>
                                    </td>
                                    
                                    <td class="px-6 py-5 bg-white border-y border-r border-gray-100 rounded-r-2xl shadow-[0_4px_6px_-1px_rgba(0,0,0,0.02)] group-hover:border-pink-200 group-hover:bg-pink-50/30 transition-colors">
                                        <div class="flex justify-center items-center gap-3">
                                            
                                            <a href="{{ route('servicios.edit', $servicio->id) }}" 
                                               class="px-4 py-2 bg-emerald-50 text-emerald-700 rounded-xl text-xs font-black tracking-widest hover:bg-emerald-600 hover:text-white transition-all duration-300 shadow-sm uppercase">
                                                {{ __('Editar') }}
                                            </a>

                                            <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="px-4 py-2 bg-rose-50 text-rose-700 rounded-xl text-xs font-black tracking-widest hover:bg-rose-600 hover:text-white transition-all duration-300 shadow-sm uppercase"
                                                        onclick="return confirm('¿Eliminar el servicio: {{ $servicio->nombre }}?')">
                                                    {{ __('Eliminar') }}
                                                </button>
                                            </form>
                                            
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @if($servicios->isEmpty())
                    <div class="text-center py-20 bg-gray-50/50 rounded-3xl border-2 border-dashed border-gray-200 mt-4">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-gray-100 text-gray-400 rounded-full mb-4">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-800">No hay servicios</h4>
                        <p class="text-gray-500 max-w-xs mx-auto mt-2">Aún no hay nada registrado.</p>
                        <a href="{{ route('servicios.create') }}" class="mt-6 inline-block text-pink-500 font-bold hover:text-pink-600 transition-colors">
                            Crea el primero aquí →
                        </a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>