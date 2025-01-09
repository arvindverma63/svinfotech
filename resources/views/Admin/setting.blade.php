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
                                            <div class="col-md-12 col-xl-6 offset-xl-3">
                                                <div class="card mt-5 shadow-sm border-0">
                                                    <div class="card-header bg-primary text-white text-center">
                                                        <h3>Reset Password</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <!-- Success and Error Messages -->
                                                        @if(session('success'))
                                                            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                                                {{ session('success') }}
                                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                            </div>
                                                        @endif

                                                        @if(session('error'))
                                                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                                                {{ session('error') }}
                                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                            </div>
                                                        @endif

                                                        <form method="POST" action="{{ route('password.reset') }}">
                                                            @csrf

                                                            <!-- Username Field -->
                                                            <div class="form-group mb-3">
                                                                <label for="name" class="form-label">Username</label>
                                                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your Username" required value="{{ old('name') }}">
                                                            </div>

                                                            <!-- New Password -->
                                                            <div class="form-group mb-3">
                                                                <label for="password" class="form-label">New Password</label>
                                                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter new password" required minlength="5">
                                                            </div>

                                                            <!-- Confirm Password -->
                                                            <div class="form-group mb-3">
                                                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm new password" required minlength="5">
                                                            </div>

                                                            <!-- Submit Button -->
                                                            <div class="text-center mt-4">
                                                                <button type="submit" class="btn btn-primary">Reset Password</button>
                                                            </div>
                                                        </form>
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
