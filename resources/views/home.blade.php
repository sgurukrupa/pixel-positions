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

    <div class="container mx-auto px-36">
        <section class="mt-16 text-center">
            <h1 class="text-4xl font-bold text-white">Let's Find You A Great Job</h1>
            <form action="">
                <input type="text" class="mt-8 bg-white/5 rounded-md border border-white/10 p-2 w-full max-w-2xl">
            </form>
        </section>
        <section class="mt-16">
            <x-bulleted-heading href="#">Featured Jobs</x-bulleted-heading>
            <div class="grid grid-cols-3 gap-8">
                @foreach ($employments as $employment)
                    @if ($employment->featured)
                        <x-compact-job-card :$employment></x-compact-job-card>
                    @endif
                @endforeach
            </div>
        </section>
        <section class="mt-8">
            <x-bulleted-heading href="#">Tags</x-bulleted-heading>
            <div class="flex flex-wrap gap-x-2 gap-y-3">
                @foreach ($tags as $tag)
                <x-skill-tag>{{ $tag->name }}</x-skill-tag>
                @endforeach
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