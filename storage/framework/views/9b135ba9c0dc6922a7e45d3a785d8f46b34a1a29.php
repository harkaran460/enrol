
<?php $__env->startSection('content'); ?>
<div class="page-content h-100">
    <div class="container-fluid">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="team">Managing Team</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Member</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <h1>Add Member</h1>
            </div>
            <?php if(Session::has('Success')): ?>
            <div class="alert alert-info"><?php echo e(Session::get('Success')); ?></div>
            <?php endif; ?>
            <?php if(Session::has('Failed')): ?>
            <div class="alert alert-danger"><?php echo e(Session::get('Failed')); ?></div>
            <?php endif; ?>

            <div class="col-md-4 col-12">
                <form class="form1 rounded" action="store-team" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">MEMBER NAME</label>
                        <input type="text" class="form-control" name="name" id="validationCustom01" value="<?php echo e(old('name')); ?>">
                        <span style="color: red"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">MEMBER EMAIL*</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" value="<?php echo e(old('email')); ?>" placeholder="name@example.com">
                        <span style="color: red"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom04" class="form-label">MOBILE*</label>
                        <div class="d-flex">
                            <div class="w-25">
                                <select class="form-select" name="ccode" id="validationCustom04">
                                    <option selected="selected" value="+91">+91</option>
                                    <option value="+80">+80</option>
                                </select>
                               
                            </div>
                            <div class="w-75 ms-2">
                                <input type="text" class="form-control" name="mobile" id="validationCustom02" value="<?php echo e(old('mobile')); ?>" placeholder="Enter Mobile Number">
                                <span style="color: red"><?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">MEMBER PASSWORD*</label>
                        <input type="password" name="password" class="form-control" value="<?php echo e(old('password')); ?>" id="exampleInputPassword1">
                        <span style="color: red"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom05" class="form-label">ADMIN</label>
                        <div>
                            <input type="radio" id="Yes" name="is_admin" <?php echo e((old('is_admin') == '1') ? 'checked' : ''); ?> value="1">
                            <label for="Yes" class="pe-4">Yes</label>
                            <input type="radio" id="No" name="is_admin" value="0" <?php echo e((old('is_admin') == '0') ? 'checked' : ''); ?>>
                            <label for="No">No</label><br/>
                            <span style="color: red"><?php $__errorArgs = ['is_admin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                        </div>
                    </div>
                  <input type="hidden" name="agent_id" value="<?php echo e(Auth::user()->id); ?>">
                <button type="submit" class="btn btn-primary">Add Member</button>
            </form>
            </div>
        </div>

    </div>
</div>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.agent_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/design/resources/views/agent/add_team.blade.php ENDPATH**/ ?>