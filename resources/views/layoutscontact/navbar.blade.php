<!DOCTYPE html>
<html lang="en">



<div class="container-fluid bg-dark py-2 d-none d-md-flex">
    <div class="container">
        <div class="d-flex justify-content-between topbar">
            <div class="top-info">
                <small class="me-3 text-white-50"><a href="#"><i class="fas fa-map-marker-alt me-2 text-secondary"></i></a>Lubricants Technology Center </small>
                <small class="me-3 text-white-50"><a href="#"><i class="fas fa-envelope me-2 text-secondary"></i></a>cs@oilclinic.com</small>
            </div>
            <div id="note" class="text-secondary d-none d-xl-flex"><small>Providing Excellence in Lubricant and Fuel Analysis</small></div>
        </div>
    </div>
</div>

<div class="container-fluid bg-white">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-0">
            <a href="/" class="navbar-brand">

                <h1 class="text-yellow fw-bold d-block" s>Oil<span class="text-dark">Clinic</span><img src="{{ asset('oil-clinic.png') }}" alt="logo" style="height: 2em; width: 1.5em;"> </h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-xl-auto p-0">
                    <a href="/" class="nav-item nav-link">Home</a>
                    <a href="{{ route('about') }}"  class="nav-item nav-link ">About</a>
                    <a href="{{ route('service') }}" class="nav-item nav-link">Services</a>
                    <a href="{{ route('gallery') }}" class="nav-item nav-link">Gallery</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link active text-secondary ">Contact</a>
                    <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                </div>
            </div>

                <div class="d-flex align-items-center justify-content-center ms-4 ">
                    <a href="#"><i class="bi bi-search text-white fa-2x"></i> </a>
                </div>
            </div>
        </nav>
    </div>
</div>

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">


</body>
</html>
