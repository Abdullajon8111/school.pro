@extends('layouts.master')

@section('content')

    <div class="container">
        <button type="button" class="btn btn-primary btn-block mb-4" data-toggle="modal" data-target="#more-modal">
            Batafsil malumot ...
        </button>

        @include('home-page.school.index')
    </div>
@endsection

@section('after_scripts')

    <!-- Modal -->
    <div class="modal fade" id="more-modal" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-dialog-centered" style="max-width: 97%" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    @include('school.more')
                </div>
            </div>
        </div>
    </div>
@endsection
