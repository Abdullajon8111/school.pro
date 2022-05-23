<h4 class="p-3 text-center">
    "2021-2022 ўқув йилида халқ таълими тизимидаги умумий ўрта таълим мактабларида
    таълим олиш тили бўйича мактаблар сони ҳақида маълумот (2021 йил 6 сентябрь ҳолатига)"
</h4>

<div class="row">
    <div class="col-lg-12">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" data-toggle="tab" href="#nav-tab-3-table" role="tab">Table</a>
                <a class="nav-item nav-link" data-toggle="tab" href="#nav-tab-3-chart" role="tab">Chart</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-tab-3-table" role="tabpanel" >
                @include('dashboard.tab-3.table')
            </div>
            <div class="tab-pane fade" id="nav-tab-3-chart" role="tabpanel" style="max-height: 1056px">
                @include('dashboard.tab-3.chart')
            </div>
        </div>
    </div>
</div>
