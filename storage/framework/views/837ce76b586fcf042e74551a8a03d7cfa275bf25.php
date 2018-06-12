<?php $__env->startSection('content'); ?>
<div class="container">


                    <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>



                            <p><strong>Nom</p></strong>


                                <p><input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus><p></p>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <p><strong><?php echo e($errors->first('name')); ?></strong></p>
                                    </span>
                                <?php endif; ?>

                                <p><strong>Prénom</p></strong>


                                <p><input id="surname" type="text" class="form-control" name="surname" value="<?php echo e(old('surname')); ?>" required><p></p>

                                <?php if($errors->has('surname')): ?>
                                    <span class="help-block">
                                        <p><strong><?php echo e($errors->first('surname')); ?></strong></p>
                                    </span>
                                <?php endif; ?>



                            <p><strong>Email</p></strong>


                                <p><input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required></p>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <p><strong><?php echo e($errors->first('email')); ?></strong></p>
                                    </span>
                                <?php endif; ?>




                            <p><strong>Mot de passe</p></strong>


                                <p><input id="password" type="password" class="form-control" name="password" required></p>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <p><strong><?php echo e($errors->first('password')); ?></strong></p>
                                    </span>
                                <?php endif; ?>




                            <p><strong>Confirmation</p></strong>


                                <p><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required></p>

<p><strong>Année d'obtention du DUT</p></strong>

                                <p><input id="date_dut" type="text" class="form-control" name="date_dut" value="<?php echo e(old('date_dut')); ?>" required><p></p>

                                <?php if($errors->has('date_dut')): ?>
                                    <span class="help-block">
                                        <p><strong><?php echo e($errors->first('date_dut')); ?></strong></p>
                                    </span>
                                <?php endif; ?>


<p>
                                <button type="submit" class="btn btn-primary">
                                    S'inscrire
                                </button>
</p>

                    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme_iutmetz', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>