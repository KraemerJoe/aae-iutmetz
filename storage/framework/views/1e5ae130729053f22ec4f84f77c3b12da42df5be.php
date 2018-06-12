<?php $__env->startSection('content'); ?>
<div class="container">
<h2>Connexion</h2>
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo e(csrf_field()); ?>



                            <p><strong>Adresse Email</strong></p>


                                <p><input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus></p>

                                <?php if($errors->has('email')): ?>
                                    <p>
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </p>
                                <?php endif; ?>



                            <p><strong>Mot de Passe</strong></p>


                                <p><input id="password" type="password" class="form-control" name="password" required></p>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>







                                <p><button type="submit" class="btn btn-primary">
                                    Connexion
                                </button>

                                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                    Mot de passe oublié ?
                                </a></p>

                    </form>
                </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme_iutmetz', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>