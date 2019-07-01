<footer class="footer">
  <div class="footer-widgets">
    <div class="container">
      <div class="columns is-multiline">
        <div class="column widget">
          <div class="widget-content">
            <img
              src="@asset('images/svg/logo.svg')"
              alt="JKD"
              class="footer-logo"
            >
          </div>
        </div>
        <div class="column is-12 is-3-desktop widget">
          <div class="widget-content widget-content--centered">
            <h5>Dane kontaktowe</h5>
            <p>
              <a href="tel:48526488265" target="_blank" class="link">+48 526 488 265</a><br>
              <a href="mailto:jkd@chess.com" target="_blank" class="link">jkd@chess.com</a>
            </p>
            <a href="#" class="button is-medium is-primary">
              Formularz
            </a>
          </div>
        </div>
        <div class="column widget is-hidden-touch">
          <div class="widget-content">
            <div class="columns">
              <div class="column is-5-fullhd is-offset-1-fullhd">
                <ul class="nav">
                  <li class="nav-item">
                    <a href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="#">Bio</a>
                  </li>
                  <li class="nav-item">
                    <a href="#">Kalendarz</a>
                  </li>
                  <li class="nav-item">
                    <a href="#">Sponsorzy</a>
                  </li>                                    
                </ul>
              </div>
              <div class="column is-5-fullhd">
                <ul class="nav">
                  <li class="nav-item">
                    <a href="#">Media</a>
                  </li>
                  <li class="nav-item">
                    <a href="#">Kontakt</a>
                  </li>
                  <li class="nav-item">
                    <a href="#">Polityka prywatności</a>
                  </li>
                  <li class="nav-item">
                    <a href="#">Regulamin</a>
                  </li>                                    
                </ul> 
              </div>
            </div>
          </div>
        </div>
      </div>
      @php dynamic_sidebar('sidebar-footer') @endphp
    </div>
  </div>

  <div class="footer-social">
    <div class="container">
      <a href="#" class="reference">
        <i class="icon icon-facebook is-small"></i>
      </a>
      <a href="#" class="reference">
        <i class="icon icon-twitter is-small"></i>
      </a>
    </div>
  </div>

  <div class="footer-copyright">
    <div class="container">
      <div class="columns is-mobile">
        <div class="column">
          <p>Copyright 2019</p>
        </div>
        <div class="column has-text-right">
          <p>Design & coding hype&trade;</p>
        </div>
      </div>
    </div>
  </div>
</footer>