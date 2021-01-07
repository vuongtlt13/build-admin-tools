<li class="nav-item">
    <a href="{{route('models.index')}}" class="nav-link {{ Request::is('models*') ? 'active' : '' }}" style="padding-left: 1rem">
        <i class="fas fa-circle nav-icon"></i>
        <p>Model</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('menus.index')}}" class="nav-link {{ Request::is('menus*') ? 'active' : '' }}" style="padding-left: 1rem">
        <i class="fas fa-circle nav-icon"></i>
        <p>Menu</p>
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
