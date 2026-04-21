<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center p-4 bg-[#FFF9F5]"> <div class="relative w-full max-w-[500px] p-10 bg-white rounded-[3rem] shadow-[0_30px_60px_rgba(219,39,119,0.2)] border-[3px] border-pink-200">
            
            <div class="text-center mb-8">
                <h2 class="text-3xl font-black tracking-[0.2em] text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-purple-600 uppercase">
                    REGISTRO
                </h2>
                <div class="w-20 h-[4px] bg-gradient-to-r from-pink-500 to-purple-500 mx-auto mt-3 rounded-full"></div>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-xs font-black text-gray-700 uppercase tracking-widest mb-1 ml-2">Nombre Completo</label>
                    <x-text-input id="name" 
                        class="w-full rounded-2xl px-6 py-3 text-sm text-black outline-none focus:ring-2 focus:ring-pink-400 transition-all shadow-inner" 
                        style="background-color: #fdf2f8; border: 2px solid #f9a8d4;"
                        type="text" name="name" :value="old('name')" required autofocus />
                </div>

                <div>
                    <label class="block text-xs font-black text-gray-700 uppercase tracking-widest mb-1 ml-2">Correo Electrónico</label>
                    <x-text-input id="email" 
                        class="w-full rounded-2xl px-6 py-3 text-sm text-black outline-none focus:ring-2 focus:ring-pink-400 transition-all shadow-inner" 
                        style="background-color: #fdf2f8; border: 2px solid #f9a8d4;"
                        type="email" name="email" :value="old('email')" required />
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-black text-gray-700 uppercase tracking-widest mb-1 ml-2">Contraseña</label>
                        <x-text-input id="password" 
                            class="w-full rounded-2xl px-6 py-3 text-sm text-black outline-none focus:ring-2 focus:ring-pink-400 transition-all shadow-inner" 
                            style="background-color: #fdf2f8; border: 2px solid #f9a8d4;"
                            type="password" name="password" required />
                    </div>
                    <div>
                        <label class="block text-xs font-black text-gray-700 uppercase tracking-widest mb-1 ml-2">Confirmar</label>
                        <x-text-input id="password_confirmation" 
                            class="w-full rounded-2xl px-6 py-3 text-sm text-black outline-none focus:ring-2 focus:ring-pink-400 transition-all shadow-inner" 
                            style="background-color: #fdf2f8; border: 2px solid #f9a8d4;"
                            type="password" name="password_confirmation" required />
                    </div>
                </div>

                <div class="pt-6">
                    <button type="submit" 
                            class="w-full py-5 bg-gradient-to-r from-pink-500 to-pink-600 hover:from-pink-600 hover:to-purple-600 text-white font-black text-base uppercase tracking-[0.3em] rounded-2xl transition-all shadow-[0_10px_20px_rgba(219,39,119,0.3)] active:scale-95">
                        Crear Cuenta
                    </button>
                </div>

                <div class="text-center mt-4">
                    <a class="text-xs font-black text-pink-600 hover:text-purple-700 transition uppercase tracking-widest underline decoration-2 underline-offset-4" href="{{ route('login') }}">
                        ¿Ya tienes cuenta? Inicia Sesión
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>