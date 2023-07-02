<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="javascript:void(0):">
                <span class="logo-name">
                    {{-- <img src="{{ asset('img/logo.png') }}" alt="logo" style="width: 50%; margin: 5%;"> --}}
                    Dizmed
                </span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown {{ Route::is('admin.dashboard.index') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard.index') }}" class="nav-link">
                    <i class="fas fa-desktop"></i><span>Dashboard</span>
                </a>
            </li>

            @can('admin')
                <li class="menu-header">Product</li>
                <li class="dropdown {{ Route::is('admin.brand.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.brand.index') }}" class="nav-link">
                        <i class="fas fa-users"></i><span>Brand</span>
                    </a>
                </li>

                <li class="dropdown {{ Route::is('admin.category.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.category.index') }}" class="nav-link">
                        <i class="fas fa-users"></i><span>Category</span>
                    </a>
                </li>

                <li class="dropdown {{ Route::is('admin.sub-category.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.sub-category.index') }}" class="nav-link">
                        <i class="fas fa-users"></i><span>Sub-Category</span>
                    </a>
                </li>

                <li class="dropdown {{ Route::is('admin.tag.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.tag.index') }}" class="nav-link">
                        <i class="fas fa-users"></i><span>Tags</span>
                    </a>
                </li>

                <li class="dropdown {{ Route::is('admin.attribute.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.attribute.index') }}" class="nav-link">
                        <i class="fas fa-users"></i><span>Attributes</span>
                    </a>
                </li>

                <li class="dropdown {{ Route::is('admin.product.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.product.index') }}" class="nav-link">
                        <i class="fas fa-users"></i><span>Products</span>
                    </a>
                </li>
            @endcan

            <br><br><br><br>
        </ul>
    </aside>
</div>
