

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Studio Glamour</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-gray-800 min-h-screen" style="background: linear-gradient(135deg, #eef0a4 0%, #e4aee4 100%);">
    
    <header class="w-full bg-white/70 backdrop-blur-md shadow-sm sticky top-0 z-50 border-b border-pink-100">
        <div class="max-w-7xl mx-auto p-4 flex justify-between items-center">
            
            <div class="flex items-center gap-3">
    <div class="w-10 h-10 bg-pink-500 rounded-full flex items-center justify-center shadow-md">
        <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" class="w-5 h-5">
            <path d="M12 2l2.9 6.26L22 9.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 14.14l-5-4.87 7.1-1.01L12 2z"/>
        </svg>
    </div>

   <span class="font-black text-2xl tracking-[0.2em] uppercase">
    <span class="text-pink-500">Studio</span>
    <span class="text-black-500"> Glamour</span>
   </span>
</div>
            
            <div class="flex items-center gap-4">
                <a href="{{ route('login') }}" class="px-6 py-2 border-2 border-pink-500 text-pink-500 rounded-full font-bold hover:bg-pink-500 hover:text-white transition-all text-xs uppercase tracking-widest">
                    Iniciar Sesión
                </a>
                
                <a href="{{ route('register') }}" class="px-6 py-2 bg-pink-500 text-white rounded-full font-bold hover:bg-pink-600 transition-all text-xs uppercase tracking-widest shadow-lg shadow-pink-200">
                    Registrarse
                </a>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 py-16">
        <div class="relative overflow-hidden bg-white border-2 border-pink-600 rounded-[3rem] shadow-[0_25px_70px_-15px_rgba(219,39,119,0.15)] flex flex-col md:flex-row min-h-[450px]">
            
            <div class="relative z-20 w-full md:w-1/2 p-12 flex flex-col justify-center bg-white">
                <h1 class="text-5xl font-light mb-6 tracking-tight leading-none text-gray-800 uppercase">
                    Nuestros <span class="font-black text-pink-500">Servicios</span><br>
                    <span class="text-3xl tracking-[0.3em] text-black-400">Disponibles</span>
                </h1>
                
                <p class="text-black-500 text-lg leading-relaxed mb-8 font-medium">
                    La belleza comienza en el momento en que decides ser tú mismo. Explora nuestra carta de servicios exclusivos.
                </p>
                
                <div class="h-[3px] w-24 bg-pink-500 rounded-full"></div>
            </div>

            <div class="relative w-full md:w-1/2 h-64 md:h-auto overflow-hidden">
                <img src="https://images.unsplash.com/photo-1562322140-8baeececf3df?q=80&w=1000&auto=format&fit=crop" 
                     class="absolute inset-0 w-full h-full object-cover grayscale-[20%] hover:grayscale-0 transition-all duration-700" 
                     alt="Salon de Belleza">
                
                <div class="absolute inset-0 bg-gradient-to-r from-white via-transparent to-transparent md:block hidden"></div>
            </div>
        </div>
    </main>

    <section class="max-w-7xl mx-auto px-6 pb-24">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            
            @foreach($servicios as $servicio)

                @php
                    $imagenes = [
                        'corte de cabello' => 'https://images.unsplash.com/photo-1562322140-8baeececf3df',
                        'manicure' => 'https://images.unsplash.com/photo-1604654894610-df63bc536371',
                        'pedicure' => 'https://images.unsplash.com/photo-1519014816548-bf5fe059798b',
                         'tinte' => 'https://images.unsplash.com/photo-1600948836101-f9ffda59d250',
                        'peinado' => 'https://images.unsplash.com/photo-1560869713-7d0a29430803', // peinado profesional
                        'depilado de cejas' => 'https://images.unsplash.com/photo-1596462502278-27bfdc403348', // cejas
                    ];

                    $nombre = strtolower($servicio->nombre);
                    $imagen = $imagenes[$nombre] ?? 'https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9';
                @endphp

                <div class="bg-white rounded-[2.5rem] p-6 shadow-xl border border-pink-50 flex flex-col items-center text-center transform hover:-translate-y-3 transition-all duration-500 group">
                    
                    <!-- IMAGEN -->
                    <img src="{{ $imagen }}?auto=format&fit=crop&w=800&q=80" 
                         alt="{{ $servicio->nombre }}"
                         class="w-full h-48 object-cover rounded-2xl mb-6">

                    <!-- ICONO -->
                    <div class="w-12 h-12 bg-pink-50 rounded-full mb-6 flex items-center justify-center group-hover:bg-pink-500 transition-colors duration-500">
                        <div class="w-3 h-3 bg-pink-500 rounded-full group-hover:bg-white"></div>
                    </div>
                    
                    
                    <h3 class="text-xl font-bold text-gray-800 mb-3 uppercase tracking-widest">
                        {{ $servicio->nombre }}
                    </h3>
                    
                    <!-- PRECIO -->
                    <p class="text-3xl font-black text-pink-500 mb-8 tracking-tighter">
                        ${{ number_format($servicio->precio, 0, ',', '.') }}
                    </p>

                    <!-- BOTON -->
                    <a href="{{ route('register') }}" class="w-full py-4 bg-pink-500 text-white rounded-2xl font-black text-xs uppercase tracking-[0.2em] hover:bg-pink-600 transition-all shadow-lg shadow-pink-200">
                        Reservar Cita
                    </a>
                </div>

            @endforeach

        </div>
    </section>

</body>
</html>
