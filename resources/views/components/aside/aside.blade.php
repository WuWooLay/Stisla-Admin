
      <!-- Aside Main SideBar <-- Left SideBar Start -->
      <div class="main-sidebar sidebar-style-2">
        <!-- Aside Wrapper Start -->
        <aside id="sidebar-wrapper">
          
          <!-- Aside Large Title Start -->
          <div class="sidebar-brand">
            <a href="index.html">Admin</a>
          </div>
          <!-- Aside Large Title End -->

          <!-- Aside Small Title Start -->
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Ad</a>
          </div>
          <!-- Aside Small Title End -->

          <!-- SideBar Links Container Start -->
          <ul class="sidebar-menu">
            
            <!-- DashBoard Li Start -->
            <li class="menu-header">
                Dashboard
            </li>

            <li class="dropdown {{ (request()->is('admin')) ? 'active' : '' }}" >
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ (request()->is('admin')) ? 'active' : '' }}" ><a class="nav-link" href="/admin">General Dashboard</a></li>
                </ul>
            </li>
            <!-- DashBoard Li End -->
            
            <!-- Menu Divider Start -->
            <li class="menu-header">
                Starter
            </li>
            <!-- Menu Divider End -->

            <li class="dropdown {{ (request()->is('admin/crud*')) ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                  <i class="fas fa-columns"></i>
                  <span>CRUD</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (request()->is('admin/crud')) ? 'active' : '' }}" ><a class="nav-link" href="/admin/crud">Create</a></li>
                </ul>
            </li>

            <!-- <li class='active'>
                <a class="nav-link " href="#!"><i class="far fa-square"></i>
                    <span>
                        Blank Page
                    </span>
                </a>
            </li> -->
           
          <!-- SideBar Links Container End -->

        </aside>
        <!-- Aside Wrapper End -->
      </div>
      <!-- Aside Main SideBar <-- Left SideBar End -->