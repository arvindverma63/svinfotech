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
                                            <div class="col-md-12 col-xl-12">
                                                <div class="card mt-5">
                                                    <div class="card-header">
                                                        <h2 class="text-center">Job Details</h2>
                                                    </div>
                                                    <div class="card-body">
                                                        <!-- Job Information Section -->
                                                        <div class="job-info">
                                                            <h4 class="section-header">General Information</h4>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <p><strong>Job Name:</strong> {{ $job->name }}</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p><strong>Job Title:</strong> {{ $job->title }}</p>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <p><strong>Details:</strong> {{ $job->details }}</p>
                                                                </div>
                                                            </div>
                                                            <hr>

                                                            <h4 class="section-header">Location & Description</h4>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <p><strong>Location:</strong> {{ $job->location }}</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p><strong>Status:</strong> {{ $job->active ? 'Active' : 'Inactive' }}</p>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <p><strong>Description:</strong></p>
                                                                    <div class="description-box">
                                                                        {!! $job->description !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>

                                                            <h4 class="section-header">Experience Requirements</h4>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <p><strong>Experience (Years):</strong> {{ $job->exInYear }}</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p><strong>Experience (Months):</strong> {{ $job->exInMonth }}</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Action Buttons -->
                                                        <div class="text-center mt-4">
                                                            {{-- <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-warning">Edit Job</a> --}}
                                                            <a href="{{ route('admin.jobs') }}" class="btn btn-secondary">Back to Jobs List</a>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- SweetAlert Success Message for Session -->
    <script>
        @if(session('success'))
            Swal.fire({
                title: 'Success!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @endif
    </script>
    @include('Admin.partials.js')


    <style>
        /* Custom Styling for Job View */
        .card-header {
            background-color: #4e73df;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .section-header {
            font-size: 18px;
            color: #4e73df;
            margin-top: 20px;
            margin-bottom: 10px;
            font-weight: bold;
            border-bottom: 2px solid #4e73df;
            padding-bottom: 5px;
        }

        .job-info p {
            font-size: 16px;
            margin-bottom: 10px;
            line-height: 1.5;
        }

        .description-box {
            background: #f8f9fc;
            padding: 15px;
            border-radius: 5px;
            color: #5a5c69;
            font-size: 15px;
        }

        /* Button Styling */
        .btn-warning {
            background-color: #f6c23e;
            color: #fff;
            border: none;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            color: #fff;
        }

        .btn-secondary {
            background-color: #858796;
            color: #fff;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #6c757d;
            color: #fff;
        }
    </style>
</body>
</html>
