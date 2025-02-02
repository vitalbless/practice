import "./bootstrap";
import Header from "./header/burger-button";
import { createMenu } from "./header/menu";
import TabsCollection from "./blog/tabs";
import VideoPlayerCollection from "./news/video-player";
import ExpandableContentCollection from "./blog-page.js/expandable-content";
import InputMaskCollection from "./utils/inputMask";
import SelectCollection from "./select/select";

new Header();
new TabsCollection();
new VideoPlayerCollection();
new ExpandableContentCollection();
new InputMaskCollection();
new SelectCollection();

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
