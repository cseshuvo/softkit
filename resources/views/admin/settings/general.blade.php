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
                                {{-- Dark Logo --}}
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Dark Logo')</label>
                                        <div class="upload-container-design">
                                            <div class="upload-container d-flex justify-content-center">
                                                <img class="preview-image img-fluid"
                                                    src="{{ getFile('path_to_dark_logo') }}" alt="Preview">
                                                <input type="file" class="file-input" name="dark_logo" accept="image/*"
                                                    hidden>
                                            </div>
                                            <button type="button" class="btn btn-sm btn-light remove-btn">
                                                <i class="mdi mdi-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                {{-- Light Logo --}}
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Light Logo')</label>
                                        <div class="upload-container-design">
                                            <div class="upload-container d-flex justify-content-center">
                                                <img class="preview-image img-fluid"
                                                    src="{{ getFile('path_to_light_logo') }}" alt="Preview">
                                                <input type="file" class="file-input" name="light_logo" accept="image/*"
                                                    hidden>
                                            </div>
                                            <button type="button" class="btn btn-sm btn-light remove-btn">
                                                <i class="mdi mdi-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                {{-- Favicon --}}
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Favicon')</label>
                                        <div class="upload-container-design">
                                            <div class="upload-container d-flex justify-content-center">
                                                <img class="preview-image img-fluid" src="{{ getFile('path_to_favicon') }}"
                                                    alt="Preview">
                                                <input type="file" class="file-input" name="favicon" accept="image/*"
                                                    hidden>
                                            </div>
                                            <button type="button" class="btn btn-sm btn-light remove-btn">
                                                <i class="mdi mdi-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="row">

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
                                        <select class="form-select form-control ms-select" name="time_zone">
                                            <option>@lang('---Select Time Zone---')</option>
                                            @foreach (timeZones() as $key => $time)
                                                <option value="{{ $key }}">{{ $time }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Date Format')</label>
                                        <select class="form-select form-control ms-select" name="date_format">
                                            <option>@lang('---Select Date Format---')</option>
                                            @foreach (dateFormats() as $key => $date)
                                                <option value="{{ $key }}">{{ $date }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Time Format')</label>
                                        <select class="form-select form-control ms-select" name="time_format">
                                            <option>@lang('---Select Time Format---')</option>
                                            @foreach (timeFormats() as $key => $time)
                                                <option value="{{ $key }}">{{ $time }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Country')</label>
                                        <select class="form-select form-control ms-select" name="country">
                                            <option>@lang('---Select Country---')</option>
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
                                        <select class="form-select form-control ms-select" name="language">
                                            <option>@lang('---Select Language---')</option>
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
        document.querySelectorAll('.upload-container-design').forEach((container) => {
            const uploadContainer = container.querySelector('.upload-container');
            const fileInput = container.querySelector('.file-input');
            const previewImage = container.querySelector('.preview-image');
            const removeBtn = container.querySelector('.remove-btn');

            // Open file picker
            uploadContainer.addEventListener('click', () => fileInput.click());

            // Drag and drop highlight
            uploadContainer.addEventListener('dragover', (e) => {
                e.preventDefault();
                uploadContainer.classList.add('dragover');
            });

            uploadContainer.addEventListener('dragleave', () => {
                uploadContainer.classList.remove('dragover');
            });

            uploadContainer.addEventListener('drop', (e) => {
                e.preventDefault();
                uploadContainer.classList.remove('dragover');
                const file = e.dataTransfer.files[0];
                if (file && file.type.startsWith('image/')) {
                    showPreview(file, previewImage, removeBtn);
                }
            });

            // Change file input
            fileInput.addEventListener('change', () => {
                const file = fileInput.files[0];
                if (file && file.type.startsWith('image/')) {
                    showPreview(file, previewImage, removeBtn);
                }
            });

            // Remove image
            removeBtn.addEventListener('click', (e) => {
                e.preventDefault();
                fileInput.value = '';
                previewImage.src = `{{ asset('assets/admin/images/placeholder.webp') }}`;
                removeBtn.style.display = 'none';
            });
        });

        function showPreview(file, previewImage, removeBtn) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewImage.style.display = 'block';
                removeBtn.style.display = 'inline-block';
            };
            reader.readAsDataURL(file);
        }
    </script>
@endpush
