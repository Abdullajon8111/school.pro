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

            <div class="col-lg-12 mb-4">
                @include('mtt.1-2-table-more')
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        @include('mtt.sheet-2')
                    </div>
                    @include('mtt.sheet-2-more')
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        @include('mtt.sheet-6')
                    </div>
                    @include('mtt.sheet-6-more')
                </div>
            </div>
        </div>
    </div>
@endsection
