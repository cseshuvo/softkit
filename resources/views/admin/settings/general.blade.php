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



                        <form action="" method="" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-md-4 mb-2">
                                    <label class="dropzone-box">
                                        <span class="dropzone-label">@lang('Dark Logo')</span>
                                        <input type="file" name="logo" accept="image/*" class="dropzone-input">
                                        <img class="preview" />
                                    </label>
                                </div>

                                <div class="col-md-4 mb-2">
                                    <label class="dropzone-box">
                                        <span class="dropzone-label">@lang('Light Logo')</span>
                                        <input type="file" name="favicon" accept="image/*" class="dropzone-input">
                                        <img class="preview" />
                                    </label>
                                </div>

                                <div class="col-md-4 mb-2">
                                    <label class="dropzone-box">
                                        <span class="dropzone-label">@lang('Favicon')</span>
                                        <input type="file" name="banner" accept="image/*" class="dropzone-input">
                                        <img class="preview" />
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Site Title')</label>
                                        <input type="text" class="form-control" name="site_title">
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Tagline')</label>
                                        <input type="text" class="form-control" name="tagline">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Mobile Number')</label>
                                        <input type="text" class="form-control" name="mobile">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Time Zone')</label>
                                        <select class="form-select form-control select2" name="time_zone">
                                            <option>@lang('--- Time Zone ---')</option>
                                            @foreach (timeZones() as $key => $time)
                                                <option value="{{ $key }}">{{ $time }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Date Format')</label>
                                        <select class="form-select form-control select2" name="date_format">
                                            <option>@lang('--- Date Format ---')</option>
                                            @foreach (dateFormats() as $key => $date)
                                                <option value="{{ $key }}">{{ $date }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Time Format')</label>
                                        <select class="form-select form-control select2" name="time_format">
                                            <option>@lang('--- Time Format ---')</option>
                                            @foreach (timeFormats() as $key => $time)
                                                <option value="{{ $key }}">{{ $time }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Country')</label>
                                        <select class="form-select form-control select2" name="country">
                                            <option>@lang('--- Country ---')</option>
                                            @foreach (countries() as $key => $country)
                                                <option value="{{ $key }}">{{ __($country) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>




                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Currency')</label>
                                        <input type="text" class="form-control" name="currency">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Currency Symbol')</label>
                                        <input type="text" class="form-control" name="currency_symbol">
                                    </div>
                                </div>



                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Language')</label>
                                        <select class="form-select form-control select2" name="language">
                                            <option>@lang('--- Language ---')</option>
                                            @foreach (languages() as $key => $lang)
                                                <option value="{{ $key }}">{{ __($lang) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Address')</label>
                                        <input type="text" class="form-control" name="address">
                                    </div>
                                </div>


                            </div>

                            <div class="form-group">
                                <div class="float-right">
                                    <x-admin.button.submit-btn />
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection



@push('script')
    <script>
        $(document).ready(function() {
            $(".dropzone-input").on("change", function() {
                let file = this.files[0];
                let $dropzone = $(this).closest(".dropzone-box");
                let $preview = $dropzone.find(".preview");
                let $label = $dropzone.find(".dropzone-label");

                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        $preview.attr("src", e.target.result).show();
                        $label.hide(); // hide text label when image is shown
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endpush
