@props([
    'action' => '',
    'name' => 'search',
    'placeholder' => __('Search...'),
    ])
<form action="{{ $action }}">
    <div class="input-group input-group-merge">
        <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
        <input type="text" class="form-control" name="{{ $name }}" value="{{ request('search') }}" placeholder="{{ $placeholder }}" />
    </div>
</form>

<style>
    .input-group-merge .form-control {
        height: 40px;
    }
</style>
