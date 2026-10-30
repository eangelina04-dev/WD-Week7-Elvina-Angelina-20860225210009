@extends('layout.app')

@section('title', 'Blog')

@section('content')
    <div class="space-y-10">
    <main class="flex-1 max-w-7xl mx-auto w-full p-6 space-y-12">

        <section aria-labelledby="blog-title">
            <h1 id="blog-title" class="text-3xl font-bold text-blue-700 dark:text-blue-400">Blog</h1>
            <p class="mt-2 text-lg text-slate-600 dark:text-slate-400">Stories and thoughts from my journey</p>
        </section>

        <article aria-labelledby="post-1-title" class="border-t border-slate-300 dark:border-neutral-700 pt-12">
            <h2 id="post-1-title" class="text-2xl font-bold text-blue-700 dark:text-blue-400">Why Did I Choose Informatics?</h2>
            <img src="{{ asset('img/blog/informatics.jpg') }}" alt="Foto tentang perjalananku belajar Informatika" loading="lazy"class="mt-6 w-full max-w-md aspect-video object-cover rounded-md shadow-lg">

            <div class="mt-4 space-y-4 text-slate-600 dark:text-slate-400 leading-relaxed">
                <p>
                    I believe nothing in this world happens by coincidence. Back in high school, I never imagined
                    that I would study Informatics. As a child, however, I was fascinated by robots. I still remember
                    how happy I was when I received one as a birthday gift, although I can't remember how old I was.
                </p>
                <p>
                    In high school, my dream was to become a doctor. Out of curiosity, I took the entrance test at UC
                    with no expectations at all. I thought, why not give it a try? To my surprise, I was accepted with
                    a UC scholarship to study Informatics.
                </p>
                <p>
                    At first, entering the world of Informatics was incredibly hard. Some of the lecture materials
                    were so long that they felt overwhelming. But by the end, I felt that maybe I was meant to be
                    here all along. It reminds me of a quote I love:
                </p>
            </div>

            <blockquote class="mt-4 border-l-4 border-blue-700 dark:border-blue-400 pl-4 italic text-slate-600 dark:text-slate-400">
                <p>Nec fatum finire te nec tribulatio potest</p>
                <p class="mt-1 text-sm not-italic">Neither fate nor hardship can stop you.</p>
            </blockquote>
        </article>

        <article aria-labelledby="post-2-title" class="border-t border-slate-300 dark:border-neutral-700 pt-12">
            <h2 id="post-2-title" class="text-2xl font-bold text-blue-700 dark:text-blue-400">Chinchillas Are Adorable Animals</h2>
            <img src="{{ asset('img/blog/chinchilla.jpg') }}" alt="Foto chinchilla" loading="lazy" class="mt-6 w-full max-w-md aspect-video object-cover rounded-md shadow-lg">

            <div class="mt-4 space-y-4 text-slate-600 dark:text-slate-400 leading-relaxed">
                <p>
                    Chinchillas are rodents, and I absolutely love them. First, they have big, wide ears and
                    the cutest body shape. They are also bigger than hamsters, but just as adorable.
                </p>
                <p>
                    What makes them even more unique is that they never bathe in water. Instead, they take
                    "baths" in volcanic ash, which keeps them clean.
                </p>
            </div>
        </article>

    <article aria-labelledby="post-3-title" class="border-t border-slate-300 dark:border-neutral-700 pt-12">
        <h2 id="post-3-title" class="text-2xl font-bold text-blue-700 dark:text-blue-400">My Organizational Experience at UC Makassar</h2>
        <img src="{{ asset('img/blog/organization.jpg') }}" alt="Foto organisasi" loading="lazy"class="mt-6 w-full max-w-md aspect-video object-cover rounded-md shadow-lg">

        <div class="mt-4 space-y-4 text-slate-600 dark:text-slate-400 leading-relaxed">
            <p>
                I have quite a lot of organizational experience, and it has given me both valuable lessons
                and a lot of exhaustion. On the bright side, my communication skills, which used to be very
                poor, have improved. On the other hand, it sometimes eats into my sleep.
            </p>
            <p>
                The best feeling is when an event is finally over. Then comes the evaluation meeting that scares me, after it's done, it
                brings another wave of relief, and before I know it, a new event begins. And so the cycle
                goes on.
            </p>
        </div>
    </article>
@endsection