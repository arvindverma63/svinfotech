<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.partials.head')
</head>

<body class="index-page">

    <link rel="stylesheet" href="{{ asset('clients/css/section.css') }}" type="text/css">
    @include('website.partials.header')
    <main class="main">
        <style>
            .content {
                background: #ffffff;
            }

            .sidebar {
                background: #ffffff;
                color: #ffffff;
            }

            .sidebar ul li a {
                color: white;
            }

            .content ul li {
                color: white;
            }

            .card {
                background: #ffffff;
            }

            .job-listing {
                background-color: #ffffff !important;
            }

            .form-control {
                background-color: #ffffff !important;
            }
        </style>
        <!-- Page Header Section -->
        <section class="page-header"
            style="position: relative;
        background-image: url('{{ asset('clients/images/career.jpg') }}');
        background-size: cover;
        background-position: center;
        height: 300px;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;">
            <div class="overlay"></div>
            <div class="container">
                <div class="header-content">
                    <h1 class="text-white">SVInfotech</h1>
                    <p>
                        <a href="{{ route('home') }}">Home</a> / <span>Careers</span>
                    </p>
                </div>
            </div>
        </section>

        <!-- Methodology Section -->
        <section class="methodology-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center mb-4">Careers at SVInfotech</h2>
                        <p>At <strong>SVInfotech</strong>, we believe our employees are our greatest strength
                            and most valuable asset. Our team consists of skilled IT professionals dedicated to
                            delivering
                            exceptional service to our clients. We foster an environment that values creativity,
                            innovation,
                            and collaboration.</p>

                        <p>If you are a talented recent graduate or an experienced professional who learns quickly,
                            consider
                            the rewarding opportunities SVInfotech offers in IT and business. We are looking
                            for motivated individuals who prioritize quality, teamwork, and client satisfaction.</p>

                        <p>At SVInfotech, you’ll experience a steep learning curve, a supportive work culture,
                            and exceptional career growth opportunities.</p>

                        <p class="text-center mt-4">
                            <strong>Submit your resume for consideration at:</strong>
                            <a href="mailto:officialsv@skydatech.com">officialsv@skydatech.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-bottom: 20px;">
                <b>Apply Here for Course</b>
            </div>


        </section>


        <section class="job-listing py-5">
            <div class="container">
                @if ($data == null)
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    Currenty there is not Vacancy
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @foreach ($data as $job)
                    <div class="job-card">
                        <div class="job-info">
                            <h5 class="job-title">Course ID {{ $job->id }}: {{ $job->title }}</h5>
                            <div class="job-details">
                                <span class="job-location">
                                    <i class="fas fa-map-marker-alt"></i> {{ $job->type }}
                                </span>
                                <span class="job-requirements">
                                    <i class="fas fa-briefcase"></i> {{ $job->details }}
                                </span>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="modal{{ $job->id }}" tabindex="-1"
                            aria-labelledby="modalLabel{{ $job->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalLabel{{ $job->id }}">Course Id :
                                            {{ $job->id }}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>Course Title: {{ $job->title }}</h5>
                                        <p><b>Course Type</b>: {{ $job->type }}</p>
                                        <p><b>Course Details</b>: {{ $job->details }}</p>
                                        <p><b>Duration</b>: {{ $job->exInYear }} years, {{ $job->exInMonth }} months
                                        </p>
                                        <p>{!! $job->description !!}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-apply"
                                            style="background-color: rgb(248, 248, 248); color: rgb(0, 0, 255);"
                                            data-bs-dismiss="modal">Close</button>
                                        <a href="{{ route('applyJob', $job->id) }}" class="btn btn-apply text-white"
                                            style="text-decoration: none;">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- View Button to Open Modal -->
                        <div class="apply-button">
                            <button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modal{{ $job->id }}" style=" margin-right: 20px;">View</button>
                            <a href="{{ route('applyJob', $job->id) }}" class="btn btn-primary text-white"
                                style="text-decoration: none;">Apply Now</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>

        <link rel="stylesheet" href="{{ asset('clients/css/career.css') }}">



    </main>

    @include('website.partials.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('website.partials.js')
</body>

</html>
