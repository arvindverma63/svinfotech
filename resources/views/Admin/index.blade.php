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
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <a href="{{route('admin.jobs')}}">
                                                        <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                                                        </a>
                                                        <span class="text-c-blue f-w-600">Total Apply</span>
                                                        <h4 id="totalApply">0</h4> <!-- Dynamic data -->
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>For All Jobs
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->

                                            <!-- Today Apply card -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                    <a href="{{route('admin.jobs')}}">
                                                        <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
                                                    </a>
                                                        <span class="text-c-pink f-w-600">Today Apply</span>
                                                        <h4 id="totalApplyToday">0</h4> <!-- Dynamic data -->
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Last 24 hours
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card2 end -->

                                            <!-- Total Emails card -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                    <a href="{{route('report')}}">
                                                        <i class="icofont icofont-email bg-c-green card1-icon"></i>
                                                        </a>
                                                        <span class="text-c-green f-w-600">Total Enquiries</span>
                                                        <h4 id="totalEnq">0</h4> <!-- Dynamic data -->
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-green f-16 icofont icofont-tag m-r-10"></i>Contact Form
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card3 end -->

                                            <!-- Total User Applied card -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                    <a href="{{route('report')}}">
                                                        <i class="icofont icofont-user bg-c-yellow card1-icon"></i>
                                                        </a>
                                                        <span class="text-c-yellow f-w-600">Total Enquiries Today</span>
                                                        <h4 id="totalEnqToday">0</h4> <!-- Dynamic data -->
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-yellow f-16 icofont icofont-refresh m-r-10"></i>Last 24 Hours
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card4 end -->

                                            <!-- Fetch and update data dynamically -->
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    fetch('{{ route('stats') }}')
                                                        .then(response => response.json())
                                                        .then(data => {
                                                            // Update each card with dynamic data
                                                            document.getElementById('totalApply').textContent = data.totalApply;
                                                            document.getElementById('totalApplyToday').textContent = data.totalApplyToday;
                                                            document.getElementById('totalEnq').textContent = data.totalEnq;
                                                            document.getElementById('totalEnqToday').textContent = data.totalEnqToday;
                                                        })
                                                        .catch(error => {
                                                            console.error('Error fetching data:', error);
                                                        });
                                                });
                                            </script>
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

    @include('Admin.partials.js')
</body>
</html>
