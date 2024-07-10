    <script>
    var testimonialCarousel = document.querySelector('#testimonial-carousel');
    var imageCarousel = document.querySelector('#image-carousel');

    testimonialCarousel.addEventListener('slide.bs.carousel', function (event) {
        var imageCarouselInstance = bootstrap.Carousel.getInstance(imageCarousel);
        imageCarouselInstance.to(event.to);
    });

    imageCarousel.addEventListener('slide.bs.carousel', function (event) {
        var testimonialCarouselInstance = bootstrap.Carousel.getInstance(testimonialCarousel);
        testimonialCarouselInstance.to(event.to);
    });
    </script>
    <!-- javascript -->
    <script src="{{ asset('template/dpmptsp-master/html/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/dpmptsp-master/html/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/dpmptsp-master/html/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('template/dpmptsp-master/html/js/plugins.js') }}"></script>

    <!-- selectize js -->
    <script src="{{ asset('template/dpmptsp-master/html/js/selectize.min.js') }}"></script>
    <script src="{{ asset('template/dpmptsp-master/html/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('template/dpmptsp-master/html/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/dpmptsp-master/html/js/counter.int.js') }}"></script>

    <script src="{{ asset('template/dpmptsp-master/html/js/app.js') }}"></script>
    <script src="{{ asset('template/dpmptsp-master/html/js/home.js') }}"></script>

    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
    <script>
        new DataTable('#dataPerizinan', {
            responsive: true
        });
    </script>
    {{-- Tabs Navigation --}}
    <script>
        // Initialization for ES Users
        import { Tab, initMDB } from "mdb-ui-kit";

        initMDB({ Tab });
    </script>
    