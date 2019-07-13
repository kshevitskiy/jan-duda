<footer class="footer">
  <div class="footer-widgets">
    <div class="container">
      <div class="columns is-multiline">
        <div class="column widget">
          <div class="widget-content">
            <a href="{{ home_url('/') }}">
              <img
                src="@asset('images/svg/logo.svg')"
                alt="JKD"
                class="footer-logo"
              >
            </a>
          </div>
        </div>
        <div class="column is-12 is-3-desktop widget">
          <div class="widget-content widget-content--centered">
            @php dynamic_sidebar('sidebar-footer') @endphp
          </div>
        </div>
        @if (has_nav_menu('footer_navigation'))
          <div class="column widget is-hidden-touch">
            <div class="widget-content">
              <div class="columns">
                  {!! wp_nav_menu([
                    'theme_location'  => 'footer_navigation',
                    'container'       => 'div',
                    'container_id'    => 'footerNav',
                    'container_class' => 'column is-11-fullhd is-offset-1-fullhd',
                    'menu_class'      => 'nav'
                  ]) !!}
              </div>
            </div>
          </div>
        @endif
      </div>
    </div>
  </div>

  <div class="footer-social">
    <div class="container">
      <a href="https://www.facebook.com/jankrzysztof.duda.9" class="reference" target="_blank">
        <i class="icon icon-facebook is-small"></i>
      </a>
      <a href="#" class="reference" target="_blank">
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