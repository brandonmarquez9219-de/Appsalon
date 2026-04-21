<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center p-4 bg-[#FFF9F5]"> 
        <div class="relative w-full max-w-[450px] p-10 bg-white rounded-[3rem] shadow-[0_30px_60px_rgba(219,39,119,0.2)] border-[3px] border-pink-200">
            
            <div class="text-center mb-10">
                <h2 class="text-3xl font-black tracking-[0.2em] text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-purple-600 uppercase">
                    LOGIN
                </h2>
                <div class="w-20 h-[4px] bg-gradient-to-r from-pink-600 to-purple-500 mx-auto mt-3 rounded-full"></div>
            </div>

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div>
                    <label class="block text-xs font-black text-gray-700 uppercase tracking-widest mb-2 ml-2">
                        Correo Electrónico
                    </label>
                    <input 
                        type="email" 
                        name="email" 
                        value="{{ old('email') }}"
                        required
                        style="background-color: #fdf2f8; border: 2px solid #f9a8d4;"
                        class="w-full rounded-2xl px-6 py-4 text-sm text-black outline-none focus:ring-2 focus:ring-pink-400 transition-all shadow-inner"
                    >
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-pink-600 font-bold text-xs ml-2" />
                </div>

                <div>
                    <label class="block text-xs font-black text-gray-700 uppercase tracking-widest mb-2 ml-2">
                        Contraseña
                    </label>
                    <input 
                        type="password" 
                        name="password" 
                        required
                        style="background-color: #fdf2f8; border: 2px solid #f9a8d4;"
                        class="w-full rounded-2xl px-6 py-4 text-sm text-black outline-none focus:ring-2 focus:ring-pink-400 transition-all shadow-inner"
                    >
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-pink-600 font-bold text-xs ml-2" />
                </div>

                <div class="flex items-center justify-between text-xs px-2">
                    <label class="flex items-center text-gray-600 font-bold cursor-pointer">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded border-pink-300 text-pink-500 focus:ring-0 mr-2">
                        Recordarme
                    </label>
                    
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-pink-600 hover:text-purple-700 font-black underline transition-colors">
                            ¿Olvidaste tu clave?
                        </a>
                    @endif
                </div>

                <div class="pt-4">
                    <button type="submit" 
                            class="w-full py-5 bg-gradient-to-r from-pink-500 to-pink-600 hover:from-pink-600 hover:to-purple-600 text-white font-black text-base uppercase tracking-[0.3em] rounded-2xl transition-all shadow-[0_10px_20px_rgba(219,39,119,0.3)] active:scale-95">
                        INICIAR
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>