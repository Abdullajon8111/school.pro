<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ config('backpack.base.html_direction') }}">
<head>
    <link rel="stylesheet" href="{{ asset('packages/line-awesome/dist/font-awesome-line-awesome/css/all.min.css') }}">
    @include(backpack_view('inc.head'))
    @yield('after_styles')
    @stack('after_styles')
</head>
<body class="app aside-menu-fixed">

@include('partials.header')

<div class="container-fluid p-5" style="padding-top: 0 !important;">
    @yield('content')
</div>

<footer class="app-footer sticky-footer d-none">
    @include('backpack::inc.footer')
</footer>

@yield('before_scripts')
@stack('before_scripts')

@include(backpack_view('inc.scripts'))

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@yield('after_scripts')
@stack('after_scripts')

</body>
</html>
