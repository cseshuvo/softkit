@props(['tag' => 'a', 'text' => 'Add New'])

@if($tag === 'a')
    <a {{ $attributes->merge(['class' => 'btn btn-primary text-white ms-btn']) }}>
        <i class="mdi mdi-plus"></i> {{ __($text) }}
    </a>
@else
    <button type="button"  {{ $attributes->merge(['class' => 'btn btn-primary  text-white addBtn ms-btn']) }}>
        <i class="mdi mdi-plus"></i> {{ __($text) }}
    </button>
@endif
