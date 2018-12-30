<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center" style="background-color: #f2f2ea;"><?php echo e(__('LOGIN TO GET STARTED')); ?></div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 border-right">
                      <p class="text-muted text-center">New user</p>
                      <a class="btn btn-primary form-control border-0 mb-2" href="<?php echo e(url('/login/github')); ?>" style="background:#333;font-size:24px;"><span class="fab fa-github-square"></span></a>
                      <a class="btn btn-primary form-control border-0 mb-2" href="<?php echo e(url('/login/linkedin')); ?>" style="background:#0077B5;font-size:24px;"><span class="fab fa-linkedin-in"></span></a>
                      <a class="btn btn-primary form-control border-0 mb-2" href="<?php echo e(url('/login/facebook')); ?>" style="background:#3B5998;font-size:24px;"><span class="fab fa-facebook-f"></span></a>
                      <a class="btn btn-primary form-control border-0 mb-2" href="<?php echo e(url('/login/twitter')); ?>" style="background:#1da1f2;font-size:24px;"><span class="fab fa-twitter"></span></a>
                    </div>
                    <div class="col-md-6 border-left">
                      <p class="text-muted text-center">Already have an account?</p>
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right"><?php echo e(__('EMail:')); ?></label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                    <?php if($errors->has('email')): ?>
                                        <span class="invalid-feedback">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password:')); ?></label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                    <?php if($errors->has('password')): ?>
                                        <span class="invalid-feedback">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> <?php echo e(__('Remember Me')); ?>

                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('Login')); ?>

                                    </button>

                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                </div>
                            </div>

                        </form>
                      </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>