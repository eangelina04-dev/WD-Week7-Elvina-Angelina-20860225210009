<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Elvina Angelina</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-white text-slate-900 dark:bg-neutral-900 dark:text-slate-50">

    <header class="flex py-2 px-4 md:px-8 bg-white border-b border-slate-300 dark:border-neutral-700 dark:bg-neutral-900 min-h-[68px] relative z-20">
        <div class="max-w-7xl mx-auto flex flex-wrap items-center gap-4 w-full">
            <a href="/" class="inline-block rounded font-bold text-lg">Elvina Angelina</a>

            <nav id="collapseMenu" tabindex="-1" aria-label="Main navigation"
                class="lg:ml-auto hidden lg:block max-lg:bg-white dark:max-lg:bg-neutral-900 max-lg:border-l max-lg:border-slate-300 dark:max-lg:border-neutral-700 max-lg:w-1/2 max-lg:fixed max-lg:top-0 max-lg:right-0 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto max-sm:w-full z-50 outline-none">

                <div class="py-2 px-4 flex justify-between items-center border-b border-slate-300 sticky top-0 bg-white dark:border-neutral-700 dark:bg-neutral-900 lg:hidden max-lg:min-h-[68px]">
                    <a href="/" class="inline-block rounded font-bold text-lg">Elvina Angelina</a>
                    <button type="button" aria-controls="collapseMenu" id="toggleClose" class="cursor-pointer rounded">
                        <span class="sr-only">Close main menu</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-slate-900 dark:fill-slate-50" aria-hidden="true" viewBox="0 0 329.269 329">
                            <path d="M194.8 164.77 323.013 36.555c8.343-8.34 8.343-21.825 0-30.164-8.34-8.34-21.825-8.34-30.164 0L164.633 134.605 36.422 6.391c-8.344-8.34-21.824-8.34-30.164 0-8.344 8.34-8.344 21.824 0 30.164l128.21 128.215L6.259 292.984c-8.344 8.34-8.344 21.825 0 30.164a21.27 21.27 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25l128.21-128.214 128.216 128.214a21.27 21.27 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25 8.343-8.34 8.343-21.824 0-30.164z"/>
                        </svg>
                    </button>
                </div>

                <ul class="flex flex-col gap-8 font-semibold text-sm lg:flex-row max-lg:p-6">
                    <li><a href="/" class="hover:text-blue-700 dark:hover:text-blue-400 rounded">Home</a></li>
                    <li><a href="/about" aria-current="page" class="text-blue-700 dark:text-blue-400 rounded">About</a></li>
                    <li><a href="/blog" class="hover:text-blue-700 dark:hover:text-blue-400 rounded">Blog</a></li>
                    <li><a href="/contact" class="hover:text-blue-700 dark:hover:text-blue-400 rounded">Contact</a></li>
                    <li><a href="/projects" class="hover:text-blue-700 dark:hover:text-blue-400 rounded">Projects</a></li>
                </ul>
            </nav>

            <button type="button" aria-controls="collapseMenu" aria-expanded="false" id="toggleOpen" class="cursor-pointer lg:hidden rounded ml-auto">
                <span class="sr-only">Open main menu</span>
                <svg class="size-7 fill-slate-900 dark:fill-slate-50" aria-hidden="true" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </header>

    <main class="flex-1 max-w-7xl mx-auto w-full p-6 space-y-12">

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

    </main>

    <footer class="bg-white dark:bg-neutral-900 border-t border-slate-300 dark:border-neutral-700 pt-12 pb-8 px-4 md:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                <section>
                    <h2 class="text-slate-900 dark:text-slate-50 font-semibold text-sm mb-6">Elvina Angelina</h2>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed max-w-sm">
                        Coded in Visual Studio Code by yours truly.
                        Built with Laravel Framework and Tailwind CSS.
                        All text is set in Inter typeface.
                    </p>
                </section>

                <nav aria-label="Footer navigation">
                    <h2 class="text-slate-900 dark:text-slate-50 font-semibold text-sm mb-6">Quick Links</h2>
                    <ul class="space-y-4 text-slate-600 dark:text-slate-400 text-sm">
                        <li><a href="/" class="hover:text-slate-900 dark:hover:text-slate-50 rounded transition-all">Home</a></li>
                        <li><a href="/about" class="hover:text-slate-900 dark:hover:text-slate-50 rounded transition-all">About</a></li>
                        <li><a href="/blog" class="hover:text-slate-900 dark:hover:text-slate-50 rounded transition-all">Blog</a></li>
                        <li><a href="/contact" class="hover:text-slate-900 dark:hover:text-slate-50 rounded transition-all">Contact</a></li>
                        <li><a href="/projects" class="hover:text-slate-900 dark:hover:text-slate-50 rounded transition-all">Projects</a></li>
                    </ul>
                </nav>

                <section>
                    <h2 class="text-slate-900 dark:text-slate-50 font-semibold text-sm mb-6">Social Media</h2>
                    <ul class="flex items-center gap-6 text-slate-600 dark:text-slate-400">
                        <li>
                            <a href="https://github.com/eangelina04-dev" target="_blank" rel="noopener noreferrer" class="hover:text-slate-900 dark:hover:text-slate-50 rounded transition-all">
                                <span class="sr-only">GitHub</span>
                                <svg class="size-6 fill-current" aria-hidden="true" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/elvina-angelina-42507a447/" target="_blank" rel="noopener noreferrer" class="hover:text-slate-900 dark:hover:text-slate-50 rounded transition-all">
                                <span class="sr-only">LinkedIn</span>
                                <svg class="size-6 fill-current" aria-hidden="true" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/_elvinangelinaa/" target="_blank" rel="noopener noreferrer" class="hover:text-slate-900 dark:hover:text-slate-50 rounded transition-all">
                                <span class="sr-only">Instagram</span>
                                <svg class="size-6 fill-current" aria-hidden="true" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </section>
            </div>

            <hr class="border-slate-300 dark:border-neutral-700 my-8" />

            <p class="text-slate-600 dark:text-slate-400 text-sm">© Elvina Angelina. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>