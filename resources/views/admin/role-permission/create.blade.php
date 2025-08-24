@extends('admin.layouts.master')
@section('content')
    <div id="main-wrapper">
        <div class="content-body">
            <div class="container-fluid mt-3">


                <div class="card">
                    <div class="card-body">

                        <div
                            class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center pb-2 mb-3">
                            <h4 class="card-title mb-3 mb-md-0 d-flex align-items-center">
                                <a href="{{ route('admin.dashboard') }}" class="text-primary">
                                    <i class="fa fa-home"></i>
                                </a>
                                <i class="fa fa-angle-right mx-2 text-muted"></i>
                                <span>{{ __($title) }}</span>
                            </h4>
                            <div class="d-flex flex-wrap">
                            </div>
                        </div>


                        <form action="{{ route('admin.role.permission.store', @$role->id) }}" method="POST">
                            @csrf

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">@lang('Role Name')</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ old('name', @$role->name) }}" required>
                                </div>
                            </div>

                
                            <div class="col-12">
                                @foreach ($permissions as $group => $permList)
                                    <ul class="permission-group mb-4">
                                        <li class="permission-group-item bg-light">{{ $group }}</li>
                                        <li class="permission-group-item">
                                            <div class="row">
                                                @foreach ($permList as $perm)
                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                                        <div class="p-2 border mt-1 mb-2">
                                                            <label
                                                                class="control-label d-flex">{{ showWord($perm->name) }}</label>
                                                            <label class="aiz-switch aiz-switch-success">
                                                                <input type="checkbox" name="permissions[]"
                                                                    value="{{ $perm->id }}"
                                                                    {{ isset($role) && $role->hasPermissionTo($perm->name) ? 'checked' : '' }}>
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </li>
                                    </ul>
                                @endforeach

                                <div class="form-group">
                                    <div class="float-right">
                                        <x-admin.button.submit-btn />
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


@push('style')
    <style>
        .aiz-switch {
            position: relative;
            display: inline-block;
            width: 40px;
            height: 20px;
        }

        .aiz-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 24px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 18px;
            width: 18px;
            left: 3px;
            bottom: 1px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked+.slider {
            background-color: var(--success);
        }

        input:checked+.slider:before {
            transform: translateX(18px);
        }
    </style>
@endpush
