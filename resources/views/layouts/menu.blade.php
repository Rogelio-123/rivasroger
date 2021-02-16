<!-- Sidebar -->

<ul class="navbar-nav fondo sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-icon rotate-n-15">
            {{-- <i class="fas fa-laugh-wink"></i>
            --}}
        </div>
        {{-- <div class="sidebar-brand-text mx-3">Rivas <sup>ERP</sup></div>
        --}}
        <img class="img-fluid" src="{{ asset('/img/logo_1.png') }}" alt="">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        {!! trans('messages.interface') !!}
    </div>


    @canany(['view_sales', 'create_sales', 'edit_sales', 'delete_sales'])
    <li class="nav-item">
        <a class="nav-link" href="/sales">
            <i class="fas fa-cash-register"></i>
            <span>{!! trans('messages.sales') !!}</span></a>
    </li>
    @endcan



    <!-- Nav Item - Utilities Collapse Menu -->
    @canany(['view_providers', 'create_providers', 'edit_providers', 'delete_providers', 'view_services',
    'create_services', 'edit_services', 'delete_services', 'view_finances', 'create_finances',
    'edit_finances', 'delete_finances', 'view_purchase', 'create_purchase', 'edit_purchase',
    'delete_purchase', 'view_expense', 'create_expense', 'edit_expense', 'delete_expense'])
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="far fa-handshake"></i>
            <span>{!! trans('messages.payments') !!}</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                @canany(['view_providers', 'create_providers', 'edit_providers', 'delete_providers'])
                <a class="collapse-item" href="/providers">Provider's</a>
                @endcan
            @canany(['view_services', 'create_services', 'edit_services', 'delete_services'])
            <a class="collapse-item" href="/services">Services</a>
        @endcan
        @canany(['view_finances', 'create_finances', 'edit_finances', 'delete_finances'])
        <a class="collapse-item" href="/finances">Finances</a>
        @endcan
        @canany(['view_purchase', 'create_purchase', 'edit_purchase', 'delete_purchase'])
        <a class="collapse-item" href="/shoppings">Purchase</a>
        @endcan
        @canany(['view_expense', 'create_expense', 'edit_expense', 'delete_expense'])
        <a class="collapse-item" href="/expenses">Expenses</a>
        @endcan
        </div>
        </div>
    </li>
    @endcan

@canany(['view_employ', 'create_employ', 'edit_employ', 'delete_employ', 'view_payroll',
'create_payroll', 'edit_payroll', 'delete_payroll'])
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="true"
aria-controls="collapseTwo">
<i class="fas fa-users"></i>
<span>{!! trans('messages.hr') !!}</span>
</a>
<div id="collapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
<h6 class="collapse-header">Custom Components:</h6>
@canany(['view_employ', 'create_employ', 'edit_employ', 'delete_employ'])
<a class="collapse-item" href="/hr-and-payroll">Employ</a>
@endcan
@canany(['view_payroll', 'create_payroll', 'edit_payroll', 'delete_payroll'])
<a class="collapse-item" href="/payrolls">Payroll</a>
@endcan
</div>
</div>
</li>
@endcan

@canany(['view_stock', 'create_stock', 'edit_stock', 'delete_stock', 'view_product', 'create_product',
'edit_product', 'delete_product'])
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
aria-controls="collapseTwo">
<i class="fas fa-boxes"></i>
<span>{!! trans('messages.inventory') !!}</span>
</a>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
<h6 class="collapse-header">Custom Components:</h6>
@canany(['view_stock', 'create_stock', 'edit_stock', 'delete_stock'])
<a class="collapse-item" href="/stock">Stock</a>
@endcan
@canany(['view_product', 'create_product', 'edit_product', 'delete_product'])
<a class="collapse-item" href="/products">Products</a>
@endcan
</div>
</div>
</li>
@endcan

@canany(['view_knowledge', 'create_knowledge', 'edit_knowledge', 'delete_knowledge'])
<li class="nav-item">
<a class="nav-link" href="/knowledge">
<i class="fas fa-book"></i>
<span>{!! trans('messages.knowledge') !!}</span></a>
</li>
@endcan

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
{!! trans('messages.addons') !!}
</div>

<!-- Nav Item - Pages Collapse Menu -->
@canany(['view_settings', 'create_settings', 'edit_settings', 'delete_settings'])
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
aria-controls="collapsePages">
<i class="fas fa-cog"></i>
<span>{!! trans('messages.settings') !!}</span>
</a>
<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
{{-- <h6 class="collapse-header">Login Screens:</h6>
<a class="collapse-item" href="login.html">Login</a>
<a class="collapse-item" href="register.html">Register</a>
<a class="collapse-item" href="forgot-password.html">Forgot Password</a>
<div class="collapse-divider"></div> --}}
<h6 class="collapse-header">Custom:</h6>
@canany(['view_settings', 'create_settings', 'edit_settings', 'delete_settings'])
<a class="collapse-item" href="/settings">Management</a>
@endcan
@canany(['view_users', 'create_users', 'edit_users', 'delete_users'])
<a class="collapse-item" href="/users">Users</a>
@endcan
@canany(['view_roles', 'create_roles', 'edit_roles', 'delete_roles'])
<a class="collapse-item" href="/roles">Roles</a>
@endcan
{{-- <a class="collapse-item" href="blank.html">Blank Page</a>
--}}
</div>
</div>
</li>
@endcan

<!-- Nav Item - Charts -->
{{-- <li class="nav-item">
<a class="nav-link" href="charts.html">
<i class="fas fa-fw fa-chart-area"></i>
<span>Charts</span></a>
</li> --}}

<!-- Nav Item - Tables -->
{{-- <li class="nav-item">
<a class="nav-link" href="tables.html">
<i class="fas fa-fw fa-table"></i>
<span>Tables</span></a>
</li> --}}

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
<button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->
<div class="sidebar-card">
<small>Desingn by B+Consulting</small>
</div>

</ul>
<!-- End of Sidebar -->
