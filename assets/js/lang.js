const params = new URLSearchParams(window.location.search);
const currentLang = params.get("hl") || "pt";

document.querySelectorAll('[data-lang]').forEach(link => {
  if (link.getAttribute("data-lang") === currentLang) {
    link.classList.add("active");
  }
});

document.querySelectorAll('[data-lang]').forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();
    const selectedLang = link.getAttribute('data-lang');

    const url = new URL(window.location.href);
    url.searchParams.set("hl", selectedLang);
    window.location.href = url.toString();
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const currentLang = new URLSearchParams(window.location.search).get("hl") || "pt";

  document.querySelectorAll('a[href]:not([href^="#"]):not([href^="mailto:"]):not([href^="tel:"])').forEach(link => {
    const url = new URL(link.href, window.location.origin);

    url.searchParams.set("hl", currentLang);
    link.href = url.toString();
  });
});

