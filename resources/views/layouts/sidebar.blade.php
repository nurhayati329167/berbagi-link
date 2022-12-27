  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ url('/dashboard')}}">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ url('/editprofil')}}">
                  <i class="bi bi-pencil-square"></i>
                  <span>Ubah Tampilan</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ url('/analisis')}}">
                  <i class="bi bi-pie-chart"></i>
                  <span>Analisis</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ url('/bagito')}}">
                  <i class="bi bi-link-45deg"></i>
                  <span>Bagi.to</span>
              </a>
          </li>

          <!-- <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-people"></i><span>Manajemen User</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ url('/link_management')}}">
                          <i class="bi bi-people"></i><span>User Yang Terhubung</span>
                      </a>
              </ul>
          </li> -->
      </ul>

  </aside><!-- End Sidebar-->