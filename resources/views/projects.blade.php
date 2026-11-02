@extends('layout.app')

@section('title', 'Projects')

@section('content')
    <div class="space-y-10">

    <section aria-labelledby="projects-title">
        <h1 id="projects-title" class="text-3xl font-bold text-blue-700 dark:text-blue-400">Projects</h1>
        <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">Things I have built lately</p>
    </section>

    <article aria-labelledby="project-1-title" class="border-t border-slate-300 dark:border-neutral-700 pt-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
            <img src="{{ asset('img/projects/star-wars-chronology.png') }}" alt="Home screen of the Star Wars Chronology app" loading="lazy" class="mx-auto max-h-[32rem] w-auto rounded-md shadow-lg">

            <div>
                <h2 id="project-1-title" class="text-2xl font-bold text-blue-700 dark:text-blue-400">Star Wars Chronology</h2>
                <p class="mt-1 text-sm text-slate-600 dark:text-slate-400">Visual Programming course project</p>

                <p class="mt-4 text-slate-600 dark:text-slate-400 leading-relaxed">
                    A guide to the chronology of the Star Wars films (Episode I to IX), organized by era.
                    Users can browse events in order, search by title or summary, filter by era, and save
                    their favorites. It has adaptive layouts for phones and tablets, plus dark and light themes.
                </p>

                <ul class="mt-4 flex flex-wrap gap-2">
                    <li class="px-3 py-1 text-sm rounded-full border border-slate-300 dark:border-neutral-700">Flutter</li>
                    <li class="px-3 py-1 text-sm rounded-full border border-slate-300 dark:border-neutral-700">Dart</li>
                </ul>

                <div class="mt-6 flex flex-wrap gap-4">
                    <a href="https://github.com/eangelina04-dev/VP-Star-Wars-Chronology-Elvina-Angelina-2086022510009" target="_blank" rel="noopener noreferrer"
                        class="py-2 px-5 text-sm rounded-md font-semibold text-white border border-blue-600 bg-blue-600 hover:bg-blue-700 transition-all">
                        View on GitHub
                    </a>
                    <a href="https://github.com/eangelina04-dev/VP-Star-Wars-Chronology-Elvina-Angelina-2086022510009/releases/tag/v1.0.0" target="_blank" rel="noopener noreferrer"
                        class="py-2 px-5 text-sm rounded-md font-semibold border border-slate-300 dark:border-neutral-700 hover:border-blue-600 hover:text-blue-700 dark:hover:text-blue-400 transition-all">
                        Download APK
                    </a>
                </div>
            </div>
        </div>
    </article>

@endsection