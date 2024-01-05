@extends('layoutsgallery.app')

@section('content')

<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Gallery</h1>

    </div>
</div>

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
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset('assets/img/gallery-7.jpg')}}" class="img-fluid w-100 rounded" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset('assets/img/gallery-8.jpg')}}" class="img-fluid w-100 rounded" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset('assets/img/gallery-9.jpg')}}" class="img-fluid w-100 rounded" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
