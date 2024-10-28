{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kodejobs</title>
</head>
<body>
    <h1>Kodejobs</h1>
    {{--view the output--}}
    {{--@yield('content')
{{--</body>
{{--</html>--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HealthHub Connect</title>
    <!-- Responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- HEADER -->
    <header class="bg-primary text-white p-3">
        <div class="container d-flex justify-content-center align-items-center">
            <h1 class="h5 mb-0 fw-bold">HealthHub Connect</h1>
        </div>
    </header>
        {{--view the output--}}
        @yield('content')

     <!-- FOOTER -->
     <footer class="footer bg-light text-dark py-3">
        <div class="container">
            <div class="row align-items-center">
                <!-- CONTACT DETAILS -->
                <div class="col-md-8">
                    <div class="contact-details d-flex flex-wrap align-items-center">
                        <span class="me-3 fw-bold text-primary">Contact Us:</span>
                        <div class="d-flex align-items-center me-3">
                            <i class="bi bi-pin-map-fill text-primary me-1" aria-label="Address icon"></i>
                            <span>Lahug, Cebu City, Cebu, Visayas 6000</span>
                        </div>
                        <div class="d-flex align-items-center me-3">
                            <i class="bi bi-telephone-fill text-primary me-1" aria-label="Phone icon"></i>
                            <span>(888) 422-7974</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-envelope-at-fill text-primary me-1" aria-label="Email icon"></i>
                            <span>support@healthhub.com</span>
                        </div>
                    </div>
                </div>
                <!-- PRIVACY POLICY LINK -->
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <a href="privacy.blade.php" target="_blank" class="nav-link">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>