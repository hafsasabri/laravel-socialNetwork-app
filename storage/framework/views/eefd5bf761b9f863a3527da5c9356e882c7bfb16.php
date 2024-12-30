<?php $__env->startSection('title'); ?>
   welcome
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>



   <div class="row">
      <div class="col-md-6">
         <h3>Sign Up</h3>
         <form action="<?php echo e(route('signup')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
               <label for="email">Your E-mail</label>
               <input class="form-control" type="text" name="email" id="email" value="<?php echo e(old('email')); ?>" >
               <?php if($errors->has('email')): ?>
                <div class="alert alert-danger">
                <ul>
                  <?php $__currentLoopData = $errors->get('email'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                </div>
               <?php endif; ?>
            </div>
            <div class="form-group">
               <label for="first_name">Your First name</label>
               <input class="form-control" type="text" name="first_name" id="first_name" value="<?php echo e(old('first_name')); ?>">
               <?php if($errors->has('first_name')): ?>
                 <div class="alert alert-danger">
                  <ul>
                    <?php $__currentLoopData = $errors->get('first_name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                 </div>
               <?php endif; ?>
            </div>
            <div class="form-group">
               <label for="password">Your Password</label>
               <input class="form-control" type="password" name="password" id="password">
               
               <?php if($errors->has('password')): ?>
                 <div class="alert alert-danger">
                   <ul>
                    <?php $__currentLoopData = $errors->get('password'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </ul>
                 </div>
               <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary ">Submit </button>
            <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>" >
         </form>
      </div>
      <div class="col-md-6">
         <h3>Sign In</h3>
         <form action="<?php echo e(route ('signin')); ?>" method="post">
         <?php echo csrf_field(); ?>
            <div class="form-group">
               <label for="email">Your E-mail</label>
               <input class="form-control" type="text" name="email" id="email" value="<?php echo e(old('email')); ?>">
            </div>
            <div class="form-group">
               <label for="password">Your Password</label>
               <input class="form-control" type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary ">Submit</button>
            <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>" >
         </form>
      </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\Projet laravelle\project\resources\views/welcome.blade.php ENDPATH**/ ?>