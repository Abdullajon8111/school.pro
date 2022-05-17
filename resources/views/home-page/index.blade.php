@extends('layouts.dashboard')

@section('content')
    <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-preschool">
                {{ __('Pre-School') }}
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-school">
                {{ __('School') }}
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-universities">
                {{ __('Universities') }}
            </a>
        </li>
    </ul>

    <div class="tab-content bg-transparent border-0 shadow-none" id="pills-tabContent">
        <div class="tab-pane fade" id="pills-preschool" role="tabpanel">
            Pre School
        </div>

        <div class="tab-pane fade show active" id="pills-school" role="tabpanel">
            @include('home-page.school.index')
        </div>

        <div class="tab-pane fade" id="pills-universities" role="tabpanel">
            Universities
        </div>
    </div>
@endsection

@section('after_scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
