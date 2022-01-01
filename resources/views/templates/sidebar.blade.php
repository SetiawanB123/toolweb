<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="admin/tool" class="nav-link {{ Request::is('admin/tool*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tools"></i>
        <p>
          Tool
        </p>
      </a>
    </li>
    
    <li class="nav-item">
      <a href="/logout" class="nav-link">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>
          Logout
        </p>
      </a>
    </li>
</ul>