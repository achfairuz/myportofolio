<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .color-primary {
            color: #FFC500;
        }
    </style>
</head>

<body>
    <x-navbar></x-navbar>
    <section>
        <div class="flex flex-col items-center justify-center  bg-gray-100 text-center px-8 py-28">
            <img src="{{ asset('404.png') }}" alt="404 Illustration" class="md:max-w-xl w-full" draggable="false">
            <p class="text-xl  text-blue-600 mt-4 font-bold">Oops! Halaman Tidak Ditemukan</p>
            <p class="text-gray-500 mt-2">Halaman yang Anda cari mungkin telah dihapus atau tidak tersedia.</p>

            <div class="mt-8">
                <a href="{{ url('/') }}"
                    class="px-6 py-3 text-white bg-blue-500 hover:bg-blue-600 rounded-lg shadow-md transition duration-300">
                    Kembali ke Beranda
                </a>
            </div>



        </div>
    </section>

    @include('components.foooter')
</body>

</html>
