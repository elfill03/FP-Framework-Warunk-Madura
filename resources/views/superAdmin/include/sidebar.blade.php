<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('images/logo-icon.png') }}" class="logo-icon" alt="logo icon" />
        </div>
        <div>
            <h4 class="logo-text">Warunk Madura</h4>
        </div>
        <div class="toggle-icon ms-auto">
            <i class="bx bx-arrow-to-left"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        @auth
            @if (Auth::user()->role == 'super_admin')
                <li>
                    <a href="{{ route('dashboard') }}">
                        <div class="parent-icon"><i class="bx bx-home-circle"></i></div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li class="menu-label">Cabang Toko</li>
                <li>
                    <a href="{{ route('datatoko') }}">
                        <div class="parent-icon"><i class="bx bx-store"></i></div>
                        <div class="menu-title">Lihat Toko</div>
                    </a>
                </li>

                <li>
                    <a href="widgets.html">
                        <div class="parent-icon"><i class="bx bx-user"></i></div>
                        <div class="menu-title">Data Admin</div>
                    </a>
                </li>
            @endif
        @endauth
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
