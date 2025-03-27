@props(['project'])

<a href="{{ $project->link }}" class="block h-full" target="_blank">
    <div
        class="shadow-lg flex flex-col justify-between items-center p-4 w-full max-w-72 md:max-w-xs bg-white rounded-lg h-full border border-gray-200">
        <!-- Gambar -->
        <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-40 md:w-48 h-auto rounded-md object-cover"
            draggable="false">

        <!-- Text Container -->
        <div class="flex flex-col text-center md:text-start mt-3 flex-grow w-full">
            <h1 class="font-semibold text-lg leading-tight mb-4 break-words">
                {{ Str::words($project->title, 6, '...') }}
            </h1>

            <!-- "Github.com" atau "Dribbble.com" tetap di bawah -->
            <span class="text-sm font-light text-blue-600 hover:underline mt-auto">
                @if ($project->category == 'Web Development' || $project->category == 'API')
                    Github.com
                @elseif ($project->category == 'UI/UX Design')
                    Dribbble.com
                @endif
            </span>
        </div>
    </div>
</a>
