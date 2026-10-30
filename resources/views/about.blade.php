@extends('layout.app')

@section('title', 'About')

@section('content')
    <div class="space-y-10">

        <section aria-labelledby="about-title" class="flex flex-col items-center gap-6 text-center md:flex-row md:text-left">
            <img src="{{ asset('img/profile.png') }}" alt="Foto profil Elvina Angelina"
                class="size-32 md:size-40 shrink-0 rounded-full object-cover shadow-lg">

            <div>
                <h1 id="about-title" class="text-3xl font-bold text-blue-700 dark:text-blue-400">Elvina Angelina</h1>
                <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">About me</p>
            </div>
        </section>

        <section aria-labelledby="intro-title" class="border-t border-slate-300 dark:border-neutral-700 pt-12">
            <h2 id="intro-title" class="text-2xl font-bold text-blue-700 dark:text-blue-400">Introduction</h2>
            <p class="mt-4 text-slate-600 dark:text-slate-400 leading-relaxed">
                I am an enthusiastic third semester student at UC Makassar, majoring in Informatics with a
                specialization in Application Development (AD). With a background in youth organizations,
                I have developed a strong sense of collaboration and practical organizational skills.
            </p>
        </section>

        <section aria-labelledby="education-title" class="border-t border-slate-300 dark:border-neutral-700 pt-12">
            <h2 id="education-title" class="text-2xl font-bold text-blue-700 dark:text-blue-400">Educational History</h2>

            <article class="mt-6">
                <h3 class="font-semibold">Zion Senior High School Makassar</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400">2022 - 2025 | Science Major</p>
                <ul class="mt-2 list-disc pl-5 space-y-1 text-slate-600 dark:text-slate-400">
                    <li>Gold Medalist in Achievement Smart Olympiad: Biology (2023)</li>
                    <li>Participants in the selection of manuscripts in the fields of mathematics, science and technology at Olimpiade Penelitian Siswa Indonesia (OPSI) (2024)</li>
                </ul>
            </article>

            <article class="mt-6">
                <h3 class="font-semibold">Ciputra Makassar School of Business</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400">2025 - Now | Informatics Major (Full Stack Application Development)</p>
            </article>
        </section>

        <section aria-labelledby="experience-title" class="border-t border-slate-300 dark:border-neutral-700 pt-12">
            <h2 id="experience-title" class="text-2xl font-bold text-blue-700 dark:text-blue-400">Internship and Organizational Experience</h2>

            <article class="mt-6">
                <h3 class="font-semibold">Internship at Zion Junior High School Makassar</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400">April 2025</p>
                <ul class="mt-2 list-disc pl-5 space-y-1 text-slate-600 dark:text-slate-400">
                    <li>Assisted with administration and sorting of books in the school library</li>
                    <li>Tasked with inputting diploma data for Zion Middle School students</li>
                    <li>Assisted in preparing Easter event gifts for students at Zion Middle School</li>
                </ul>
            </article>

            <article class="mt-6">
                <h3 class="font-semibold">Member of GAP (Generasi Anak Panah) in GUP Makassar</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400">December 2024 - Now</p>
                <ul class="mt-2 list-disc pl-5 space-y-1 text-slate-600 dark:text-slate-400">
                    <li>Member of the event division at "Kegiatan Bakti Sosial Panti Asuhan Titipan Kasih" (March 2025)</li>
                    <li>Secretary at the "Natal Youth Gereja Utusan Pantekosta 2025" (July 2025 - Now)</li>
                    <li>Member of Team Blessing GUP (Multimedia Team)</li>
                </ul>
            </article>

            <article class="mt-6">
                <h3 class="font-semibold">Informatics Student Union</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400">October 2025 - Now</p>
                <ul class="mt-2 list-disc pl-5 space-y-1 text-slate-600 dark:text-slate-400">
                    <li>Member of the event division (Class of '25/'26)</li>
                    <li>Secretary of the Informatics Student Union (Class of '26/'27)</li>
                </ul>
            </article>

            <article class="mt-6">
                <h3 class="font-semibold">Entrance 4.0</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400">November 2025 - June 2026</p>
                <ul class="mt-2 list-disc pl-5 space-y-1 text-slate-600 dark:text-slate-400">
                    <li>Member of event entrance division committee</li>
                </ul>
            </article>

            <article class="mt-6">
                <h3 class="font-semibold">O-week 2026</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400">December 2025 - September 2026</p>
                <ul class="mt-2 list-disc pl-5 space-y-1 text-slate-600 dark:text-slate-400">
                    <li>Member of rescue and health department</li>
                </ul>
            </article>
        </section>

        <section aria-labelledby="skills-title" class="border-t border-slate-300 dark:border-neutral-700 pt-12">
            <h2 id="skills-title" class="text-2xl font-bold text-blue-700 dark:text-blue-400">Skills</h2>

            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <div>
                    <h3 class="font-semibold">Soft Skills</h3>
                    <ul class="mt-2 list-disc pl-5 space-y-1 text-slate-600 dark:text-slate-400">
                        <li>Hard-Working</li>
                        <li>Responsible</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold">Management</h3>
                    <ul class="mt-2 list-disc pl-5 space-y-1 text-slate-600 dark:text-slate-400">
                        <li>Google Workspace</li>
                        <li>Notion</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold">Programming Languages</h3>
                    <ul class="mt-2 list-disc pl-5 space-y-1 text-slate-600 dark:text-slate-400">
                        <li>Python</li>
                        <li>Java</li>
                        <li>PHP</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold">Frameworks</h3>
                    <ul class="mt-2 list-disc pl-5 space-y-1 text-slate-600 dark:text-slate-400">
                        <li>Spring Boot</li>
                        <li>Flutter</li>
                        <li>Laravel</li>
                    </ul>
                </div>

            </div>
        </section>

    </div>
@endsection