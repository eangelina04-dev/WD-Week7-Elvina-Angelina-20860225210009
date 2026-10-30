@extends('layout.app')

@section('title', 'Home')

@section('content')
        <section aria-labelledby="home-title" class="py-12 text-center">
            <img src="{{ asset('img/axolotl.jpg') }}" alt="Foto axolotl"
                class="mx-auto size-40 rounded-full object-cover shadow-lg">

            <h1 id="home-title" class="mt-6 text-5xl font-bold">
                Elvina Angelina<span class="text-blue-700 dark:text-blue-400">.</span>
            </h1>

               <p class="mt-4 mx-auto max-w-xl text-lg text-slate-600 dark:text-slate-400">
                    Full-stack Developer. I build ideas from
                    <strong class="font-bold text-blue-700 dark:text-blue-400">nothing</strong>
                    into something <strong class="font-bold text-blue-700 dark:text-blue-400">meaningful.</strong>
                </p>

            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <a href="/projects"
                    class="py-2 px-5 text-sm rounded-md font-semibold text-white border border-blue-600 bg-blue-600 hover:bg-blue-700 transition-all">
                    View Projects
                </a>
                <a href="/contact"
                    class="py-2 px-5 text-sm rounded-md font-semibold border border-slate-300 dark:border-neutral-700 hover:border-blue-600 hover:text-blue-700 dark:hover:text-blue-400 transition-all">
                    Contact Me
                </a>
            </div>
        </section>

        <section aria-labelledby="about-title" class="py-12 text-center border-t border-slate-300 dark:border-neutral-700">
            <h2 id="about-title" class="text-2xl font-bold">About Me</h2>
            <p class="mt-4 mx-auto max-w-3xl text-slate-600 dark:text-slate-400 leading-relaxed">
                I am an Informatics student who is passionate about exploring ideas and concepts,
                and continuously learning the world of programming. Every project is a step forward. 
                Fun fact: I am obsessed with axolotls, chinchillas, and hamsters.
            </p>
        </section>

        <section aria-labelledby="gallery-title" class="py-12 border-t border-slate-300 dark:border-neutral-700">
            <h2 id="gallery-title" class="text-2xl font-bold text-center">Gallery</h2>

            @php
                $gallery = [
                    ['file' => '1.jpg',  'title' => 'NPLC Competition',       'desc' => 'National Programming Logic Competition experience.'],
                    ['file' => '2.jpg',  'title' => 'ISU 2026',         'desc' => 'After hours of meeting with coordinators.'],
                    ['file' => '3.jpg', 'title' => 'ISU 2025',       'desc' => 'Student Union meeting and collaboration.'],
                    ['file' => '4.jpg',  'title' => 'ENTRANCE 4.0',           'desc' => 'The first meeting of the event committee.'],
                    ['file' => '5.jpg',  'title' => 'Multimedia',      'desc' => 'Helping at the church.'],
                    ['file' => '6.jpg',  'title' => 'Rescue & Health Division', 'desc' => 'Serving in the health division for O-WEEK.'],
                    ['file' => '7.jpg',  'title' => 'Zion Internship',        'desc' => 'Library management and administration.'],
                    ['file' => '8.jpg',  'title' => 'Admin Days',             'desc' => 'The Internship team.'],
                    ['file' => '9.jpg',  'title' => 'Social Service',         'desc' => 'Charity event at Titipan Kasih Orphanage.'],
                    ['file' => '10.jpg',  'title' => 'Giving Back',            'desc' => 'Distributing goods to those in need.'],
                    ['file' => '11.jpg', 'title' => 'OPSI Research',          'desc' => 'Scientific research for student olympiad.'],
                    ['file' => '12.jpg', 'title' => 'Highschool days',           'desc' => 'Lab days.'],
                ];
            @endphp

            <ul class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($gallery as $item)
                    <li>
                        <figure class="h-full rounded-lg border border-slate-300 dark:border-neutral-700 overflow-hidden shadow-sm">
                            <a href="{{ asset('img/gallery/' . $item['file']) }}" target="_blank" rel="noopener noreferrer"
                                class="block overflow-hidden">
                                <img src="{{ asset('img/gallery/' . $item['file']) }}" alt="{{ $item['title'] }}" loading="lazy"
                                    class="w-full aspect-[4/3] object-cover hover:scale-105 transition-transform duration-300">
                            </a>
                            <figcaption class="p-4 text-center">
                                <h3 class="font-bold text-blue-700 dark:text-blue-400">{{ $item['title'] }}</h3>
                                <p class="mt-1 text-sm text-slate-600 dark:text-slate-400">{{ $item['desc'] }}</p>
                            </figcaption>
                        </figure>
                    </li>
                @endforeach
            </ul>
        </section>

@endsection