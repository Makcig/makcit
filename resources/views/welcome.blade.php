<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('title', 'makcIT.fi - Portfolio Website')

@section('content')

    <div class="container my-5" style="padding: 0 20px;">

        <!-- Profile -->
        <section class="text-center mb-2 animate fade-in py-5">
            <img src="{{ asset('public/profile_image.jpg') }}" alt="Profile Picture"
                class="rounded-circle img-thumbnail mb-3 profile-img animate fade-in"
                style="width: 150px; height: 150px; cursor: zoom-in;" onclick="openImageViewer(this.src)">
            <h1 class="fw-bold text-success animate slide-left">Maxim Koskela</h1>
            <p class="text-muted animate slide-right">IT Engineer | Software and Web Developer | Problem Solver</p>
        </section>

        <section id="about-all" class="text-center mb-3 animate fade-in py-5">
            <h2 class="text-success animate rotate">
                <i class="fas fa-user-circle me-2"></i> Who I Am and What I Do
            </h2>
            <div class="row justify-content-center">
                <!-- About Me -->
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm animate scale-up card-bg-8 h-100">
                        <div class="card-body">
                            <h5 class="text-success">About Me</h5>
                            <p>
                                I'm an IT Engineer passionate about software development and problem-solving.
                                I specialize in <strong>PHP, JavaScript, and SQL</strong>, and enjoy creating scalable,
                                user-friendly solutions.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Experience -->
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm animate scale-up card-bg-8 h-100">
                        <div class="card-body">
                            <h5 class="text-success">Experience</h5>
                            <p>
                                Full-stack PHP developer since 2022. I’ve maintained and expanded PHP-based systems,
                                including migrating a legacy Windows application to the web. I focus on long-term code
                                quality, feature development, and solving complex backend/frontend issues.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- AI Development -->
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm animate scale-up card-bg-8 h-100">
                        <div class="card-body">
                            <h5 class="text-success">AI-Powered Development</h5>
                            <p>
                                I use <strong>AI and neural networks</strong> to enhance development workflows,
                                accelerate delivery, and improve software quality across multiple tech stacks.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- For Companies -->
        <section id="for-companies" class="text-center mb-5 animate fade-in py-5">
            <h2 class="text-primary animate rotate">For Companies & Teams</h2>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow-lg border-0 card-bg-6 p-4 animate slide-up">
                        <div class="card-body">
                            <p class="fs-5 mb-4">
                                Are you looking for a reliable <strong>Web or Software Developer</strong> to join
                                your team?
                                I’m open to long-term cooperation with companies that value clean code, scalable
                                architecture, and responsible development.
                            </p>
                            <p class="fs-5 mb-4">
                                With over 3 years of hands-on experience, a degree in engineering, and a strong background
                                in Laravel or PHP, JavaScript, and modern web technologies, I can contribute both
                                independently and
                                within a team.
                            </p>
                            <p class="fs-5 mb-4">
                                Let’s discuss how I can help you achieve your business goals. I’m open to interviews,
                                project-based work, or permanent roles.
                                Compensation depends on task complexity and responsibility level.
                            </p>
                            <p class="fs-5 mb-4">
                                You can explore some of my projects and technical skills through the <a
                                    href="projects">Projects</a> and <a href="cv">Skills</a> sections.
                            </p>
                            <p class="text-success fw-bold fs-5 mt-3">
                                Available for both local opportunities in Kuopio or North Savo, and remote work.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="text-center mb-3 animate fade-in py-5">
            <h2 class="text-success animate rotate">My Services</h2>
            <p class="lead mx-auto animate scale-up" style="max-width: 800px;">
                I offer a range of development services to bring your ideas to life, enhance existing projects, and ensure
                secure, scalable and modern solutions.
            </p>

            <div class="row justify-content-center">

                <!-- Full Project Development -->
                <div class="col-md-6 mb-4">
                    <div
                        class="card service-box shadow-sm service-card animate slide-left card-bg-1 h-100 d-flex flex-column">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><i class="fas fa-lightbulb text-success"></i> Full Project Development
                            </h5>
                            <p class="card-text pt-3">From planning to deployment, I build fully functional, scalable web
                                applications from scratch.</p>
                            <p class="mt-3 text-success fw-bold fs-4">From 800€</p>
                        </div>
                    </div>
                </div>

                <!-- Simple Website -->
                <div class="col-md-6 mb-4">
                    <div
                        class="card service-box shadow-sm service-card animate slide-right card-bg-1 h-100 d-flex flex-column">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><i class="fas fa-globe text-primary"></i> Simple Website</h5>
                            <p class="card-text  pt-3">Landing pages, portfolios, or small business websites built fast and
                                clean.
                            </p>
                            <p class="mt-3 text-success fw-bold fs-4 pt-4">From 150€</p>
                        </div>
                    </div>
                </div>

                <!-- Secure Website -->
                <div class="col-md-6 mb-4">
                    <div
                        class="card service-box shadow-sm service-card animate slide-left card-bg-1 h-100 d-flex flex-column">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><i class="fas fa-shield-alt text-info"></i> Secure Website</h5>
                            <p class="card-text  pt-3">Includes reCAPTCHA, input validation, CSRF protection, and other best
                                practices to prevent injections and attacks.</p>
                            <p class="mt-3 text-success fw-bold fs-4">From 40€</p>
                        </div>
                    </div>
                </div>

                <!-- Feature Enhancements -->
                <div class="col-md-6 mb-4">
                    <div
                        class="card service-box shadow-sm service-card animate slide-right card-bg-1 h-100 d-flex flex-column">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><i class="fas fa-tools text-success"></i> Feature Enhancements</h5>
                            <p class="card-text  pt-3">Add modern features like Google Maps, charts, new components, or
                                optimize
                                performance.</p>
                            <p class="mt-3 text-success fw-bold fs-4">From 150€</p>
                        </div>
                    </div>
                </div>

                <!-- Bug Fixing -->
                <div class="col-md-6 mb-4">
                    <div
                        class="card service-box shadow-sm service-card animate slide-left card-bg-1 h-100 d-flex flex-column">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><i class="fas fa-bug text-danger"></i> Bug Fixing</h5>
                            <p class="card-text  pt-3">Identify and resolve errors to ensure smooth and reliable
                                functionality.
                            </p>
                            <p class="mt-3 text-success fw-bold fs-4">From 50€</p>
                        </div>
                    </div>
                </div>

                <!-- API Integration -->
                <div class="col-md-6 mb-4">
                    <div
                        class="card service-box shadow-sm service-card animate slide-right card-bg-1 h-100 d-flex flex-column">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><i class="fas fa-link text-primary"></i> API Integration</h5>
                            <p class="card-text  pt-3">Connect your app to third-party services via secure and documented
                                APIs.
                            </p>
                            <p class="mt-3 text-success fw-bold fs-4">From 200€</p>
                        </div>
                    </div>
                </div>

                <!-- Database Expansion -->
                <div class="col-md-6 mb-4">
                    <div
                        class="card service-box shadow-sm service-card animate slide-left card-bg-1 h-100 d-flex flex-column">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><i class="fas fa-database text-warning"></i> Database Expansion</h5>
                            <p class="card-text  pt-3">Add new models, fields, or relationships to match evolving business
                                needs.
                            </p>
                            <p class="text-success fw-bold  fs-4">From 100€</p>
                        </div>
                    </div>
                </div>

                <!-- Custom Request -->
                <div class="col-md-6 mb-4">
                    <div
                        class="card service-box shadow-sm service-card animate slide-right card-bg-1 h-100 d-flex flex-column">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-code text-secondary"></i> And Much More...</h5>
                            <p class="card-text  pt-3">Need something unique? Let’s talk about your idea.</p>
                            <p class="mt-3 text-success fw-bold fs-5">Custom quote</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!-- Contact Information -->
        <section id="contact" class="text-center animate fade-in py-5">
            <h2 class="text-success animate rotate">Get in Touch</h2>
            <p class="mb-4 animate slide-left">
                Interested in working together? Feel free to send me a message directly, email me, or connect with me on
                LinkedIn.
            </p>
            <button type="button" class="btn btn-success mt-3 animate scale-up" data-bs-toggle="modal"
                data-bs-target="#messageModal">
                Send me a message
            </button>
            <a href="mailto:niidel@gmail.com" class="btn btn-outline-success mt-3 animate slide-right">Send me an
                Email</a>
            <a href="https://www.linkedin.com/in/makcig/" class="btn btn-outline-success mt-3 animate slide-left"
                target="_blank" rel="noopener noreferrer">
                Connect on LinkedIn
            </a>
        </section>
    </div>

    <div id="image-viewer" class="image-viewer">
        <span class="image-close" onclick="closeImageViewer()">&times;</span>
        <img id="viewer-img" src="" alt="Expanded Image" onclick="closeImageViewer()">
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const animatedElements = document.querySelectorAll(".animate");

            const visibilityMap = new Map();

            const observer = new IntersectionObserver(
                entries => {
                    entries.forEach(entry => {
                        const isVisible = visibilityMap.get(entry.target) || false;

                        if (entry.isIntersecting && !isVisible) {
                            entry.target.classList.add("visible");
                            visibilityMap.set(entry.target, true);
                        } else if (!entry.isIntersecting && isVisible) {
                            entry.target.classList.remove("visible");
                            visibilityMap.set(entry.target, false);
                        }
                    });
                }, {
                    threshold: 0.05, // 🔽 появление при 5% вхождения
                    rootMargin: "100px 0px 0px 0px" // 🔼 срабатывает ещё до попадания в viewport
                }
            );


            animatedElements.forEach(element => {
                visibilityMap.set(element, false);
                observer.observe(element);
            });
        });


        function openImageViewer(src) {
            const viewer = document.getElementById("image-viewer");
            const viewerImg = document.getElementById("viewer-img");
            viewerImg.src = src;
            viewer.classList.add("active");
            document.body.classList.add("no-scroll");
        }

        function closeImageViewer() {
            const viewer = document.getElementById("image-viewer");
            viewer.classList.remove("active");
            document.body.classList.remove("no-scroll");
        }

        document.addEventListener("click", function(e) {
            const viewer = document.getElementById("image-viewer");
            if (e.target === viewer) {
                closeImageViewer();
            }
        });
    </script>

@endsection
