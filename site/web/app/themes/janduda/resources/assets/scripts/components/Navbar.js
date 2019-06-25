class Navbar {
  constructor () {
    this.triggers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
    this.init()
  }

  init () {
    if (this.triggers.length > 0) {
      this.triggers.forEach( el => {
        el.addEventListener('click', () => {
          const target = el.dataset.target
          const $target = document.getElementById(target)
          el.classList.toggle('is-active')
          $target.classList.toggle('is-active')
        })
      })
    }
  }
}

export default Navbar