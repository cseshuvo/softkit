<script>
    Notiflix.Notify.init({
        width: '350px',
        position: 'right-top',
        distance: '15px',
        opacity: 1,
        borderRadius: '30px',
        fontSize: '14px',
        timeout: 2000,
        messageMaxLength: 400,
        backOverlay: false,
        plainText: false,
        useHtml: true,
        showOnlyTheLastOne: false,
        clickToClose: true,
        success: {
            background: '#e6ffed',
            textColor: '#2e7d32',
            notiflixIconColor: '#2e7d32',
        },
        info: {
            background: '#e0f7fa',
            textColor: '#0288d1',
            notiflixIconColor: '#0288d1',
        },
        warning: {
            background: '#fff3e0',
            textColor: '#f57c00',
            notiflixIconColor: '#f57c00',
        },
        failure: {
            background: '#ffebee',
            textColor: '#d32f2f',
            notiflixIconColor: '#d32f2f',
        }
    });
</script>
@if (session()->has('success'))
    <script>
        Notiflix.Notify.success('<strong>Success</strong><br>' + {!! json_encode(__($message = session('success'))) !!});
    </script>
@endif

@if (session()->has('error'))
    <script>
        Notiflix.Notify.failure('<strong>Error</strong><br>' + {!! json_encode(__($message = session('error'))) !!});
    </script>
@endif

@if (session()->has('warning'))
    <script>
        Notiflix.Notify.warning('<strong>Warning</strong><br>' + {!! json_encode(__($message = session('warning'))) !!});
    </script>
@endif

@if (session()->has('info'))
    <script>
        Notiflix.Notify.info('<strong>Info</strong><br>' + {!! json_encode(__($message = session('info'))) !!});
    </script>
@endif

@stack('notify')

@if ($errors->any())
    <script>
        "use strict";
        @foreach ($errors->unique() as $error)
        Notiflix.Notify.failure('<strong>Error</strong><br>' + {!! json_encode(__($error)) !!});
        @endforeach
    </script>
@endif

<style>
    .notiflix-notify {
        box-shadow: rgba(149, 157, 165, 0.2) 0px 0px 10px !important;
        border: 1px solid #EDEDEC;
    }

    .nx-message {
        display: inline-block;
        opacity: 0;
        transform: translateX(40px);
        animation: slideInText 0.5s ease-out forwards;
    }

    @keyframes slideInText {
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Confirm */

    .notiflix-confirm-content {
        width: 400px !important;
        border-radius: 10px !important;
        padding: 30px !important;
    }

    .notiflix-confirm-head h5 {
        border-bottom: 0px !important;
        color: var(--bs-primary) !important;
    }

    .notiflix-confirm-head div {
        padding-top: 10px !important;
        padding-bottom: 10px !important;
    }

    .nx-confirm-button-ok {
        background-color: var(--bs-primary) !important;
        color: #fff;
    }
</style>
