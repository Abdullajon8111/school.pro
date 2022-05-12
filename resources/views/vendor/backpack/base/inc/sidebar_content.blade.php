<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> School</a>
    <ul class="nav-dropdown-items">
        <li class="nav-title">Main cruds</li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('a-school') }}'><i class='nav-icon la la-question'></i> Schools</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('a-school-class') }}'><i class='nav-icon la la-question'></i> School classes</a></li>

        <hr class="w-100">

        <li class="nav-title">Helper cruds</li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('s-class') }}'><i class='nav-icon la la-question'></i> Classes</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('s-district') }}'><i class='nav-icon la la-question'></i> Districts</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('s-in-turn') }}'><i class='nav-icon la la-question'></i> In turns</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('s-koef') }}'><i class='nav-icon la la-question'></i> Koefs</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('s-language-type') }}'><i class='nav-icon la la-question'></i> Language types</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('s-location-type') }}'><i class='nav-icon la la-question'></i> Location types</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('s-province') }}'><i class='nav-icon la la-question'></i> Provinces</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('s-school-status') }}'><i class='nav-icon la la-question'></i> School statuses</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('s-school-type') }}'><i class='nav-icon la la-question'></i> School types</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('s-subject') }}'><i class='nav-icon la la-question'></i> Subjects</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('s-type-foreign-language') }}'><i class='nav-icon la la-question'></i> Foreign languages</a></li>
    </ul>
</li>


