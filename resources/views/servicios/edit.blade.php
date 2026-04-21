<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestión de Catálogo') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="mb-6 flex items-center p-4 text-green-800 rounded-2xl bg-green-50 border border-green-100 shadow-sm" role="alert">
                    <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <div class="ml-3 text-sm font-medium">
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm rounded-2xl border border-gray-100">
                <div class="p-8">
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold text-gray-800">Editar Servicio</h3>
                        <p class="text-sm text-gray-500">Actualiza la información del servicio: <span class="font-semibold text-pink-500">{{ $servicio->nombre }}</span></p>
                    </div>

                    <form action="{{ route('servicios.update', $servicio->id) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-input-label for="nombre" :value="__('Nombre del Servicio')" class="font-medium text-gray-700" />
                            <x-text-input id="nombre" name="nombre" type="text" 
                                class="mt-1 block w-full border-gray-300 focus:border-pink-500 focus:ring-pink-500 rounded-lg shadow-sm" 
                                value="{{ old('nombre', $servicio->nombre) }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('nombre')" />
                        </div>

                        <div>
                            <x-input-label for="precio" :value="__('Precio (COP)')" class="font-medium text-gray-700" />
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">$</span>
                                </div>
                                <x-text-input id="precio" name="precio" type="number" 
                                    class="pl-7 block w-full border-gray-300 focus:border-pink-500 focus:ring-pink-500 rounded-lg shadow-sm" 
                                    value="{{ old('precio', $servicio->precio) }}" required />
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('precio')" />
                        </div>

                        <div>
                            <x-input-label for="descripcion" :value="__('Descripción o Detalles')" class="font-medium text-gray-700" />
                            <textarea id="descripcion" name="descripcion" rows="3"
                                class="mt-1 block w-full border-gray-300 focus:border-pink-500 focus:ring-pink-500 rounded-lg shadow-sm"
                                placeholder="Escribe una breve descripción del servicio...">{{ old('descripcion', $servicio->descripcion) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('descripcion')" />
                        </div>

                        <div class="flex items-center justify-end mt-8 pt-6 border-t border-gray-100 gap-4">
                            <a href="{{ route('servicios.index') }}" 
                               class="text-sm font-medium text-gray-500 hover:text-gray-700 transition-colors">
                                Cancelar cambios
                            </a>
                            
                            <button type="submit" 
                                    class="inline-flex items-center px-6 py-2.5 bg-emerald-500 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-emerald-600 active:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 transition-all shadow-md shadow-emerald-100">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                                {{ __('Actualizar Servicio') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>