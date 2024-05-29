<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maps</title>
    <!-- Vendor CSS Files -->
    <link href="{{ asset('home_assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('home_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home_assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('home_assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home_assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home_assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('home_assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('home_assets/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <style>
        #mapid {
            height: 100vh;
        }

        .back-to-home {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 1000;
        }
    </style>

</head>

<body>
    <a href="{{ route('user.index') }}" class="btn btn-warning back-to-home">Back to Home</a>
    <div id="mapid"></div>
</body>

<!-- Vendor JS Files -->
<script src="{{ asset('home_assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('home_assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('home_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('home_assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('home_assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('home_assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('home_assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('home_assets/js/main.js') }}"></script>
<script type="text/javascript">
    // var map = L.map('mapid').setView([-7.9063513, 112.5788135], 19);
    // const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    //     maxZoom: 30,
    //     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    // }).addTo(map);

    // var marker = L.marker([-7.906271598617964, 112.57831729136771]).addTo(map);
    // marker.bindPopup("<b>Gedung Pasca Sarjana</b>").openPopup();

    var map = L.map('mapid').setView([-7.9063513, 112.5788135], 19);
    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 30,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // Iterasi setiap marker dan tambahkan ke peta
    @foreach ($markers as $marker)
        L.marker([{{ $marker['lat'] }}, {{ $marker['lng'] }}]).addTo(map)
            .bindPopup("<b>{{ $marker['name'] }}</b><br>{{ $marker['description'] }}").openPopup();
    @endforeach
</script>

</html>
