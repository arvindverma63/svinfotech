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
                background: #343434;
            }

            .sidebar {
                background: #343434;
                color: #ffffff;
            }

            .sidebar ul li a {
                color: white;
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
                    <h1 class="text-white">Skydatech</h1>
                    <p>
                        <a href="{{ route('home') }}">Home</a> / <span>Career</span>
                    </p>
                </div>
            </div>
        </section>

        <!-- Job Description Section -->
        <section class="methodology-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center mb-4">Careers at SVInfotech</h2>
                        {!! $data->description !!}
                    </div>
                </div>
            </div>
        </section>

        <!-- Job Application Form Section -->
        <section class="application-form-section py-5">
            <div class="container">
                <h3 class="text-center mb-4">Apply Now</h3>

                <!-- Success Message -->
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Error Messages -->
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Job Application Form -->
                <form action="{{ route('applied.job') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Your Name *</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <input type="hidden" class="form-control" value="{{ $data->id }}" name="courseId" required>
                        <div class="col-md-6 mb-3">
                            <label for="email">Your Email *</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phoneNumber">Phone Number *</label>
                            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="qualification">Qualification *</label>
                            <input type="text" class="form-control" id="qualification" name="qualification" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="address">Address *</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="college">College *</label>
                            <input type="text" class="form-control" id="college" name="college" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="additional_info">Additional Info</label>
                            <textarea class="form-control" id="additional_info" name="details" rows="4"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="resume">Upload Image *</label>
                            <input type="file" class="form-control" id="resume" name="image" required>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary"
                                style="background-color: #ff7f27; color: white;">Submit Application</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <script>
            document.querySelectorAll('.btn-close').forEach(button => {
                button.addEventListener('click', () => {
                    button.closest('.alert').style.display = 'none';
                });
            });
        </script>

        <style>
            .application-form-section {
                background-color: #ffffff;
                padding: 30px;
                border-radius: 5px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .application-form-section h3 {
                font-size: 24px;
                color: #2d3e50;
                font-weight: bold;
            }

            .form-control,
            .form-control-file {
                border-radius: 5px;
                border: 1px solid #ddd;
                font-size: 14px;
                padding: 10px;
            }

            .form-control:focus {
                box-shadow: none;
                border-color: #ff7f27;
            }

            .btn-primary {
                background-color: #ff7f27;
                border: none;
                padding: 10px 20px;
                font-size: 16px;
                font-weight: bold;
                transition: background-color 0.3s ease;
            }

            .btn-primary:hover {
                background-color: #e76a21;
            }
        </style>
    </main>

    @include('website.partials.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('website.partials.js')
</body>

</html>
