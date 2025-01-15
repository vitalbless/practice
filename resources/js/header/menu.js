document.addEventListener("DOMContentLoaded", function () {
    const menuLinks = document.querySelectorAll(".header__menu-link");

    menuLinks.forEach((link) => {
        link.addEventListener("click", function (event) {
            event.preventDefault();

            menuLinks.forEach((el) => el.classList.remove("is-active"));

            this.classList.add("is-active");

            const url = this.getAttribute("href");
            localStorage.setItem("activeMenuUrl", url);
        });
    });

    const activeUrl = localStorage.getItem("activeMenuUrl");
    if (activeUrl && link.getAttribute("href") === activeUrl) {
        link.classList.add("is-active");
    }
});
