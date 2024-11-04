<x-card-box>
    <p class="text-white text-sm">{{ $employment->employer->name }}</p>
    <p class="text-white text-2xl text-center font-bold m-4 group-hover:text-blue-800">{{ $employment->title }}</p>
    <p class="text-white text-center text-sm m-4">{{ $employment->schedule }} - From {{ $employment->salary }}</p>
    <div class="flex justify-between">
        <div class="flex gap-2 items-end">
            @foreach ($employment->tags as $tag)
            <x-skill-tag type="xs">{{ $tag->name }}</x-skill-tag>
            @endforeach
        </div>
        <img src="https://via.placeholder.com/42" alt="Logo of employment hosting company" class="rounded" />
    </div>
</x-card-box>