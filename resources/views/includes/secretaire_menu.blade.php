<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
    <li class="nav-item @if(Request::is('home')) active @endif">
        <a href="{{ url('home') }}" class="nav-link ">
            <i class="nav-icon fas fa-home"></i>
            <p>
                Acceuil
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
  
    <li class="nav-item @if(Request::is('secretaire/enseignants*')) active @endif">
        <a href="{{ url('secretaire/enseignants') }}" class="nav-link ">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
            <p>
            Gérer les enseignants
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('secretaire/parents*')) active @endif">
        <a href="{{ url('secretaire/parents') }}" class="nav-link ">
            <i class="nav-icon fas fa-user-secret"></i>
            <p>
            Gérer les parents
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('secretaire/eleves*')) active @endif">
        <a href="{{ url('secretaire/eleves') }}" class="nav-link ">
            <i class="nav-icon fas fa-user-graduate"></i>
            <p>
            Gérer les élèves
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('secretaire/matieres*')) active @endif">
        <a href="{{ url('secretaire/matieres') }}" class="nav-link ">
            <i class="nav-icon fas fa-book"></i>
            <p>
            Gérer les matiéres
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('*seance*')) active @endif">
        <a href="{{ url('secretaire/seances') }}" class="nav-link ">
            <i class="nav-icon fas fa-book"></i>
            <p>
            Gérer les seances
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('secretaire/cantines') }}" class="nav-link @if(Request::is('*cantine*')) active @endif">
            <i class="nav-icon fas fa-utensils"></i>
            <p>
            Gérer les cantines
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    
    <li class="nav-item">
        <a href="{{ url('secretaire/contacts') }}" class="nav-link @if(Request::is('contacts*')) active @endif">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Gérer les contacts
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('secretaire/contacts*')) active @endif">
        <a href="{{ url('secretaire/contacts') }}" class="nav-link ">
            <i class="nav-icon fas fa-book"></i>
            <p>
                Gérer les contacts
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
</ul>