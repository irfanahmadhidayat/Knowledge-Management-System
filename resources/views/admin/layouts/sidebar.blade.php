<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">KONVEKSI</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                anjooyy
            </li>

            <li class="sidebar-item {{ Request::routeIs('dashboard.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('dashboard.index') }}">
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::routeIs('admin.design.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.design.index') }}">
                    <i class="align-middle" data-feather="figma"></i>
                    <span class="align-middle">Devisi Design</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::routeIs('admin.percetakan.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.percetakan.index') }}">
                    <i class="align-middle" data-feather="printer"></i>
                    <span class="align-middle">Devisi Percetakan</span>
                </a>
            </li>


            </li>

            <!-- <li class="sidebar-item">
                <a class="sidebar-link" href="pages-sign-up.html">
                    <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Devisi Mancing</span>
                </a>
            </li> -->

            <!-- <li class="sidebar-item">
                <a class="sidebar-link" href="pages-blank.html">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
                </a>
            </li> -->

        </ul>
    </div>
</nav>
