<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between pt-8 pb-4">
            <h2 class="font-extrabold text-4xl text-transparent bg-clip-text bg-gradient-to-r from-black-500 to-black-600 leading-tight tracking-tight">
                {{ __('Panel de Administración') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-[0_20px_50px_rgba(244,114,182,0.15)] sm:rounded-[3rem] p-12 border-2 border-pink-400">
                
                <div class="mb-12 border-l-[10px] border-pink-500 pl-8 py-2">
                    <h1 class="text-4xl font-black text-gray-900 tracking-tight">
                        ¡Hola, <span class="text-black-500">{{ Auth::user()->name }}</span>!
                    </h1>
                    <p class="text-gray-500 mt-2 text-xl font-medium">Gestiona los módulos principales del sistema desde aquí.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

                    <a href="{{ route('usuario.index') }}"
                       class="group relative flex items-center p-10 bg-white border-2 border-pink-100 rounded-[2.5rem] transition-all duration-500 hover:border-pink-500 hover:shadow-[0_15px_40px_rgba(244,114,182,0.2)] hover:-translate-y-2">
                        
                        <div class="p-6 bg-pink-50 text-pink-500 rounded-3xl group-hover:bg-pink-500 group-hover:text-white transition-all duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-10 h-10">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>
                        </div>
                        <div class="ml-8">
                            <h5 class="font-black text-gray-800 text-xl uppercase tracking-widest transition-colors group-hover:text-pink-600">
                                Gestión de Usuarios
                            </h5>
                        </div>
                    </a>

                    <a href="{{ route('servicios.index') }}"
                       class="group relative flex items-center p-10 bg-white border-2 border-pink-100 rounded-[2.5rem] transition-all duration-500 hover:border-pink-500 hover:shadow-[0_15px_40px_rgba(244,114,182,0.2)] hover:-translate-y-2">
                        
                        <div class="p-6 bg-pink-50 text-pink-500 rounded-3xl group-hover:bg-pink-500 group-hover:text-white transition-all duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-10 h-10">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.83-5.83m0 0a2.999 2.999 0 0 0-4.142-4.142m4.142 4.142-3.308 3.308m-4.734-4.734L3 3l5.83 5.83m0 0a2.999 2.999 0 0 1 4.142 4.142m-4.142-4.142 3.308 3.308m-3.308-3.308L3 17.25A2.652 2.652 0 0 0 6.75 21l5.83-5.83m-5.83-5.83 3.308-3.308m7.039 5.864L21 6.75A2.652 2.652 0 0 0 17.25 3l-5.83 5.83m5.83 5.83-3.308 3.308" />
                            </svg>
                        </div>
                        <div class="ml-8">
                            <h5 class="font-black text-gray-800 text-xl uppercase tracking-widest transition-colors group-hover:text-pink-600">
                                Gestión de Servicios
                            </h5>
                        </div>
                    </a>

                </div>
            </div> </div>
    </div>
</x-app-layout>