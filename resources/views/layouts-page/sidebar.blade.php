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
                <li class="sidebar-item {{ Request::routeIs('kebijakan.index') ? 'active' : '' }}">
                    <a class="sidebar-link" href="{{ route('kebijakan.index') }}">
                        <i class="align-middle" data-feather="file-text"></i>
                        <span class="align-middle">Kebijakan</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::routeIs('material.index') ? 'active' : '' }}">
                    <a class="sidebar-link" href="{{ route('material.index') }}">
                        <i class="align-middle" data-feather="book"></i>
                        <span class="align-middle">Material</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::routeIs('penugasan.index') ? 'active' : '' }}">
                    <a class="sidebar-link" href="{{ route('penugasan.index') }}">
                        <i class="align-middle" data-feather="clipboard"></i>
                        <span class="align-middle">Penugasan</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::is('hasil-penugasan*') ? 'active' : '' }}">
                    <a class="sidebar-link" href="{{ route('hasil-penugasan.index') }}">
                        <i class="align-middle" data-feather="check-square"></i>
                        <span class="align-middle">Hasil Tugas</span>
                    </a>
                </li>
            @endhasanyrole

            <!-- Divisi Design -->
            @hasanyrole('admin|design')
                <li
                    class="sidebar-item 
                {{ Request::is('design-material*') || Request::is('design-penugasan*') ? 'active' : '' }}">

                    <a data-bs-toggle="collapse" href="#designManagement"
                        class="sidebar-link {{ Request::is('design-material*') || Request::is('design-penugasan*') ? 'active' : '' }}"
                        aria-expanded="{{ Request::is('design-material*') || Request::is('design-penugasan*') ? 'true' : 'false' }}">

                        <i class="align-middle" data-feather="layers"></i>
                        <span class="align-middle">Divisi Design</span>
                        <i class="align-middle" data-feather="chevron-down"></i>
                    </a>

                    <ul id="designManagement"
                        class="sidebar-dropdown list-unstyled collapse 
                    {{ Request::is('design-material*') || Request::is('design-penugasan*') ? 'show' : '' }}"
                        data-bs-parent="#sidebar">

                        <!-- Materi -->
                        <li class="sidebar-item {{ Request::is('design-material*') ? 'active' : '' }}">
                            <a class="sidebar-link" href="{{ route('design-material.index') }}">
                                <i class="align-middle" data-feather="book"></i>
                                <span class="align-middle">Materi</span>
                            </a>
                        </li>

                        <!-- Penugasan -->
                        <li class="sidebar-item {{ Request::is('design-penugasan*') ? 'active' : '' }}">
                            <a class="sidebar-link" href="{{ route('design-penugasan.index') }}">
                                <i class="align-middle" data-feather="clipboard"></i>
                                <span class="align-middle">Penugasan</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endhasanyrole

            <!-- Divisi RnD -->
            @hasanyrole('admin|rnd')
                <li
                    class="sidebar-item 
                {{ Request::is('rnd-material*') || Request::is('rnd-penugasan*') ? 'active' : '' }}">

                    <a data-bs-toggle="collapse" href="#rndManagement"
                        class="sidebar-link {{ Request::is('rnd-material*') || Request::is('rnd-penugasan*') ? 'active' : '' }}"
                        aria-expanded="{{ Request::is('rnd-material*') || Request::is('rnd-penugasan*') ? 'true' : 'false' }}">

                        <i class="align-middle" data-feather="layers"></i>
                        <span class="align-middle">Divisi RnD</span>
                        <i class="align-middle" data-feather="chevron-down"></i>
                    </a>

                    <ul id="rndManagement"
                        class="sidebar-dropdown list-unstyled collapse 
                    {{ Request::is('rnd-material*') || Request::is('rnd-penugasan*') ? 'show' : '' }}"
                        data-bs-parent="#sidebar">

                        <!-- Materi -->
                        <li class="sidebar-item {{ Request::is('rnd-material*') ? 'active' : '' }}">
                            <a class="sidebar-link" href="{{ route('rnd-material.index') }}">
                                <i class="align-middle" data-feather="book"></i>
                                <span class="align-middle">Materi</span>
                            </a>
                        </li>

                        <!-- Penugasan -->
                        <li class="sidebar-item {{ Request::is('rnd-penugasan*') ? 'active' : '' }}">
                            <a class="sidebar-link" href="{{ route('rnd-penugasan.index') }}">
                                <i class="align-middle" data-feather="clipboard"></i>
                                <span class="align-middle">Penugasan</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endhasanyrole

            @hasanyrole('admin|hr')
                <li class="sidebar-item {{ Request::is('user*') || Request::is('role*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#userManagement"
                        class="sidebar-link {{ Request::is('user*') || Request::is('role*') ? 'active' : '' }}"
                        aria-expanded="{{ Request::is('user*') || Request::is('role*') ? 'true' : 'false' }}">
                        <i class="align-middle" data-feather="users"></i>
                        <span class="align-middle">User Management</span>
                        <i class="align-middle" data-feather="chevron-down"></i>
                    </a>
                    <ul id="userManagement"
                        class="sidebar-dropdown list-unstyled collapse {{ Request::is('user*') || Request::is('role*') ? 'show' : '' }}"
                        data-bs-parent="#sidebar">
                        <li class="sidebar-item {{ Request::is('user*') ? 'active' : '' }}">
                            <a class="sidebar-link" href="{{ route('user.index') }}">
                                <i class="align-middle" data-feather="user"></i>
                                <span class="align-middle">Users</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ Request::is('role*') ? 'active' : '' }}">
                            <a class="sidebar-link" href="{{ route('role.index') }}">
                                <i class="align-middle" data-feather="shield"></i>
                                <span class="align-middle">Roles</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endhasanyrole
        </ul>
    </div>
</nav>
