<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pos Mini</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/iconly/bold.css ') }}">
    <link rel="stylesheet" href="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-icons/bootstrap-icons.css ') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css ') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg ') }}" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            @include('elements.sidebar')
            
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<!-- <div class="page-heading">
    <h3>Profile Statistics</h3>
</div>
 -->
@include('elements.page-content')
@include('elements.footer')


</div>
</div>

</body>
<script src="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js ')}}"></script>
<script src="{{ asset('vendors/apexcharts/apexcharts.js ')}}"></script>
<script src="{{ asset('js/pages/dashboard.js ')}}"></script>
<script src="{{ asset('js/mazer.js ')}}"></script>

</html>
