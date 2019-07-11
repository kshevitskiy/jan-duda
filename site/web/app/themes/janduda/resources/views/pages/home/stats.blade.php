@if( have_rows('achievements_stats') )
<section class="section stats">
  <div class="container">
    <div class="columns">      
      @while ( have_rows('achievements_stats') ) @php the_row() @endphp
        <div class="column card stat-card">
          <div class="card-content">
            <i class="icon is-large" style="background-image: url('{{ get_sub_field('stat_icon') }}')"></i>
            <h3>
              <span class="stat-card__number">
                {{ get_sub_field('stat_value') }}
              </span>
              <span class="stat-card__label">
                {{ get_sub_field('stat_label') }}
              </span>
            </h3>
          </div>
        </div>
      @endwhile
    </div>
  </div>
</section>
@else
{{-- Nothing found --}}
@endif