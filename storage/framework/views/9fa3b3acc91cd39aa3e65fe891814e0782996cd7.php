<?php $__env->startSection('content'); ?>

 <main id="js-page-content" role="main" class="page-content">
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">DIU Community</a></li>
            <li class="breadcrumb-item active">DIU Community</li>
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-globe'></i>DIU Job Community
            </h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6 order-lg-3 order-xl-2">
                <div class="card border mb-g">
                    <div class="card border mb-g">
                    <div class="card-body pl-4 pt-4 pr-4 pb-0">
                        <div class="d-flex flex-column">
                        <div class="border-0 flex-1 position-relative shadow-top">
                            <form action="<?php echo e(url('/job-post')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <label class="form-label" for="example-textarea">Create Job Post</label>
                                <div class="form-group">
                                    <select class="form-control" id="example-select" name="jobType" required>
                                        <option>Select Post Type</option>
                                        <option>Full Time</option>
                                        <option>Part Time</option>
                                        <option>Project Base</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="example-textarea" rows="5" name="description" required></textarea>
                                </div>

                                <div class="height-8 d-flex flex-row align-items-center flex-wrap flex-shrink-0">
                                    <button type="submit" class="btn btn-info shadow-0 ml-auto">Post</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- post comment -->
                <div class="card mb-g">
                    <?php $__currentLoopData = $allJobPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allComPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card-body pb-0 px-4">
                        <div class="d-flex flex-row pb-3 pt-2  border-top-0 border-left-0 border-right-0">
                            <div class="d-inline-block align-middle status status-success mr-3">
                                <span class="profile-image rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
                            </div>
                            <h5 class="mb-0 flex-1 text-dark fw-500">
                                <?php echo e($allComPost->name); ?> (<?php echo e($allComPost->type); ?>)
                                <small class="m-0 l-h-n">
                                    <?php echo e($allComPost->department); ?>

                                </small>
                                <br>
                                <small class="m-0 l-h-n">
                                    Job Type: <b><?php echo e($allComPost->jobType); ?></b>
                                </small>
                            </h5>
                            <span class="text-muted fs-xs opacity-70">
                                3 hours
                            </span>
                        </div>
                        <div class="pb-3 pt-2 border-top-0 border-left-0 border-right-0 text-muted">
                            <?php echo e($allComPost->description); ?>

                        </div>
                        <div class="d-flex align-items-center demo-h-spacing py-3">
                            <a href="javascript:void(0);" class="d-inline-flex align-items-center" style="color: green;">
                                <i class="fal fa-comment fs-xs mr-1"></i> <span>Comments</span>
                            </a>

                            <?php if($allComPost->userID == Auth::user()->id): ?>    
                                <a href="<?php echo e(url('job-edit',$allComPost->id)); ?>" class="btn btn-sm btn-success">Edit</a>
                                <form class="form-inline" action="<?php echo route('job-delete', $allComPost->id); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="cart_id" />
                                <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                              </form>

                            <?php endif; ?>

                        </div>
                    </div>
                    <hr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <!-- post comment - end -->
            </div>
        </div>
    </main>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.asset-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DIU_Community\resources\views/job.blade.php ENDPATH**/ ?>