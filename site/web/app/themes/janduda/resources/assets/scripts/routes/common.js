import Navbar from '../components/Navbar'
import Slider from '../components/Slider'

const downloadImageButton = document.querySelector('.download-image')
const imageDownload = (gallery) => {
  const slider = gallery.getSlider()
  const currentSlide = slider.slides[slider.activeIndex]
  const imageUrl = currentSlide.getAttribute('data-image')
  console.log(imageUrl)
  window.open(imageUrl)
}

export default {
  init() {
    // JavaScript to be fired on all pages
    new Navbar()
    const gallery = new Slider('.gallery')
    if(downloadImageButton) {
      downloadImageButton.addEventListener('click', e => {
        e.preventDefault()
        imageDownload(gallery)
      })
    }
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
