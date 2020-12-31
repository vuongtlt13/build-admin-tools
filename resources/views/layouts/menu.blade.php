
<li class="nav-item">
    <a href="{{route('fields.index')}}" class="nav-link {{ Request::is('fields*') ? 'active' : '' }}" style="padding-left: 1rem">
        <i class="fas fa-circle nav-icon"></i>
        <p>Field</p>
    </a>
</li>

<li class="nav-item has-treeview {{ Request::is('models*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ (Request::is('models*')) ? 'active' : '' }}" style="padding-left: 1rem">
          <i class="fas fa-circle nav-icon"></i>
          <p>Admin Tool<i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
        
        <li class="nav-item">
            <a href="{{route('models.index')}}" class="nav-link {{ Request::is('models*') ? 'active' : '' }}" style="padding-left: 1.8rem">
                <i class="fas fa-circle nav-icon"></i>
                <p>Model</p>
            </a>
        </li>

    </ul>
</li>
