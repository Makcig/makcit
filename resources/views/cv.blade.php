@extends('layouts.app')

@section('content')
    <div class="container py-5">

        {{-- 🔷 Персональная информация --}}
        <div class="about-section text-center mb-3 project-box">
            <h1 class="fw-bold text-center text-success">Maxim Koskela</h1>
            <p class="text-center text-muted">
                I'm an enthusiastic and detail-oriented IT engineer with a strong passion for building meaningful digital
                experiences.
                After completing my university degree in 2023, I’ve been actively working as a full-stack developer since
                2022,
                primarily focusing on PHP and JavaScript technologies. From backend logic to dynamic front-end interfaces, I
                enjoy
                creating clean, efficient, and maintainable code. I'm always eager to learn and grow, constantly seeking new
                challenges
                and opportunities to improve my skills in both development and design.
            </p>
        </div>

        <div class="row g-4" style="display: flex;">

            {{-- 🔧 TECHNOLOGIES --}}
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
                <div class="card project-box flex-fill d-flex flex-column card-bg-7">
                    <h3 class="fw-bold text-primary mb-3">Technologies</h3>
                    <div class="row">
                        @foreach ($skills->where('type', 'Technology')->sortByDesc('level') as $skill)
                            <div class="col-6 mb-4">
                                <div class="fw-semibold mb-1">{{ $skill->name }}</div>
                                <div class="progress" style="height: 8px; background-color: transparent;">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <div class="progress-segment"
                                            data-filled="{{ $i <= $skill->level ? 'true' : 'false' }}"
                                            style="
                                            transition-delay: {{ ($i - 1) * 0.1 }}s;
                                            border-right: {{ $i < 5 ? '1px solid var(--progress-border)' : 'none' }};
                                        ">
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


            {{-- 🌐 LANGUAGES --}}
            <div class="col d-flex">
                <div class="card project-box flex-fill d-flex flex-column card-bg-7 ">
                    <h3 class="fw-bold text-primary mb-3">Languages</h3>
                    @foreach ($skills->where('type', 'Language')->sortByDesc('level') as $skill)
                        <div class="mb-4">
                            <div class="fw-semibold mb-1">{{ $skill->name }}</div>
                            <div class="progress" style="height: 8px; background-color: transparent;">
                                @for ($i = 1; $i <= 5; $i++)
                                    <div class="progress-segment" data-filled="{{ $i <= $skill->level ? 'true' : 'false' }}"
                                        style="
                                        transition-delay: {{ ($i - 1) * 0.1 }}s;
                                        border-right: {{ $i < 5 ? '1px solid var(--progress-border)' : 'none' }};
                                    ">
                                    </div>
                                @endfor
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- 💼 JOBS --}}
            <div class="col d-flex">
                <div class="card project-box flex-fill d-flex flex-column card-bg-7 ">
                    <h3 class="fw-bold text-primary mb-3">Jobs</h3>
                    @foreach ($skills->where('type', 'Job')->sortBy(function ($skill) {
            return $skill->end_date ? -strtotime($skill->end_date) : PHP_INT_MIN;
        }) as $skill)
                        <div class="mb-3">
                            <div class="fw-semibold">{{ $skill->name }}</div>
                            <small class="text-muted">
                                {{ \Carbon\Carbon::parse($skill->start_date)->format('Y') }}
                                –
                                {{ $skill->end_date ? \Carbon\Carbon::parse($skill->end_date)->format('Y') : 'present' }}
                            </small>
                            @if ($skill->description)
                                <p class="mb-0 text-muted small">{{ $skill->description }}</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- 🎓 EDUCATION --}}
            <div class="col d-flex">
                <div class="card project-box flex-fill d-flex flex-column card-bg-7 ">
                    <h3 class="fw-bold text-primary mb-3">Education</h3>
                    @foreach ($skills->where('type', 'Scool')->sortByDesc('start_date') as $skill)
                        <div class="mb-3">
                            <div class="fw-semibold">{{ $skill->name }}</div>
                            <small class="text-muted">
                                {{ \Carbon\Carbon::parse($skill->start_date)->format('Y') }}
                                –
                                {{ $skill->end_date ? \Carbon\Carbon::parse($skill->end_date)->format('Y') : 'present' }}
                            </small>
                            <p class="mb-0 text-muted small">{{ $skill->description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const progressCards = document.querySelectorAll(".project-box");

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("animate-fill");
                        observer.unobserve(entry.target); // один раз
                    }
                });
            }, {
                threshold: 0.2,
            });

            progressCards.forEach(card => observer.observe(card));
        });
    </script>
@endsection
