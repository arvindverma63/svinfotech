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
                                            <div class="col-md-12 col-xl-12"> <!-- Full width -->
                                                <div class="card mt-5"> <!-- Card container -->
                                                    <div class="card-body">
                                                        <h2 class="text-center">Applied Candidates</h2>
                                                        <div class="text-right mb-3">
                                                            <a href="{{ route('jobForm') }}" class="btn btn-primary">Add New Job</a>
                                                        </div>
                                                        <div class="table-responsive"> <!-- Responsive Table Container -->
                                                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>Name</th>
                                                                        <th>Email</th>
                                                                        <th>Phone Number</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($data as $job)
                                                                        <tr>
                                                                            <td>{{ $job->registrationNumber }}</td>
                                                                            <td>{{ $job->name }}</td>
                                                                            <td>{{ $job->email }}</td>
                                                                            <td>
                                                                               {{$job->phoneNumber}}
                                                                            </td>
                                                                            <td>
                                                                                <a href="{{ asset($job->image) }}" class="btn btn-primary btn-sm" target="_blank">Image</a>

                                                                                <a href="{{ route('candidate.profile',$job->id) }}" class="btn btn-primary btn-sm">Profile</a>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div> <!-- End of Responsive Table Container -->
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
