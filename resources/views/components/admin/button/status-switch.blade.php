
@props([
    'item' => $item,
    'route' => route('admin.status.toggle'),
    'checked' => (bool) $item->status,
    'model' => get_class($item),
    'id' => $item->id
])

<div class="form-check form-switch d-flex justify-content-center">
    <input type="checkbox"
           class="form-check-input statusToggle"
           data-route="{{ $route }}"
           data-model="{{ $model }}"
           data-id="{{ $id }}"
           @checked($checked)
    >
</div>




{{--
<div class="form-check form-switch d-flex justify-content-center">
    <input class="form-check-input" type="checkbox" checked />
</div>
--}}
