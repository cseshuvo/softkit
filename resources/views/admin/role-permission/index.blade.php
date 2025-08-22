@extends('admin.layouts.master')
@section('content')
    <div id="main-wrapper">
        <div class="content-body">
            <div class="container-fluid mt-3">


                <h3>Role & Permission Management</h3>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('admin.role.permission.assign.store', $role->id ?? 0) }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <!-- Role Name -->
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Role Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" placeholder="Role Name" class="form-control"
                                        required>
                                </div>
                            </div>

                            <!-- Permissions -->
                            <div class="card-header mt-3">
                                <h5 class="mb-0 h6">Permissions</h5>
                            </div>
                            <br>

                            @foreach ($permissions as $group => $permList)
                                <ul class="list-group mb-4">
                                    <li class="list-group-item bg-light">{{ $group }}</li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            @foreach ($permList as $perm)
                                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                                    <div class="p-2 border mt-1 mb-2">
                                                        <label class="control-label d-flex">{{ $perm->name }}</label>
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

                            <button type="submit" class="btn btn-success w-100 mt-2">Save Role & Permissions</button>
                        </div>
                    </div>
                </form>
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
  width: 50px;
  height: 24px;
}

.aiz-switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0; left: 0; right: 0; bottom: 0;
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
  bottom: 3px;
  background-color: white;
  transition: .4s;
  border-radius: 50%;
}

input:checked + .slider {
  background-color: #28a745;
}

input:checked + .slider:before {
  transform: translateX(26px);
}
    </style>
@endpush