@extends('layout.app')

@section('title', 'Contact')

@section('content')
    <div class="space-y-10">
        <section aria-labelledby="contact-title">
            <h1 id="contact-title" class="text-3xl font-bold text-blue-700 dark:text-blue-400">Let's collaborate.</h1>

            <div class="mt-10 grid grid-cols-1 lg:grid-cols-12 gap-12">

                <form aria-label="Contact form" class="lg:col-span-7 space-y-6">
                    <div>
                        <label for="nameInput" class="block text-sm uppercase text-slate-600 dark:text-slate-400">What's your name?</label>
                        <input type="text" id="nameInput" name="name" placeholder="Enter your name" required autocomplete="name"
                            class="mt-2 w-full rounded-md border border-slate-300 dark:border-neutral-700 bg-white dark:bg-neutral-900 px-4 py-2.5 text-sm focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                    </div>

                    <div>
                        <label for="emailInput" class="block text-sm uppercase text-slate-600 dark:text-slate-400">Your email address</label>
                        <input type="email" id="emailInput" name="email" placeholder="Enter your email" required autocomplete="email"
                            class="mt-2 w-full rounded-md border border-slate-300 dark:border-neutral-700 bg-white dark:bg-neutral-900 px-4 py-2.5 text-sm focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                    </div>

                    <div>
                        <label for="messageInput" class="block text-sm uppercase text-slate-600 dark:text-slate-400">Tell me about your project...</label>
                        <textarea id="messageInput" name="message" rows="5" placeholder="Write your message here" required
                            class="mt-2 w-full rounded-md border border-slate-300 dark:border-neutral-700 bg-white dark:bg-neutral-900 px-4 py-2.5 text-sm focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600"></textarea>
                    </div>

                    <button type="submit"
                        class="py-3 px-8 text-sm uppercase rounded-md font-semibold text-white border border-blue-600 bg-blue-600 hover:bg-blue-700 transition-all">
                        Send Message
                    </button>
                </form>

                <div class="lg:col-span-4 lg:col-start-9 space-y-10">

                    <section aria-labelledby="direct-title">
                        <h2 id="direct-title" class="text-sm font-bold uppercase text-slate-600 dark:text-slate-400">Direct Contact</h2>
                        <address class="mt-4 space-y-2 not-italic text-lg">
                            <a href="mailto:elvina.angelina01@gmail.com" class="block hover:text-blue-700 dark:hover:text-blue-400 transition-all">
                                elvina.angelina01@gmail.com
                            </a>
                            <a href="https://wa.me/6289507333708" target="_blank" rel="noopener noreferrer"
                                class="block hover:text-blue-700 dark:hover:text-blue-400 transition-all">
                                +62-895-0733-3708
                            </a>
                        </address>
                    </section>

                    <section aria-labelledby="socials-title">
                        <h2 id="socials-title" class="text-sm font-bold uppercase text-slate-600 dark:text-slate-400">Socials</h2>
                        <ul class="mt-4 space-y-2 text-lg">
                            <li>
                                <a href="https://github.com/eangelina04-dev" target="_blank" rel="noopener noreferrer"
                                    class="hover:text-blue-700 dark:hover:text-blue-400 transition-all">GitHub</a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/elvina-angelina-42507a447/" target="_blank" rel="noopener noreferrer"
                                    class="hover:text-blue-700 dark:hover:text-blue-400 transition-all">LinkedIn</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/_elvinangelinaa/" target="_blank" rel="noopener noreferrer"
                                    class="hover:text-blue-700 dark:hover:text-blue-400 transition-all">Instagram</a>
                            </li>
                        </ul>
                    </section>

                </div>
            </div>
        </section>
@endsection