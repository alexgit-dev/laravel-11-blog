<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <!--begin::Sidebar Admin Index -->
    <div class="sidebar-brand">
        <a href="{{ route('admin.main.index') }}" class="brand-link">
            <img src="{{ asset('assets/admin/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow">
            <span class="brand-text fw-light">AdminLTE 4</span>
        </a>
    </div>
    <!--end::Sidebar Admin Index-->

    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.main.index') }}" class="nav-link">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link">
                        <i class="nav-icon bi bi-card-list"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <a href="{{ route('posts.index') }}" class="nav-link">
                        <i class="nav-icon bi bi-pencil-square"></i>
                        <p>Posts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./generate/theme.html" class="nav-link">
                        <i class="nav-icon bi bi-palette"></i>
                        <p>Theme Generate</p>
                    </a>
                </li>
                <li class="nav-header">EXAMPLES</li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->
