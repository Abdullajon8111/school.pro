<div class="container-fluid px-5">
    <div class="row">
        <div class="col-2">
            <ul class="nav flex-column nav-pills mb-3" id="pills-tab" role="tablist" aria-orientation="vertical">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-tab-1" data-toggle="pill" href="#pills-1" role="tab">
                        Maktablar soni
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-tab-2" data-toggle="pill" href="#pills-2" role="tab">
                        O‘quvchilar soni
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-tab-3" data-toggle="pill" href="#pills-3" role="tab">
                        Ta'lim tili
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-tab-4" data-toggle="pill" href="#pills-4" role="tab">
                        Ixtisoslashtirilgan maktablar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-tab-5" data-toggle="pill" href="#pills-5" role="tab">
                        Maktablarning joylashuvi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-tab-6" data-toggle="pill" href="#pills-6" role="tab">
                        Maktablarning filiallari
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-tab-7" data-toggle="pill" href="#pills-7" role="tab">
                        O‘quvchilar soni qizlar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-tab-8" data-toggle="pill" href="#pills-8" role="tab">
                        Chet tillari o‘qitilishi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-tab-9" data-toggle="pill" href="#pills-9" role="tab">
                        Boshqa chet tillari o‘qitilishi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-tab-10" data-toggle="pill" href="#pills-10" role="tab">
                        Ta'lim olish navbatlari
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="pills-tab-11" data-toggle="pill" href="#pills-11" role="tab">
                        Maktablar koeffitsienti
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="pills-tab-12" data-toggle="pill" href="#pills-12" role="tab">
                        Maktablar quvvati
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-10">
            <div class="tab-content border-0 mb-5" id="pills-tabContent">
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

                <div class="tab-pane fade" id="pills-11" role="tabpanel">
                    @include('dashboard.tab-11.tab')
                </div>

                <div class="tab-pane fade" id="pills-12" role="tabpanel">
                    @include('dashboard.tab-12.tab')
                </div>
            </div>
        </div>
    </div>
</div>

