<!-- =================================================== -->
<!-- ========== Top menu items (ordered left) ========== -->
<!-- =================================================== -->
<ul class="nav navbar-nav d-md-down-none">
    @include(backpack_view('inc.topbar_left_content'))
</ul>
<!-- ========== End of top menu left items ========== -->


<!-- ========================================================= -->
<!-- ========= Top menu right items (ordered right) ========== -->
<!-- ========================================================= -->
<ul class="nav navbar-nav ml-auto @if(config('backpack.base.html_direction') == 'rtl') mr-0 @endif">
    <!-- Topbar. Contains the right part -->
    @include('partials.topbar_right_content')
</ul>
<!-- ========== End of top menu right items ========== -->
