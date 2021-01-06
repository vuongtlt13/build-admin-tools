
<li class="nav-item">
    <a href="{{route('models.index')}}" class="nav-link {{ Request::is('models*') ? 'active' : '' }}" style="padding-left: 1rem">
        <i class="fas fa-circle nav-icon"></i>
        <p>Model</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('fields.index')}}" class="nav-link {{ Request::is('fields*') ? 'active' : '' }}" style="padding-left: 1rem">
        <i class="fas fa-circle nav-icon"></i>
        <p>Field</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('menus.index')}}" class="nav-link {{ Request::is('menus*') ? 'active' : '' }}" style="padding-left: 1rem">
        <i class="fas fa-circle nav-icon"></i>
        <p>Menu</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('dBConfigs.index')}}" class="nav-link {{ Request::is('dBConfigs*') ? 'active' : '' }}" style="padding-left: 1rem">
        <i class="fas fa-circle nav-icon"></i>
        <p>DBConfig</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('cRUDConfigs.index')}}" class="nav-link {{ Request::is('cRUDConfigs*') ? 'active' : '' }}" style="padding-left: 1rem">
        <i class="fas fa-circle nav-icon"></i>
        <p>CRUDConfig</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('dTConfigs.index')}}" class="nav-link {{ Request::is('dTConfigs*') ? 'active' : '' }}" style="padding-left: 1rem">
        <i class="fas fa-circle nav-icon"></i>
        <p>DTConfig</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('relations.index')}}" class="nav-link {{ Request::is('relations*') ? 'active' : '' }}" style="padding-left: 1rem">
        <i class="fas fa-circle nav-icon"></i>
        <p>Relation</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('langs.index')}}" class="nav-link {{ Request::is('langs*') ? 'active' : '' }}" style="padding-left: 1rem">
        <i class="fas fa-circle nav-icon"></i>
        <p>Lang</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('translationFiles.index')}}" class="nav-link {{ Request::is('translationFiles*') ? 'active' : '' }}" style="padding-left: 1rem">
        <i class="fas fa-circle nav-icon"></i>
        <p>TranslationFile</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('translations.index')}}" class="nav-link {{ Request::is('translations*') ? 'active' : '' }}" style="padding-left: 1rem">
        <i class="fas fa-circle nav-icon"></i>
        <p>Translation</p>
    </a>
</li>
