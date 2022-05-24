
<div class="row">
    
    <div class="col-12 col-sm-6 col-md-3">
      <a href="{{ url('admin/clients') }}" class="info-box">
        <span class="info-box-icon bg-info elevation-1">
        <i class="nav-icon fas fa-book"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text text-dark">
              Client
          </span>
          <span class="info-box-number text-dark">
              {{ App\Models\User::where('role', 'client')->count() }}
          </span>
        </div>
        <!-- /.info-box-content -->
      </a>
      <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
      <a href="{{ url('admin/salles') }}" class="info-box">
        <span class="info-box-icon bg-info elevation-1">
        <i class="nav-icon fas fa-book"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text text-dark">
              Salles
          </span>
          <span class="info-box-number text-dark">
              {{ App\Models\Salle::count() }}
          </span>
        </div>
        <!-- /.info-box-content -->
      </a>
      <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
      <a href="{{ url('admin/reservations') }}" class="info-box">
        <span class="info-box-icon bg-info elevation-1">
          <i class="nav-icon fas fa-book"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text text-dark">
              Reservation
          </span>
          <span class="info-box-number text-dark">
              {{ App\Models\Reservation::count() }}
          </span>
        </div>
        <!-- /.info-box-content -->
      </a>
      <!-- /.info-box -->
    </div>
  <!-- /.col -->
</div>