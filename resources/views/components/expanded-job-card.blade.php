<x-card-box {{ $attributes->merge(['class' => 'grid grid-cols-7']) }}>
    <img src="https://via.placeholder.com/100" alt="Logo of job hosting company" class="rounded" />
    <div class="col-span-4">
        <p class="text-gray-500 font-bold">{{ $employment->employer->name }}</p>
        <p class="text-white text-2xl font-bold">{{ $employment->title }}</p>
    </div>
    <div class="col-span-2 justify-self-end">
        <p>TODO: tags here</p>
    </div>
    <div class="col-start-2 row-start-2 col-span-4">
        <p class="text-gray-500 text-sm font-bold">{{ $employment->salary }}</p>
    </div>
    <div class="col-span-2 row-start-2 justify-self-end">
        <x-skill-tag type="xs">Frontend</x-skill-tag>
        <x-skill-tag type="xs">Backend</x-skill-tag>
        <x-skill-tag type="xs">API</x-skill-tag>
    </div>
</x-card-box>