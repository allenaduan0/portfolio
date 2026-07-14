    <header class="fixed inset-x-0 top-0 z-50 border-b border-white/10 bg-ink/75 backdrop-blur-xl">
        <nav class="mx-auto flex h-20 max-w-7xl items-center justify-between px-5 lg:px-10"
            aria-label="Main navigation">
            <a href="#home" class="group flex items-center gap-3" aria-label="ACCA — allenaduan.com home">
                <svg class="h-11 w-14 overflow-visible" viewBox="0 0 72 52" role="img" aria-label="ACCA logo">
                    <path
                        d="M8 40 20 10l12 30M13 29h14M40 13c-11-8-20 1-20 13s9 20 20 13M64 13c-11-8-20 1-20 13s9 20 20 13M48 40l12-30 8 20M54 29h11"
                        fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round"
                        stroke-linejoin="round" class="transition group-hover:stroke-[#b9ff38]" />
                    <circle cx="68" cy="40" r="3" fill="#b9ff38" />
                </svg>
                <span class="flex flex-col leading-none"><span
                        class="font-mono text-[10px] tracking-[.28em] text-acid">ACCA</span><span
                        class="mt-1 font-mono text-base font-medium">allenaduan<span
                            class="text-acid">.com</span></span></span>
            </a>
            <div class="hidden items-center gap-8 text-sm text-slate-300 md:flex">
                <a class="transition hover:text-acid" href="#about">About</a><a class="transition hover:text-acid"
                    href="#expertise">Expertise</a><a class="transition hover:text-acid" href="#projects">Projects</a><a
                    class="transition hover:text-acid" href="#experience">Experience</a><a
                    class="transition hover:text-acid" href="#contact">Contact</a>
            </div>
            <div class="flex items-center gap-3">
                <div class="hidden items-center gap-2 text-xs text-slate-400 sm:flex">
                    <span class="relative flex size-2"><span
                            class="pulse-ring absolute inset-0 rounded-full bg-acid"></span><span
                            class="relative size-2 rounded-full bg-acid"></span></span>Available
                </div>
                <button id="menu-btn"
                    class="grid size-10 place-items-center rounded-full border border-white/15 md:hidden"
                    aria-expanded="false" aria-label="Toggle menu">
                    ☰</button><a href="mailto:business.allen.dev@gmail.com"
                    class="hidden rounded-full bg-acid px-5 py-2.5 text-sm font-bold text-ink transition hover:scale-105 sm:block">Let's
                    talk ↗</a>
            </div>
        </nav>
        <div id="mobile-menu" class="hidden border-t border-white/10 bg-ink px-6 py-5 md:hidden">
            <div class="flex flex-col gap-5">
                <a href="#about">About</a><a href="#expertise">Expertise</a><a href="#projects">Projects</a><a
                    href="#experience">Experience</a><a href="#contact">Contact</a>
            </div>
        </div>
    </header>
