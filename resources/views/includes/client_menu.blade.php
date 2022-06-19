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

    <li class="nav-item @if(Request::is('salles*')) active @endif">
        <a href="{{ url('/salles') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Salles
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
   
    <li class="nav-item @if(Request::is('reservations*')) active @endif">
        <a href="{{ url('/reservations') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Réservations
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    
</ul>