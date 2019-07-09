class Navbar {
  constructor (selecror) {
    this.el = selecror
    this.triggers = Array.from(this.el.querySelectorAll('.navbar-burger'))
    this.handleScroll = this.handleScroll.bind(this)
    this.handleScroll()
    this.init()
  }

  handleScroll() {
    if (window.pageYOffset > this.el.offsetTop) {
      this.el.classList.add('is-black')
    } else {
      this.el.classList.remove('is-black')
    }
  }

  events() {
    document.addEventListener('scroll', this.handleScroll)
  }

  init () {
    this.events()
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