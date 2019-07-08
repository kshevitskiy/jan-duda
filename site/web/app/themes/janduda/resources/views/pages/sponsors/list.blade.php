@php
  $sponsors = get_field('sponsors_list');
@endphp

@if($sponsors)
  @forelse ( $sponsors as $sponsor )
    <section class="section is-medium">
      <div class="container">
        <div class="columns is-multiline is-vcentered is-variable is-6">
          <div class="column is-6 is-5-widescreen is-offset-1-widescreen is-4-fullhd is-offset-2-hullhd">
            <figure class="sponsor-logo">
              <img src="{{ $sponsor['logo'] }}" alt="{{ $sponsor['name'] }}">
            </figure>
          </div>
          <div class="column is-6 is-5-widescreen is-4-fullhd">
            <h2 class="title is-2">
              {{ $sponsor['name'] }}
            </h2>
            <div class="content has-text-grey">
              {!! $sponsor['text'] !!}
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr>
  @empty
  {{-- Nothing found --}}
  @endforelse
@endif