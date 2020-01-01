<?php $__env->startSection('content'); ?>

    <main id="js-page-content" role="main" class="page-content">
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">DIU Community</a></li>
            <li class="breadcrumb-item">DIU Community</li>
            <li class="breadcrumb-item active">Edit Status</li>
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-globe'></i>DIU Adda Community
            </h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6 order-lg-3 order-xl-2">
                <div class="card border mb-g">
                    <div class="card-body pl-4 pt-4 pr-4 pb-0">
                        <div class="d-flex flex-column">
                        <div class="border-0 flex-1 position-relative shadow-top">
                            <form action="<?php echo e(url('/community-update',$editStatus->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <label class="form-label" for="example-textarea">Create Post</label>
                                <div class="form-group">
                                    <select class="form-control" id="example-select" name="statusType" required>
                                        <option><?php echo e($editStatus->statusType); ?></option>
                                        <option>Programming</option>
                                        <option>Education</option>
                                        <option>Social Awareness </option>
                                        <option>Study in Abroad</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="example-textarea" rows="5" name="status" required> <?php echo e($editStatus->status); ?></textarea>
                                </div>

                                <div class="height-8 d-flex flex-row align-items-center flex-wrap flex-shrink-0">
                                    <button type="submit" class="btn btn-info shadow-0 ml-auto">Update</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.asset-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DIU_Community\resources\views/edit-status.blade.php ENDPATH**/ ?>