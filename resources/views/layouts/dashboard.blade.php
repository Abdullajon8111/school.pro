<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ config('backpack.base.html_direction') }}">
<head>
    <style>
        .header-logo {
            display: flex;
            align-items: center;
            transition: all 0.3s;
        }

        .header-logo img {
            width: 80px;
            height: auto;
        }

        .header-logo span {
            margin-left: 17px;
            padding-left: 23px;
            position: relative;
            color: #262626;
            font-size: 15px;
            transition: all 0.3s;
        }

        .header-logo span:before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            background: url("/imgages/flag.png") center no-repeat;
            background-size: auto 100%;
            height: 100%;
            width: 10px;
        }
    </style>
    @include(backpack_view('inc.head'))
</head>
<body class="app aside-menu-fixed">

<div class="container-fluid p-5">
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
