@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4 fw-bold text-success">
            Projects I've Worked On
        </h1>
        <hr>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($projects as $index => $project)
                <div class="col d-flex">
                    <div class="card project-box {{ $project['bgColor'] }} flex-fill d-flex flex-column">

                        {{-- @if (!empty($project['images']))
                            <img src="{{ $project['images'][0] }}" class="card-img-top rounded-top img-fluid" alt="Project image">
                        @endif --}}

                        <div class="card-body d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-person-circle text-muted me-2"></i>
                                <span class="text-muted small">Owner:
                                    @if ($project['owner'] == 'me')
                                        <span class="text-success fw-bold">Myself</span>
                                    @else
                                        <span class="text-primary fw-bold">{{ $project['owner'] }}</span>
                                    @endif
                                </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2 flex-wrap">
                                <h3 class="card-title text-accent fw-bold mb-0">{{ $project['title'] }}</h3>
                                @if (!empty($project['logo']))
                                    <img src="{{ asset('public/' . $project['logo']) }}"
                                        alt="{{ $project['title'] }} logo"
                                        class="project-logo ms-md-3 mt-2 mt-md-0">
                                @endif
                            </div>

                            <p class="card-text text-muted font-inter">{{ $project['description'] }}</p>

                            <div class="bg-taggroup rounded p-3 my-3">
                                <div class="d-flex flex-wrap gap-2">
                                    @foreach ($project['technologies'] as $tech)
                                        <span
                                            class="bg-tag border border-tag-border text-tag-text px-3 py-1 small rounded-pill font-inter">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                            @if (!empty($project['link']))
                            <div class="mt-auto pt-2">
                                <a href="{{ $project['link'] }}" target="_blank" rel="noopener noreferrer"
                                    class="btn btn-success font-merriweather w-100">
                                    Go to page
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const animatedElements = document.querySelectorAll(".animate");

            const observer = new IntersectionObserver(
                entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("visible");
                        } else {
                            entry.target.classList.remove("visible");
                        }
                    });
                }, {
                    threshold: 0.2,
                    rootMargin: "0px 0px -50px 0px"
                }
            );

            animatedElements.forEach(element => {
                observer.observe(element);
            });
        });
    </script>
@endsection
