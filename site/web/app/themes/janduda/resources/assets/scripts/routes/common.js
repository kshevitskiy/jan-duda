import Navbar from '../components/Navbar'

export default {
  init() {
    new Navbar()
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
