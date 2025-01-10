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
                                                        <h2 class="text-center">Courses</h2>
                                                        <div class="text-left mb-3">
                                                            <b>Total Course: </b>{{$total}}<br>
                                                            <b>Total Applied: </b>{{$totalApplied}}
                                                        </div>
                                                        <div class="text-right mb-3">
                                                            <a href="{{ route('jobForm') }}" class="btn btn-primary">Add New Course</a>
                                                        </div>
                                                        <div class="table-responsive"> <!-- Responsive Table Container -->
                                                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Course ID</th>
                                                                        <th>Name</th>
                                                                        <th>Details</th>
                                                                        <th>Active</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($data as $job)
                                                                        <tr>
                                                                            <td>{{ $job->id }}</td>
                                                                            <td><a href="{{ route('applied.grid', $job->id) }}">{{ $job->title }}</a></td>
                                                                            <td>{{ $job->details }}</td>
                                                                            <td>
                                                                                <label class="switch">
                                                                                    <input type="checkbox" {{ $job->active ? 'checked' : '' }} onclick="toggleStatus({{ $job->id }}, this)">
                                                                                    <span class="slider round"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td class="text-center" style="align-content: right;">
                                                                               <a href="{{ route('job.show', $job->id) }}" class="btn btn-primary btn-sm">View</a>
                                                                               <a href="{{ route('applied.grid', $job->id) }}" class="btn btn-primary btn-sm">Applied</a>
                                                                               <a href="{{ route('admin.edit', $job->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                                               <button onclick="deleteJob({{ $job->id }})" class="btn btn-danger btn-sm">Delete</button>
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

        // Toggle Job Status
        function toggleStatus(jobId, checkbox) {
            const status = checkbox.checked ? 1 : 0;

            // Send AJAX request to toggle status
            fetch(`/jobs/${jobId}/toggleStatus`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ active: status })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Job status updated successfully.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Failed to update job status.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });
        }

        // Delete Job with SweetAlert confirmation
        function deleteJob(jobId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`/jobs/${jobId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            Swal.fire(
                                'Deleted!',
                                'The job has been deleted.',
                                'success'
                            ).then(() => {
                                location.reload();
                            });
                        } else {
                            Swal.fire(
                                'Error!',
                                'Failed to delete the job.',
                                'error'
                            );
                        }
                    });
                }
            });
        }
    </script>

    @include('Admin.partials.js')
    <style>
        /* Toggle Switch Styles */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }
    </style>
</body>
</html>
