<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">POS Systems</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">POS</a>
        </div>
        <ul class="sidebar-menu">
            {{-- <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ route('home') }}">General Dashboard</a>
                    </li>
                </ul>
            </li> --}}

            <li>
                <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
            </li>

            {{-- <li class="menu-header">User</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>User</span></a>
                <ul class="dropdown-menu"> --}}
            <li>
                <a class="nav-link" href="{{ route('user.index') }}"><i class="fas fa-user"></i><span>User</span></a>
            </li>

            <li>
                <a class="nav-link" href="{{ route('product.index') }}"><i class="fas fa-shopping-bag"></i><span>Product</span></a>
            </li>
            {{-- </ul>
            </li> --}}

    </aside>
</div>
