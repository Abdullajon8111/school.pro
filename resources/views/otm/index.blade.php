@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row mb-4">

            <div class="col-lg-6">
                @include('otm.map')
            </div>



            <div class="col-lg-6">
                @include('otm.chart-1')
            </div>

            <div class="col-lg-6">
                @include('otm.table-1')
            </div>

            <div class="col-lg-6">
                @include('otm.table-2')
            </div>
        </div>
    </div>
@endsection
