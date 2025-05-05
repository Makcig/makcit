<!-- resources/views/partials/header.blade.php -->
<!-- resources/views/partials/header.blade.php -->
<nav class="navbar navbar-expand-lg py-3 text-white" style="background: linear-gradient(90deg, #2dc7a7, #16233b);">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('public/LOGO.jpg') }}" alt="MakcIT" style="height: 40px; border-radius: 5px;">
        </a>


        <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse d-md-none" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('projects') ? 'active' : '' }}" href="{{ url('/projects') }}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('cv') ? 'active' : '' }}" href="{{ url('/cv') }}">Skills</a>
                </li>
            </ul>

            <div class="d-flex align-items-center">

                <div id="theme-toggle" class="theme-toggle-icon me-3" onclick="toggleTheme()">
                    <i id="moon-icon" class="fas fa-moon active"></i>
                    <i id="sun-icon" class="fas fa-sun"></i>
                </div>


                <button type="button" class="btn btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#messageModal">
                    <i class="fas fa-envelope"></i>
                    <span class="d-none d-sm-inline ms-2">Send message</span>
                </button>
            </div>
        </div>



    </div>
</nav>



{{-- @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif --}}

<!-- Modal window for sending a message -->
<div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <h5 class="modal-title" id="messageModalLabel">Send me a message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal body with form -->
            <div class="modal-body">
                <form action="{{ route('contact.store') }}" method="POST" id="contact-form">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required
                            value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required
                            value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3" required>{{ old('message') }}</textarea>
                    </div>

                    <input type="hidden" name="g-recaptcha-response" id="recaptcha-response">
                    <!-- Display validation errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- Modal footer buttons -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="submitForm(this)">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function submitForm(button) {
        const form = document.getElementById('contact-form'); // Get the form by ID

        grecaptcha.enterprise.ready(function() {
            grecaptcha.enterprise.execute('6LeXcHEqAAAAAAJ-o1ynEqaRKUVkTQ4yT4SVP7Op', {
                action: 'submit'
            }).then(function(token) {
                document.getElementById('recaptcha-response').value = token;
                form.submit(); // Submit the form
            });
        });
    }

    document.addEventListener("DOMContentLoaded", function() {
        @if ($errors->any())
            var messageModal = new bootstrap.Modal(document.getElementById('messageModal'));
            messageModal.show();
        @endif
    });
</script>
