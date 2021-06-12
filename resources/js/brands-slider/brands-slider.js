function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max))
}

function nextSlide(slideEls, activeSlideIndex) {
  const newActiveSlideIndex = getRandomInt(slideEls.length)

  slideEls[activeSlideIndex].classList.remove('active')
  slideEls[newActiveSlideIndex].classList.add('active')

  return newActiveSlideIndex
}

export function initBrandsSlider(sliderEl) {
  const slideEls = sliderEl.querySelectorAll('.js-brands-slider-item')
  let activeSlideIndex = getRandomInt(slideEls.length)

  slideEls[activeSlideIndex].classList.add('active')

  setTimeout(() => {
    setInterval(() => {
      activeSlideIndex = nextSlide(slideEls, activeSlideIndex)
    }, 4000)
  }, getRandomInt(10) * 500)
}
