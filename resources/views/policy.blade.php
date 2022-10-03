@php
    /** @var bool $enabled */
    /** @var string $url */
    /** @var string $title */
@endphp

@if ($enabled)
    <a href="{{ $url }}" class="iubenda-white no-brand iubenda-embed" title="{{ $title }}"
       target="_blank">{{ $title }}</a>
@endif
