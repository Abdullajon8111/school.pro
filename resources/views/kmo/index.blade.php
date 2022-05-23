@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card animate__animated animate__fadeInLeft">
                    <div class="card-body">
                        @include('kmo.2018')
                    </div>
                    @include('kmo.2018-more')
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card animate__animated animate__fadeInRight">
                    <div class="card-body">
                        @include('kmo.2019')
                    </div>
                    @include('kmo.2019-more')
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card animate__animated animate__fadeInLeft">
                    <div class="card-body">
                        @include('kmo.2020')
                    </div>
                    @include('kmo.2020-more')
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card animate__animated animate__fadeInRight">
                    <div class="card-body">
                        @include('kmo.2021')
                    </div>
                    @include('kmo.2021-more')
                </div>
            </div>
        </div>
    </div>
@endsection
