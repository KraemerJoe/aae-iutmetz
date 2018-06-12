

<?php $__env->startSection('content'); ?>

            
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
              <?php $__currentLoopData = \App\User::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($user->name); ?></td>
                  <td><?php echo e($user->surname); ?></td>
                  <td><?php echo e($user->email); ?></td>
                  <td><?php echo e($user->date_dut); ?></td>
                  <td><?php echo e($user->confirmed); ?></td>
                </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
        <?php 
date_default_timezone_set('Europe/Paris')
         ?>
        <div class="card-footer small text-muted">Dernière mise à jour à <?php echo e(date('H:i:s')); ?></div>
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make("theme_iutmetz", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>