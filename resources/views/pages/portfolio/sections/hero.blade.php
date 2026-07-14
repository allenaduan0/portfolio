        <section id="home" class="grid-bg relative min-h-screen overflow-hidden pt-20">
            <div class="absolute left-[8%] top-32 size-72 rounded-full bg-violet/15 blur-[100px]"></div>
            <div class="absolute bottom-0 right-[8%] size-96 rounded-full bg-acid/10 blur-[120px]"></div>
            <div
                class="mx-auto grid min-h-[calc(100vh-5rem)] max-w-7xl items-center gap-16 px-5 py-16 lg:grid-cols-[1.08fr_.92fr] lg:px-10">
                <div class="relative z-10">
                    <div
                        class="mb-7 inline-flex items-center gap-3 rounded-full border border-white/10 bg-white/5 px-4 py-2 font-mono text-xs text-acid">
                        <span>&lt;hello-world /&gt;</span><span class="blink">_</span>
                    </div>
                    <h1
                        class="max-w-3xl text-5xl font-extrabold leading-[.95] tracking-[-.055em] sm:text-7xl xl:text-[5.7rem]">
                        Software with
                        <span class="relative text-acid">brains.<svg class="absolute -bottom-2 left-0 w-full"
                                viewBox="0 0 300 12" fill="none">
                                <path d="M2 9C82 2 209 2 298 8" stroke="currentColor" stroke-width="4"
                                    stroke-linecap="round" />
                            </svg></span><br />Design with soul.
                    </h1>
                    <p class="mt-8 max-w-xl text-lg leading-8 text-slate-400">
                        I'm Allen, a software engineer in Dubai. I turn complex
                        requirements into dependable digital products people actually
                        enjoy using.
                    </p>
                    <div class="mt-10 flex flex-wrap gap-3">
                        <a href="#experience"
                            class="group rounded-full bg-acid px-7 py-4 font-bold text-ink transition hover:-translate-y-1">Explore
                            my journey
                            <span class="inline-block transition group-hover:translate-x-1">→</span></a><a
                            href="mailto:business.allen.dev@gmail.com"
                            class="rounded-full border border-white/15 px-7 py-4 font-bold transition hover:border-acid hover:text-acid">Start
                            a project</a>
                    </div>
                    <div class="mt-12 flex items-center gap-4 font-mono text-xs text-slate-500">
                        <span class="h-px w-12 bg-white/20"></span><span>Based in Dubai · Building globally</span>
                    </div>
                </div>
                <div class="relative mx-auto w-full max-w-[520px] [perspective:1200px]">
                    <div class="orbit absolute -inset-10 rounded-full border border-dashed border-acid/25">
                        <span
                            class="absolute left-1/2 top-0 size-3 -translate-x-1/2 rounded-full bg-acid shadow-[0_0_20px_#b9ff38]"></span>
                    </div>
                    <div id="portrait"
                        class="portrait-wrap float relative rounded-[2.5rem] border border-white/15 bg-white/5 p-3 shadow-2xl shadow-black/50">
                        <div class="overflow-hidden rounded-[2rem]">
                            <img src="{{ asset('images/allen-cartoon-hero-glasses.png') }}"
                                alt="Cartoon portrait of Allen Christopher in a playful development studio"
                                class="portrait-img aspect-[4/5] w-full object-cover object-top" fetchpriority="high" />
                        </div>
                        <div
                            class="portrait-tag absolute -bottom-6 -left-5 rounded-2xl border border-white/15 bg-ink/90 p-4 shadow-glow backdrop-blur-xl">
                            <p class="font-mono text-[10px] uppercase tracking-[.2em] text-acid">
                                Current role
                            </p>
                            <p class="mt-1 font-bold">Software Engineer</p>
                            <p class="text-xs text-slate-500">Dubai · 2026—Now</p>
                        </div>
                        <div
                            class="portrait-tag absolute -right-5 top-8 rounded-xl border border-white/15 bg-ink/85 px-4 py-3 font-mono text-xs text-slate-300 backdrop-blur">
                            <span class="text-violet">const</span> ideas =
                            <span class="text-acid">ship()</span>;
                        </div>
                    </div>
                </div>
            </div>
        </section>
