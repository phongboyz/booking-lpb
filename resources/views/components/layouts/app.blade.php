<!DOCTYPE html>
<html lang="en">

<head>
    <title>Booking LPB</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Booking - Multipurpose Online Booking Theme">

    <!-- Dark mode -->
    <script>
    // document.addEventListener('contextmenu', event => event.preventDefault());
    const storedTheme = localStorage.getItem('theme')

    const getPreferredTheme = () => {
        if (storedTheme) {
            return storedTheme
        }
        return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
    }

    const setTheme = function(theme) {
        if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: light)').matches) {
            document.documentElement.setAttribute('data-bs-theme', 'light')
        } else {
            document.documentElement.setAttribute('data-bs-theme', theme)
        }
    }

    setTheme(getPreferredTheme())

    window.addEventListener('DOMContentLoaded', () => {
        var el = document.querySelector('.theme-icon-active');
        if (el != 'undefined' && el != null) {
            const showActiveTheme = theme => {
                const activeThemeIcon = document.querySelector('.theme-icon-active use')
                const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

                document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                    element.classList.remove('active')
                })

                btnToActive.classList.add('active')
                activeThemeIcon.setAttribute('href', svgOfActiveBtn)
            }

            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                if (storedTheme !== 'light' || storedTheme !== 'dark') {
                    setTheme(getPreferredTheme())
                }
            })

            showActiveTheme(getPreferredTheme())

            document.querySelectorAll('[data-bs-theme-value]')
                .forEach(toggle => {
                    toggle.addEventListener('click', () => {
                        const theme = toggle.getAttribute('data-bs-theme-value')
                        localStorage.setItem('theme', theme)
                        setTheme(theme)
                        showActiveTheme(theme)
                    })
                })

        }
    })
    </script>
    <style>
    @font-face {
        font-family: 'Phetsarath OT';
        font-weight: normal;
        font-style: normal;
        font-variant: normal;
        src: url("fonts/PhetsarathOT.ttf") format('truetype');
    }

    * {
        font-family: 'Phetsarath OT';
    }
    </style>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('fontend/assets/images/favicon.ico')}}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <!-- <link rel="stylesheet" href="css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap"> -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/vendor/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('fontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/vendor/tiny-slider/tiny-slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/vendor/glightbox/css/glightbox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/vendor/flatpickr/css/flatpickr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/vendor/choices/css/choices.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/assets/css/style.css')}}">
	<!-- Notification css (Toastr) -->
	<link href="{{asset('backend/assets/libs/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css">
    @livewireStyles
</head>

<body class="has-navbar-mobile">

    @include('components.layouts.nav')
    <main>

        {{$slot}}
        <!-- =======================Near by END -->



    </main>

    @include('components.layouts.footer')

    <!-- Back to top -->
    <div class="back-top"></div>
    @livewireScripts
    <!-- Bootstrap JS -->
    <script src="{{asset('fontend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Vendors -->
    <script src="{{asset('fontend/assets/vendor/tiny-slider/tiny-slider.js')}}"></script>
    <script src="{{asset('fontend/assets/vendor/glightbox/js/glightbox.js')}}"></script>
    <script src="{{asset('fontend/assets/vendor/flatpickr/js/flatpickr.min.js')}}"></script>
    <script src="{{asset('fontend/assets/vendor/choices/js/choices.min.js')}}"></script>

    <!-- ThemeFunctions -->
    <script src="{{asset('fontend/assets/js/functions.js')}}"></script>
	<!-- Toastr js -->
	<script src="{{asset('login/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/pages/toastr.init.js')}}"></script>
    
    <script>
        window.Livewire.on('alert', param => {
            toastr.options.positionClass = 'toast-bottom-right';
            toastr[param['type']](param['message'],param['type']);
        });

        @if(Session::has('success'))
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.success("{{Session::get('success') }}")
        @elseif(Session::has('warning'))
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.warning("{{Session::get('warning')}}")
        @elseif(Session::has('error'))
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.error("{{Session::get('error')}}")
        @endif

    </script>
    @stack('scripts')
</body>

</html>