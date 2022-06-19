<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}"> <img alt="image" src="img/db.png" class="header-logo" /> <span
                    class="logo-name">Debastore</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown {{ ($title === "Dashboard") ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="dropdown {{ ($title === "User Management" || $title === "Restore User") ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="fas fa-users"></i>
                    <span>User Managements</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('user.role') }}">Roles</a></li>
                </ul>
            </li>
<<<<<<< HEAD
            <li class="dropdown {{ ($title === "Data Menu" || $title === "Tambah Data Menu" || $title === "Edit Data Menu") ? 'active' : '' }}">
                <a href="{{ route('menu') }}" class="nav-link">
                    <i class="fas fa-utensils"></i>
                    <span>Menu</span>
                </a>
=======
            <li class="dropdown">
                <a href="{{ url('/viewagen') }}" class="nav-link"><i class="
              fas fa-address-book"></i><span>Agen & Pelayan</span></a>
>>>>>>> b4dd1e9b329216482322e3eef336606557c59312
            </li>
            <li class="dropdown {{ ($title === "Agen & Pelayan" || $title === "Tambah Agen & Pelayan" || $title === "Update Agen & Pelayan") ? 'active' : '' }}">
                <a href="{{ url('/viewagen') }}" class="nav-link">
                    <i class="fas fa-address-book"></i>
                    <span>Agen &Pelayan</span>
                </a>
            </li>
            <li class="dropdown {{ ($title === "Reservation") ? 'active' : '' }}">
                <a href="{{ url('/viewreservation') }}" class="nav-link"><i class="fas fa-ticket-alt"></i><span>Reservation</span></a>
            </li>
            <li class="dropdown {{ ($title === "Data Pemesanan" || $title === "Pemesanan Selesai" || $title === "Hasil File") ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Ordered</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('oder.deatail') }}">New order</a></li>
                </ul>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ url('/order-finish') }}">Order Finished</a></li>
                </ul>
            </li>
<<<<<<< HEAD
            <li class="dropdown {{ ($title === "About Us" || $title === "Add About Us" || $title === "Edit About Us") ? 'active' : '' }}">
                <a href="/aboutus" class="nav-link">
                    <i class="fas fa-user"></i>
                    <span>About Us</span>
                </a>
            </li>
=======
<<<<<<< HEAD
        </li>
        <li class="dropdown">
          <a href="/aboutus" class="nav-link"><i class="fas fa-user"></i>
          </i><span>About Us</span></a>
        </li>
=======
            <li class="dropdown">
                <a href="/aboutus" class="nav-link"><i class="fas fa-user"></i>
                </i><span>About Us</span></a>
              </li>
>>>>>>> 77294b50d93d62eaae8de367ddaead906795e5d5
>>>>>>> b4dd1e9b329216482322e3eef336606557c59312
        </ul>
    </aside>
</div>
