<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}"> <img alt="image" src="img/db.png" class="header-logo" /> <span
                    class="logo-name">Debastore</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="{{ route('home') }}" class="nav-link"><i
                        class="
            fas fa-tachometer-alt"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        class="
            fas fa-users"></i><span>User Managements</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('user.role') }}">Roles</a></li>
                </ul>
            <li class="dropdown">
                <a href="{{ route('menu') }}" class="nav-link"><i
                        class="
              fas fa-utensils"></i><span>Menu</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ url('/viewagen') }}" class="nav-link"><i class="
              fas fa-address-book"></i><span>Agen & Pelayan</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ url('/viewreservation') }}" class="nav-link"><i class="fas fa-ticket-alt"></i><span>Reservation</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('oder.deatail') }}" class="nav-link"><i class="fas fa-shopping-cart"></i><span>Order Details</span></a>
            </li>
            <li class="dropdown">
                <a href="/aboutus" class="nav-link"><i class="fas fa-user"></i>
                </i><span>About Us</span></a>
              </li>
        </ul>
    </aside>
</div>
