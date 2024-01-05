@extends('layouts2.app')

@section('content')




<div class="container-fluid px-0">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/carousel-3.jpg')}}" class="img-fluid" alt="First slide">
                <div class="carousel-caption">
                    <div class="container carousel-content">
                        <h6 class="text-secondary h4 animated fadeInUp">Best Lab For</h6>
                        <h1 class="text-white display-1 mb-4 animated fadeInRight">Providing Excellence in Lubricant and Fuel Analysis</h1>
                        <p class="mb-4 text-white fs-5 animated fadeInDown">
                            To give to our customer which are industries, fleets and marines, our value of services in how they can increase.</p>
                        <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read More</button></a>
                        <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/carousel-4.jpg')}}" class="img-fluid" alt="Second slide">
                <div class="carousel-caption">
                    <div class="container carousel-content">
                        <h6 class="text-secondary h4 animated fadeInUp">Best Lab For</h6>
                        <h1 class="text-white display-1 mb-4 animated fadeInLeft">Providing Excellence in Lubricant and Fuel Analysis</h1>
                        <p class="mb-4 text-white fs-5 animated fadeInDown">optimize their engines and machineries operation at low cost which will increase profit and competitiveness of the companies.</p>
                        <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read More</button></a>
                        <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>




        <!-- About Start -->
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
                        <a href="{{ route('about') }}" class="btn btn-secondary rounded-pill px-5 py-3 text-white">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

          <!-- Services Start -->
          <div class="container-fluid services py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Our Services</h5>
                    <h1>Services Built Specifically For Your Business</h1>
                </div>
                <div class="row g-5 services-inner">
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fa fa-tint fa-7x mb-4 text-primary"></i>
                                    <h4 class="mb-3">Engine Oil Analysis</h4>

                                    <a href="{{ route('service') }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fa fa-flask fa-7x mb-4 text-primary"></i>
                                    <h4 class="mb-3">Non Engine Oil Analysis</h4>

                                    <a href="{{ route('service') }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fa fa-car fa-7x mb-4 text-primary"></i>
                                    <h4 class="mb-3">Gas Engine Oil Analysis</h4>

                                    <a href="{{ route('service') }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fa fa-plane fa-7x mb-4 text-primary"></i>
                                    <h4 class="mb-3">Turbine Oil Analysis</h4>

                                    <a href="{{ route('service') }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fa fa-truck fa-7x mb-4 text-primary"></i>
                                    <h4 class="mb-3">Diesel Fuel Analysis</h4>

                                    <a href="{{ route('service') }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fas fa-ship fa-7x mb-4 text-primary"></i>
                                    <h4 class="mb-3">Marine Fuel Analysis</h4>

                                    <a href="{{ route('service') }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

               <!-- Project Start -->
               <div class="container-fluid project py-5 mb-5">
                <div class="container">
                    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                        <h5 class="text-primary">Gallery</h5>
                        <h1>Our Masterpieces Unveiled</h1>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="{{ asset('assets/img/gallery-1.jpg')}}" class="img-fluid w-100 rounded" alt="">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="{{ asset('assets/img/gallery-2.jpg')}}" class="img-fluid w-100 rounded" alt="">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="{{ asset('assets/img/gallery-3.jpg')}}" class="img-fluid w-100 rounded" alt="">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="{{ asset('assets/img/gallery-4.jpg')}}" class="img-fluid w-100 rounded" alt="">


                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="{{ asset('assets/img/gallery-5.jpg')}}" class="img-fluid w-100 rounded" alt="">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="{{ asset('assets/img/gallery-6.jpg')}}" class="img-fluid w-100 rounded" alt="">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project End -->



            <div class="container-fluid py-5 mb-5">
                <div class="container">
                    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                        <h5 class="text-primary">Get In Touch</h5>
                        <h1 class="mb-3">Contact for any query</h1>

                    </div>
                    <div class="contact-detail position-relative p-5">
                        <div class="row g-5 mb-5 justify-content-center">
                            <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                                <div class="d-flex bg-light p-3 rounded">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 64px; height: 64px;">
                                        <i class="fas fa-map-marker-alt text-white"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="text-primary">Address</h4>
                                        <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h5">Lubricants Technology Center</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                                <div class="d-flex bg-light p-3 rounded">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 64px; height: 64px;">
                                        <i class="fa fa-phone text-white"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="text-primary">Call Us</h4>
                                        <a class="h5" href="tel:+0123456789" target="_blank">+62 2143923155</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                                <div class="d-flex bg-light p-3 rounded">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 64px; height: 64px;">
                                        <i class="fa fa-envelope text-white"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="text-primary">Email Us</h4>
                                        <a class="h5" href="mailto:info@example.com" target="_blank">cs@oilclinic.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-5">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                                <div class="bg-light p-5 h-100 rounded contact-map">
                                    <iframe class="rounded w-100 h-100"
                                    src="https://www.google.com/maps/embed?origin=mfe&pb=!1m3!2m1!1slubricant+technology+center!6i13" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                                <div class="bg-light p-5 rounded contact-form">
                                    <div class="mb-4">
                                        <input type="text" class="form-control border-0 py-3" placeholder="Your Name">
                                    </div>
                                    <div class="mb-4">
                                        <input type="email" class="form-control border-0 py-3" placeholder="Your Email">
                                    </div>
                                    <div class="mb-4">
                                        <input type="text" class="form-control border-0 py-3" placeholder="Project">
                                    </div>
                                    <div class="mb-4">
                                        <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" placeholder="Message"></textarea>
                                    </div>
                                    <div class="text-start">
                                        <button class="btn bg-primary text-white py-3 px-5" type="button">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

         <!-- Back to Top -->
         <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

@endsection
