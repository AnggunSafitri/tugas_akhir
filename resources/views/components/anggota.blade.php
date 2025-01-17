<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Yayasan WeBe</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('public') }}/assets/img/webe.png" rel="icon">
    <link href="{{ url('public') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('public') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('public') }}/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


</head>

<body>
    <style>
        :root {
            --color-default: #364d59;
            --color-primary: #44bdd3;
            --color-secondary: #52565e;
        }

        /* Smooth scroll behavior */
        :root {
            scroll-behavior: smooth;
        }

        #wpadminbar {
            font-size: 13px;
            font-weight: 400;
            height: 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            min-width: 600px;
            z-index: 99999;
            background: #ffffff;
        }

        .header.sticky {
            position: fixed;
            padding: 1rem 1rem;
            background: #050c50;
        }
    </style>
    <!-- ======= Header ======= -->
    <x-layout.anggota.header/>
    <!-- End Header -->
    
    
    <main id="main">
        <x-layout.anggota.notif/>
        {{ $slot }}
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <x-layout.anggota.footer/>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ url('public') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ url('public') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ url('public') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ url('public') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ url('public') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ url('public') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('public') }}/assets/js/main.js"></script>

    <script>
        var header = document.querySelector("header")
        window.addEventListener("scroll", () => {
            if (document.documentElement.scrollTop > 30) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        });
    </script>
     <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
</body>

</html>
