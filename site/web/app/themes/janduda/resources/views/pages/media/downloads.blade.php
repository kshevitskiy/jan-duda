<section class="section is-medium">
  <div class="container">
    <ul class="columns is-variable is-6 is-multiline">
      @foreach ($docs as $key=>$doc)
      @php
        $number = sprintf('%02d', $key + 1);
      @endphp
      <li class="ref column is-6">
        <a href="{{ $doc['link'] }}"target="_blank" class="doc-ref">
          @component('components.heading')
            @slot('prefix')
              {{ $number }}
            @endslot
            {{ $doc['label'] }}
          @endcomponent
          <i class="ref__icon icon is-medium icon-pdf-file-download"></i>
        </a>
      </li>
      @endforeach
    </ul>
  </div>
</section>