@extends('layoutsservice.app')

@section('content')


<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Services</h1>

    </div>
</div>


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
                            <p class="mb-4">Viscosity Kinematic @ 100°C and 40°C</p>
                            <p class="mb-4">Total Base Number</p>
                            <p class="mb-4">Water, Fuel Dilution, Soot, Oxydation, Glycol, Sulfonation, Nitration (by FTIR)</p>
                            <p class="mb-4">Element Analysis (Fe, Cr, Pb, Cu, Sn, Al, Si, Na)</p>
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
                            <p class="mb-4">Viscosity Kinematic @ 100°C and 40°C</p>
                            <p class="mb-4">Water, Oxidation (by FTIR)</p>
                            <p class="mb-4">Element Analysis by ICP (Fe, Cr, Cu, Al, Sn, Pb, Si, Na)</p>
                            <p class="mb-4">Total Acid Number</p>
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
                            <p class="mb-4">Viscosity Kinematic @ 100°C and 40°C</p>
                            <p class="mb-4">Total Base Number</p>
                            <p class="mb-4">Water, Nitration, Oxidation (by FTIR)</p>
                            <p class="mb-4">Element Analysis (Fe, Cr, Pb, Cu, Sn, Al, Zn, Si, Na)</p>
                            <p class="mb-4">Total Acid Number</p>
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
                            <p class="mb-4">Kinematic Viscosity @ 40°C</p>
                            <p class="mb-4">Wear Metal by ICP-AES (Al,Cr,Cu,Fe,Pb,Sn,Si,Na)</p>
                            <p class="mb-4">Oil Condition (oxidation ,nitration, water)</p>
                            <p class="mb-4">Cleanlines (5 & 15 µ)/(4,6 & 14 µ)</p>
                            <p class="mb-4">Water contamination</p>
                            <p class="mb-4">Total Acid Number</p>
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
                            <p class="mb-4">Density @ 15°C</p>
                            <p class="mb-4"> Distillation</p>
                            <p class="mb-4">Flash Point PMcc</p>
                            <p class="mb-4">Sulphur Content X-ray</p>
                            <p class="mb-4">Ash Content</p>
                            <p class="mb-4">Conradson Carbon Residue</p>
                            <p class="mb-4">Water Content by Distillation</p>
                            <p class="mb-4">Kinematic Viscosity @ 40°C</p>
                            <p class="mb-4">Total Acid Number</p>
                            <p class="mb-4">Strong Acid Number</p>
                            <p class="mb-4">Colour ASTM</p>
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
                            <p class="mb-4">Density @ 15°C</p>
                            <p class="mb-4">Flash Point PMcc</p>
                            <p class="mb-4"> Water Content by Distillation</p>
                            <p class="mb-4">Conradson Carbon Residue</p>
                            <p class="mb-4">Ash Content</p>
                            <p class="mb-4">Kinematic Viscosity @ 50°C</p>
                            <p class="mb-4">Sulphur Content X-ray</p>
                            <p class="mb-4"> Metal Al, Si, & V Content by ICP</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
