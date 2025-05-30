<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail porto</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('iyuz.png') }}">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .color-primary {
            color: #FFC500;
        }
    </style>
</head>

<body>

    @include('components.navbar')
    <section class="py-16 px-12 bg-gray-100">
        <div class="container">
            <div class="flex flex-col gap-4">
                <div class="w-full flex justify-center mb-8">
                    <img src="{{ $data->image }}" alt="{{ $data->title }}"
                        class="w-full md:w-1/2 h-auto rounded-lg shadow-lg">
                </div>
                <div class="w-full ">
                    <div class="text-head">
                        <h1 class="text-3xl font-bold mb-4">{{ $data->title }}</h1>
                        <p class="text-gray-600 mb-2">Category:
                            @if ($data->category == 'UI/UX Design')
                                <span class="font-semibold text-yellow-500">{{ $data->category }}</span>
                            @elseif ($data->category == 'Web Development')
                                <span class="font-semibold text-blue-500">{{ $data->category }}</span>
                            @elseif ($data->category == 'API')
                                <span class="font-semibold text-green-500">{{ $data->category }}</span>
                            @else
                                <span class="font-semibold text-gray-500">{{ $data->category }}</span>
                            @endif

                    </div>

                    <p class="text-gray-500 mb-4">Created at: {{ $data->created_at->format('d M Y') }}</p>
                    <div class="pt-4">
                        <p class="text-gray-500 mb-4 text-justify">{{ $data->description }}</p>
                    </div>
                    <div class="foot-container flex justify-end mt-4">
                        @if ($data->category == 'UI/UX Design')
                            <a href="{{ $data->link }}" target="_blank"><img src="{{ asset('dribble.png') }}"
                                    alt="Dribbble" class="w-full mr-2 mt-2 hover:shadow-xl rounded-lg"></a>
                        @elseif ($data->category == 'Web Development' || $data->category == 'API')
                            <a href="{{ $data->link }}" target="_blank"><img src="{{ asset('github.png') }}"
                                    alt="Github" class="w-full mr-2 mt-2 hover:shadow-xl rounded-lg"></a>
                        @else
                            <span class="text-gray-500">No link available</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.foooter')

</body>

</html>
