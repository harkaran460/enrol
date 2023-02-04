
<?php $__env->startSection('content'); ?>
    <div class="page-content">
        
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add New Sub Agent</h4>
    
                        <div class="d-flex">
                            
                            <div class="dropdown d-inline-block phone-noti">
    
                                <a href="/important_notice" class="btn header-item noti-icon waves-effect">
                                    <i class="bx bx-bell"></i> 
                                    <span class="badge bg-danger rounded-pill">3</span> 
                                </a> 
                                
                            </div>
    
                            <div class="dropdown profile-login d-inline-block">
                                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle header-profile-user" src="/assetsAgent/img/profile-icon.png" alt="Header Avatar">
                                </button>
                                <div class="dropdown-menu dropdown-menu-end"> 
                                    <a class="dropdown-item user-name" href="/recruitment_partner_id"> 
                                        <span class="font-size-14"><b> Sukhwinder Singh</b></span>
                                        <span class="font-size-12 opacity-50">DevOps Engineer</span>
                                    </a> 
                                     <a class="dropdown-item" href="/logout">
                                        <i class="bx bx-power-off font-size-16 align-middle me-1"></i> 
                                        <span key="t-logout">Logout</span>
                                    </a>
                                </div>
                            </div> 
                            
                         </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!--<h3>Add New Sub Agent</h3>-->
                </div>
        
                <?php if(Session::has('Failed')): ?>
                    <div class="alert alert-danger"><?php echo e(Session::get('Failed')); ?></div>
                <?php endif; ?>
                
                <div class="col-md-4 col-12 tt">
                    <form class="rounded" action="store-sub-agent" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Sub Agent Name <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="validationCustom01" name="name"
                                value="<?php echo e(old('name')); ?>">
                            <span style="color: red">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address<span
                                    class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                                value="<?php echo e(old('email')); ?>" placeholder="name@example.com">
                            <span style="color: red">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password*</label>
                            <input type="password" class="form-control" name="password" value="<?php echo e(old('password')); ?>"
                                id="exampleInputPassword1">
                            <span style="color: red">
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                        </div>
                        
                </div>
                <div class="col-md-4 col-12 tt">
                    <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Country<span
                                    class="text-danger">*</span></label>
                            <span style="color: red">
                                <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                            <select class="form-select" id="agentcountry" name="country">
                                <option selected value="">Select</option>
                                <?php if($countries): ?>
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                                        <option <?php echo e(old('country') == $country->id  ? "selected" : ""); ?> value="<?php echo e($country->id); ?>"><?php echo e($country->country); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">State<span
                                    class="text-danger">*</span></label>
                            <span style="color: red">
                                <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
            
                            <select class="form-select" id="agentstate" name="state" >
                                <option selected value="">Select</option>
                                
                            </select>
                        </div>
                        <input type="hidden" name="hstate" id="hstate" value="">
                        <input type="hidden" name="hcity" id="hcity" value="">
                        <div class="mb-3">
                            <label for="exampleFormControlInput4" class="form-label">City<span
                                    class="text-danger">*</span></label>
                            <span style="color: red">
                                <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                            <select class="form-select" id="agentcity" name="city" value="<?php echo e(old('city')); ?>">
                                <option selected value="">Select</option>
                               
                            </select>
                        </div>
                    </div>
                    
                     <div class="col-md-4 col-12 tt">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contact Person<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="contact_person"
                                value="<?php echo e(old('contact_person')); ?>">
                            <span style="color: red">
                                <?php $__errorArgs = ['contact_person'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                        </div>
                        
                        <div class="mb-3">
                            <label for="validationCustom04" class="form-label">MOBILE*</label>
                            <span style="color: red">
                                <?php $__errorArgs = ['ccode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                            <div class="d-flex">
                                <div class="w-25">
                                    <select class="form-select" id="validationCustom04" id="ccode" name="ccode">
                                        <option selected value="+91">+91</option>
                                        <option value="+80">+80</option>
                                    </select>
                                </div>
                                <div class="w-75 ms-2">
                                    <span style="color: red">
                                        <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <?php echo e($message); ?>

                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </span>
                                    <input type="text" class="form-control" id="validationCustom02" name="mobile"
                                        value="<?php echo e(old('mobile')); ?>" placeholder="Enter Mobile Number">
                                </div>
                            </div>
                        </div>
                          <div class="mb-3">
                            <label for="validationCustom05" class="form-label">ADMIN</label>
                            <span style="color: red">
                                <?php $__errorArgs = ['is_admin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                            <div>
                                <input type="radio" id="Yes" value="1" name="is_admin" <?php echo e((old('is_admin') == '1') ? 'checked' : ''); ?>>
                                <label for="Yes" class="pe-4">Yes</label>
                                <input type="radio" id="No" value="0" name="is_admin"
                                <?php echo e((old('is_admin') == '1') ? 'checked' : ''); ?>>
                                <label for="No">No</label>
                            </div>
                        </div>
                </div>
                <div class="col-md-12">
                    <input type="hidden" name="agent_id" value="<?php echo e(Auth::user()->id); ?>">
                    <button type="submit" class="btn btn-primary">Add Sub Agent</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <style>
        /*.tt {*/
        /*    height: 100vh;*/
        /*    overflow: scroll;*/
        /*}*/
    </style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.agent_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/design/resources/views/agent/add_sub_agent.blade.php ENDPATH**/ ?>