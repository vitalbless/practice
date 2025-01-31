export function createMenu(options) {
    const defaultOptions = {
        menuSelector: ".menu",
        linkSelector: ".menu-link",
        activeClass: "is-active",
        storageKey: "activeUrl",
    };
    console.log(options);
    const { menuSelector, linkSelector, activeClass, storageKey } = {
        ...defaultOptions,
        ...options,
    };

    const menu = document.querySelector(menuSelector);

    if (!menu) {
        console.error(`Меню с селектором ${menu} не найдено`);
        return;
    }

    const menuLinks = menu.querySelectorAll(linkSelector);

    const setActiveLink = (link) => {
        menuLinks.forEach((el) => el.classList.remove(activeClass));
        link.classList.add(activeClass);
        localStorage.setItem(storageKey, link.getAttribute("href"));
    };

    const restoreActiveLink = () => {
        const activeUrl = localStorage.getItem(storageKey);
        if (activeUrl) {
            menuLinks.forEach((link) => {
                if (link.getAttribute("href") === activeUrl) {
                    link.classList.add(activeClass);
                }
            });
        }
    };

    const handleMenuClick = (event) => {
        const link = event.target.closest(linkSelector);
        if (link) {
            setActiveLink(link);
        }
    };

    const init = () => {
        /*    restoreActiveLink(); */
        menu.addEventListener("click", handleMenuClick);
    };

    return { init, restoreActiveLink, setActiveLink };
}
