<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Navbar Responsive</title>
    <style>
        [x-cloak] {
            display: none !important;
        }

        .bg-primary {
            background-color: #3A3E4F;
        }
    </style>
</head>

<body class="bg-gray-100">

    <nav class="bg-white border-gray-200 dark:bg-gray-900" x-data="{ open: false }">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center ">
                <img src="{{ asset('iyuz.png') }}" alt="Iyuz Logo" class="w-12">
                <span class="text-2xl font-semibold whitespace-nowrap dark:text-white hidden md:block">Achmad
                    Fairuz</span>
                <span class="text-2xl font-semibold whitespace-nowrap dark:text-white block md:hidden">Fairuz</span>

            </a>


            <!-- Button untuk mobile -->
            <button @click="open = !open"
                class="md:hidden inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg  focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400  dark:focus:ring-gray-600">
                <span class="sr-only">Toggle Menu</span>
                <svg class="w-5 h-5" x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
                <svg class="w-5 h-5" x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 6L14 14M6 14L14 6" />
                </svg>
            </button>

            <!-- Menu Navigasi (Mobile & Desktop) -->
            <div :class="open ? 'block' : 'hidden md:block'" x-cloak class="w-full md:w-auto md:ml-auto">
                <ul
                    class="font-medium flex flex-col items-center md:flex-row md:justify-end p-4 md:p-0 mt-4 md:mt-0 border border-gray-100 md:border-0 rounded-lg md:rounded-none bg-gray-50 md:bg-transparent md:space-x-8 dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                    <li>
                        <a href="/"
                            class="hidden py-2 px-3 text-white bg-blue-700 rounded-md md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500">Home</a>
                    </li>
                    <li>
                        <a href="/#About"
                            class="block py-2 px-3 text-gray-900 rounded-md md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white dark:hover:text-white">About</a>
                    </li>
                    <li>
                        <a href="/#Project"
                            class="block py-2 px-3 text-gray-900 rounded-md md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white dark:hover:text-white">Project</a>
                    </li>
                    <li>
                        <a href="/#Skill"
                            class="block py-2 px-3 text-gray-900 rounded-md md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white dark:hover:text-white">Skill</a>
                    </li>

                    <a href="{{ asset('storage/CV_ACHMAD_FAIRUZ.pdf') }}" target="_blank"
                        class="w-full max-w-full md:w-auto text-center text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-300 rounded-md py-2 px-6">
                        Download CV
                    </a>


                </ul>
            </div>

        </div>
    </nav>

</body>

</html>
