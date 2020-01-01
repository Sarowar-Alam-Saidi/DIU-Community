<?php $__env->startSection('content'); ?>
<ol class="breadcrumb">
                  <li><a href="<?php echo e(url('/backend/deshboard')); ?>"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="">Manage Student</a></li>
                </ol>
                <div class="col-md-12">
                  <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                All Student Information
                             </div>
                             <div class="col-md-3 text-right">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <table class="table table-responsive table-striped table-hover table_cus">
                              <thead class="table_head">
                                <tr>
                                      <th>Name</th>
                                      <th>Department</th>
                                      <td>Teacher ID</td>
                                      <td>Email</td>
                                      <td>Blood</td>
                                      <td>Action</td>
                                    </tr>
                              </thead>
                              
                                <tbody>
                                  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                        <td><?php echo e($user->name); ?></td>
                                        <td><?php echo e($user->department); ?></td>
                                        <td><?php echo e($user->SRid); ?></td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td><?php echo e($user->blood); ?></td>
                                        <td><a href="#deleteModal<?php echo e($user->id); ?>" data-toggle="modal" class="btn btn-danger">Delete</a></td>
                                    </tr>

                                     <!--delete data modal-->
                                <div class="modal fade" id="deleteModal<?php echo e($user->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          
                                          <div class="modal-body">
                                            <form action="<?php echo e(url('/backend/admin-student',$user->id)); ?>"  method="post">
                                              <?php echo csrf_field(); ?>
                                              <button type="submit" class="btn btn-danger">Permanent Delete</button>
                                            </form>

                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!--data modal-->
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                          </table>
                      </div>
                    </div>
                </div><!--col-md-12 end-->

               

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DIU_Community\resources\views/admin/manage-student.blade.php ENDPATH**/ ?>