
<li class="nav-item has-treeview {{ Request::is('models*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ (Request::is('models*')) ? 'active' : '' }}" style="padding-left: {{1 + 0.8 * (1 - 1)}}rem">
          <i class="nav-icon fas fa-circle"></i>
          <p>
            Admin Tool
            <i class="right fas fa-angle-left"></i>
          </p>
    </a>
    <ul class="nav nav-treeview">
        
<li class="nav-item">
    <a href="{{route('models.index')}}" class="nav-link {{ Request::is('models*') ? 'active' : '' }}" style="padding-left: {{1 + 0.8 * (2 - 1)}}rem">
          <i class="fas fa-circle nav-icon"></i>
          <p>Model</p>
    </a>
</li>

    </ul>
</li>
