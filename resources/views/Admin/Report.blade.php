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
                                            <div class="col-md-12 col-xl-12"> <!-- Full width column -->
                                                <div class="card mt-5"> <!-- Card container -->
                                                    <div class="card-body">
                                                        <h2 class="text-center">Enquiries</h2>
                                                        <div class="table-responsive"> <!-- Responsive table wrapper -->
                                                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>Name</th>
                                                                        <th>Email</th>
                                                                        <th>Phone</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($data as $enq)
                                                                    <tr id="mail-row-{{ $enq->id }}">
                                                                        <td>{{ $enq->id }}</td>
                                                                        <td>{{ $enq->fullName }}</td>
                                                                        <td>{{ $enq->email }}</td>
                                                                        <td>{{ $enq->phoneNumber }}</td>
                                                                        <td class="text-center">
                                                                            <a href="{{ route('readMail', $enq->id) }}" class="btn btn-primary">Read</a>
                                                                            <button onclick="deleteMail({{ $enq->id }})" class="btn btn-danger">Delete</button>
                                                                        </td>
                                                                    </tr>

                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div> <!-- End of Responsive table wrapper -->
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if(session('success'))
        Swal.fire({
            title: 'Success!',
            text: "{{ session('success') }}",
            icon: 'success',
            confirmButtonText: 'OK'
        });
        @endif

        // Delete Mail with SweetAlert confirmation
        function deleteMail(mailId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "This action cannot be undone!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`{{ url('/delete/mail') }}/${mailId}`, {
                            method: 'GET',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Content-Type': 'application/json'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire(
                                    'Deleted!',
                                    data.message || 'The mail has been deleted.',
                                    'success'
                                ).then(() => {
                                    // Remove the row dynamically
                                    document.querySelector(`#mail-row-${mailId}`).remove();
                                });
                            } else {
                                Swal.fire(
                                    'Error!',
                                    data.message || 'Failed to delete the mail.',
                                    'error'
                                );
                            }
                        })
                        .catch(error => {
                            Swal.fire(
                                'Error!',
                                'Something went wrong. Please try again.',
                                'error'
                            );
                        });
                }
            });
        }
    </script>


    @include('Admin.partials.js')
</body>

</html>