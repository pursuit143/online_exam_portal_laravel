 <nav id="sidebarMenu" class="sidebar d-md-block bg-dark text-white collapse" data-simplebar>
  <div class="sidebar-inner px-4 pt-3">
    <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
      <div class="d-flex align-items-center">
        <div class="user-avatar lg-avatar me-4">
          <img src="{{asset('theme/assets/img/team/profile-picture-3.jpg')}}" class="card-img-top rounded-circle border-white"
            alt="Bonnie Green">
        </div>
        <div class="d-block">
          <h2 class="h6">Hi, Jane</h2>
          <a href="../../pages/examples/sign-in.html" class="btn btn-secondary text-dark btn-xs"><span
              class="me-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
        </div>
      </div>
      <div class="collapse-close d-md-none">
        <a href="#sidebarMenu" class="fas fa-times" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation"></a>
      </div>
    </div>
    <ul class="nav flex-column pt-3 pt-md-0">
      <li class="nav-item">
        <a href="../../index.html" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon">
            <img src="{{asset('theme/assets/img/brand/light.svg')}}" height="20" width="20" alt="">
          </span>
          <span class="mt-1 ms-1 sidebar-text">OnlinePoint</span>
        </a>
      </li>
      <li class="nav-item  active ">
        <a href="../../pages/dashboard/dashboard.html" class="nav-link">
          <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
          <span class="sidebar-text">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <span
          class="nav-link  collapsed  d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#submenu-app">
          <span>
            <span class="sidebar-icon"><span class="fas fa-table"></span></span>
            <span class="sidebar-text">Exam Management</span>
          </span>
          <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
        </span>
        <div class="multi-level collapse "
          role="list" id="submenu-app" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item ">
              <a class="nav-link" href="../../pages/tables/bootstrap-tables.html">
                <span class="sidebar-text">Create Exam</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="../../pages/tables/bootstrap-tables.html">
                <span class="sidebar-text">Add Question</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="../../pages/tables/bootstrap-tables.html">
                <span class="sidebar-text">View Exam Status</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <span
          class="nav-link  collapsed  d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#submenu-app">
          <span>
            <span class="sidebar-icon"><span class="fas fa-table"></span></span>
            <span class="sidebar-text">Course Management</span>
          </span>
          <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
        </span>
        <div class="multi-level collapse "
          role="list" id="submenu-app" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item ">
              <a class="nav-link" href="../../pages/tables/bootstrap-tables.html">
                <span class="sidebar-text">Add Course</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="../../pages/tables/bootstrap-tables.html">
                <span class="sidebar-text">Add Subject</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="../../pages/tables/bootstrap-tables.html">
                <span class="sidebar-text">Assign Teacher</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="../../pages/tables/bootstrap-tables.html">
                <span class="sidebar-text">Course Fee</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item ">
        <a href="../../pages/settings.html" class="nav-link">
          <span class="sidebar-icon"><span class="fas fa-cog"></span></span>
          <span class="sidebar-text">Settings</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
