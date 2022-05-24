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
  
    <li class="nav-item @if(Request::is('parent/notes*')) active @endif">
        <a href="{{ url('parent/notes') }}" class="nav-link ">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
            <p>
            Consulter les notes 
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    
    <li class="nav-item @if(Request::is('parent/absences*')) active @endif">
        <a href="{{ url('parent/absences') }}" class="nav-link ">
            <i class="nav-icon fas fa-user-graduate"></i>
            <p>
            Consulter absences
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('parent/cantines*')) active @endif">
        <a href="{{ url('parent/cantines') }}" class="nav-link ">
            <i class="nav-icon fas fa-utensils"></i>
            <p>
            Planning cantine
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('parent/paiement') }}" class="nav-link @if(Request::is('paiement*')) active @endif">
            <i class="nav-icon fas fa-money-bill-alt"></i>
            <p>
            Gérer les paiements
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('parent/contacts') }}" class="nav-link @if(Request::is('contacts*')) active @endif">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Gérer les contacts
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('parent/contacts*')) active @endif">
        <a href="{{ url('parent/contacts') }}" class="nav-link ">
            <i class="nav-icon fas fa-book"></i>
            <p>
                Gérer les contacts
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
</ul>