<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iyus</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/iyuz.png') }}">
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
    <section class="relative bg-primary py-20 md:py-0  px-8 md:px-12 lg:pt-12">
        <div
            class="container md:py-20 lg:py-0  mx-auto flex flex-col md:flex-row items-center justify-between text-white md:gap-4 lg:gap-0">

            <!-- Bagian Kiri -->
            <div class="w-full md:w-1/3 text-center md:text-left  z-10 md:pl-8 ">
                <h1 class="text-8xl font-light md:text-6xl lg:text-8xl">HELLO</h1>
                <h2 class="text-4xl mt-2">I'm <span class="text-yellow-400 font-bold">Achmad Fairuz</span></h2>
                <div class="w-full  h-1 bg-yellow-400 my-3"></div>
                <p class="opacity-70 text-lg text-justify">
                    I am Achmad Fairuz, a Backend Developer and UI/UX Designer exploring technology. Currently studying
                    at UIN Maulana Malik Ibrahim Malang, I specialize in building efficient backend systems and
                    intuitive user interfaces.
                </p>
            </div>

            <!-- Foto dan Lingkaran -->
            <div class="relative w-full md:w-1/3 flex justify-center my-8 md:my-0">
                <div class="absolute bottom-0 md:w-132 h-132 bg-gray-900 rounded-full opacity-50">
                </div>

                <img src="{{ asset('Formal-removebg-preview 1.png') }}" alt="foto formal"
                    class="relative w-64 lg:w-88 object-contain " draggable="false">
            </div>

            <!-- Bagian Kanan -->
            <div class="w-full md:w-1/3 text-center md:text-left z-10 ">
                <h1 class="text-6xl text-start ml-6 md:ml-0 font-light text-yellow-400 mb-4">I'm a</h1>
                <ul class="text-xl text-start   lg:text-3xl space-y-2 mt-2 list-disc list-inside ml-20 md:ml-6">
                    <li>UI / UX Designer</li>
                    <li>Web Developer</li>
                </ul>
            </div>

        </div>
    </section>

    <style>
        @keyframes movelogo {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        .logo-container {
            position: relative;
            overflow: hidden;
            white-space: nowrap;
            width: 100%;
            height: 120px;
            /* Kurangi height agar tidak terlalu tinggi */
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-wrapper {
            display: flex;
            width: 200%;
            align-items: center;
            position: absolute;
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: nowrap;
            animation: movelogo 15s linear infinite;
            min-width: 100%;
        }

        .logo img {
            margin: 0 20px;
            height: auto;
            max-height: 80px;
            /* Ukuran gambar tetap proporsional */
            width: auto;
        }

        /* Mode Mobile */
        @media (max-width: 768px) {
            .logo-container {
                height: 90px;
                /* Sesuaikan ukuran agar tidak tabrakan */
            }

            .logo img {
                max-height: 50px;
                /* Kurangi ukuran gambar agar tidak tabrakan */
            }

            .logo {
                animation-duration: 18s;
                /* Memperlambat animasi di mobile */
            }
        }
    </style>

    <section id="ads" class="z-10">
        <div class="logo-container py-4">
            <div class="logo-wrapper">
                <div class="logo">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false"> <img
                        src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false"> <img
                        src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false"> <img
                        src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                    <img src="{{ asset('Dribbble-Logo-removebg-preview.png') }}" alt="Dribble" draggable="false">
                    <img src="{{ asset('Laravel-removebg-preview.png') }}" alt="Laravel" draggable="false">
                    <img src="{{ asset('images__1_-removebg-preview.png') }}" alt="Figma" draggable="false">
                </div>


            </div>
        </div>
    </section>



    <section id="About" class="relative py-20 md:py-40 px-16 overflow-hidden">
        <div class="flex flex-col md:flex-row justify-center items-center gap-16 md:gap-8 lg:gap-40 relative">
            <!-- Background lingkaran dekoratif -->
            <div
                class="absolute   sm:-left-72  -left-80  -top-72 md:-top-72  w-240 h-240 bg-gray-300 rounded-full  -z-10  ">
            </div>

            <!-- Gambar Ilustrasi -->
            <img src="{{ asset('11879356_High_five 1.png') }}" alt="illustration" class="w-64 md:w-80 z-10">

            <!-- Box Content -->
            <div class="max-w-xl flex flex-col space-y-4">


                <img src="{{ asset('iconPetik.png') }}" alt="Petik" class="w-12 h-10">

                <!-- Teks -->
                <p class=" text-black text-md md:text-lg leading-relaxed ml-8 text-justify">
                    I am Achmad Fairuz, a Backend Developer and UI/UX Designer passionate about technology and
                    innovation. Currently studying at UIN Maulana Malik Ibrahim Malang, I specialize in developing
                    efficient backend systems and designing intuitive, user-friendly interfaces. Beyond technology, I
                    love traveling and exploring new experiences, always eager to learn and try new things.
                </p>
            </div>
        </div>
    </section>



    <section id="Project" class="relative py-16 md:py-20 px-6 ">
        <div class="max-w-5xl mx-auto text-center">
            <div class="title mb-12">
                <h1 class="text-3xl font-bold text-gray-900 mb-2 ">My Recent Project</h1>
                <p class="opacity-80 max-w-3xl mx-auto">A collection of my latest projects developed with creativity
                    and
                    cutting-edge technology, covering UI/UX design, web development, and API integration. Each project
                    is designed to provide innovative, functional, and responsive solutions to suit user needs across
                    various digital platforms.</p>
            </div>


            <div x-data="{ activeTab: 'UI/UX' }" class="mt-6">
                <!-- Tombol Tab -->
                <div class="flex flex-wrap justify-center gap-2 md:gap-4">
                    <button @click="activeTab = 'UI/UX'" :class="{ 'bg-black text-white': activeTab === 'UI/UX' }"
                        class="px-4 py-2 border rounded-md w-full md:w-auto text-center">
                        UI/UX
                    </button>

                    <button @click="activeTab = 'WEB'" :class="{ 'bg-black text-white': activeTab === 'WEB' }"
                        class="px-4 py-2 border rounded-md w-full md:w-auto text-center">
                        WEB
                    </button>

                    <button @click="activeTab = 'API'" :class="{ 'bg-black text-white': activeTab === 'API' }"
                        class="px-4 py-2 border rounded-md w-full md:w-auto text-center">
                        API
                    </button>
                </div>

                <!-- Konten UI/UX -->
                <div x-show="activeTab === 'UI/UX'"
                    class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 justify-self-center">
                    @if ($data->where('category', 'UI/UX Design')->isEmpty())
                        <h1 class="col-span-full text-center text-lg font-semibold text-gray-500 py-6">
                            Tidak ada project yang sedang ditampilkan
                        </h1>
                    @else
                        @foreach ($data->where('category', 'UI/UX Design') as $project)
                            <x-card :project="$project" />
                        @endforeach
                    @endif
                </div>

                <!-- Konten WEB -->
                <div x-show="activeTab === 'WEB'"
                    class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 justify-self-center">
                    @if ($data->where('category', 'Web Development')->isEmpty())
                        <h1 class="col-span-full text-center text-lg font-semibold text-gray-500 py-6">
                            Tidak ada project yang sedang ditampilkan
                        </h1>
                    @else
                        @foreach ($data->where('category', 'Web Development') as $project)
                            <x-card :project="$project" />
                        @endforeach
                    @endif
                </div>

                <!-- Konten API -->
                <div x-show="activeTab === 'API'"
                    class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 justify-self-center">
                    @if ($data->where('category', 'API')->isEmpty())
                        <h1 class="col-span-full text-center text-lg font-semibold text-gray-500 py-6">
                            Tidak ada project yang sedang ditampilkan
                        </h1>
                    @else
                        @foreach ($data->where('category', 'API') as $project)
                            <x-card :project="$project" />
                        @endforeach
                    @endif
                </div>
            </div>




        </div>
    </section>


    @php
        $skills = [
            ['src' => 'download-html5-round-logo-icon-png-701751694771801xidtztxanv.png', 'alt' => 'HTML 5'],
            ['src' => 'logo-2582747_1280.png', 'alt' => 'CSS'],
            [
                'src' => 'js-javascript-round-logo-icon-png-7017516947717339mnyf7eumy-removebg-preview.png',
                'alt' => 'JavaScript',
            ],
            ['src' => 'php-rmvvbg.png', 'alt' => 'PHP'],
            ['src' => 'Laravel-Logo.wine.png', 'alt' => 'Laravel'],
            [
                'src' =>
                    'png-transparent-mysql-logo-mysql-database-web-development-computer-software-dolphin-marine-mammal-animals-text-thumbnail-removebg-preview.png',
                'alt' => 'MySql',
            ],
            ['src' => 'flutter5786.png', 'alt' => 'Flutter'],
        ];
    @endphp

    <section class="bg-primary  px-8 py-12 md:px-20 md:py-20" id="Skill">
        <div class="relative">
            <div class="title text-white max-w-4xl ">
                <h1 class="text-3xl md:text-4xl font-bold mb-4 ">My Skill</h1>
                <p class="opacity-80 ">Mastery of technology and design to create innovative, interactive and
                    user-friendly digital experiences. With a combination of creativity and technical expertise, I
                    design functional, aesthetic and responsive solutions, ensuring each project delivers maximum impact
                    to users.</p>
            </div>
            <div class="container-content flex flex-wrap text-white mt-12 gap-6">

                @foreach ($skills as $skill)
                    <div class="content flex flex-row items-center space-x-4 w-full max-w-sm p-4 ">
                        <div class="w-16 h-16 flex justify-center items-center bg-white rounded-full shadow-md">
                            <img src="{{ asset($skill['src']) }}" alt="{{ $skill['alt'] }}"
                                class="w-10 h-10  object-cover">
                        </div>
                        <h1 class="font-semibold text-2xl md:text-3xl">{{ $skill['alt'] }}</h1>
                    </div>
                @endforeach



            </div>
        </div>
    </section>


    @include('components.foooter')
</body>

</html>
