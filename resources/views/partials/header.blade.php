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
                <div class="col-lg-6 d-flex justify-content-end">
                    <div class="d-flex justify-content-end align-items-end mb-3">
                        <a class="btn text-white bg-twitter social rounded-circle mr-2">
                            <i class="la la-telegram"></i>
                        </a>

                        <a class="btn text-white bg-facebook social rounded-circle mr-2">
                            <i class="la la-facebook"></i>
                        </a>

                        <a class="btn text-white bg-pink social rounded-circle mr-2">
                            <i class="la la-instagram"></i>
                        </a>

                        <a class="btn text-white bg-linkedin social rounded-circle mr-2">
                            <i class="la la-twitter"></i>
                        </a>

                        <a class="btn text-white bg-youtube social rounded-circle mr-2">
                            <i class="la la-youtube"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 text-right">

                    <h4 class="mb-0">Inspeksiya telefoni</h4>
                    <a class="h3 font-weight-bold" href="tel:+998712310753">
                        +998 71 231-07-53
                    </a>
                    <br>
                    <a href="https://tdi.uz/uz/stop-corruption/create" class="btn btn-block btn-warning mt-2">
                        <span class="badge badge-danger font-lg" style="margin-top: 1px">
                            <i class="la la-hand-paper"></i>
                        </span>
                        <span>STOP-KORRUPSIYA!</span>
                    </a>
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
                <a class="nav-link" href="#">Maktabgacha ta'lim muassasalari </a>
                <a class="nav-link" href="{{ route('school.index') }}">Umumiy o'rta talim muassasalari</a>
                <a class="nav-link" href="{{ route('ak-khk.index') }}">O'rta-maxsus ta'lim muassasalari</a>
                <a class="nav-link" href="#">Oliy ta'lim ta'lim muassasalari</a>
                <a class="nav-link" href="#">Malaka oshirish institutlari</a>
                <a class="nav-link" href="#">Nodavlat ta'lim muassasalari</a>
            </div>
        </div>
    </div>
</nav>
