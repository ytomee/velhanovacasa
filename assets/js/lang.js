async function loadLanguage(lang) {
    try {
        const response = await fetch(`assets/lang/${lang}.json`);
        const translations = await response.json();
        localStorage.setItem("lang", lang);

        document.querySelectorAll("[data-i18n]").forEach(el => {
        const key = el.getAttribute("data-i18n");
        if (translations[key]) {
            el.textContent = translations[key];
        }
        });
    } catch (error) {
        console.error("Error:", error);
    }
    }

    document.querySelectorAll('.tp-header-8-lang a').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const lang = link.getAttribute('data-lang');
            loadLanguage(lang);
            location.reload();
        });
    });

    window.addEventListener("DOMContentLoaded", () => {
    const savedLang = localStorage.getItem("lang") || "pt";
    loadLanguage(savedLang);
});
