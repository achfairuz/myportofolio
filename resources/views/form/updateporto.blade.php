<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>

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


    <section>

        <form action="{{ route('project.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="container max-w-md mx-auto p-4 shadow-md bg-white mt-16 my-8">
                <h1 class="text-2xl font-semibold mb-4">Form Update Portofolio</h1>

                <div class="mb-3">
                    <label for="title" class="block mb-1 font-medium">Title:</label>
                    <input type="text" name="title" id="title"
                        class="w-full p-2 border border-gray-300 rounded-md" placeholder="Masukkan judul portofolio"
                        required value="{{ $data->title }}">
                </div>

                <div class="mb-3">
                    <label for="image" class="block mb-1 font-medium">Image (URL):</label>
                    <input type="text" name="image" id="image"
                        class="w-full p-2 border border-gray-300 rounded-md" placeholder="Masukkan URL gambar" required
                        value="{{ $data->image }}">
                </div>

                <div class="mb-3">
                    <label for="link" class="block mb-1 font-medium">Link:</label>
                    <input type="text" name="link" id="link"
                        class="w-full p-2 border border-gray-300 rounded-md" placeholder="Masukkan link portofolio"
                        required value="{{ $data->link }}">
                </div>

                <!-- Dropdown Category -->
                <div class="mb-3">
                    <label for="category" class="block mb-1 font-medium">Category:</label>
                    <select name="category" id="category" class="w-full p-2 border border-gray-300 rounded-md"
                        required>
                        <option value="" disabled>Pilih kategori</option>
                        <option value="Web Development" {{ $data->category == 'Web Development' ? 'selected' : '' }}>
                            Web Development
                        </option>
                        <option value="API" {{ $data->category == 'API' ? 'selected' : '' }}>API</option>
                        <option value="UI/UX Design" {{ $data->category == 'UI/UX Design' ? 'selected' : '' }}>UI/UX
                            Design</option>
                    </select>
                </div>

                <button class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 mt-4">Update</button>
            </div>

        </form>

    </section>

</body>

</html>
