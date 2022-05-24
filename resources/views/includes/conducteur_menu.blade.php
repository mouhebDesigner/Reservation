<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
    <li class="nav-item @if(Request::is('home')) active @endif">
        <a href="{{ url('home') }}" class="nav-link ">
            <i class="nav-icon fas fa-home"></i>
            <p>
                Accueil
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>

    <li class="nav-item @if(Request::is('conducteur/trajets*')) active @endif">
        <a href="{{ url('conducteur/trajets') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Trajets
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
   
    <li class="nav-item @if(Request::is('conducteur/conducteurs*')) active @endif">
        <a href="{{ url('conducteur/conducteurs') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Réservations
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    
</ul>