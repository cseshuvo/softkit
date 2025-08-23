        <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">
            <i class="mdi mdi-filter-variant"></i> @lang('Filter')
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
            <div class="offcanvas-header border-bottom p-3 mb-3">
                <h5 id="offcanvasEndLabel" class="offcanvas-title">@lang('Filter')</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
            </div>
            <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                <form action="">
                    <div class="mb-3">
                        <label class="form-label">@lang('Status')</label>
                        <select class="form-select form-control ms-select" name="status">
                            <option value="1" @selected(request('status') == 1)>@lang('Active')</option>
                            <option value="0" @selected(request('status') == 0)>@lang('Inactive')</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">@lang('Order By')</label>
                        <select class="form-select form-control ms-select" name="order">
                            <option value="2" @selected(request('status') == 2)>@lang('Descending')</option>
                            <option value="1" @selected(request('status') == 1)>@lang('Ascending')</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">@lang('Date')</label>
                        <input type="text" class="form-control datePicker" name="date" placeholder="@lang('Select Date')" value="{{ request('date') }}">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary form-control w-100">@lang('Search Now')</button>
                    </div>

                </form>
            </div>
        </div>

        @push('style-lib')
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        @endpush

        @push('script-lib')
            <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        @endpush

        @push('script')
            <script>
                flatpickr(".datePicker", {
                       mode: "range",
                });
            </script>
        @endpush
