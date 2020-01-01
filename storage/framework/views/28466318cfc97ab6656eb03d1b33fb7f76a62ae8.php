<?php $__env->startSection('content'); ?>
    <div class="flex-1" style="background: url(img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
            <div class="row">
                <div class="col col-md-6 col-lg-7 hidden-sm-down">
                    <h2 class="fs-xxl fw-500 mt-4 text-white">
                        Hello DIU all developers &amp; programmers
                        <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </small>
                    </h2>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto">
                    <h1 class="text-white fw-300 mb-3 d-sm-block d-md-none">
                        Secure login
                    </h1>
                    <div class="card p-4 rounded-plus bg-faded">
                        <form id="js-login" novalidate="" method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" id="email" class="form-control form-control-lg <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" placeholder="Your Daffodil Varsity email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                                <div class="invalid-feedback">No, you missed this one.</div>
                                <div class="help-block">Your unique username to app</div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" class="form-control form-control-lg <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" autocomplete="current-password" placeholder="password" required>

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>


                                <div class="invalid-feedback">Sorry, you missed this one.</div>
                                <div class="help-block">Your password</div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-lg-6 pl-lg-1 my-2">
                                    <button id="js-login-btn" type="submit" class="btn btn-danger btn-block btn-lg">Secure login</button>
                                </div>
                                     <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                    <?php endif; ?>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                2019 © Legend Saidi by&nbsp;<a href='' class='text-white opacity-40 fw-500' title='gotbootstrap.com' target='_blank'>legendsaidi.com</a>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DIU_Community\resources\views/auth/login.blade.php ENDPATH**/ ?>