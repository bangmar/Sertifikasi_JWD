<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Beasiswa Kita') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite('resources/css/app.css')

</head>

<body class="font-rubik container mx-auto max-w-[2400px]">
    <header class="px-32 py-6 flex  transition-all duration-300 ease-in-out gap-20 z-30  w-full justify-between"
        id="main-header">
        <a href="{{route('index')}}" class="flex gap-2">
            <img src="{{ asset('storage/icon/logo.png' ) }}" alt="lampiran" class="mb-2" />
            <h1>BeasiswaKita</h1>
        </a>
        <nav class="flex gap-4 text-sm">
            <a class="text-sm hover:text-[#F53838] transition-all duration-300 ease-in-out" href="{{ route('create') }}"
                @if(request()->is('create')) style="font-weight: 500;" @endif>Daftar</a>
            <a class="text-sm hover:text-[#F53838] transition-all duration-300 ease-in-out" href="{{ route('result') }}"
                @if(request()->is('result')) style="font-weight: bold;" @endif>Hasil</a>
        </nav>

    </header>
    <main class="relative  ">
        <section class="min-h-[70vh]">
            {{$slot}}
        </section>
        <footer class="bg-[#F4F4F4] w-full px-20 pt-24 pb-6 left-0 z-10 flex flex-col justify-between items-center ">
            <section class="grid place-items-center">
                <img src="{{ asset('storage/icon/logo.png' ) }}" alt="lampiran" class="mb-2" />
                <h1 class="font-medium text-xl text-slate-800">Beasiswa Kita</h1>
                <p class="text-sm text-slate-500 mb-10">Penyedia jasa beasiswa untuk mempermudah akses pendidikan
                    perguruan
                    tinggi tanpa hambatan biaya</p>
                <p class="text-xs  text-[#F53838] ">
                    ©️ Made for Sertifikasi Kompetensi by <span class="font-bold">Mario Rudy silalahi</span>
                </p>
            </section>
        </footer>
    </main>
    <script>
        window.addEventListener('scroll', function() {
            var header = document.getElementById('main-header');
            var classesToAdd = ['sticky', 'bg-white' , "top-0", "!py-4","shadow-md" ];
    
            if (window.scrollY > 0) {
                classesToAdd.forEach(className => {
                    header.classList.add(className);
                });
            } else {
                classesToAdd.forEach(className => {
                    header.classList.remove(className);
                });
            }
        });
    </script>
</body>

</html>