import {initBrandsSlider} from "@/js/brands-slider/brands-slider";

export function initBrandsSliders() {
  document
    .querySelectorAll('.js-brands-slider')
    .forEach(initBrandsSlider)
}
