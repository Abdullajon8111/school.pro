@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-lg-12">

                <div class="card animate__animated animate__fadeInUp">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                @include('ak-khk.soni')
                            </div>

                            <div class="col-lg-6">
                                @include('ak-khk.quvati')
                            </div>

                        </div>
                    </div>
                    @include('ak-khk.soni-more')
                </div>
            </div>



            <div class="col-lg-12">
                <div class="card animate__animated animate__fadeInUp">
                    <div class="card-body">
                        @include('ak-khk.pedagoklar-soni')
                    </div>
                    @include('ak-khk.pedagok-more')
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card animate__animated animate__fadeInUp">
                    <div class="card-body">
                        <h6 class="text-center">Professional taʼlim muassasalarida soʻngi ikki oʻquv yilida qabul rejalarining bajarilish holati</h6>
                        <div class="row">
                            <div class="col-lg-6">
                                @include('ak-khk.qabul-2020-2021')
                            </div>

                            <div class="col-lg-6">
                                @include('ak-khk.qabul-2021-2022')
                            </div>
                        </div>
                    </div>

                    @include('ak-khk.qabul-more')
                </div>
            </div>

        </div>
    </div>
@endsection
