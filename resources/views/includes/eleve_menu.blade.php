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
  
    <li class="nav-item @if(Request::is('eleve/emplois*')) active @endif">
        <a href="{{ url('eleve/emplois') }}" class="nav-link ">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
            <p>
            Consulter emploi 
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('eleve/matieres*')) active @endif">
        <a href="{{ url('eleve/matieres') }}" class="nav-link ">
            <i class="nav-icon fas fa-user-secret"></i>
            <p>
            Consulter matières
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('eleve/notes*')) active @endif">
        <a href="{{ url('eleve/notes') }}" class="nav-link ">
            <i class="nav-icon fas fa-user-secret"></i>
            <p>
                Consulter notes
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('eleve/absences*')) active @endif">
        <a href="{{ url('eleve/absences') }}" class="nav-link ">
            <i class="nav-icon fas fa-user-graduate"></i>
            <p>
                Consulter absences
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('eleve/cantine*')) active @endif">
        <a href="{{ url('eleve/cantines') }}" class="nav-link ">
            <i class="nav-icon fas fa-utensils"></i>
            <p>
            Planning cantine
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('eleve/contacts') }}" class="nav-link @if(Request::is('contacts*')) active @endif">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Gérer les contacts
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
</ul>