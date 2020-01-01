<div class="col-md-2 sidebar pd0">
    <div class="side_user">
        <img class="img-responsive" src="<?php echo e(asset('admin/images/avatar.png')); ?>" />
            <h4>DIU Community</h4>
    </div>
    <h2>MAIN NAVIGATION</h2>
    <ul>
        <li><a href="<?php echo e(url('/backend/deshboard')); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basicfaq" aria-expanded="false" aria-controls="ui-basic">
                <i class="fa fa-info-circle"></i>
                <span class="menu-title">User</span>
                <i class="menu-arrow"></i>
                </a>
            <div class="collapse" id="ui-basicfaq">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/backend/teacher')); ?>">Teacher</a>
                    </li>
                </ul>
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/backend/student')); ?>">Student</a>
                    </li>
                </ul>
            </div>
            </li>

                <li class="nav-item">
                    <a href="<?php echo e(url('/backend/community')); ?>"><i class="fa  fa-bars"></i>Community</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('/backend/event')); ?>"><i class="fa  fa-bars"></i>Event</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('/backend/job')); ?>"><i class="fa  fa-bars"></i>Job</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('/backend/blood')); ?>"><i class="fa  fa-bars"></i>Blood</a>
                </li>

                
                <li>
                    <a class="nav-link">
                        <form class="" action="<?php echo e(route('admin.logout')); ?>" method="post">
                          <?php echo csrf_field(); ?>
                          <input type="submit" value="Logout Now" class="btn btn-danger">
                        </form>
                    </a>
                </li>

                


    </ul>
</div><!--sidebar end--><?php /**PATH C:\xampp\htdocs\DIU_Community\resources\views/admin/partials/nav-bar.blade.php ENDPATH**/ ?>