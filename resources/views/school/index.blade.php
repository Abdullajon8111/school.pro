@extends('layouts.master')

@section('content')
    @include('home-page.school.index')

    <a href="{{ route('school.more') }}" class="btn btn-block btn-outline-primary">
        Batafsil ma'lumot ...
    </a>
@endsection

