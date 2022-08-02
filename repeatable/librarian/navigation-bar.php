<nav class="main-header navbar navbar-expand navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i> <small>Notifications</small>
                <span class="badge badge-danger navbar-badge rounded-circle">1</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-bell mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-right-from-bracket"></i>
                <small>Sign Out</small>
            </a>
        </li>
    </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <img src="../stylesheets/images/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8"/>
        <span class="brand-text font-weight-light text-sm">Book Borrowing System</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../stylesheets/images/avatar.png" class="img-circle elevation-2" alt="Profile">
            </div>
            <div class="info">
                <a href="#" class="d-block">Full Name</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link <?php echo ($page == "dashboard" ? "active" : "")?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="books.php" class="nav-link <?php echo ($page == "books" ? "active" : "")?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Books
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="reservations.php" class="nav-link <?php echo ($page == "reservations" ? "active" : "")?>">
                        <i class="nav-icon fas fa-calendar-check"></i>
                        <p>Reservations</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="borrowers.php" class="nav-link <?php echo ($page == "borrowers" ? "active" : "")?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Borrowers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="reports.php" class="nav-link <?php echo ($page == "reports" ? "active" : "")?>">
                        <i class="nav-icon fas fa-file-lines"></i>
                        <p>Reports
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Borrowed</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Returned</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Penalty</p>
                            </a>
                        </li>
                    </ul>
                    <li class="nav-item">
                        <a href="transactions.php" class="nav-link <?php echo ($page == "transactions" ? "active" : "")?>">
                            <i class="nav-icon fas fa-right-left"></i>
                            <p>Transactions</p>
                        </a>
                    </li>
                </li>
            </ul>
        </nav>
    </div>
</aside>