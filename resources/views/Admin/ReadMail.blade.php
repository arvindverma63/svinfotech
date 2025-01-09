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
                                            <div class="col-md-12 col-xl-8 mx-auto"> <!-- Centered column -->
                                                <div class="card mt-5 shadow-sm"> <!-- Card with shadow -->
                                                    <div class="card-header bg-primary text-white text-center">
                                                        <h2>Mail Details</h2>
                                                    </div>
                                                    <div class="card-body p-4">
                                                        <!-- Mail Information -->
                                                        <div class="mb-3">
                                                            <h4 class="fw-bold">Name:</h4>
                                                            <p class="text-muted">{{ $data->fullName }} </p>
                                                        </div>
                                                        <div class="mb-3">
                                                            <h4 class="fw-bold">From:</h4>
                                                            <p class="text-muted">({{ $data->email }})</p>
                                                        </div>
                                                        <div class="mb-3">
                                                            <h4 class="fw-bold">Received On:</h4>
                                                            <p class="text-muted">{{ $data->created_at->format('F j, Y, g:i a') }}</p>
                                                        </div>
                                                        <hr>
                                                        <!-- Mail Body -->
                                                        <div>
                                                            <h4 class="fw-bold">Message:</h4>
                                                            <p>{{ $data->body }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-center">
                                                        <button onclick="window.history.back();" class="btn btn-secondary">Back</button>
                                                        <a class="btn btn-danger" href="mailto:{{$data->email}}"><i class="ti ti-email"></i> Mail</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Data widget End -->
                                        </div>
                                    </div>
                                    <div id="styleSelector">
                                    </div>
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
