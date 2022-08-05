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
            href="{{ asset('assets') }}/back/plugins/icons/feather/feather.css"
        />

        <link
            rel="stylesheet"
            href="{{ asset('assets') }}/back/css/style.css"
        />

        <script src="{{
                asset('assets')
            }}/back/js/jquery-3.6.0.min.js"></script>
    </head>
    <body class="error-page">
        <div class="main-wrapper">
            @include('layouts.back.navbar')

            <div class="error-box">
                <h1>500</h1>
                <h3 class="h2 mb-3">Email anda belum diverifikasi !</h3>
                <p class="h5 font-weight-normal">
                    Sebelum melanjutkan, harap periksa email anda untuk tautan verifikasi.</p>
                <p class="h5 font-weight-normal">
                    Jika anda tidak menerima email.</p>
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Kirim Ulang</button>
                </form>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{
                asset('assets')
            }}/back/js/bootstrap.bundle.min.js"></script>

        <script src="{{ asset('assets') }}/back/js/feather.min.js"></script>

        <script src="{{
                asset('assets')
            }}/back/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="{{ asset('assets') }}/back/js/script.js"></script>
    </body>

    <!-- Mirrored from kanakku.dreamguystech.com/html/template/customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jul 2022 08:08:06 GMT -->
</html>
