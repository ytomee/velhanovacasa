document.querySelectorAll('[data-lang]').forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();

    const lang = link.getAttribute('data-lang');

    localStorage.setItem('lang', lang);
    document.cookie = `lang=${lang}; path=/; max-age=31536000`;

    window.location.reload();
  });
});
