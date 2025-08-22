@extends('admin.layouts.app')
@section('app-content')
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="javascript:void(0);">
                                    <h4>@lang('Admin Login')</h4>
                                </a>
                                <form class="mt-5 mb-5 login-input" method="post"
                                    action="{{ route('admin.login.submit') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="@lang('Email')"
                                            name="email" value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="@lang('Password')"
                                            name="password">
                                    </div>
                                    <button class="btn login-form__btn submit w-100">@lang('Sign In')</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
