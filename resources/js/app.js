import "./bootstrap";
import Header from "./header/burger-button";
import { createMenu } from "./header/menu";

new Header();

document.addEventListener("DOMContentLoaded", function () {
    const HeaderMenu = createMenu({
        menuSelector: ".header__menu",
        linkSelector: ".header__menu-link",
        activeClass: "is-active",
        storageKey: "activeHeaderMenu",
    });

    if (HeaderMenu) {
        HeaderMenu.init();
    }
});
