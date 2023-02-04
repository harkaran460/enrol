
<?php $__env->startSection('content'); ?>
<?php $getEnglishexamType = getEnglishexamType();?>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-white p-4">
                        <div class="css-1y75kwg css-1jlq0r60">
                            <div class="css-q6cz2y css-1jlq0r62">
                                <div class="css-1jlq0r65 css-gqqadv">
                                    <?php $firstcaracter = substr($studentdetails[0]->first_name, 0, 1); ?> <?php //echo ucword($firstcaracter);?>
                                    <div data-testid="student-profile-913705-initials-avatar" class="css-m8p8pp"><?php echo e(ucfirst(trans($firstcaracter))); ?> </div>
                                </div>
                            </div>
                            <div class="css-1ca1ag7 css-1jlq0r61">
                                <div class="css-1yyj7dd css-1jlq0r63"><?php echo e(ucfirst(trans($studentdetails[0]->first_name))); ?>

                                    <?php echo e($studentdetails[0]->last_name); ?></div>
                                <div>
                                    <span class="css-1ai5g3s css-1jlq0r64"><?php echo e($studentdetails[0]->user_id); ?></span>
                                    <span class="css-1ai5g3s css-1jlq0r64">|</span>
                                    <span class="css-1ai5g3s css-1jlq0r64">
                                        <a href="mailto:<?php echo e($studentdetails[0]->email); ?>"><?php echo e($studentdetails[0]->email); ?></a>
                                    </span>
                                    <span class="css-1ai5g3s css-1jlq0r64">|</span>
                                    <span class="css-1ai5g3s css-1jlq0r64">
                                        <a href="tel:<?php echo e($studentdetails[0]->phone_number); ?>">
                                            <?php echo e($studentdetails[0]->phone_number); ?></a>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="css-1sqs8up css-1uorugc3">
                            <a href="/agent-student-profile/<?php echo e($studentdetails[0]->user_id); ?>">
                                <span class="css-1ksf4ma css-1uorugc4 active-application">Profile</span>
                            </a>
                            <a href="/search-and-apply/<?php echo e($studentdetails[0]->user_id); ?>">
                                <span class="css-1ksf4ma css-1uorugc4">Search and Apply</span>
                            </a>
                            <a href="/student-profile-application/<?php echo e($studentdetails[0]->user_id); ?>">
                                <span class="css-1ksf4ma css-1uorugc4">Applications<span
                                        class="css-c6v9dn css-1uorugc2">3</span></span>
                            </a>
                            <a href="/student-payment/<?php echo e($studentdetails[0]->user_id); ?>">
                                <span class="css-1ksf4ma css-1uorugc4">Payments</span>
                            </a>
                        </div>

                        <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="" class="btn btn-primary">
                                        General Information <i class="fa-solid fa-circle-check" id="green-color"></i>
                                    </a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="" class="btn btn-default" disabled="disabled">
                                        Education History <i class="fa-solid fa-circle-check" id="green-color"></i>
                                    </a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="" class="btn btn-default" disabled="disabled">
                                        Test Scores <i class="fa-solid fa-circle-check" id="green-color"></i>
                                    </a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="" class="btn btn-default" disabled="disabled">
                                        Background Information <i class="fa-solid fa-circle-check" id="green-color"></i>
                                    </a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="" class="btn btn-default" disabled="disabled">
                                        Upload Documents <i class="fa-solid fa-circle-check" id="green-color"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-white alert-dismissible fade show bg--unset" role="alert">
                        <p> <i class="fa-solid fa-bell"></i> Please enter your information accurately and correctly. All
                            fields will be sent to the selected school upon submission of your application on ApplyBoard.
                        </p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
            <div class="row mt-md-3">
                <div class="col-md-12">
                    <div class="card p-2 profile-complete">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <h4 class="d-inline">Profile Complete!</h4>
                                        <a href="student_profile_application"><button type="button"
                                                class="discover-programs float-end">Discourse School and
                                                Programs</button></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-md-3">
                <div class="col-md-12">
                    <div id="error"></div>
                    <div id="success"></div>
                    <h5 class="heading-registration">Registration Date:
                        <?php echo e(date('M jS, Y', strtotime($studentdetails[0]->created_at))); ?> </h5>
                    <form action="/agent-student-profile-update" method="POST" name="updatestudentProfile" id="updatestudentProfile">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="user_id" id="user_id" value="<?php echo e($studentdetails[0]->user_id); ?>">
                        <input type="hidden" name="id" id="id" value="<?php echo e($studentdetails[0]->id); ?>">
                        <div class="card p-2">
                            <div class="card-body">
                                <div class="personal-information">
                                    <h4>Personal Information</h4>
                                    <h5>(As indicated on your passport)</h5>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> First Name <span class="red">*</span> </label>
                                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name..."
                                                    value="<?php echo e($studentdetails[0]->first_name); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Middle Name </label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Middle Name..."
                                                    value="<?php echo e($studentdetails[0]->middle_name); ?>" name="middle_name" id="middle_name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Last Name </label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Last Name..."
                                                    value="<?php echo e($studentdetails[0]->last_name); ?>" name="last_name" id="last_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Familly Name</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Familly Name..."
                                                    value="<?php echo e($studentdetails[0]->family_name); ?>" name="family_name" id="family_name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Date of Birth <span class="red">*</span> </label>
                                                <input type="date" class="form-control"
                                                    value="<?php echo e($studentdetails[0]->date_of_birth); ?>" name="date_of_birth" id="date_of_birth">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> First Language <span class="red">*</span> </label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter First Language ..."
                                                    value="<?php echo e($studentdetails[0]->first_language); ?>" name="first_language" id="first_language">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country of Citizenship <span class="red">*</span> </label>
                                                <select name="country_of_citizenship" id="country_of_citizenship"
                                                    class="form-select" aria-label="Default select example">
                                                    <?php $countries = getCountry();?>
                                                    <option value="0">select country</option>
                                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($country->id); ?>">
                                                            <?php echo e($country->country); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Passport Number
                                                    <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-bs-original-title="We collect your passport information for identity verification purposes, your school or program of interest may require this information to process your application. If applicable, it may also be used for processing your visa."></i>
                                                    <span class="red">*</span>
                                                </label>
                                                <input type="tel" class="form-control"
                                                    placeholder="Enter Passport Number..."
                                                    value="<?php echo e($studentdetails[0]->passport_number); ?>" name="passport_number" id="passport_number">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group radio-main">
                                                <label> Marital Status
                                                    <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-bs-original-title="We collect information about your marital status because your school or program of interest may require this information to process your application."></i>
                                                    <span class="red">*</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="marital_status" value="single"
                                                                id="marital_status"
                                                                <?php echo e($studentdetails[0]->marital_status == 'single' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Single
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="marital_status" value="married"
                                                                id="marital_status"
                                                                <?php echo e($studentdetails[0]->marital_status == 'married' ? 'checked' : ''); ?>>
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
                                                            <input class="form-check-input" type="radio" name="gender"
                                                                value="female" id="gender"
                                                                <?php echo e($studentdetails[0]->gender == 'female' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gender"
                                                                value="male" id="gender"
                                                                <?php echo e($studentdetails[0]->gender == 'male' ? 'checked' : ''); ?>>
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
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="address-detail">
                                    <h4>Address Detail</h4>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label> Address <span class="red">*</span> </label>
                                                <input type="text" class="form-control" name="address" id="address"
                                                    placeholder="Enter Full Address..."
                                                    value="<?php echo e($studentdetails[0]->address); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Email <span class="red">*</span> </label>
                                                <input type="text" class="form-control" placeholder="Enter Email..."
                                                    value="<?php echo e($studentdetails[0]->email); ?>" name="email" id="email">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Country <span class="red">*</span> </label>
                                                <select name="country" id="country" class="form-select"
                                                    aria-label="Default select example">

                                                    <option value="0">select country</option>
                                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($country->id); ?>"
                                                            <?php echo e($studentdetails[0]->country == "$country->id" ? 'selected' : ''); ?>>
                                                            <?php echo e($country->country); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Province/State <span class="red">*</span> </label>
                                                <select name="province_state" id="province_state" class="form-select"
                                                    aria-label="Default select example">
                                                    <?php $states = getState();?>
                                                    <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($state->id); ?>"
                                                            <?php echo e($studentdetails[0]->province_state == "$state->id" ? 'selected' : ''); ?>>
                                                            <?php echo e($state->state); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> City/Town <span class="red">*</span> </label>
                                                <?php $cities = getcity();?>
                                                <select name="city_town" id="city_town" class="form-select"
                                                    aria-label="Default select example">
                                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($city->id); ?>"
                                                            <?php echo e($studentdetails[0]->city_town == "$city->id" ? 'selected' : ''); ?>>
                                                            <?php echo e($city->city); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Postal/Zip Code <span class="red">*</span> </label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Pin Code..."
                                                    value="<?php echo e($studentdetails[0]->postal_code); ?>" name="postal_code" id="postal_code">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Phone Number <span class="red">*</span> </label>
                                                <input type="tel" class="form-control"
                                                    placeholder="Enter Phone Number..."
                                                    value="<?php echo e($studentdetails[0]->phone_number); ?>" name="phone_number" id="phone_number">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="education-summary">
                            <div class="card p-2">
                                <div class="card-body">
                                    <h4>Education Summary</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Country of Education  <span class="red">*</span> </label>
                                                <select name="country_of_education" id="country_of_education"
                                                    class="form-select" aria-label="Default select example">
                                                    <option value="0">select country</option>
                                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($country->id); ?>"
                                                            <?php echo e($studentdetails[0]->country_of_education == $country->id ? 'selected' : ''); ?>>
                                                            <?php echo e($country->country); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <?php $educationlist = getEducation();?>
                                                <label> Highest Level of Education <span class="red">*</span> </label>
                                                <select name="highest_level_of_education" id="highest_level_of_education" class="form-select"
                                                    aria-label="Default select example">
                                                    <option value="0">select education</option>
                                                    <?php $__currentLoopData = $educationlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($list->id); ?>"
                                                            <?php echo e($studentdetails[0]->highest_level_of_education == "$list->id" ? 'selected' : ''); ?>>
                                                            <?php echo e($list->title); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Grading Scheme <span class="red">*</span> </label>
                                                <select name="grading_scheme" id="grading_scheme" class="form-select"
                                                    aria-label="Default select example">
                                                    <?php $grad_list = getGradingScheme(); ?>
                                                    <option value="0">Other</option>
                                                    <?php $__currentLoopData = $grad_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value=<?php echo e($grad->id); ?>

                                                            <?php echo e($studentdetails[0]->grading_scheme == "$grad->id" ? 'selected' : ''); ?>>
                                                            <?php echo e($grad->grad_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Grade Average <span class="red">*</span> </label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Grade Average..."
                                                    value="<?php echo e($studentdetails[0]->grade_average); ?>" name="grade_average" id="grade_average">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pt-md-5">
                                            <div class="form-group form-check">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                name="graduated_from_most_recent_school" id="graduated_from_most_recent_school"
                                                    <?php echo e($studentdetails[0]->graduated_from_most_recent_school == 1 ? 'checked' : ''); ?>>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Graduated from most recent school
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="schools-attended">
                            <div class="card mt-md-3">
                                <div class="card-body">
                                    <h4>Schools Attended</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><?php echo e($studentdetails[0]->name_of_institution); ?></p>
                                        </div>
                                        <div class="col-md-4">
                                            <div>
                                                <svg role="img" width="24" height="24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M19.707 6.293a1 1 0 010 1.414L9 18.414l-4.707-4.707a1 1 0 111.414-1.414L9 15.586l9.293-9.293a1 1 0 011.414 0z"
                                                        fill="#58BE91"></path>
                                                </svg>
                                                <strong> Graduated from Institution </strong><span>
                                                    <?php echo e(date('F d, Y', strtotime($studentdetails[0]->graduation_date))); ?>

                                                </span>
                                            </div>
                                            <div>
                                                <svg role="img" width="24" height="24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M19.707 6.293a1 1 0 010 1.414L9 18.414l-4.707-4.707a1 1 0 111.414-1.414L9 15.586l9.293-9.293a1 1 0 011.414 0z"
                                                        fill="#58BE91"></path>
                                                </svg>
                                                <strong> Certificate awarded</strong>
                                            </div>
                                            <div><strong>Level:</strong> <?php echo e($studentdetails[0]->degree_name); ?></div>
                                            <div><strong>Attended from </strong><span>
                                                    <?php echo e(date('F d, Y', strtotime($studentdetails[0]->attended_institution_from))); ?>

                                                </span><strong> to </strong><span>
                                                    <?php echo e(date('F d, Y', strtotime($studentdetails[0]->attended_institution_to))); ?>

                                                </span></div>
                                            <div><strong>Language of instruction:
                                                </strong><span><?php echo e($studentdetails[0]->primary_language_of_instruction); ?></span>
                                            </div>
                                            <div class="address">
                                                <div><strong>Address:</strong></div>
                                                <div><?php echo e($studentdetails[0]->school_address); ?></div>
                                                <div><?php echo e($studentdetails[0]->school_city_town); ?>,
                                                    <?php echo e($studentdetails[0]->school_province); ?></div>
                                                <div><?php echo e($studentdetails[0]->country_of_institution_name); ?></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
                                    <!--<div class="row">
                                        <div class="col-md-12">
                                            <div class="float-end">
                                                <a href="javascript:;" class="btn btn-danger">Delete</a>
                                                <a href="javascript:;" class="btn btn-primary">Expand</a>
                                            </div>
                                        </div>
                                    </div>-->

                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Country of Institution <span class="red">*</span> </label>
                                                <select name="country_of_institution" id="country_of_institution" class="form-select"
                                                    aria-label="Default select example">
                                                    <option value="0">select country</option>
                                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($country->id); ?>"
                                                            <?php echo e($studentdetails[0]->country_of_institution == $country->id ? 'selected' : ''); ?>>
                                                            <?php echo e($country->country); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Name of Institution <span class="red">*</span> </label>
                                                <input type="text" class="form-control"
                                                    value=" <?php echo e($studentdetails[0]->name_of_institution); ?>" name="name_of_institution" id="name_of_institution">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Highest Level of Education <span class="red">*</span> </label>
                                                <select name="level_of_education" id="level_of_education" class="form-select"
                                                    aria-label="Default select example">
                                                    <?php $educationlist = getEducation();?>
                                                    <option value="0">None</option>
                                                    <?php $__currentLoopData = $educationlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($list->id); ?>"
                                                            <?php echo e($studentdetails[0]->level_of_education == "$list->id" ? 'selected' : ''); ?>>
                                                            <?php echo e($list->title); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <label> Primary Language of Instruction <span class="red">*</span> </label>
                                            <input type="text" class="form-control"
                                                value="<?php echo e($studentdetails[0]->primary_language_of_instruction); ?>" name="primary_language_of_instruction" id="primary_language_of_instruction">
                                        </div>
                                        <div class="col-md-4">
                                            <label> Attended Institution From <span class="red">*</span> </label>
                                            <input type="date" class="form-control"
                                                value="<?php echo e($studentdetails[0]->attended_institution_from); ?>" name="attended_institution_from" id="attended_institution_from">
                                        </div>
                                        <div class="col-md-4">
                                            <label> Attended Institution To <span class="red">*</span> </label>
                                            <input type="date" class="form-control"
                                                value="<?php echo e($studentdetails[0]->attended_institution_to); ?>" name="attended_institution_to" id="attended_institution_to">
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Degree Name </label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Degree Name..."
                                                    value="<?php echo e($studentdetails[0]->degree_name); ?>" name="degree_name" id="degree_name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group radio-main">
                                                <label>I have graduated from this institution <span class="red">*</span>
                                                </label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="graduated_institution" id="graduated_institution"
                                                        value="1"
                                                        <?php echo e($studentdetails[0]->graduated_institution == 1 ? 'checked' : ''); ?>>
                                                    <label class="form-check-label" for="flexRadioDefault6">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="graduated_institution" id="graduated_institution"
                                                        value="0"
                                                        <?php echo e($studentdetails[0]->graduated_institution == 0 ? 'checked' : ''); ?>>
                                                    <label class="form-check-label" for="flexRadioDefault5">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Graduation Date <span class="red">*</span> </label>
                                                <input type="date" class="form-control"
                                                    value="<?php echo e($studentdetails[0]->graduation_date); ?>" name="graduation_date" id="graduation_date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-md-1">
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    id="physical_certificate_for_this_degree"
                                                    name="physical_certificate_for_this_degree"
                                                    <?php echo e($studentdetails[0]->physical_certificate_for_this_degree == '1' ? 'checked' : ''); ?>>
                                                <label class="form-check-label" for="flexCheckDefaultphysical">
                                                    I have the physical certificate for this degree
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-md-3">
                                        <div class="col-md-12">
                                            <h3>School Address</h3>
                                        </div>
                                    </div>

                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Address<span class="red">*</span> </label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo e($studentdetails[0]->school_address); ?>" name="school_address" id="school_address">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Province </label>
                                                <select name="school_province" id="school_province" class="form-select"
                                                    aria-label="Default select example">
                                                    <?php $states = getState();?>
                                                    <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($state->id); ?>"
                                                            <?php echo e($studentdetails[0]->school_province == "$state->id" ? 'selected' : ''); ?>>
                                                            <?php echo e($state->state); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City/Town<span class="red">*</span> </label>
                                                <?php $cities = getcity();?>
                                                <select name="school_city_town" id="school_city_town" class="form-select"
                                                    aria-label="Default select example">
                                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($city->id); ?>"
                                                            <?php echo e($studentdetails[0]->school_city_town == "$city->id" ? 'selected' : ''); ?>>
                                                            <?php echo e($city->city); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <label>Postal/Zip Code </label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter Postal/Zip Code..."
                                                value="<?php echo e($studentdetails[0]->school_postal_code); ?>" name="school_postal_code" id="school_postal_code">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card mt-md-3 additional-qualifications">
                            <div class="card-body">
                                <h4>Additional Qualifications</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input main-switch" type="checkbox"
                                                id="flexSwitchCheckDefaultexam">
                                            <label class="form-check-label" for="flexSwitchCheckDefaultexam"> I have GRE
                                                exam scores </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-switch-toggle mt-md-3">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> GRE Exam Date </label>
                                                <input type="date" class="form-control"
                                                    value="<?php echo e($studentdetails[0]->gre_exam_date); ?>" name="gre_exam_date" id="gre_exam_date">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Verbal </label>
                                                <input type="tel" class="form-control" placeholder="Score"
                                                    value="<?php echo e($studentdetails[0]->gre_verbal_score); ?>" name="gre_verbal_score" id="gre_verbal_score">
                                                <input type="tel" class="form-control mt-1" placeholder="Rank %"
                                                    value="<?php echo e($studentdetails[0]->gre_verbal_rank); ?>" name="gre_verbal_rank" id="gre_verbal_rank">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Quantitative </label>
                                                <input type="tel" class="form-control" placeholder="Score"
                                                    value="<?php echo e($studentdetails[0]->gre_quantitative_score); ?>" name="gre_quantitative_score" id="gre_quantitative_score">
                                                <input type="tel" class="form-control mt-1" placeholder="Rank %"
                                                    value="<?php echo e($studentdetails[0]->gre_quantitative_rank); ?>" name="gre_quantitative_rank" id="gre_quantitative_rank">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Writing </label>
                                                <input type="tel" class="form-control" placeholder="Score"
                                                    value="<?php echo e($studentdetails[0]->gre_writing_score); ?>" name="gre_writing_score" id="gre_writing_score">
                                                <input type="tel" class="form-control mt-1" placeholder="Rank %"
                                                    value="<?php echo e($studentdetails[0]->gre_writing_rank); ?>" name="gre_writing_rank" id="gre_writing_rank">
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <div class="row mt-md-3">
                                    <div class="col-md-12">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input main-switch2" type="checkbox"
                                                id="flexSwitchCheckDefaultgmat">
                                            <label class="form-check-label" for="flexSwitchCheckDefaultgmat"> I have GMAT
                                                exam scores </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-switch-toggle2 mt-md-3">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> GMAT Exam Date </label>
                                                <input type="date" class="form-control"
                                                    value="<?php echo e($studentdetails[0]->gmat_gre_exam_date); ?>" name="gmat_gre_exam_date" id="gmat_gre_exam_date">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Verbal </label>
                                                <input type="tel" class="form-control" placeholder="Score"
                                                    value="<?php echo e($studentdetails[0]->gmat_verbal_score); ?>" name="gmat_verbal_score" id="gmat_verbal_score">
                                                <input type="tel" class="form-control mt-1" placeholder="Rank %"
                                                    value="<?php echo e($studentdetails[0]->gmat_verbal_rank); ?>" name="gmat_verbal_rank" id="gmat_verbal_rank">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Quantitative </label>
                                                <input type="tel" class="form-control" placeholder="Score"
                                                    value="<?php echo e($studentdetails[0]->gmat_quantitative_score); ?>" name="gmat_quantitative_score" id="gmat_quantitative_score">
                                                <input type="tel" class="form-control mt-1" placeholder="Rank %"
                                                    value="<?php echo e($studentdetails[0]->gmat_quantitative_rank); ?>" name="gmat_quantitative_rank" id="gmat_quantitative_rank">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Writing </label>
                                                <input type="tel" class="form-control" placeholder="Score"
                                                    value="<?php echo e($studentdetails[0]->gmat_writing_score); ?>" name="gmat_writing_score" id="gmat_writing_score">
                                                <input type="tel" class="form-control mt-1" placeholder="Rank %"
                                                    value="<?php echo e($studentdetails[0]->gmat_writing_rank); ?>" name="gmat_writing_rank" id="gmat_writing_rank">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row mt-md-3">
                                    <div class="col-md-12">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input main-switch3" type="checkbox"
                                                id="flexSwitchCheckDefaultgmat1">
                                            <label class="form-check-label" for="flexSwitchCheckDefaultgmat1"> I have
                                                English exam scores </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-switch-toggle3 mt-md-3">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> English Exam Date </label>
                                                <input type="date" class="form-control"
                                                    value="<?php echo e($studentdetails[0]->date_of_exam); ?>" name="date_of_exam" id="date_of_exam">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Lisenting </label>
                                                <input type="tel" class="form-control" placeholder="Score"
                                                    value="<?php echo e($studentdetails[0]->lisenting); ?>" name="lisenting" id="lisenting">

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Reading </label>
                                                <input type="tel" class="form-control" placeholder="Score"
                                                    value="<?php echo e($studentdetails[0]->reading); ?>" name="reading" id="reading">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Writing </label>
                                                <input type="tel" class="form-control" placeholder="Score"
                                                    value="<?php echo e($studentdetails[0]->writing); ?>" name="writing" id="writing">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Speaking </label>
                                                <input type="tel" class="form-control" placeholder="Score"
                                                    value="<?php echo e($studentdetails[0]->speaking); ?>" name="speaking" id="speaking">
                                            </div>
                                        </div>
                                        
                                         <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Exam Type  </label>
                                                <select class="form-control select2" name="exam_type" id="exam_type">
                                                    <?php $__currentLoopData = $getEnglishexamType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value=<?php echo e($type->id); ?>><?php echo e($type->exam_name); ?></option>   
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--<div class="row mt-md-3">
                                    <div class="col-md-12">
                                        <div class="float-end">
                                            <button class="btn-prev prevBtn" type="button">Back</button>
                                            <button class="btn-next nextBtn" type="button">Next</button>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>

                        <div class="card p-2 background-information">
                            <div class="card-body">
                                <h4>Background Information</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Have you been refused a visa from Canada, the USA, the United Kingdom, New
                                            Zealand, Australia or Ireland?</p>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="refused_visa" id="refused_visa" value="1"
                                                            <?php echo e($studentdetails[0]->refused_visa == '1' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label px-md-2"
                                                            for="flexRadioDefaultyes1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="refused_visa" id="refused_visa" value="0"
                                                            <?php echo e($studentdetails[0]->refused_visa == '0' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label px-md-2" for="flexRadioDefaultno1">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-md-3">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Do you have a valid Study Permit / Visa?</label>
                                            <select class="select2 form-control select2-multiple" multiple="multiple"
                                                data-placeholder="Choose ..." name="study_permit_visa" id="study_permit_visa">
                                                <?php $permitvisa = getPermitVisa(); ?>

                                                <option value="0">None</option>
                                                <?php $__currentLoopData = $permitvisa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($list->id); ?>"
                                                        <?php echo e($studentdetails[0]->study_permit_visa == $list->id ? 'selected' : ''); ?>>
                                                        <?php echo e($list->visa_title); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-md-3">
                                    <div class="form-group">
                                        <label>If you answered "Yes" to any of the questions above, please provide more
                                            details below:</label>
                                        <textarea name="more_background_details" id="more_background_details" cols="10" rows="4" class="form-control"
                                            placeholder="Provide details..."><?php echo e($studentdetails[0]->more_background_details); ?></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row mt-md-3">
                            <div class="col-md-12">
                                <div class="float-end">
                                   
                                    <button class="btn-next nextBtn" type="button" onclick="agentStudentProfileUpdate();">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php if(!empty($applications)): ?>
                        <div class="upload-documents">
                            <div class="card mt-md-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Upload Documents</h4>
                                        </div>
                                    </div>
                                    <hr>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Application ID </th>
                                            <th>School Name </th>
                                            <th>Program Name </th>
                                            <th>To Application</th>
                                        </tr>
                                        <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($application->app_id); ?></td>
                                                <td><?php echo e($application->college_name); ?> </td>
                                                <td><?php echo e($application->programs_name); ?></td>
                                                <a href="">
                                                    <td>
                                                        <div class="d-grid gap-2">
                                                            <button type="btn"
                                                                class="btn btn-primary btn-block fs-5 rounded-pill"><i
                                                                    class="fa fa-arrow-right"></i></button>
                                                        </div>
                                                    </td>
                                                </a>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>

                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.agent_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/college/resources/views/agent/student_profile.blade.php ENDPATH**/ ?>