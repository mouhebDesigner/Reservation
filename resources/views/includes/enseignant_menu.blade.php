<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">    
    <li class="nav-item @if(Request::is('enseignant/absences*')) active @endif">

        <a href="{{ url('enseignant/absences') }}" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Gérer les absences
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('enseignant/absences*')) active @endif">
        <a href="{{ url('enseignant/absences') }}" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Consulter les élèves
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('enseignant/emplois*')) active @endif">
        <a href="{{ url('enseignant/emplois') }}" class="nav-link ">
            <i class="nav-icon fas fa-book"></i>
            <p>
                Consulter emploi
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('enseignant/matieres*')) active @endif">
        <a href="{{ url('enseignant/matieres') }}" class="nav-link ">
            <i class="nav-icon fas fa-book"></i>
            <p>
                Consulter matières
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('enseignant/contacts*')) active @endif">
        <a href="{{ url('enseignant/contacts') }}" class="nav-link ">
            <i class="nav-icon fas fa-book"></i>
            <p>
                Gérer les contacts
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
</ul>

