<section class="section">
  <div class="container">
    @if($person && array_filter($person))
    <div class="columns is-variable is-4 is-multiline">
      <div class="column">
        <div class="contact box">
          <header class="contact-header">
            <h3 class="title is-2 has-text-weight-bold">
              Kontakt
            </h3>
          </header>
          <div class="contact-body">
            <div class="person">
              @if($person['photo'])
              <figure class="person__photo image">
                <img
                  class="is-rounded"
                  src="{{ $person['photo'] }}"
                  alt="JKD"
                >
              </figure>
              @endif
              @if($person['name'] && $person['job'])
              <h4>
                <span class="person__name">{{ $person['name'] }}</span>
                <span class="person__job">{{ $person['job'] }}</span>
              </h4>
              @endif
            </div>
            <div class="contact-information">
              @if($person['email'])
                <a href="mailto:{{ $person['email'] }}" terget="_blank" class="contact-link contact-link--underlined">
                  {{ $person['email'] }}
                </a>
              @endif
              @if($person['tel'])
                <a href="#" data-tel="{{ $person['tel'] }}" terget="_blank" class="contact-link">
                  {{ $person['tel'] }}
                </a>
              @endif
            </div>
          </div>
        </div>
      </div>
      @endif

      @if($form)
      <div class="column">
        <div class="contact box">
          <header class="contact-header">
            <h3 class="title is-2 has-text-weight-bold">
              Masz pytanie?
            </h3>
          </header>
          <div class="contact-body">
            @php
              echo do_shortcode($form);
            @endphp
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>
</section>