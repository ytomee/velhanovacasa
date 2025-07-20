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

