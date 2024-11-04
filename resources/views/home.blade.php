<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black">
    <nav class="flex justify-between text-white">
        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Pixel Positions Logo" />
        <ul class="flex gap-4 font-bold">
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Salaries</a></li>
            <li><a href="#">Companies</a></li>
        </ul>
        <div>
            <!-- TODO: a blue square -->
            <a href="#">Post a Job</a>
        </div>
    </nav>

    <div class="container mx-auto px-24">
        <section class="mt-16 text-center">
            <h1 class="text-4xl font-bold text-white">Let's Find You A Great Job</h1>
            <form action="">
                <input type="text" class="mt-8 bg-white/5 rounded-md border border-white/10 p-2 w-full max-w-2xl">
            </form>
        </section>
        <section class="mt-16">
            <x-bulleted-heading href="#">Top Jobs</x-bulleted-heading>
            <div class="grid grid-cols-3 gap-8">
                <x-compact-job-card></x-compact-job-card>
                <x-compact-job-card></x-compact-job-card>
                <x-compact-job-card></x-compact-job-card>
            </div>
        </section>
        <section class="mt-8">
            <x-bulleted-heading href="#">Tags</x-bulleted-heading>
            <div class="flex flex-wrap gap-x-2 gap-y-3">
                <x-skill-tag>Frontend</x-skill-tag>
                <x-skill-tag>Backend</x-skill-tag>
                <x-skill-tag>API</x-skill-tag>
                <x-skill-tag>Frontend</x-skill-tag>
                <x-skill-tag>Backend</x-skill-tag>
                <x-skill-tag>API</x-skill-tag>
                <x-skill-tag>Frontend</x-skill-tag>
                <x-skill-tag>Backend</x-skill-tag>
                <x-skill-tag>API</x-skill-tag>
                <x-skill-tag>Frontend</x-skill-tag>
                <x-skill-tag>Backend</x-skill-tag>
                <x-skill-tag>API</x-skill-tag>
                <x-skill-tag>Frontend</x-skill-tag>
                <x-skill-tag>Backend</x-skill-tag>
                <x-skill-tag>API</x-skill-tag>
                <x-skill-tag>Frontend</x-skill-tag>
                <x-skill-tag>Backend</x-skill-tag>
                <x-skill-tag>API</x-skill-tag>
            </div>
        </section>
        <section class="mt-8">
            <x-bulleted-heading href="#">Find Jobs</x-bulleted-heading>
            @foreach ($employments as $employment)
            <x-expanded-job-card :$employment class="mt-8"></x-expanded-job-card>
            @endforeach
        </section>
    </div>
</body>

</html>