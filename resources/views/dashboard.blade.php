<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        @if (session('success'))
            <div x-data="{ show: true }" x-show="show"
                class="fixed top-4 right-0 transform mt-24 -translate-x-1/2 bg-green-500 text-white py-2 px-4 rounded shadow-lg"
                x-init="setTimeout(() => show = false, 3000)">
                {{ session('success') }}
            </div>
        @endif

        <section class="py-20 px-8" id="content">

            <div class="container-text flex flex-row justify-between py-12 px-8  gap-4">
                <h1 class="font-bold text-2xl text-blue-900 dark:text-white">Table Portofolio</h1>

                <a href="{{ route('forminsert') }}"><button
                        class="text-white bg-blue-600 hover:bg-blue-900 rounded-md py-2 px-6">Insert
                        Data</button></a>
            </div>
            <div class="overflow-x-auto px-8">
                <table class="w-full  border-collapse  border-gray-300 dark:borde-gray-100 dark:text-white">
                    <thead class="border-b ">
                        <tr class="font-medium opacity-70 text-center">
                            <th class="p-4 text-left w-16">NO</th>
                            <th class="p-4 text-left w-1/4">Title</th>
                            <th class="p-4 text-left w-1/4">Category</th>

                            <th class="p-4 text-left w-1/4">Image</th>
                            <th class="p-4 text-left w-1/4">Link</th>

                            <th class="p-4 text-center w-32">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($data->isEmpty())
                            <tr>
                                <td colspan="5" class="text-center p-6 text-gray-400 font-medium">
                                    Data Tidak Tersedia. Silahkan Insert Data Terlebih Dahulu!
                                </td>
                            </tr>
                        @else
                            @php $no = 1; @endphp
                            @foreach ($data as $dataporto)
                                <tr class="border-b">
                                    <td class="p-4 text-center">{{ $no++ }}</td>
                                    <td class="p-4 max-w-md break-words">
                                        <p>{{ $dataporto->title }}</p>
                                    </td>
                                    <td class="p-4 max-w-md">{{ $dataporto->category }}</td>


                                    <!-- Gambar Portofolio -->
                                    <td class="p-4">
                                        <img src="{{ $dataporto->image }}" alt="gambar"
                                            class="max-w-sm w-40 rounded-lg" draggable="false">
                                    </td>

                                    <!-- Link Portofolio -->
                                    <td class="p-4 max-w-sm break-words">
                                        <a href="{{ $dataporto->link }}" class="hover:underline text-blue-600"
                                            target="_blank">
                                            {{ $dataporto->link }}
                                        </a>
                                    </td>

                                    <td class="p-4 text-center">
                                        <!-- Tombol Edit -->
                                        <a href="{{ route('formedit', $dataporto->id) }}"
                                            class="text-blue-500 hover:underline">Edit</a>

                                        <!-- Tombol Hapus -->
                                        <form action="{{ route('project.destroy', $dataporto->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline"
                                                onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>

                </table>
            </div>


        </section>

    </div>
</x-app-layout>
