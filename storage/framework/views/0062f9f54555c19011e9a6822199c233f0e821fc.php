Bonjour,

Merci <?php echo e($user->name); ?> pour votre inscription.

Vous pouvez valider votre compte en vous rendant sur le lien :

<?php echo e(url('auth/confirm', [$user->id, $token])); ?>



Merci