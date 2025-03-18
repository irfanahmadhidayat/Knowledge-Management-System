<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('dashboard') }}">
            <span class="align-middle">KMS-KONVEKSI</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-item {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">Dashboard</span>
                </a>
            </li>
            @hasanyrole('admin|hr')
                <li class="sidebar-item {{ Request::is('user*') || Request::is('role*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#userManagement"
                        class="sidebar-link {{ Request::is('user*') || Request::is('role*') ? 'active' : '' }}"
                        aria-expanded="{{ Request::is('user*') || Request::is('role*') ? 'true' : 'false' }}">
                        <i class="align-middle" data-feather="users"></i> <span class="align-middle">User Management</span>
                        <i class="align-middle" data-feather="chevron-down"></i>
                    </a>
                    <ul id="userManagement"
                        class="sidebar-dropdown list-unstyled collapse {{ Request::is('user*') || Request::is('role*') ? 'show' : '' }}"
                        data-bs-parent="#sidebar">
                        <li class="sidebar-item {{ Request::is('user*') ? 'active' : '' }}">
                            <a class="sidebar-link" href="{{ route('user.index') }}">
                                <i class="align-middle" data-feather="user"></i> <span class="align-middle">Users</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ Request::is('role*') ? 'active' : '' }}">
                            <a class="sidebar-link" href="{{ route('role.index') }}">
                                <i class="align-middle" data-feather="shield"></i> <span class="align-middle">Roles</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endhasanyrole
        </ul>
    </div>
</nav>
