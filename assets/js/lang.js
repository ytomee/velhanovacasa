document.querySelectorAll('[data-lang]').forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();
    const lang = link.getAttribute('data-lang');
    localStorage.setItem('lang', lang);
    const url = new URL(window.location.href);
    url.searchParams.set("lang", lang);
    window.location.href = url.href;
  });
});

const storedLang = localStorage.getItem('lang');
const url = new URL(window.location.href);
const currentLang = url.searchParams.get('lang');

if (storedLang && storedLang !== currentLang) {
    url.searchParams.set('lang', storedLang);
    window.location.href = url.href;
}