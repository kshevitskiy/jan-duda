import Navbar from '../components/Navbar'
import Slider from '../components/Slider'

const navbarEl = document.querySelector('.navbar')
const downloadImageButtonEl = document.querySelector('.download-image')
const imageDownload = (gallery) => {
  const slider = gallery.getSlider()
  const currentSlide = slider.slides[slider.activeIndex]
  const imageUrl = currentSlide.getAttribute('data-image')
  window.open(imageUrl)
}

export default {
  init() {
    // JavaScript to be fired on all pages
    new Navbar(navbarEl)
    const gallery = new Slider('.gallery')
    if(downloadImageButtonEl) {
      downloadImageButtonEl.addEventListener('click', e => {
        e.preventDefault()
        imageDownload(gallery)
      })
    }
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
