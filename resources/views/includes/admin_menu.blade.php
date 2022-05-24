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
  
    <li class="nav-item @if(Request::is('admin/users*')) active @endif">
        <a href="{{ url('admin/users') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Inscriptions
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('admin/clients*')) active @endif">
        <a href="{{ url('admin/clients') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Clients
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('admin/types*')) active @endif">
        <a href="{{ url('admin/types') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Types de salles
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('admin/salles*')) active @endif">
        <a href="{{ url('admin/salles') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Salles
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('admin/reservations*')) active @endif">
        <a href="{{ url('admin/trajets') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Reservations
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
   
    
</ul>