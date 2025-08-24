<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@lang('Admin Dashboard')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/admin') }}/images/favicon.png">
    <link href="{{ asset('assets/admin') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('assets/admin') }}/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/notiflix-3.2.6.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



    @stack('style-lib')
    @stack('style')

</head>

<body class="h-100">

    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

    @yield('app-content')


    <script src="{{ asset('assets/admin') }}/plugins/common/common.min.js"></script>
    <script src="{{ asset('assets/admin') }}/js/custom.min.js"></script>
    <script src="{{ asset('assets/admin') }}/js/settings.js"></script>
    <script src="{{ asset('assets/admin') }}/js/gleek.js"></script>
    <script src="{{ asset('assets/admin') }}/js/styleSwitcher.js"></script>
    <script src="{{ asset('assets/admin') }}/js/notiflix-aio-3.2.6.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>





    @stack('script-lib')

    @stack('script')

    @include('admin.partials.notify')

    <script>
        (function($) {
            "use strict"

            new quixSettings({
                sidebarPosition: "fixed",
                headerPosition: "fixed"
            });

        })(jQuery);


        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Choose an option",
                allowClear: true
            });
        });

        $(document).ready(function() {
            $('.delete').click(function(e) {
                e.preventDefault();
                var form = $(this).closest('form');

                Notiflix.Confirm.show(
                    'Delete',
                    'Are you sure you want to delete this?',
                    'Yes',
                    'No',
                    function() {
                        form.submit();
                    },
                    function() {
                        
                    }
                );
            });
        });
    </script>

</body>

</html>
