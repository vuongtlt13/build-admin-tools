
<li class="nav-item">
    <a href="{{route('applications.index')}}" class="nav-link {{ Request::is('applications*') ? 'active' : '' }}" style="padding-left: 1rem">
        <i class="fas fa-circle nav-icon"></i>
        <p>Application</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('services.index')}}" class="nav-link {{ Request::is('services*') ? 'active' : '' }}" style="padding-left: 1rem">
        <i class="fas fa-circle nav-icon"></i>
        <p>Service</p>
    </a>
</li>

<li class="nav-item has-treeview {{ Request::is('models*') | Request::is('menu*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ (Request::is('models*') | Request::is('menu*')) ? 'active' : '' }}" style="padding-left: 1rem">
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

        <li class="nav-item">
            <a href="{{route('menus.index')}}" class="nav-link {{ Request::is('menu*') ? 'active' : '' }}" style="padding-left: 1.8rem">
                <i class="fas fa-circle nav-icon"></i>
                <p>Menu</p>
            </a>
        </li>

    </ul>
</li>
