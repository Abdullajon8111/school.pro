@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        @include('mtt.1-table')
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        @include('mtt.2-table')
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
