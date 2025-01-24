import "./bootstrap";
import Header from "./header/burger-button";
import { createMenu } from "./header/menu";
import TabsCollection from "./blog/tabs";

new Header();
new TabsCollection();

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
