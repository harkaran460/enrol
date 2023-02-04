<html>

<head>
    <meta charset="utf-8" />
    <title>Student Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <link rel="stylesheet" type="text/css" href="assetsStudent/css/ion.rangeSlider.min.css" />
    <link href="assetsStudent/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assetsStudent/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assetsStudent/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.min.css">
    <link href="assetsStudent/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assetsStudent/css/style.css">
    <link rel="stylesheet" type="text/css" href="assetsStudent/css/responsive.css">
</head>

<body>
    <?php $countries = getCountry();?>
    <?php $states = getState();?>
    <?php $cities = getcity();?>
    <section class="main-student-profile">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-1 col-md-10">
                    <div class="setup-content" id="step-1">
                        <h5 class="heading-registration">Student Registration</h5>
                        <div class="card p-2">
                            <form method="POST" action="/process_signup">
                                <?php echo csrf_field(); ?>
                                <div class="card-body">
                                    <div class="personal-information">
                                        <h4>Personal Information</h4>
                                        <h5>(As indicated on your passport)</h5>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> First Name <span class="red">*</span> </label>
                                                    <input name="first_name" type="text" class="form-control" value="<?php echo e(old('first_name')); ?>" placeholder="Enter First Name...">
                                                    <?php if($errors->has('first_name')): ?>
                                                    <span class="text-danger" style="font-size: 15px;"><?php echo e($errors->first('first_name')); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Middle Name </label>
                                                    <input name="middle_name" type="text" class="form-control" value="<?php echo e(old('middle_name')); ?>" placeholder="Enter Middle Name...">
                                                    <?php if($errors->has('middle_name')): ?>
                                                    <span class="text-danger" style="font-size: 15px;"><?php echo e($errors->first('middle_name')); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Last Name </label>
                                                    <input name="last_name" type="text" class="form-control" value="<?php echo e(old('last_name')); ?>" placeholder="Enter Last Name...">
                                                    <?php if($errors->has('last_name')): ?>
                                                    <span class="text-danger" style="font-size: 15px;"><?php echo e($errors->first('last_name')); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-md-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Date of Birth <span class="red">*</span> </label>
                                                    <input name="date_of_birth" type="date" class="form-control" value="<?php echo e(old('date_of_birth')); ?>">
                                                    <?php if($errors->has('date_of_birth')): ?>
                                                    <span class="text-danger" style="font-size: 15px;"><?php echo e($errors->first('date_of_birth')); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> First Language <span class="red">*</span> </label>
                                                    <input name="first_language" type="text" class="form-control" value="<?php echo e(old('first_language')); ?>" placeholder="Enter First Language ...">
                                                    <?php if($errors->has('first_language')): ?>
                                                    <span class="text-danger" style="font-size: 15px;"><?php echo e($errors->first('first_language')); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Country of Citizenship <span class="red">*</span> </label>
                                                    <select name="country_of_citizenship" id="" class="form-select" value="<?php echo e(old('country_of_citizenship')); ?>" aria-label="Default select example">
                                                    
                                                    <option>select country</option>
                                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($country->id); ?>">
                                                            <?php echo e($country->country); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        
                                                    </select>
                                                    <?php if($errors->has('first_language')): ?>
                                                    <span class="text-danger" style="font-size: 15px;"><?php echo e($errors->first('country_of_citizenship')); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-md-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Passport Number
                                                        <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="We collect your passport information for identity verification purposes, your school or program of interest may require this information to process your application. If applicable, it may also be used for processing your visa."></i>
                                                        <span class="red">*</span>
                                                    </label>
                                                    <input name="passport_number" type="tel" class="form-control" value="<?php echo e(old('passport_number')); ?>" placeholder="Enter Passport Number...">
                                                    <?php if($errors->has('passport_number')): ?>
                                                    <span class="text-danger" style="font-size: 15px;"><?php echo e($errors->first('passport_number')); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group radio-main">
                                                    <label> Marital Status
                                                        <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="We collect information about your marital status because your school or program of interest may require this information to process your application."></i>
                                                        <span class="red">*</span>
                                                    </label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="marital_status" value="Single" id="flexRadioDefault1" <?php echo e((old('marital_status') == 'Single') ? 'checked' : ''); ?> checked>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Single
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="marital_status" value="Married" <?php echo e((old('marital_status') == 'Married') ? 'checked' : ''); ?> id="flexRadioDefault2">
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    Married
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group radio-main">
                                                    <label> Gender <span class="red">*</span> </label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="gender" value="Female" id="flexRadioDefault3" <?php echo e((old('gender') == 'Female') ? 'checked' : ''); ?> checked>
                                                                <label class="form-check-label" for="flexRadioDefault3">
                                                                    Female
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="gender" value="Male" <?php echo e((old('gender') == 'Male') ? 'checked' : ''); ?> id="flexRadioDefault4">
                                                                <label class="form-check-label" for="flexRadioDefault4">
                                                                    Male
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="address-detail">
                                        <h4>Address Detail</h4>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label> Address <span class="red">*</span> </label>
                                                    <input name="address" type="text" class="form-control" value="<?php echo e(old('address')); ?>" placeholder="Enter Full Address...">
                                                    <?php if($errors->has('address')): ?>
                                                    <span class="text-danger" style="font-size: 15px;"><?php echo e($errors->first('address')); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> City/Town <span class="red">*</span> </label>
                                                    <select name="city_town" id="city_town" class="form-select" aria-label="Default select example">
                                                        <option value="">Select City/Town</option>
                                                        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($city->id); ?>">
                                                            <?php echo e($city->city); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-md-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Country <span class="red">*</span> </label>
                                                    <select name="country" id="country" class="form-select" aria-label="Default select example">
                                                        <option value="">Select country</option>
                                                         <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($country->id); ?>">
                                                            <?php echo e($country->country); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <?php if($errors->has('country')): ?>
                                                    <span class="text-danger" style="font-size: 15px;"><?php echo e($errors->first('country')); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Province/State <span class="red">*</span> </label>
                                                    <select name="province_state" id="" class="form-select" aria-label="Default select example">
                                                        <option value="">Select State</option>
                                                        <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($state->id); ?>">
                                                            <?php echo e($state->state); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <?php if($errors->has('province_state')): ?>
                                                    <span class="text-danger" style="font-size: 15px;"><?php echo e($errors->first('province_state')); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Postal/Zip Code <span class="red">*</span> </label>
                                                    <input name="postal_code" type="text" class="form-control" value="<?php echo e(old('postal_code')); ?>" placeholder="Enter Pin Code...">
                                                    <?php if($errors->has('postal_code')): ?>
                                                    <span class="text-danger" style="font-size: 15px;"><?php echo e($errors->first('postal_code')); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Email <span class="red">*</span> </label>
                                                    <input name="email" type="email" class="form-control" value="<?php echo e(old('email')); ?>" placeholder="Enter Email...">
                                                    <?php if($errors->has('email')): ?>
                                                    <span class="text-danger" style="font-size: 15px;"><?php echo e($errors->first('email')); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Password <span class="red">*</span> </label>
                                                    <input name="password" type="password" class="form-control" value="<?php echo e(old('password')); ?>" placeholder="Enter Password...">
                                                    <?php if($errors->has('password')): ?>
                                                    <span class="text-danger" style="font-size: 15px;"><?php echo e($errors->first('password')); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Phone Number <span class="red">*</span> </label>
                                                    <input name="phone_number" type="tel" class="form-control" value="<?php echo e(old('phone_number')); ?>" placeholder="Enter Phone Number...">
                                                    <?php if($errors->has('phone_number')): ?>
                                                    <span class="text-danger" style="font-size: 15px;"><?php echo e($errors->first('phone_number')); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-md-3">
                                            <div class="col-md-12">
                                                <button class="btn-next nextBtn float-end" type="submit">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
    </section>
    </div>


</body>


<script src="assetsStudent/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
<script src="assetsStudent/js/bootstrap.bundle.min.js"></script>
<script src="assetsStudent/js/metisMenu.min.js"></script>

<script src="assetsStudent/js/select2.min.js"></script>

<script src="assetsStudent/js/ecommerce-select2.init.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<script src="assetsStudent/js/ion.rangeSlider.min.js"></script>
<!-- Range slider init js-->
<script src="assetsStudent/js/range-sliders.init.js"></script>


<!-- App js -->
<script src="assetsStudent/js/app.js"></script>
<script src="assetsStudent/js/main.js"></script>

</html><?php /**PATH /home/enrolhere/public_html/college/resources/views/register/student_register.blade.php ENDPATH**/ ?>