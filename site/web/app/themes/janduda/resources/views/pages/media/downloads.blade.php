@if($docs)
  <section class="section is-medium">
    <div class="container">
      <ul class="columns is-variable is-6 is-multiline">
        @forelse ( $docs as $key => $doc )
          @php
            $number = sprintf('%02d', $key + 1);
          @endphp
          <li class="ref column is-6">
            <a href="{{ $doc['doc_link'] }}"target="_blank" class="doc-ref">
              @component('components.heading')
                @slot('prefix')
                  {{ $number }}
                @endslot
                {{ $doc['doc_name'] }}
              @endcomponent
              <i class="ref__icon icon is-medium icon-pdf-file-download"></i>
            </a>
          </li>
        @empty
        {{-- Nothing found --}}
        @endforelse
      </ul>
    </div>
  </section>
@endif