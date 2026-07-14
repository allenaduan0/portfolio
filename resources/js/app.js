import './bootstrap';

const menuBtn = document.querySelector("#menu-btn");
const menu = document.querySelector("#mobile-menu");

if (menuBtn && menu) {
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
}

const year = document.querySelector("#year");

if (year) {
    year.textContent = new Date().getFullYear();
}

const reduced = matchMedia("(prefers-reduced-motion: reduce)").matches;
const observer = new IntersectionObserver(
        (entries) =>
        entries.forEach((e) => {
            if (e.isIntersecting) {
                e.target.classList.add("show");
                observer.unobserve(e.target);
            }
        }), {
            threshold: 0.12
        },
    );
document.querySelectorAll(".reveal").forEach((element) => observer.observe(element));

if (!reduced) {
        document.addEventListener("pointermove", (e) => {
            document.documentElement.style.setProperty("--mx", `${e.clientX}px`);
            document.documentElement.style.setProperty("--my", `${e.clientY}px`);
        });
        const card = document.querySelector("#portrait");
    if (card) {
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
}
