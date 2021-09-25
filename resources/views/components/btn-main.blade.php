<div {{ $attributes->merge(['class' => "menu-container__submenu $classname "]) }}>
    <a {{ $attributes->merge(['class' => $classname2])}} href="{{ $link }}">{{ $slot }}</a>
</div>


