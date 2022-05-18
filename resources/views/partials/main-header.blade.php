
<header class="app-header bg-white border-0 navbar" style="min-height: 85px">
    <div class="container-fluid">
        <!-- Logo -->
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto ml-3" type="button" data-toggle="sidebar-show" aria-label="{{ trans('backpack::base.toggle_navigation')}}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="{{ url(config('backpack.base.home_link')) }}" title="{{ config('app.project_name') }}">
            <a href="https://tdi.uz/uz" class="header-logo">
                <img src="{{ asset('images/gerb.png') }}" alt="logo">
                <span>O‘ZBЕKISTON RЕSPUBLIKASI <br>
                      VAZIRLAR MAHKAMASI HUZURIDAGI <br>
                      TA’LIM SIFATINI NAZORAT QILISH <br>
                      DAVLAT INSPЕKSIYASI
                </span>
            </a>
        </a>

        @include('partials.menu')
    </div>
</header>
