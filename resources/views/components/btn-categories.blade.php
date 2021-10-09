@props([
   'link',
   'sticker',
])

<a class="drops-category" href="/{{ $link }}" {{ $sticker }}>
   <img src="" alt="">
   {{ $slot }}
</a>
