<?php echo "<!-- SIDEBAR ADMIN -->"; ?>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">Parkir App</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Dashboard -->
            <li class="nav-item <?= $currentPage == 'index.php' ? 'active' : '' ?>">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Slot Parkir -->
            <li class="nav-item <?= $currentPage == 'manage_slots.php' ? 'active' : '' ?>">
                <a class="nav-link" href="manage_slots.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Slot Parkir</span>
                </a>
            </li>

            <!-- Data Booking -->
            <li class="nav-item <?= $currentPage == 'manage_bookings.php' ? 'active' : '' ?>">
                <a class="nav-link" href="manage_bookings.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Booking</span>
                </a>
            </li>

            <!-- Data Pengguna -->
            <li class="nav-item <?= $currentPage == 'data_pengguna.php' ? 'active' : '' ?>">
                <a class="nav-link" href="data_pengguna.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Pengguna</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>