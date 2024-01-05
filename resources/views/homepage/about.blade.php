@extends('layoutsabout.app')

@section('content')

   <!-- Page Header Start -->
   <div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">About Us</h1>

    </div>
</div>

<div class="container-fluid py-5 my-5">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                <div class="h-100 position-relative">
                    <img src="{{ asset('assets/img/about-4.jpg')}}" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                    <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                        <img src="{{ asset('assets/img/about-3.jpg')}}" class="img-fluid w-100 rounded" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                <h5 class="text-primary">About Us</h5>
                <h1 class="mb-4">About Oil Monitoring Laboratory Services of Pertamina Lubricant within Pertamina</h1>
                <p>provides a variety of tests for industrial lubricant and fuels. State of the art laboratory instrumentation utilizing applicable ASTM or ISO standards for producing reliable test data, ISO 17025:2005 and ISO 9001:2000 certification to ensure proper quality control and quality assurance of testing.</p>
                <p class="mb-4">Oil Cinic is a continues oil monitoring program designed to get the series trend oil condition data which inform oil in use condition. This trend data automatically reflect the engine conditions during it operations. From the observation at site supported by various available data at the oil clinic data base it can be predicted at earlier stage if there is or no engine failure. If there is irregular data, Oil Clinic tell symptom where is the location or which engine part and the extent of damage. </p>

            </div>
        </div>
    </div>
</div>

<div class="container-fluid pb-5 mb-5 team">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Our Team</h5>
            <h1>Meet our expert Team</h1>
        </div>
        <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">
            <div class="rounded team-item">
                <div class="team-content">
                    <div class="team-img-icon">
                        <div class="team-img rounded-circle">
                            <img src="{{ asset('assets/img/team-5.jpg')}}" class="img-fluid w-100 rounded-circle" alt="">
                        </div>
                        <div class="team-name text-center py-3">
                            <h4 class="">RR Santi Lestari</h4>
                            <p class="m-0">Lab Head Oil Clinic</p>
                        </div>
                        <div class="team-icon d-flex justify-content-center pb-4">
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded team-item">
                <div class="team-content">
                    <div class="team-img-icon">
                        <div class="team-img rounded-circle">
                            <img src="{{ asset('assets/img/team-6.jpg')}}" class="img-fluid w-100 rounded-circle" alt="">
                        </div>
                        <div class="team-name text-center py-3">
                            <h4 class="">Bow Abiyoso</h4>
                            <p class="m-0">Office OEM Technical Relation</p>
                        </div>
                        <div class="team-icon d-flex justify-content-center pb-4">
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded team-item">
                <div class="team-content">
                    <div class="team-img-icon">
                        <div class="team-img rounded-circle">
                            <img src="{{ asset('assets/img/team-7.jpg')}}" class="img-fluid w-100 rounded-circle" alt="">
                        </div>
                        <div class="team-name text-center py-3">
                            <h4 class="">Anggita Veningtia Sari</h4>
                            <p class="m-0">Analyst Quality</p>
                        </div>
                        <div class="team-icon d-flex justify-content-center pb-4">
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
