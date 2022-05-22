@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="card animate__animated animate__fadeInLeft">
                    <div class="card-body">
                        @include('ak-khk.soni')
                    </div>
                    <button class="btn btn-primary btn-block">Batafsil</button>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card card-body animate__animated animate__fadeInRight">
                    @include('ak-khk.quvati')
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card card-body animate__animated animate__fadeInUp">
                    @include('ak-khk.pedagoklar-soni')
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card card-body animate__animated animate__fadeInUp">
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
            </div>

        </div>
    </div>
@endsection
