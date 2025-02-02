import pxToRem from "./pxToRem";

const MatchMedia = {
    mobile: window.matchMedia(`(width <= ${pxToRem(767.98)}rem)`),
};

export default MatchMedia;
