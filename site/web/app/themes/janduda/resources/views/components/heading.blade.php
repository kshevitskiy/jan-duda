<span class="heading">
  @isset($prefix)
    <sup class="heading-prefix">{{ $prefix }}.</sup>  
  @endisset
  @isset($slot)
    <span class="heading-body">{{ $slot }}</span>
  @endisset
</span>