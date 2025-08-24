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
                                <a href="{{ route('admin.role.permission.create') }}"
                                    class="btn btn-dark text-white btn-sm">
                                    <i class="fa fa-plus"></i> @lang('Add New')
                                </a>
                            </div>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr class="bg-primary text-white">
                                        <th>@lang('SL.')</th>
                                        <th>@lang('Role Name')</th>
                                        <th>@lang('Action')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($roles as $item)
                                        <tr class="bg-light">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-primary text-white btn-sm dropdown-toggle"
                                                        type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        @lang('Option')
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.role.permission.edit', $item->id) }}">
                                                            <i class="fa fa-edit"></i> @lang('Permission')
                                                        </a>
                                                        <form
                                                            action="{{ route('admin.role.permission.destroy', $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="javascript:void(0);" class="dropdown-item delete">
                                                                <i class="fa fa-trash"></i> @lang('Delete')
                                                            </a>
                                                        </form>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <x-admin.table-empty />
                                    @endforelse

                                </tbody>
                            </table>




                        </div>
                    </div>


                </div>
            </div>
        </div>
    @endsection
