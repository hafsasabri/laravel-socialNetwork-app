<?php $__env->startSection('content'); ?>
<?php echo $__env->make('includes.message-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>what do you have to say?</h3></header>
            <form action="<?php echo e(route('createpost')); ?>" method="post">
                <div class="form-group">
                    <textarea class="form-control"  name="body" id="new-post" rows="5" placeholder="Your Post"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
                <input type="hidden" value="<?php echo e(Session::token()); ?>" name="_token">
            </form>
        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>what other people say...</h3></header>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="post">
                <p><?php echo e($post->body); ?></p>
                <div class="info">
                   Posted By <?php echo e($post->user->first_name); ?> on <?php echo e($post->created_at); ?>

                </div>
                <div class="interactions">
                   <a href="#">Like</a> |
                   <a href="#">Dislike</a> |
                   <a href="#">Edit</a> |
                   <a href="<?php echo e(route ('post.delete', ['post_id' => $post->id])); ?>">Delete</a>
                </div> 
            </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
           
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\Projet laravelle\project\resources\views/dashboard.blade.php ENDPATH**/ ?>