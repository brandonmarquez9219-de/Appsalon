<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestión de Servicios') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm rounded-2xl border border-gray-100">
                <div class="p-8">
                    <div class="mb-8 border-b border-gray-100 pb-4">
                        <h3 class="text-2xl font-bold text-gray-800">Registrar Nuevo Servicio</h3>
                        <p class="text-sm text-gray-500">Define los detalles del servicio que ofrecerás en tu salón.</p>
                    </div>

                    <form method="POST" action="{{ route('servicios.store') }}" class="space-y-6">
                        @csrf

                        <div class="relative">
                            <x-input-label for="nombre" :value="__('Nombre del Servicio')" class="font-medium text-gray-700" />
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-400 sm:text-sm">✂️</span>
                                </div>
                                <x-text-input id="nombre" name="nombre" type="text" 
                                    class="pl-10 block w-full border-gray-300 focus:border-pink-500 focus:ring-pink-500 rounded-lg" 
                                    placeholder="Ej. Corte de Barba Profesional" 
                                    required autofocus />
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('nombre')" />
                        </div>

                        <div>
                            <x-input-label for="precio" :value="__('Precio (COP)')" class="font-medium text-gray-700" />
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-400 sm:text-sm">$</span>
                                </div>
                                <x-text-input id="precio" name="precio" type="number" 
                                    class="pl-7 block w-full border-gray-300 focus:border-pink-500 focus:ring-pink-500 rounded-lg" 
                                    placeholder="0.00" 
                                    required />
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('precio')" />
                        </div>

                        <div class="flex items-center justify-end mt-8 pt-6 border-t border-gray-100 gap-6">
                            <a href="{{ route('servicios.index') }}" 
                               class="text-sm font-medium text-gray-500 hover:text-pink-600 transition-colors duration-200">
                                ← Volver a la lista
                            </a>
                            
                            <button type="submit" 
                                    class="inline-flex items-center px-6 py-3 bg-[#2DCE89] border border-transparent rounded-xl font-bold text-white uppercase tracking-widest hover:bg-[#26af74] active:bg-[#1f8c5d] focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-all duration-150 shadow-md hover:shadow-lg">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                {{ __('Guardar Servicio') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>