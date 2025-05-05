document.addEventListener("DOMContentLoaded", function () {
    const body = document.body;
    const sunIcon = document.getElementById("sun-icon");
    const moonIcon = document.getElementById("moon-icon");

    function updateIcons() {
        const isDark = body.classList.contains("dark-mode");
        sunIcon.classList.toggle("active", isDark);
        moonIcon.classList.toggle("active", !isDark);
    }

    if (localStorage.getItem("theme") === "dark") {
        body.classList.add("dark-mode");
    }
    updateIcons();

    window.toggleTheme = function () {
        body.classList.toggle("dark-mode");
        localStorage.setItem("theme", body.classList.contains("dark-mode") ? "dark" : "light");
        updateIcons();
    };
});
