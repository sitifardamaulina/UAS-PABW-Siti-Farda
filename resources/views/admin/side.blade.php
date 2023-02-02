<!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <h2>Admin Panel</h2>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                            <a class="js-arrow" href="/dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="{{ Request::is('dashboard/content') ? 'active' : '' }}">
                            <a href="/dashboard/header">
                                <i class="fas fa-header"></i>Header</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Course</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="/dashboard/coursetitle">Title</a>
                                </li>
                                <li>
                                    <a href="/dashboard/course">Items</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('dashboard/images') ? 'active' : '' }}">
                            <a href="/dashboard/mentor">
                                <i class="fas fa-users"></i>Mentor</a>
                        </li>
                        <li class="{{ Request::is('dashboard/images') ? 'active' : '' }}">
                            <a href="/dashboard/graph">
                                <i class="fas fa-users"></i>Graph</a>
                        </li>
                        <li class="{{ Request::is('dashboard/images') ? 'active' : '' }}">
                            <a href="/dashboard/trusted">
                                <i class="fas fa-users"></i>Trusted</a>
                        </li>
                        <li class="{{ Request::is('dashboard/images') ? 'active' : '' }}">
                            <a href="/dashboard/develop">
                                <i class="fas fa-users"></i>Develop</a>
                        </li>
                        <li class="{{ Request::is('dashboard/images') ? 'active' : '' }}">
                            <a href="/dashboard/user">
                                <i class="fas fa-user"></i>User</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->