<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('index')}}">
              <i class="bi bi-circle"></i><span>Index_Page_List</span>
            </a>
          </li>
          <li>
            <a href="{{route('create')}}">
              <i class="bi bi-circle"></i><span>Create_Table_Page</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('category_index')}}">
              <i class="bi bi-circle"></i><span>Index_Page_List</span>
            </a>
          </li>
          <li>
            <a href="{{route('category_create')}}">
              <i class="bi bi-circle"></i><span>Create_Table_Page</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->


    </ul>

  </aside>
