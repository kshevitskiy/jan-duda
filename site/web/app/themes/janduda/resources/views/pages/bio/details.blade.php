@php
  $sections = get_field('bio_details');
@endphp

@if($sections)
  @forelse ( $sections as $key => $section )    
    <section class="section is-medium">
      <div class="container">
        <div class="columns is-multiline">
          <div class="column is-12">
            <h6 class="title is-6 has-text-primary has-letterspacing is-uppercase">
              {{ $section['subtitle'] }}
            </h6>
          </div>
          <div class="column is-12 is-6-desktop">
            <header class="section-header">
              <h2 class="title is-2">
                {{ $section['title'] }}
              </h2>
            </header>
          </div>
          <div class="column is-12 is-5-desktop is-offset-1-desktop">
            <div class="content has-text-grey">
              {!! $section['text'] !!}
            </div>
          </div>
        </div>
      </div>
    </section>
    @if($key + 1 !== count($sections))
      <hr>
    @endif
  @empty
  {{-- Nothing found --}}
  @endforelse
@endif