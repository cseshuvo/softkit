@props(['route' => '','text' => 'Back','icon' => 'mdi mdi-arrow-left'])
<a href="{{ $route }}" {{ $attributes->merge(['class' => 'btn btn-dark']) }}>
    <i class="{{ $icon }}"></i> {{ __($text) }}
</a>
