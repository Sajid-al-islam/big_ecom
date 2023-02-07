<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('contents/frontend') }}/assets/images/favicon.png">

    @include('frontend.include.meta',[
        'meta' => $meta??[]
    ])

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;family=Work+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{ asset('contents/frontend') }}/assets/css/vendor/bootstrap.min.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('contents/frontend') }}/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('contents/frontend') }}/assets/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('contents/frontend') }}/assets/css/plugins/simple-line-icons.css">
    <link rel="stylesheet" href="{{ asset('contents/frontend') }}/assets/css/plugins/fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('contents/frontend') }}/assets/css/plugins/nice-select.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('contents/frontend') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('contents/frontend') }}/assets/css/custom.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        window.s_alert = (icon="success", title="success") => {
            return Toast.fire({
                icon,
                title
            })
        };

        window.c_alert = async (icon="question", title="Are you sure?",text='') => {
            let confirm = await Swal.fire({
                title,
                text,
                icon,
                showCancelButton: true,
                confirmButtonText: 'Yes, do it!',
                confirmButtonColor: 'rgba(0,0,0,0)',
                cancelButtonColor: 'rgba(0,0,0,0)',
                customClass: {
                    confirmButton: 'btn btn-outline-success',
                    cancelButton: 'btn btn-outline-danger'
                },
            })
            if (confirm.isConfirmed) {
                return true;
            } else if (confirm.isDismissed) {
                return false
            }
        };
        // window.addEventListener('load',function() {
        //     window.s_alert('success', 'Added to cart successfully');
        // });
    </script>
    @livewireStyles

    <!-- JS Vendor, Plugins & Activation Script Files -->
    @livewireScripts

    <!-- Vendors JS -->
    <script src="{{ asset('contents/frontend') }}/assets/js/vendor/jquery-3.6.0.min.js"></script>
    {{-- <script src="{{ asset('contents/frontend') }}/assets/js/vendor/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins JS -->
    <script  src="{{ asset('contents/frontend') }}/assets/js/plugins/swiper-bundle.min.js"></script>


    <!-- Custom Main JS -->
    <script src="{{ asset('contents/frontend') }}/assets/js/main.js" defer></script>
    <script src="{{ asset('contents/frontend') }}/assets/js/livewire_hook.js" defer></script>
    <script src="{{ asset('contents/frontend') }}/assets/js/cart.js" defer></script>
    <script src="{{ asset('contents/frontend') }}/assets/js/review.js" defer></script>
    <script src="/js/frontend.js" defer></script>
    <script defer>
        Livewire.on('load_modal', () => {
            window.exampleModalEl = document.getElementById('exampleModal')
            window.modal = new bootstrap.Modal(exampleModalEl)
            setTimeout(() => {
                window.modal.show();
                // window.exampleModalEl.classList.add('show');
                // window.exampleModalEl.classList.add('d-block');
            }, 1000);
            window.exampleModalEl.addEventListener('hidden.bs.modal', function (event) {
                // window.exampleModalEl.classList.remove('show');
                // window.exampleModalEl.classList.remove('d-block');
                console.log('hide modal');
            })
        })
    </script>
</head>

<body>

    <!--== Wrapper Start ==-->
    <div class="wrapper home-five-wrapper">
        @livewire('test.test-header')
        @yield('content')
        @livewire('test.test-page-show-modal')
    </div>

</body>

</html>
