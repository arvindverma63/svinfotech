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
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Add New Course</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <!-- Updated form action -->
                                                        <form id="jobForm" action="{{ route('admin.jobs.store') }}"
                                                            method="POST">
                                                            @csrf

                                                            <!-- Job Title -->

                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="title">Course Title <span
                                                                                class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            id="title" name="title" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <!-- Location -->
                                                                    <div class="form-group">
                                                                        <label for="type">Type <span
                                                                                class="text-danger">*</span></label>
                                                                        <select name="type" id="" class="form-control">
                                                                            <option selected>------Select--------
                                                                            </option>
                                                                            <option value="Internship">Internship
                                                                            </option>
                                                                            <option value="Summer Trainning">Summer
                                                                                Trainning</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Job Details -->
                                                            <div class="form-group">
                                                                <label for="details">Details <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="details" name="details" required>
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="hidden" class="form-control"
                                                                    id="name" name="name" value="JOB"
                                                                    required>
                                                            </div>



                                                            <!-- Job Description -->
                                                            <div class="form-group">
                                                                <label for="description">Description <span
                                                                        class="text-danger">*</span></label>
                                                                <div id="description-editor" style="height: 200px;">
                                                                </div>
                                                                <input type="hidden" name="description"
                                                                    id="description">
                                                            </div>

                                                            <!-- Active Status -->
                                                            <input type="hidden" name="active" id="active">

                                                            <div class="row">
                                                                <div class="col">

                                                                    <!-- Experience in Years -->
                                                                    <div class="form-group">
                                                                        <label for="exInYear">Duration (Years) <span
                                                                                class="text-danger">*</span></label>
                                                                        <input type="number" class="form-control"
                                                                            id="exInYear" name="exInYear"
                                                                            min="0" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <!-- Experience in Months -->
                                                                    <div class="form-group">
                                                                        <label for="exInMonth">Duration (Months) <span
                                                                                class="text-danger">*</span></label>
                                                                        <input type="number" class="form-control"
                                                                            id="exInMonth" name="exInMonth"
                                                                            min="0" max="11" required>
                                                                    </div>
                                                                </div>
                                                            </div>




                                                            <!-- Submit Buttons -->
                                                            <button type="button" onclick="confirmFormSubmission(0)"
                                                                class="btn btn-primary">SAVE</button>
                                                            <button type="button" onclick="showPreview()"
                                                                class="btn btn-secondary">Preview</button>
                                                            <button type="button" onclick="confirmFormSubmission(1)"
                                                                class="btn btn-success">SAVE & POST</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Preview Modal -->
                                    <div class="modal fade" id="previewModal" tabindex="-1" role="dialog"
                                        aria-labelledby="previewModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="previewModalLabel">Course Preview</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>Type</strong> <span id="previewName"></span></p>
                                                    <p><strong>Course Title:</strong> <span id="previewTitle"></span></p>
                                                    <p><strong>Details:</strong> <span id="previewDetails"></span></p>
                                                    <p><strong>Location:</strong> <span id="previewLocation"></span>
                                                    </p>
                                                    <p style="border: 1px solid black; padding: 10px;">
                                                        <strong>Description:</strong> <span
                                                            id="previewDescription"></span></p>
                                                    <p><strong>Experience:</strong> <span
                                                            id="previewExperience"></span></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
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

    <!-- SweetAlert2 and Quill JS -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Initialize Quill Editor -->
    <script>
        // Define quill globally
        var quill;

        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Quill editor in global scope
            quill = new Quill('#description-editor', {
                theme: 'snow'
            });
        });

        // Update the hidden description input with Quill content
        function updateDescription() {
            document.querySelector('#description').value = quill.root.innerHTML;
        }

        // Show preview modal with job details
        function showPreview() {
            updateDescription(); // Ensure description is updated for preview
            document.getElementById('previewName').innerText = document.getElementById('name').value;
            document.getElementById('previewTitle').innerText = document.getElementById('title').value;
            document.getElementById('previewDetails').innerText = document.getElementById('details').value;
            document.getElementById('previewLocation').innerText = document.getElementById('location').value;
            document.getElementById('previewDescription').innerHTML = quill.root.innerHTML;
            document.getElementById('previewExperience').innerText = document.getElementById('exInYear').value +
                ' Years, ' + document.getElementById('exInMonth').value + ' Months';
            $('#previewModal').modal('show');
        }

        // SweetAlert confirmation before form submission
        function confirmFormSubmission(status) {
            Swal.fire({
                title: 'Are you sure?',
                text: status === 1 ? 'You are about to save and post this job.' :
                    'You are about to save this job as inactive.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, proceed',
                cancelButtonText: 'Cancel',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Set the active status
                    document.getElementById('active').value = status;

                    // Update the hidden description input with Quill content before submitting the form
                    updateDescription();

                    // Submit the form
                    document.getElementById('jobForm').submit();
                }
            });
        }
    </script>


    @include('Admin.partials.js')
</body>

<script>
    // SweetAlert for displaying success messages from session
    @if (session('success'))
        Swal.fire({
            title: 'Success!',
            text: "{{ session('success') }}",
            icon: 'success',
            confirmButtonText: 'OK'
        });
    @endif
</script>

</html>
