<header class="banner">
  <nav class="navbar is-transparent is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item" href="{{ home_url('/') }}">
          <img
            src="@asset('images/svg/logo-light.svg')"
            width="120"
            height="40"
            alt="{{ get_bloginfo('name', 'display') }}"
          >
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
          'theme_location'  => 'primary_navigation',
          'container'       => 'div',
          'container_class' => 'navbar-menu',
          'container_id'    => 'navbarBasicExample',
          'menu_class'      => 'navbar-end'
        ]) !!}
      @endif
    </div>
  </nav>


</header>
