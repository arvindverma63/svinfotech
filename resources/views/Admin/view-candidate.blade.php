<!DOCTYPE html>
<html lang="en">
@include('Admin.partials.head')
<body>
    <!-- Pre-loader start -->
    @include('Admin.partials.preloader')
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('Admin.partials.navbar')
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('Admin.partials.sidebar')
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-md-12 col-xl-8 offset-xl-2">
                                                <div class="card mt-5 shadow-sm border-0"> <!-- Enhanced Card Design -->
                                                    <div class="card-header bg-primary text-white text-center">
                                                        <h3>Candidate Profile</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <!-- Candidate Information with Applied Date -->
                                                        <div class="text-center mb-4">
                                                            <h4 class="text-muted">Personal Information</h4>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <h6 class="text-primary"><i class="fas fa-user"></i> Name</h6>
                                                                <p class="text-dark font-weight-bold">{{ $data->name }}</p>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <h6 class="text-primary"><i class="fas fa-envelope"></i> Email</h6>
                                                                <p class="text-dark font-weight-bold">{{ $data->email }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <h6 class="text-primary"><i class="fas fa-phone"></i> Phone Number</h6>
                                                                <p class="text-dark font-weight-bold">{{ $data->phoneNumber }}</p>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <h6 class="text-primary"><i class="fas fa-graduation-cap"></i> Qualification</h6>
                                                                <p class="text-dark font-weight-bold">{{ $data->qualification }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <h6 class="text-primary"><i class="fas fa-calendar-alt"></i> Applied Date</h6>
                                                                <p class="text-dark font-weight-bold">{{ $data->created_at }}</p> <!-- Make sure 'applied_date' exists in your data -->
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <h6 class="text-primary"><i class="fas fa-briefcase"></i> Job ID</h6>
                                                                <p class="text-dark font-weight-bold">{{ $data->courseId }}</p>
                                                            </div>
                                                        </div>

                                                        <div class="text-center mb-4 mt-4">
                                                            <h4 class="text-muted">Additional Information</h4>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 mb-3">
                                                                <h6 class="text-primary"><i class="fas fa-info-circle"></i> Details</h6>
                                                                <p class="text-dark">{{ $data->details ?? 'No additional details provided.' }}</p>
                                                            </div>
                                                        </div>

                                                        <!-- Resume Download Link -->
                                                        <div class="row mt-3">
                                                            <div class="col-md-12 text-center">
                                                                <a href="{{ asset($data->image) }}" class="btn btn-outline-primary" target="_blank">
                                                                    <i class="fas fa-download"></i> Download Resume
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="styleSelector"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('Admin.partials.js')
</body>
</html>
