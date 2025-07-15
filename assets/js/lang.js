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