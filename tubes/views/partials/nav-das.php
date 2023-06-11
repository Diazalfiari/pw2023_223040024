<body>
<div class='dashboard'>
    <div class="dashboard-nav">
        <header>
            <a href="#home" class="menu-toggle">
                <i class="fas fa-bars"></i>
            </a>
            <a href="admin-page.php" class="brand-logo">
                <i class="fa-duotone fa-diamond"></i>
                 <span>Movloperz</span>
            </a>
        </header>
        <nav class="dashboard-nav-list">
            <a href="admin-page.php" class="dashboard-nav-item">
                <i class="fas fa-home"></i>Home</a>
            <div class='dashboard-nav-dropdown'>
                <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                    <i class="fas fa-light fa-film"></i> Manage Movie </a>
                <div class='dashboard-nav-dropdown-menu'>
                    <a href="movie-list.php" class="dashboard-nav-dropdown-item">Movie List</a>
                    <a href="add-movie.php" class="dashboard-nav-dropdown-item">Add Movie</a>
                </div>
            </div>
            <div class='dashboard-nav-dropdown'>
                <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                    <i class="fas fa-users"></i> Panel User </a>
                <div class='dashboard-nav-dropdown-menu'>
                    <a href="user-list.php" class="dashboard-nav-dropdown-item">User List</a>
                    <a href="tambah.php" class="dashboard-nav-dropdown-item">Add Users</a>
                </div>
            </div>
          <div class="nav-item-divider">
          </div>
          <a href="logout.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
        </nav>
    </div>
    