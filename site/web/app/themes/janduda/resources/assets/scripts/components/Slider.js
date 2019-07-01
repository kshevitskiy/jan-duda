import Swiper from 'swiper'

class Slider {
  constructor (selector) {
    this.el = document.querySelector(selector)
    this.slider = {}
    this.init()
  }
  getSlider() {
    return this.slider
  }
  init() {
    if (!this.el) return
    this.slider = new Swiper(this.el, {
      speed: 1000,
      spaceBetween: 64,
      effect: 'fade',
      fadeEffect: {
        crossFade: true,
      },
      pagination: {
        el: '.swiper-pagination',
        bulletClass: 'bullet',
        bulletActiveClass: 'bullet--active',
        clickable: true,
      },
      navigation: {
        nextEl: '.next',
        prevEl: '.prev',
      },
    })
  }
}

export default Slider
