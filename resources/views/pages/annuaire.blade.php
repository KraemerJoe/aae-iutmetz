@extends("theme_iutmetz")

@section('content')

            
            <h1>Annuaire - Association des anciens étudiants</h1>
			

			      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Liste des utilisateurs inscris :</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Email</th>
                  <th>Date du DUT</th>
                  <th>Statut</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Email</th>
                  <th>Date du DUT</th>
                  <th>Statut</th>
                </tr>
              </tfoot>
              <tbody>
              @foreach (\App\User::all() as $user)
                <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->surname }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->date_dut }}</td>
                  <td>{{ $user->confirmed }}</td>
                </tr>
           @endforeach
              </tbody>
            </table>
          </div>
        </div>
        @php
date_default_timezone_set('Europe/Paris')
        @endphp
        <div class="card-footer small text-muted">Dernière mise à jour à {{date('H:i:s') }}</div>
      </div>


    <!-- Bootstrap core JavaScript-->
    <script src="admin_template/vendor/jquery/jquery.min.js"></script>
    <script src="admin_template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="admin_template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="admin_template/vendor/chart.js/Chart.min.js"></script>
    <script src="admin_template/vendor/datatables/jquery.dataTables.js"></script>
    <script src="admin_template/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="admin_template/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="admin_template/js/sb-admin-datatables.min.js"></script>
    <script src="admin_template/js/sb-admin-charts.min.js"></script>
@endsection

