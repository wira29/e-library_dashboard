<!DOCTYPE html>
<html lang="en">
    <!-- Mirrored from kanakku.dreamguystech.com/html/template/customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jul 2022 08:07:58 GMT -->
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=0"
        />
        <title>Kanakku - Bootstrap Admin HTML Template</title>

        <link
            rel="shortcut icon"
            href="{{ asset('assets') }}/back/img/favicon.png"
        />

        <link
            rel="stylesheet"
            href="{{ asset('assets') }}/back/css/bootstrap.min.css"
        />

        <link
            rel="stylesheet"
            href="{{
                asset('assets')
            }}/back/plugins/fontawesome/css/fontawesome.min.css"
        />
        <link
            rel="stylesheet"
            href="{{
                asset('assets')
            }}/back/plugins/fontawesome/css/all.min.css"
        />

        <link
            rel="stylesheet"
            href="{{
                asset('assets')
            }}/back/plugins/datatables/datatables.min.css"
        />

        <link
            rel="stylesheet"
            href="{{
                asset('assets')
            }}/back/plugins/select2/css/select2.min.css"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets') }}/back/plugins/icons/feather/feather.css"
        />

        <link
            rel="stylesheet"
            href="{{
                asset('assets')
            }}/back/plugins/twitter-bootstrap-wizard/form-wizard.css"
        />

        <link
            rel="stylesheet"
            href="{{
                asset('assets')
            }}/back/css/bootstrap-datetimepicker.min.css"
        />

        <link
            rel="stylesheet"
            href="{{ asset('assets') }}/back/css/style.css"
        />

        <!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
        <script src="{{
                asset('assets')
            }}/back/js/jquery-3.6.0.min.js"></script>
        <script src="{{
                asset('assets')
            }}/back/plugins/select2/js/select2.min.js"></script>
        <script src="{{
                asset('assets')
            }}/back/plugins/select2/js/custom-select.js"></script>

        <script src="{{
                asset('assets')
            }}/back/plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="{{
                asset('assets')
            }}/back/plugins/twitter-bootstrap-wizard/prettify.js"></script>
        <script src="{{
                asset('assets')
            }}/back/plugins/twitter-bootstrap-wizard/form-wizard.js"></script>
    </head>
    <body>
        <div class="main-wrapper">
            @include('layouts.back.navbar') @include('layouts.back.sidebar')

            <div class="page-wrapper">@yield('content')</div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{
                asset('assets')
            }}/back/js/bootstrap.bundle.min.js"></script>

        <script src="{{ asset('assets') }}/back/js/feather.min.js"></script>

        <script src="{{
                asset('assets')
            }}/back/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="{{
                asset('assets')
            }}/back/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{
                asset('assets')
            }}/back/plugins/datatables/datatables.min.js"></script>

        <script src="{{ asset('assets') }}/back/js/script.js"></script>
    </body>

    <!-- Mirrored from kanakku.dreamguystech.com/html/template/customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jul 2022 08:08:06 GMT -->
</html>
