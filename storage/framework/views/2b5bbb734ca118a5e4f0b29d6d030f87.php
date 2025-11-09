

<?php $__env->startSection('title', 'Home - EduFun'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <!-- Hero Section -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1200&h=400&fit=crop" class="card-img-top" style="height: 400px; object-fit: cover;" alt="Hero Image">
                <div class="card-body">
                    <h2 class="card-title">Welcome to EduFun!</h2>
                    <p class="card-text">Discover the latest articles in Interactive Multimedia and Software Engineering. Learn from experts and enhance your knowledge.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Articles Section -->
    <div class="row mb-4">
        <div class="col-12">
            <h3 class="mb-4">Latest Articles</h3>
        </div>
    </div>

    <div class="row g-4">
        <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-md-4">
            <div class="card">
                <img src="<?php echo e($article->image); ?>" class="card-img-top" alt="<?php echo e($article->title); ?>">
                <div class="card-body">
                    <span class="badge bg-primary mb-2"><?php echo e($article->category->name); ?></span>
                    <h5 class="card-title"><?php echo e($article->title); ?></h5>
                    <p class="card-text text-muted small">
                        <?php echo e(\Str::limit($article->excerpt, 100)); ?>

                    </p>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted">
                            <i class="bi bi-calendar"></i> <?php echo e($article->created_at->format('d M Y')); ?>

                        </small>
                        <small class="text-muted">
                            By <?php echo e($article->writer->name); ?>

                        </small>
                    </div>
                    <a href="<?php echo e(route('articles.show', $article->slug)); ?>" class="btn btn-primary btn-sm">Read more...</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="col-12">
            <div class="alert alert-info text-center">
                No articles available yet.
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\WebProg-app\resources\views/home.blade.php ENDPATH**/ ?>