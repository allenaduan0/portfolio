<!doctype html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta
      name="description"
      content="Allen Christopher — Software Engineer in Dubai creating robust, thoughtful digital products."
    />
    <meta name="theme-color" content="#07090f" />
    <meta property="og:title" content="Allen Christopher — Software Engineer" />
    <meta
      property="og:description"
      content="Creative engineering. Reliable outcomes. Explore Allen's experience and technical expertise."
    />
    <meta property="og:image" content="images/allen-cartoon-hero-glasses.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <title>Allen Christopher — Software Engineer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            fontFamily: {
              sans: ["Manrope", "sans-serif"],
              mono: ["DM Mono", "monospace"],
            },
            colors: { ink: "#07090f", acid: "#b9ff38", violet: "#8b5cf6" },
            boxShadow: { glow: "0 0 80px rgba(185,255,56,.16)" },
          },
        },
      };
    </script>
    <style>
      :root {
        --mx: 50%;
        --my: 50%;
      }
      * {
        box-sizing: border-box;
      }
      body {
        overflow-x: hidden;
      }
      ::selection {
        background: #b9ff38;
        color: #07090f;
      }
      .noise {
        background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 180 180' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.4'/%3E%3C/svg%3E");
      }
      .grid-bg {
        background-image:
          linear-gradient(rgba(255, 255, 255, 0.045) 1px, transparent 1px),
          linear-gradient(
            90deg,
            rgba(255, 255, 255, 0.045) 1px,
            transparent 1px
          );
        background-size: 54px 54px;
      }
      .cursor-glow {
        background: radial-gradient(
          500px circle at var(--mx) var(--my),
          rgba(185, 255, 56, 0.09),
          transparent 55%
        );
      }
      .reveal {
        opacity: 0;
        transform: translateY(28px);
        transition:
          opacity 0.8s cubic-bezier(0.2, 0.7, 0.2, 1),
          transform 0.8s cubic-bezier(0.2, 0.7, 0.2, 1);
      }
      .reveal.show {
        opacity: 1;
        transform: none;
      }
      .marquee {
        animation: marquee 25s linear infinite;
      }
      .float {
        animation: float 5s ease-in-out infinite;
      }
      .orbit {
        animation: spin 16s linear infinite;
      }
      .blink {
        animation: blink 1s step-end infinite;
      }
      .pulse-ring {
        animation: pulse 2.6s ease-out infinite;
      }
      .portrait-wrap {
        transform-style: preserve-3d;
        transition: transform 0.18s ease-out;
      }
      .portrait-img {
        transform: translateZ(28px);
      }
      .portrait-tag {
        transform: translateZ(55px);
      }
      .story-card img {
        transition:
          transform 0.8s cubic-bezier(0.2, 0.7, 0.2, 1),
          filter 0.8s ease;
      }
      .story-card:hover img {
        transform: scale(1.055);
        filter: saturate(1.15);
      }
      .story-card:nth-child(2) {
        transform: translateY(56px);
      }
      @keyframes marquee {
        to {
          transform: translateX(-50%);
        }
      }
      @keyframes float {
        50% {
          transform: translateY(-13px);
        }
      }
      @keyframes spin {
        to {
          transform: rotate(360deg);
        }
      }
      @keyframes blink {
        50% {
          opacity: 0;
        }
      }
      @keyframes pulse {
        0% {
          transform: scale(0.85);
          opacity: 0.65;
        }
        100% {
          transform: scale(1.6);
          opacity: 0;
        }
      }
      @media (prefers-reduced-motion: reduce) {
        * {
          scroll-behavior: auto !important;
        }
        .reveal {
          opacity: 1;
          transform: none;
        }
        .marquee,
        .float,
        .orbit,
        .blink,
        .pulse-ring {
          animation: none;
        }
        .portrait-wrap {
          transition: none;
        }
        .story-card img {
          transition: none;
        }
      }
      @media (max-width: 767px) {
        .story-card:nth-child(2) {
          transform: none;
        }
      }
    </style>
  </head>
  <body class="bg-ink font-sans text-white antialiased">
    <div
      class="noise pointer-events-none fixed inset-0 z-[100] opacity-[.025]"
    ></div>
    <div
      class="cursor-glow pointer-events-none fixed inset-0 z-0 hidden lg:block"
    ></div>
    <header
      class="fixed inset-x-0 top-0 z-50 border-b border-white/10 bg-ink/75 backdrop-blur-xl"
    >
      <nav
        class="mx-auto flex h-20 max-w-7xl items-center justify-between px-5 lg:px-10"
        aria-label="Main navigation"
      >
        <a
          href="#home"
          class="group flex items-center gap-3"
          aria-label="ACCA — allen.dev home"
        >
          <svg
            class="h-11 w-14 overflow-visible"
            viewBox="0 0 72 52"
            role="img"
            aria-label="ACCA logo"
          >
            <path
              d="M8 40 20 10l12 30M13 29h14M40 13c-11-8-20 1-20 13s9 20 20 13M64 13c-11-8-20 1-20 13s9 20 20 13M48 40l12-30 8 20M54 29h11"
              fill="none"
              stroke="currentColor"
              stroke-width="4"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="transition group-hover:stroke-[#b9ff38]"
            />
            <circle cx="68" cy="40" r="3" fill="#b9ff38" />
          </svg>
          <span class="flex flex-col leading-none"
            ><span class="font-mono text-[10px] tracking-[.28em] text-acid"
              >ACCA</span
            ><span class="mt-1 font-mono text-base font-medium"
              >allen<span class="text-acid">.dev</span></span
            ></span
          >
        </a>
        <div class="hidden items-center gap-8 text-sm text-slate-300 md:flex">
          <a class="transition hover:text-acid" href="#about">About</a
          ><a class="transition hover:text-acid" href="#expertise">Expertise</a
          ><a class="transition hover:text-acid" href="#experience"
            >Experience</a
          ><a class="transition hover:text-acid" href="#contact">Contact</a>
        </div>
        <div class="flex items-center gap-3">
          <div class="hidden items-center gap-2 text-xs text-slate-400 sm:flex">
            <span class="relative flex size-2"
              ><span
                class="pulse-ring absolute inset-0 rounded-full bg-acid"
              ></span
              ><span class="relative size-2 rounded-full bg-acid"></span></span
            >Available
          </div>
          <button
            id="menu-btn"
            class="grid size-10 place-items-center rounded-full border border-white/15 md:hidden"
            aria-expanded="false"
            aria-label="Toggle menu"
          >
            ☰</button
          ><a
            href="mailto:business.allen.dev@gmail.com"
            class="hidden rounded-full bg-acid px-5 py-2.5 text-sm font-bold text-ink transition hover:scale-105 sm:block"
            >Let's talk ↗</a
          >
        </div>
      </nav>
      <div
        id="mobile-menu"
        class="hidden border-t border-white/10 bg-ink px-6 py-5 md:hidden"
      >
        <div class="flex flex-col gap-5">
          <a href="#about">About</a><a href="#expertise">Expertise</a
          ><a href="#experience">Experience</a><a href="#contact">Contact</a>
        </div>
      </div>
    </header>

    <main class="relative z-10">
      <section
        id="home"
        class="grid-bg relative min-h-screen overflow-hidden pt-20"
      >
        <div
          class="absolute left-[8%] top-32 size-72 rounded-full bg-violet/15 blur-[100px]"
        ></div>
        <div
          class="absolute bottom-0 right-[8%] size-96 rounded-full bg-acid/10 blur-[120px]"
        ></div>
        <div
          class="mx-auto grid min-h-[calc(100vh-5rem)] max-w-7xl items-center gap-16 px-5 py-16 lg:grid-cols-[1.08fr_.92fr] lg:px-10"
        >
          <div class="relative z-10">
            <div
              class="mb-7 inline-flex items-center gap-3 rounded-full border border-white/10 bg-white/5 px-4 py-2 font-mono text-xs text-acid"
            >
              <span>&lt;hello-world /&gt;</span><span class="blink">_</span>
            </div>
            <h1
              class="max-w-3xl text-5xl font-extrabold leading-[.95] tracking-[-.055em] sm:text-7xl xl:text-[5.7rem]"
            >
              Software with
              <span class="relative text-acid"
                >brains.<svg
                  class="absolute -bottom-2 left-0 w-full"
                  viewBox="0 0 300 12"
                  fill="none"
                >
                  <path
                    d="M2 9C82 2 209 2 298 8"
                    stroke="currentColor"
                    stroke-width="4"
                    stroke-linecap="round"
                  /></svg></span
              ><br />Design with soul.
            </h1>
            <p class="mt-8 max-w-xl text-lg leading-8 text-slate-400">
              I'm Allen, a software engineer in Dubai. I turn complex
              requirements into dependable digital products people actually
              enjoy using.
            </p>
            <div class="mt-10 flex flex-wrap gap-3">
              <a
                href="#experience"
                class="group rounded-full bg-acid px-7 py-4 font-bold text-ink transition hover:-translate-y-1"
                >Explore my journey
                <span class="inline-block transition group-hover:translate-x-1"
                  >→</span
                ></a
              ><a
                href="mailto:business.allen.dev@gmail.com"
                class="rounded-full border border-white/15 px-7 py-4 font-bold transition hover:border-acid hover:text-acid"
                >Start a project</a
              >
            </div>
            <div
              class="mt-12 flex items-center gap-4 font-mono text-xs text-slate-500"
            >
              <span class="h-px w-12 bg-white/20"></span
              ><span>Based in Dubai · Building globally</span>
            </div>
          </div>
          <div
            class="relative mx-auto w-full max-w-[520px] [perspective:1200px]"
          >
            <div
              class="orbit absolute -inset-10 rounded-full border border-dashed border-acid/25"
            >
              <span
                class="absolute left-1/2 top-0 size-3 -translate-x-1/2 rounded-full bg-acid shadow-[0_0_20px_#b9ff38]"
              ></span>
            </div>
            <div
              id="portrait"
              class="portrait-wrap float relative rounded-[2.5rem] border border-white/15 bg-white/5 p-3 shadow-2xl shadow-black/50"
            >
              <div class="overflow-hidden rounded-[2rem]">
                <img
                  src="images/allen-cartoon-hero-glasses.png"
                  alt="Cartoon portrait of Allen Christopher in a playful development studio"
                  class="portrait-img aspect-[4/5] w-full object-cover object-top"
                  fetchpriority="high"
                />
              </div>
              <div
                class="portrait-tag absolute -bottom-6 -left-5 rounded-2xl border border-white/15 bg-ink/90 p-4 shadow-glow backdrop-blur-xl"
              >
                <p
                  class="font-mono text-[10px] uppercase tracking-[.2em] text-acid"
                >
                  Current role
                </p>
                <p class="mt-1 font-bold">Software Engineer</p>
                <p class="text-xs text-slate-500">Dubai · 2026—Now</p>
              </div>
              <div
                class="portrait-tag absolute -right-5 top-8 rounded-xl border border-white/15 bg-ink/85 px-4 py-3 font-mono text-xs text-slate-300 backdrop-blur"
              >
                <span class="text-violet">const</span> ideas =
                <span class="text-acid">ship()</span>;
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="overflow-hidden border-y border-acid bg-acid py-3 text-ink">
        <div
          class="marquee flex w-max whitespace-nowrap font-mono text-sm font-medium uppercase tracking-wider"
        >
          <span class="pr-10"
            >Software engineering ✦ Web products ✦ Laravel ✦ JavaScript ✦
            Product thinking ✦ Creative code ✦ Dubai ✦ </span
          ><span class="pr-10" aria-hidden="true"
            >Software engineering ✦ Web products ✦ Laravel ✦ JavaScript ✦
            Product thinking ✦ Creative code ✦ Dubai ✦
          </span>
        </div>
      </div>

      <section id="about" class="py-28 lg:py-36">
        <div class="mx-auto max-w-7xl px-5 lg:px-10">
          <div class="reveal grid gap-14 lg:grid-cols-[.8fr_1.2fr]">
            <div>
              <p class="font-mono text-sm text-acid">01 / ABOUT</p>
              <h2
                class="mt-5 text-4xl font-extrabold tracking-tight sm:text-6xl"
              >
                I connect the dots.
              </h2>
            </div>
            <div>
              <p class="text-2xl font-medium leading-relaxed text-slate-200">
                From support desks and network infrastructure to full-stack
                products, I understand how technology works at every layer.
              </p>
              <p class="mt-6 max-w-2xl leading-8 text-slate-400">
                That range helps me ask better questions, translate business
                needs into clear engineering plans, and build reliable
                experiences from conception through delivery.
              </p>
              <div class="mt-10 grid grid-cols-2 gap-4 sm:grid-cols-3">
                <div
                  class="rounded-2xl border border-white/10 bg-white/[.03] p-5"
                >
                  <p class="text-3xl font-bold text-acid">7+</p>
                  <p class="mt-1 text-sm text-slate-500">Years in tech</p>
                </div>
                <div
                  class="rounded-2xl border border-white/10 bg-white/[.03] p-5"
                >
                  <p class="text-3xl font-bold text-acid">3</p>
                  <p class="mt-1 text-sm text-slate-500">Core disciplines</p>
                </div>
                <div
                  class="col-span-2 rounded-2xl border border-white/10 bg-white/[.03] p-5 sm:col-span-1"
                >
                  <p class="text-3xl font-bold text-acid">∞</p>
                  <p class="mt-1 text-sm text-slate-500">Curiosity</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section aria-label="Animated story" class="pb-28 lg:pb-40">
        <div class="mx-auto max-w-7xl px-5 lg:px-10">
          <div class="reveal mb-12 max-w-2xl">
            <p class="font-mono text-sm text-acid">HOW I WORK / IN MOTION</p>
            <h2 class="mt-5 text-4xl font-extrabold tracking-tight sm:text-6xl">
              Ideas become systems.
            </h2>
          </div>
          <div class="grid gap-6 pb-14 md:grid-cols-2">
            <figure
              class="story-card reveal group relative overflow-hidden rounded-[2rem] border border-white/10 bg-white/[.03]"
            >
              <img
                src="images/allen-coding-glasses.png"
                alt="Animated Allen wearing glasses and coding a web application at his workstation"
                class="aspect-[3/2] w-full object-cover"
                loading="lazy"
              />
              <figcaption
                class="absolute inset-x-4 bottom-4 rounded-2xl border border-white/10 bg-ink/80 p-4 backdrop-blur-xl"
              >
                <p class="font-mono text-xs text-acid">01 / BUILD</p>
                <p class="mt-1 font-bold">
                  From a blank file to a working product.
                </p>
              </figcaption>
            </figure>
            <figure
              class="story-card reveal group relative overflow-hidden rounded-[2rem] border border-white/10 bg-white/[.03]"
            >
              <img
                src="images/allen-architecture-glasses.png"
                alt="Animated Allen wearing glasses and designing a connected software architecture"
                class="aspect-[3/2] w-full object-cover"
                loading="lazy"
              />
              <figcaption
                class="absolute inset-x-4 bottom-4 rounded-2xl border border-white/10 bg-ink/80 p-4 backdrop-blur-xl"
              >
                <p class="font-mono text-xs text-violet-400">02 / CONNECT</p>
                <p class="mt-1 font-bold">
                  Turning complexity into a clear system.
                </p>
              </figcaption>
            </figure>
          </div>
        </div>
      </section>

      <section
        id="expertise"
        class="border-y border-white/10 bg-white/[.025] py-28 lg:py-36"
      >
        <div class="mx-auto max-w-7xl px-5 lg:px-10">
          <div
            class="reveal flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between"
          >
            <div>
              <p class="font-mono text-sm text-acid">02 / EXPERTISE</p>
              <h2
                class="mt-5 text-4xl font-extrabold tracking-tight sm:text-6xl"
              >
                What I bring.
              </h2>
            </div>
            <p class="max-w-md text-slate-400">
              A practical mix of engineering depth, product judgment, and clear
              collaboration.
            </p>
          </div>
          <div class="mt-16 grid gap-4 lg:grid-cols-3">
            <article
              class="reveal group relative overflow-hidden rounded-3xl border border-white/10 bg-ink p-8 transition duration-500 hover:-translate-y-2 hover:border-acid/50"
            >
              <div
                class="absolute right-0 top-0 size-32 rounded-full bg-acid/10 blur-3xl transition group-hover:bg-acid/20"
              ></div>
              <span class="font-mono text-xs text-acid">01</span>
              <div class="mt-16 text-4xl">⌘</div>
              <h3 class="mt-6 text-2xl font-bold">Product Engineering</h3>
              <p class="mt-4 leading-7 text-slate-400">
                Scalable web applications, thoughtful APIs, maintainable
                architecture, and production-ready delivery.
              </p>
            </article>
            <article
              class="reveal group relative overflow-hidden rounded-3xl border border-white/10 bg-ink p-8 transition duration-500 hover:-translate-y-2 hover:border-violet/60"
            >
              <div
                class="absolute right-0 top-0 size-32 rounded-full bg-violet/10 blur-3xl transition group-hover:bg-violet/20"
              ></div>
              <span class="font-mono text-xs text-violet-400">02</span>
              <div class="mt-16 text-4xl">◇</div>
              <h3 class="mt-6 text-2xl font-bold">Experience Design</h3>
              <p class="mt-4 leading-7 text-slate-400">
                Responsive, accessible interfaces that simplify complex
                workflows and feel natural to use.
              </p>
            </article>
            <article
              class="reveal group relative overflow-hidden rounded-3xl border border-white/10 bg-ink p-8 transition duration-500 hover:-translate-y-2 hover:border-cyan-400/50"
            >
              <div
                class="absolute right-0 top-0 size-32 rounded-full bg-cyan-400/10 blur-3xl transition group-hover:bg-cyan-400/20"
              ></div>
              <span class="font-mono text-xs text-cyan-400">03</span>
              <div class="mt-16 text-4xl">↗</div>
              <h3 class="mt-6 text-2xl font-bold">Technical Delivery</h3>
              <p class="mt-4 leading-7 text-slate-400">
                Clear planning, collaborative execution, testing,
                troubleshooting, and steady progress toward outcomes.
              </p>
            </article>
          </div>
          <div class="reveal mt-14 flex flex-wrap gap-3 font-mono text-sm">
            <span class="rounded-full border border-white/10 px-5 py-2.5"
              >PHP</span
            ><span class="rounded-full border border-white/10 px-5 py-2.5"
              >Laravel</span
            ><span class="rounded-full border border-white/10 px-5 py-2.5"
              >JavaScript</span
            ><span class="rounded-full border border-white/10 px-5 py-2.5"
              >React.js</span
            ><span class="rounded-full border border-white/10 px-5 py-2.5"
              >Node.js</span
            ><span class="rounded-full border border-white/10 px-5 py-2.5"
              >Express.js</span
            ><span class="rounded-full border border-white/10 px-5 py-2.5"
              >HTML / CSS</span
            ><span class="rounded-full border border-white/10 px-5 py-2.5"
              >Tailwind</span
            ><span class="rounded-full border border-white/10 px-5 py-2.5"
              >Flutter</span
            ><span class="rounded-full border border-white/10 px-5 py-2.5"
              >Docker</span
            ><span class="rounded-full border border-white/10 px-5 py-2.5"
              >AWS</span
            ><span class="rounded-full border border-white/10 px-5 py-2.5"
              >API's</span
            ><span class="rounded-full border border-white/10 px-5 py-2.5"
              >MySQL</span
            ><span class="rounded-full border border-white/10 px-5 py-2.5"
              >MongoDB</span
            ><span class="rounded-full border border-white/10 px-5 py-2.5"
              >Blockchain</span
            ><span class="rounded-full border border-white/10 px-5 py-2.5"
              >Networks</span
            >
            <span class="rounded-full border border-white/10 px-5 py-2.5"
              >Payment Integration</span
            >
          </div>
        </div>
      </section>

      <section id="experience" class="py-28 lg:py-36">
        <div class="mx-auto max-w-7xl px-5 lg:px-10">
          <div class="reveal grid gap-14 lg:grid-cols-[.65fr_1.35fr]">
            <div class="lg:sticky lg:top-32 lg:self-start">
              <p class="font-mono text-sm text-acid">03 / EXPERIENCE</p>
              <h2
                class="mt-5 text-4xl font-extrabold tracking-tight sm:text-6xl"
              >
                Built through doing<span class="blink text-acid">_</span>
              </h2>
              <p class="mt-6 text-slate-400">
                A progression from keeping systems running to engineering the
                products that run on them.
              </p>
            </div>
            <div class="relative border-l border-white/10 pl-7 sm:pl-12">
              <article class="reveal relative pb-14">
                <span
                  class="absolute -left-[33px] top-1 size-3 rounded-full bg-acid shadow-[0_0_15px_#b9ff38] sm:-left-[53px]"
                ></span>
                <p class="font-mono text-xs text-acid">
                  2026 — PRESENT · DUBAI
                </p>
                <h3 class="mt-3 text-2xl font-bold">Software Engineer</h3>
                <p class="mt-3 leading-7 text-slate-400">
                  Engineering scalable software and dependable digital products
                  for modern business needs.
                </p>
              </article>
              <article class="reveal relative pb-14">
                <span
                  class="absolute -left-[33px] top-1 size-3 rounded-full border-2 border-violet bg-ink sm:-left-[53px]"
                ></span>
                <p class="font-mono text-xs text-violet-400">
                  2022 — 2026 · DUBAI
                </p>
                <h3 class="mt-3 text-2xl font-bold">Web Developer</h3>
                <p class="mt-3 leading-7 text-slate-400">
                  Built and delivered thoughtful web experiences while
                  collaborating across product and engineering teams.
                </p>
              </article>
              <article class="reveal relative pb-14">
                <span
                  class="absolute -left-[33px] top-1 size-3 rounded-full border-2 border-white/40 bg-ink sm:-left-[53px]"
                ></span>
                <p class="font-mono text-xs text-slate-500">
                  2020 — 2022 · PHILIPPINES
                </p>
                <h3 class="mt-3 text-2xl font-bold">Software Developer</h3>
                <p class="mt-3 leading-7 text-slate-400">
                  Translated client requirements into engineering plans and
                  collaborated across the full development cycle to ship
                  high-quality products.
                </p>
              </article>
              <article class="reveal relative pb-14">
                <span
                  class="absolute -left-[33px] top-1 size-3 rounded-full border-2 border-white/40 bg-ink sm:-left-[53px]"
                ></span>
                <p class="font-mono text-xs text-slate-500">
                  2019 — 2020 · PHILIPPINES
                </p>
                <h3 class="mt-3 text-2xl font-bold">Network Engineer</h3>
                <p class="mt-3 leading-7 text-slate-400">
                  Supported a telecommunications subcontractor on Ericsson
                  Philippines projects upgrading Smart's 3G network
                  infrastructure.
                </p>
              </article>
              <article class="reveal relative">
                <span
                  class="absolute -left-[33px] top-1 size-3 rounded-full border-2 border-white/40 bg-ink sm:-left-[53px]"
                ></span>
                <p class="font-mono text-xs text-slate-500">
                  2018 — 2019 · PHILIPPINES
                </p>
                <h3 class="mt-3 text-2xl font-bold">IT Staff</h3>
                <p class="mt-3 leading-7 text-slate-400">
                  Served as a primary support contact, guiding end users through
                  troubleshooting and keeping critical systems working smoothly.
                </p>
              </article>
            </div>
          </div>
        </div>
      </section>

      <section class="border-y border-white/10 bg-acid py-20 text-ink">
        <div class="reveal mx-auto max-w-7xl px-5 lg:px-10">
          <p class="font-mono text-sm">EDUCATION / CONTINUOUS LEARNING</p>
          <div class="mt-8 grid gap-8 sm:grid-cols-2 lg:grid-cols-5">
            <div>
              <p class="text-3xl font-extrabold">BS Information Technology</p>
              <p class="mt-2 text-ink/60">
                University of Rizal System · 2019 · Dean's Lister
              </p>
            </div>
            <div>
              <p class="text-3xl font-extrabold">Computer Systems NC II</p>
              <p class="mt-2 text-ink/60">National Certification · 2018</p>
            </div>
            <div>
              <p class="text-3xl font-extrabold">Flutter & Dart</p>
              <p class="mt-2 text-ink/60">Mobile Development Bootcamp · 2020</p>
            </div>
          </div>
          <div class="mt-10 grid gap-5 border-t border-ink/15 pt-8 sm:grid-cols-2">
            <div class="rounded-2xl border border-ink/15 bg-ink/5 p-5">
              <p class="font-mono text-xs uppercase tracking-wider">Certificate</p>
              <p class="mt-2 text-3xl font-extrabold">Laravel</p>
              <p class="mt-1 text-ink/60">Professional Development</p>
            </div>
            <div class="rounded-2xl border border-ink/15 bg-ink/5 p-5">
              <p class="font-mono text-xs uppercase tracking-wider">Certificate</p>
              <p class="mt-2 text-3xl font-extrabold">React JS</p>
              <p class="mt-1 text-ink/60">Professional Development</p>
            </div>
          </div>
        </div>
      </section>

      <section
        id="contact"
        class="grid-bg relative overflow-hidden py-32 lg:py-44"
      >
        <div
          class="absolute left-1/2 top-1/2 size-[36rem] -translate-x-1/2 -translate-y-1/2 rounded-full bg-violet/15 blur-[120px]"
        ></div>
        <div class="reveal relative mx-auto max-w-5xl px-5 text-center">
          <p class="font-mono text-sm text-acid">04 / LET'S BUILD</p>
          <h2
            class="mt-6 text-5xl font-extrabold leading-none tracking-[-.05em] sm:text-7xl lg:text-8xl"
          >
            Have a hard problem?<br /><span class="text-acid"
              >I like those.</span
            >
          </h2>
          <p class="mx-auto mt-8 max-w-xl text-lg leading-8 text-slate-400">
            I'm open to ambitious products, engineering opportunities, and
            conversations with thoughtful teams.
          </p>
          <a
            href="mailto:business.allen.dev@gmail.com"
            class="mt-10 inline-flex rounded-full bg-white px-8 py-4 font-bold text-ink transition hover:-translate-y-1 hover:bg-acid"
            >business.allen.dev@gmail.com ↗</a
          >
          <div
            class="mt-10 flex flex-wrap justify-center gap-6 font-mono text-xs text-slate-500"
          >
            <a class="hover:text-acid" href="tel:+971526655217"
              >+971 52 665 5217</a
            ><span>Deira, Dubai, UAE</span>
          </div>
          <div class="mt-8 flex justify-center gap-3" aria-label="Social profiles">
            <a href="https://github.com/allenaduan0" target="_blank" rel="noopener noreferrer" aria-label="Allen Christopher on GitHub" class="group grid size-12 place-items-center rounded-full border border-white/15 transition hover:-translate-y-1 hover:border-acid hover:bg-acid hover:text-ink">
              <svg viewBox="0 0 24 24" class="size-5" aria-hidden="true" fill="currentColor"><path d="M12 .7A11.5 11.5 0 0 0 8.36 23.1c.58.1.79-.25.79-.56v-2.23c-3.23.7-3.91-1.37-3.91-1.37-.53-1.34-1.29-1.7-1.29-1.7-1.05-.72.08-.71.08-.71 1.17.08 1.78 1.2 1.78 1.2 1.04 1.77 2.72 1.26 3.38.96.1-.75.41-1.26.74-1.55-2.58-.3-5.29-1.29-5.29-5.68 0-1.26.45-2.28 1.19-3.09-.12-.29-.52-1.46.11-3.04 0 0 .97-.31 3.16 1.18a10.9 10.9 0 0 1 5.76 0c2.19-1.49 3.15-1.18 3.15-1.18.63 1.58.23 2.75.11 3.04.74.81 1.19 1.83 1.19 3.09 0 4.4-2.72 5.38-5.31 5.67.42.36.79 1.07.79 2.16v3.25c0 .31.21.67.8.56A11.5 11.5 0 0 0 12 .7Z"/></svg>
            </a>
            <a href="https://linkedin.com/in/allen-christopher-aduan-522b50240" target="_blank" rel="noopener noreferrer" aria-label="Allen Christopher on LinkedIn" class="group grid size-12 place-items-center rounded-full border border-white/15 transition hover:-translate-y-1 hover:border-acid hover:bg-acid hover:text-ink">
              <svg viewBox="0 0 24 24" class="size-5" aria-hidden="true" fill="currentColor"><path d="M20.45 20.45h-3.56v-5.57c0-1.33-.02-3.04-1.85-3.04-1.86 0-2.14 1.45-2.14 2.94v5.67H9.34V8.98h3.41v1.57h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.29ZM5.32 7.41a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12Zm1.78 13.04H3.54V8.98H7.1v11.47ZM22.23 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.73V1.73C24 .77 23.21 0 22.23 0Z"/></svg>
            </a>
          </div>
        </div>
      </section>
    </main>
    <footer class="relative z-10 border-t border-white/10 py-8">
      <div
        class="mx-auto flex max-w-7xl flex-col gap-3 px-5 font-mono text-xs text-slate-500 sm:flex-row sm:items-center sm:justify-between lg:px-10"
      >
        <p>
          © <span id="year"></span> Allen Christopher · Built with curiosity.
        </p>
        <a class="transition hover:text-acid" href="#home">Back to top ↑</a>
      </div>
    </footer>

    <script>
      const menuBtn = document.querySelector("#menu-btn"),
        menu = document.querySelector("#mobile-menu");
      menuBtn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
        menuBtn.setAttribute(
          "aria-expanded",
          String(!menu.classList.contains("hidden")),
        );
      });
      menu
        .querySelectorAll("a")
        .forEach((a) =>
          a.addEventListener("click", () => menu.classList.add("hidden")),
        );
      document.querySelector("#year").textContent = new Date().getFullYear();
      const reduced = matchMedia("(prefers-reduced-motion: reduce)").matches;
      const observer = new IntersectionObserver(
        (entries) =>
          entries.forEach((e) => {
            if (e.isIntersecting) {
              e.target.classList.add("show");
              observer.unobserve(e.target);
            }
          }),
        { threshold: 0.12 },
      );
      document
        .querySelectorAll(".reveal")
        .forEach((el) => observer.observe(el));
      if (!reduced) {
        document.addEventListener("pointermove", (e) => {
          document.documentElement.style.setProperty("--mx", `${e.clientX}px`);
          document.documentElement.style.setProperty("--my", `${e.clientY}px`);
        });
        const card = document.querySelector("#portrait");
        card.addEventListener("pointermove", (e) => {
          const r = card.getBoundingClientRect(),
            x = (e.clientX - r.left) / r.width - 0.5,
            y = (e.clientY - r.top) / r.height - 0.5;
          card.style.transform = `rotateY(${x * 10}deg) rotateX(${-y * 10}deg) translateY(-6px)`;
        });
        card.addEventListener(
          "pointerleave",
          () => (card.style.transform = ""),
        );
      }
    </script>
  </body>
</html>
