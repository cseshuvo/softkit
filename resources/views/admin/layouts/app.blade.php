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
    </script>

</body>

</html>
