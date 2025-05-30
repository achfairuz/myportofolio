@props(['project'])
<a href="{{ route('project.show', $project->slug) }}"
    class="block h-full hover:scale-105 transition-transform duration-300">
    <div class="shadow-lg flex flex-col justify-between items-center p-4 w-full max-w-72 md:max-w-xs bg-white rounded-lg h-full border border-gray-200"
        x-data>

        <!-- Gambar -->
        <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-40 md:w-48 h-auto rounded-md object-cover"
            draggable="false">

        <!-- Text Container -->
        <div class="flex flex-col text-center md:text-start mt-3 flex-grow w-full">
            <h1 class="font-semibold text-lg leading-tight mb-4 break-words">
                {{ Str::words($project->title, 6, '...') }}
            </h1>

            <!-- Link Kedua (dalam card, tapi tidak nested <a>) -->
            <span class="text-sm font-light text-blue-600 hover:underline mt-auto cursor-pointer"
                @click.stop="window.open('{{ $project->link }}', '_blank')">
                {{ parse_url($project->link, PHP_URL_HOST) }}
            </span>
        </div>
    </div>
</a>
