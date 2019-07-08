<article @php post_class() @endphp>
  @component('components.hero', array(
    'image' => App\get_thumb_url(),
    'size'  => 'is-medium'
  ))
    <header class="entry-header">
      @include('partials/entry-meta')
      <h1 class="entry-title title is-1 has-text-weight-bold">
        {!! get_the_title() !!}
      </h1>      
    </header>
  @endcomponent
  <div class="entry-content content">
    @php the_content() @endphp
  </div>
  {{--
    <footer>
      {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>
    @php comments_template('/partials/comments.blade.php') @endphp
  --}}
</article>
<hr>