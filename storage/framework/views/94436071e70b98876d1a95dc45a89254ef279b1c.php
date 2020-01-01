<?php $__env->startSection('content'); ?>


<main id="js-page-content" role="main" class="page-content">
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">DIU Community</a></li>
                            <li class="breadcrumb-item active">Profile Edit</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-edit'></i>Profile Edit
                            </h1>
                        </div>
                        
                        <div class="row">
                            <div class="col-xl-6">
                                <div id="panel-1" class="panel">
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <form action="<?php echo e(url('/profile-update')); ?>" method="post" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <div class="form-group">
                                                    <label class="form-label" for="simpleinput">Full Name</label>
                                                    <input type="text" id="simpleinput" class="form-control" value="<?php echo e(Auth::user()->name); ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="simpleinput">Email</label>
                                                    <input type="text" id="simpleinput" class="form-control" value="<?php echo e(Auth::user()->email); ?>" readonly>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <label class="form-label">Select a Photo (Browser)</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" placeholder="Select a Photo" name="image">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                                <br>


                                                <?php if(count($data)>0): ?>
                                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                                <div class="form-group">
                                                    <label class="form-label" for="example-select">Select Status</label>
                                                    <select class="form-control" id="example-select" name="type">
                                                        <option value="<?php echo e($value->type); ?>"><?php echo e($value->type); ?></option>
                                                        <option value="teacher">Teacher</option>
                                                        <option value="student">Student</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="simpleinput">Student/Teacher ID</label>
                                                    <input type="text" id="simpleinput" class="form-control" name="SRid" value="<?php echo e($value->SRid); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-select">Select Department</label>
                                                    <select class="form-control" id="example-select" name="department">
                                                        <option value="<?php echo e($value->department); ?>"><?php echo e($value->department); ?></option>
                                                        <option value="DEPARTMENT OF COMPUTER SCIENCE & ENGINEERING">DEPARTMENT OF COMPUTER SCIENCE & ENGINEERING</option>
                                                        <option value="DEPARTMENT OF SOFTWARE ENGINEERING">DEPARTMENT OF SOFTWARE ENGINEERING</option>
                                                        <option value="DEPARTMENT OF MULTIMEDIA & CREATIVE TECHNOLOGY">DEPARTMENT OF MULTIMEDIA & CREATIVE TECHNOLOGY</option>
                                                        <option value="DEPARTMENT OF ELECTRONICS & TELECOMMUNICATION ENGINEERING">DEPARTMENT OF ELECTRONICS & TELECOMMUNICATION ENGINEERING</option>
                                                        <option value="DEPARTMENT OF TEXTILE ENGINEERING">DEPARTMENT OF TEXTILE ENGINEERING</option>
                                                        <option value="DEPARTMENT OF ELECTRICAL & ELECTRONIC ENGINEERING">DEPARTMENT OF ELECTRICAL & ELECTRONIC ENGINEERING</option>
                                                        <option value="DEPARTMENT OF CIVIL ENGINEERING">DEPARTMENT OF CIVIL ENGINEERING</option>
                                                        <option value="DEPARTMENT OF ARCHITECTURE">DEPARTMENT OF ARCHITECTURE</option>
                                                        <option value="DEPARTMENT OF PHARMACY">DEPARTMENT OF PHARMACY</option>
                                                        <option value="DEPARTMENT OF ENGLISH">DEPARTMENT OF ENGLISH</option>
                                                        <option value="DEPARTMENT OF JOURNALISM & MASS COMMUNICATION">DEPARTMENT OF JOURNALISM & MASS COMMUNICATION</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="simpleinput">Batch (if you are a student)</label>
                                                    <input type="text" id="simpleinput" class="form-control" name="batch" value="<?php echo e($value->batch); ?>">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="form-label" for="example-datetime-local-input">Date of Birth</label>
                                                    <input class="form-control" type="date" id="example-datetime-local-input" name="dob" value="<?php echo e($value->dob); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-number">Mobile Number</label>
                                                    <input class="form-control" id="example-number" type="number" name="mobile" value="<?php echo e($value->mobile); ?>">
                                                </div>
                                                <br>
                                                <h3>Job & Blood Activity</h3>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-number">Current Job</label>
                                                    <input class="form-control" id="example-number" type="text" name="currentJob" value="<?php echo e($value->currentJob); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-select">Blood Group</label>
                                                    <select class="form-control" id="example-select" name="blood">
                                                        <option value="<?php echo e($value->blood); ?>"><?php echo e($value->blood); ?></option>
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-number">Blood Status</label>
                                                    <select class="form-control" id="example-select" name="bloodStatus">
                                                        <option value="<?php echo e($value->bloodStatus); ?>"><?php echo e($value->bloodStatus); ?></option>
                                                        <option value="Available">Available</option>
                                                        <option value="Unavailable">Unavailable</option>
                                                    </select>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>

                                                 <div class="form-group">
                                                    <label class="form-label" for="example-select">Select Status</label>
                                                    <select class="form-control" id="example-select" name="type">
                                                        <option>Select Type</option>
                                                        <option value="teacher">Teacher</option>
                                                        <option value="student">Student</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="simpleinput">Student/Teacher ID</label>
                                                    <input type="text" id="simpleinput" class="form-control" name="SRid">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-select">Select Department</label>
                                                    <select class="form-control" id="example-select" name="department">
                                                        <option>Select Department</option>
                                                        <option value="DEPARTMENT OF COMPUTER SCIENCE & ENGINEERING">DEPARTMENT OF COMPUTER SCIENCE & ENGINEERING</option>
                                                        <option value="DEPARTMENT OF SOFTWARE ENGINEERING">DEPARTMENT OF SOFTWARE ENGINEERING</option>
                                                        <option value="DEPARTMENT OF MULTIMEDIA & CREATIVE TECHNOLOGY">DEPARTMENT OF MULTIMEDIA & CREATIVE TECHNOLOGY</option>
                                                        <option value="DEPARTMENT OF ELECTRONICS & TELECOMMUNICATION ENGINEERING">DEPARTMENT OF ELECTRONICS & TELECOMMUNICATION ENGINEERING</option>
                                                        <option value="DEPARTMENT OF TEXTILE ENGINEERING">DEPARTMENT OF TEXTILE ENGINEERING</option>
                                                        <option value="DEPARTMENT OF ELECTRICAL & ELECTRONIC ENGINEERING">DEPARTMENT OF ELECTRICAL & ELECTRONIC ENGINEERING</option>
                                                        <option value="DEPARTMENT OF CIVIL ENGINEERING">DEPARTMENT OF CIVIL ENGINEERING</option>
                                                        <option value="DEPARTMENT OF ARCHITECTURE">DEPARTMENT OF ARCHITECTURE</option>
                                                        <option value="DEPARTMENT OF PHARMACY">DEPARTMENT OF PHARMACY</option>
                                                        <option value="DEPARTMENT OF ENGLISH">DEPARTMENT OF ENGLISH</option>
                                                        <option value="DEPARTMENT OF JOURNALISM & MASS COMMUNICATION">DEPARTMENT OF JOURNALISM & MASS COMMUNICATION</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="simpleinput">Batch (if you are a student)</label>
                                                    <input type="text" id="simpleinput" class="form-control" name="batch">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="form-label" for="example-datetime-local-input">Date of Birth</label>
                                                    <input class="form-control" type="date" id="example-datetime-local-input" name="dob">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-number">Mobile Number</label>
                                                    <input class="form-control" id="example-number" type="number" name="mobile">
                                                </div>
                                                <br>
                                                <h3>Job & Blood Activity</h3>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-number">Current Job</label>
                                                    <input class="form-control" id="example-number" type="text" name="currentJob">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-select">Blood Group</label>
                                                    <select class="form-control" id="example-select" name="blood">
                                                        <option>Blood group</option>
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-number">Blood Status</label>
                                                    <select class="form-control" id="example-select" name="bloodStatus">
                                                        <option>Select Blood</option>
                                                        <option value="Available">Available</option>
                                                        <option value="Unavailable">Unavailable</option>
                                                    </select>
                                                </div>
                                                 <?php endif; ?>
                                                <div class="form-group" style="margin-top: 20px;">
                                                	<button type="submit" class="btn btn-success btn-pills waves-effect waves-themed">Update Profile</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.asset-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DIU_Community\resources\views/profile-update.blade.php ENDPATH**/ ?>