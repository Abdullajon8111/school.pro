@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-body">
                    @include('ntt.bogcha-qisqa')
                </div>

            </div>

            <div class="col-lg-6">
                <div class="card card-body">
                    @include('ntt.bogcha-toliq')
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @include('ntt.filialsiz')
                    </div>

                    @include('ntt.filialsiz-more')
                </div>

            </div>

            <div class="col-lg-12">
                <div class="card card-body">
                    @include('ntt.filial')
                </div>
            </div>
        </div>
    </div>
@endsection
