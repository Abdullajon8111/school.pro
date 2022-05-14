@extends(backpack_view('blank'))

@section('content')
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-tab-1" data-toggle="pill" href="#pills-1" role="tab">
                1ж-мактаб
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-tab-2" data-toggle="pill" href="#pills-2" role="tab">
                2ж-ўқувчи
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-tab-3" data-toggle="pill" href="#pills-3" role="tab">
                3ж-талим тили
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-tab-4" data-toggle="pill" href="#pills-4" role="tab">
                4ж-ихт
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-tab-5" data-toggle="pill" href="#pills-5" role="tab">
                5ж-жойлашув
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-tab-6" data-toggle="pill" href="#pills-6" role="tab">
                6ж-филиал
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-tab-7" data-toggle="pill" href="#pills-7" role="tab">
                7ж-қизлар
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-tab-8" data-toggle="pill" href="#pills-8" role="tab">
                8ж-чет тили
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-tab-9" data-toggle="pill" href="#pills-9" role="tab">
                9ж-бошқа чет тили
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-tab-10" data-toggle="pill" href="#pills-10" role="tab">
                10ж-смена
            </a>
        </li>
    </ul>

    <div class="tab-content shadow mb-5" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-1" role="tabpanel">
            @include('dashboard.tab-1.tab')
        </div>

        <div class="tab-pane fade" id="pills-2" role="tabpanel">
            @include('dashboard.tab-2.tab')
        </div>

        <div class="tab-pane fade" id="pills-3" role="tabpanel">
            @include('dashboard.tab-3.tab')
        </div>

        <div class="tab-pane fade" id="pills-4" role="tabpanel">
            @include('dashboard.tab-4.tab')
        </div>

        <div class="tab-pane fade" id="pills-5" role="tabpanel">
            @include('dashboard.tab-5.tab')
        </div>

        <div class="tab-pane fade" id="pills-6" role="tabpanel">
            @include('dashboard.tab-6.tab')
        </div>

        <div class="tab-pane fade" id="pills-7" role="tabpanel">
            @include('dashboard.tab-7.tab')
        </div>

        <div class="tab-pane fade" id="pills-8" role="tabpanel">
            @include('dashboard.tab-8.tab')
        </div>

        <div class="tab-pane fade" id="pills-9" role="tabpanel">
            @include('dashboard.tab-9.tab')
        </div>

        <div class="tab-pane fade" id="pills-10" role="tabpanel">
            @include('dashboard.tab-10.tab')
        </div>
    </div>


@endsection

@section('after_scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
