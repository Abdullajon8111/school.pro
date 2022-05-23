<div class="bg-primary" style="height: 29px">

</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="d-flex">
                <img src="{{ asset('images/gerb.png') }}" alt="gerb" height="80">
                <img class="ml-3" src="{{ asset('images/flag.png') }}" alt="flag" height="80">
                <h6 class="ml-3 my-auto">
                    O‘ZBЕKISTON RЕSPUBLIKASI <br>
                    VAZIRLAR MAHKAMASI HUZURIDAGI <br>
                    TA’LIM SIFATINI NAZORAT QILISH <br>
                    DAVLAT INSPЕKSIYASI
                </h6>
            </div>

        </div>

        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6 text-right">

                    <h6 class="text-uppercase mb-0">Ta’lim muassasalari, pedagog xodimlar, ta’lim oluvchilar va boshqa axborotlar to‘g‘risida
                        yagona ma’lumotlar bazasi
                    </h6>

                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-white my-4 shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav text-center">
                <a class="nav-link" href="{{ route('mtt.index') }}">Maktabgacha ta'lim muassasalari </a>
                <a class="nav-link" href="{{ route('school.index') }}">Umumiy o'rta talim muassasalari</a>
                <a class="nav-link" href="{{ route('ak-khk.index') }}">Professional ta'lim muassasalari</a>
                <a class="nav-link" href="#">Oliy ta'lim muassasalari</a>
                <a class="nav-link" href="{{ route('kmo.index') }}">Malaka oshirish institutlari</a>
                <a class="nav-link" href="{{ route('ntt.index') }}">Nodavlat ta'lim muassasalari</a>
            </div>
        </div>
    </div>
</nav>
