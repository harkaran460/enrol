
<?php $__env->startSection('content'); ?>
<?php $countries     = getCountry();?>
<?php $colleges      = getCollege();?>
<?php $inakesdate    = getIntekDate();?>
<?php $postdisciplines = getPostDiscipline();?>
<?php $subcategories = getSubCategories();?>
<?php $getPermitVisa = getPermitVisa();?>
<?php $getEducations = getEducation();?>
<?php $getGradingSchemes = getGradingScheme();?>
<?php $getEnglishexamType = getEnglishexamType();?>
<?php $astatus = $student_details->application_status;?>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->
<?php var_dump($astatus); ?>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    
                    <div class="review-main pt-3 pb-2">
                        <h3>Show Application
                            <?php if($astatus < 11): ?>
                            <a class="btn btn-warning btn-sm px-2 mb-2"><i class="fa-solid fa-cart-shopping"></i> &nbsp; Pending</a>
                            <?php endif; ?>
                            <?php if($astatus == 11): ?>
                            <a class="btn btn-danger btn-sm px-2 mb-2"><i class="fa-solid fa-cart-shopping"></i> &nbsp; Cancel</a>
                            <?php endif; ?>
                            <?php if(($astatus == 12) && ($student_details->paymentstatus >1)): ?>
                            <a class="btn btn-success btn-sm px-2 mb-2"><i class="fa-solid fa-cart-shopping"></i> &nbsp; Approved</a>
                            <?php elseif(($astatus == 12) && ($student_details->paymentstatus < 2)): ?>
                            <a class="btn btn-warning btn-sm px-2 mb-2"><i class="fa-solid fa-cart-shopping"></i> &nbsp; Payment Pending</a>
                            <?php endif; ?>
                        </h3>  
                        <!--<span class="badge bg-danger text-white float-end">Pending</span>-->
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item">Dashboard</li>&nbsp; /
                                <li class="breadcrumb-item">Application</li>&nbsp; /
                                    <li class="breadcrumb-item" aria-current="page">Students</li>&nbsp; /
                                        <li class="breadcrumb-item" aria-current="page"><?php echo e($student_details->first_name); ?> <?php echo e($student_details->middle_name); ?></li>&nbsp; /
                                            <li class="breadcrumb-item" aria-current="page">Applications</li>&nbsp; /
                                                <li class="breadcrumb-item active" aria-current="page"><?php echo e($student_details->program_college_name); ?> - <?php echo e($student_details->college_address); ?></li>&nbsp; /
                          </ol>
                        </nav>
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="d-flex justify-content-end">
                        <div class="dropdown cencel_document">
                            <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-ellipsis-vertical fs-4"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" onclick="statusChange(<?php echo e($student_details->app_id); ?>,12)">Approved Application</a></li>
                                <li><a class="dropdown-item" href="#" onclick="statusChange(<?php echo e($student_details->app_id); ?>,11)">Cancel Application</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="msg_pass"></div>
                    <div id="suceess_pass"></div>
                </div>
            </div>
            <div class="row mt-md-3">
                <div class="col-md-12">
                    <div id="crumbs">
                        <ul>

                            <li><a href="#"
                                    class="<?php if(($astatus >= 0) && ($student_details->paymentstatus >1)): ?> application-active <?php else: ?> '' <?php endif; ?> "><i
                                        class="fa-solid fa-check"></i><span> Pay Application Fee</span></a></li>
                            <li><a href="#"
                                    class="<?php if(($astatus >= 2) && ($student_details->paymentstatus >1)): ?> application-active <?php else: ?> '' <?php endif; ?> "><i
                                        class="fa-solid fa-check"></i><span> Prepare Application</span></a></li>
                            <li><a href="#"
                                    class="<?php if(($astatus >= 3) && ($student_details->paymentstatus >1)): ?> application-active <?php else: ?> '' <?php endif; ?> "><i
                                        class="fa-solid fa-check"></i><span> Submission In Progress</span></a></li>
                            <li><a href="#"
                                    class="<?php if(($astatus >= 4) && ($student_details->paymentstatus >1)): ?> application-active <?php else: ?> '' <?php endif; ?> "><i
                                        class="fa-solid fa-check"></i><span> Decision</span></a></li>
                            <li><a href="#"
                                    class="<?php if(($astatus >= 5)  && ($student_details->paymentstatus >1)): ?> application-active <?php else: ?> '' <?php endif; ?> "><i
                                        class="fa-solid fa-check"></i><span> Post-Decision Requirements</span></a></li>
                            <li><a href="#"
                                    class="<?php if(($astatus >= 12)  && ($student_details->paymentstatus >1)): ?> application-active <?php else: ?> '' <?php endif; ?> "><i
                                        class="fa-solid fa-check"></i><span> Enrollment Confirmed</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="application-custom-box">
                        <div class="main-review-left">
                            
                            <div class="css-1p7mtvv">
                                <!--<div class="muiBox-img">-->
                                <!--    <img src="/assetsAgent/img/user.svg" class="img-fluid" alt="">-->
                                <!--</div>-->
                                <div class="css-18xhlkt">
                                    <img src="/assetsAgent/img/college-logo.png" class="img-fluid" alt="">
                                </div>
                                <div class="css-11bq05t">
                                    <div class="css-xdzpz9">
                                        <div class="sidebarcountry">
                                            <img width="73px" height="73px" class="rounded-circle"
                                                src="<?php echo e(url('/images/' . $student_details->college_logo)); ?>"
                                                alt="<?php echo e($student_details->program_college_name); ?>" />
                                        </div>
                                        <div class="css-1dt3oac">
                                            <a href="/agent-college-details/<?php echo e($student_details->college_id); ?>" 
                                                class="fw-bold"><?php echo e($student_details->program_college_name); ?>  
                                                - <?php echo e($student_details->college_address); ?>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="css-15zjdt5">
                                        <a href="/agent-program-details/<?php echo e($student_details->progoramid); ?>"
                                            class="fw-bold"><?php echo e($student_details->programs_name); ?></a>
                                    </div>
                                    <div class="muiBox-root">
                                        <span class="css-wjljkp">Delivery Method: </span>
                                        <div class="jss1152">In-class</div>
                                    </div>
                                    <div class="muiBox-root">
                                        <span class="css-wjljkp">Level: </span>
                                        <span> <?php echo e($student_details->level_of_education); ?> </span>
                                    </div>
                                    <div class="muiBox-root">
                                        <span class="css-wjljkp">Required Level: </span>
                                        <span><?php echo e($student_details->minimum_level_of_education_completed); ?></span>
                                    </div>
                                    <div class="css-1rxnsrf">
                                        <span class="css-wjljkp">Application ID:</span>
                                        <span> <?php echo e($student_details->app_id); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-md-2">
                                <div class="col-md-3">
                                    <p class="fs-4 fw-bold">Intake(s):</p>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option value="" selected disabled>
                                                <?php echo e(date('Y-M', strtotime($student_details->earliest_intake_date))); ?>

                                            </option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="add-backup-program">
                                <i class="fa-solid fa-plus fs-5"></i>
                                <p class="fs-5">Add Backup Program</p>
                            </div>
                             
                            <div class="col-md-12 px-3">
                                <p class="fs-4 fw-bold">Status:</p>
                            </div>
                             
                            <div class="row status row-cols-auto">
                                <div class="col">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="ready-submit"
                                                <?php if(($astatus >= 7) && ($student_details->paymentstatus >1)): ?> checked <?php else: ?> '' <?php endif; ?>>
                                            <label class="form-check-label" for="ready-submit">
                                                Ready to Submit
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="submitted-school"
                                                <?php if(($astatus >= 8) && ($student_details->paymentstatus >1)): ?> checked <?php else: ?> '' <?php endif; ?>>
                                            <label class="form-check-label" for="submitted-school">
                                                Submitted to School
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="ready-visa"
                                                <?php if(($astatus >= 9) && ($student_details->paymentstatus >1)): ?> checked <?php else: ?> '' <?php endif; ?>>
                                            <label class="form-check-label" for="ready-visa">
                                                Ready for Visa
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="ready-enroll"
                                                <?php if(($astatus >= 10) && ($student_details->paymentstatus >1)): ?> checked <?php else: ?> '' <?php endif; ?>>
                                            <label class="form-check-label" for="ready-enroll">
                                                Ready to Enroll
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="enrollment-confirmed"
                                                <?php if(($astatus >= 12) && ($student_details->paymentstatus >1)): ?> checked <?php else: ?> '' <?php endif; ?>>
                                            <label class="form-check-label" for="enrollment-confirmed">
                                                Enrollment Confirmed
                                            </label>
                                        </div>
                                    </div> 
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="enrollment-confirmedh" ''="">
                                            <label class="form-check-label" for="enrollment-confirmedh">
                                                 Pay Application Fee
                                            </label>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col ">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="enrollment-confirmeda" ''="">
                                            <label class="form-check-label" for="enrollment-confirmeda">
                                                 Prepare Application
                                            </label>
                                        </div>
                                    </div> 
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="enrollment-confirmedq" ''="">
                                            <label class="form-check-label" for="enrollment-confirmedq">
                                                 Submission In Progress
                                            </label>
                                        </div>
                                    </div> 
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="enrollment-confirmedw" ''="">
                                            <label class="form-check-label" for="enrollment-confirmedw">
                                                 Decision
                                            </label>
                                        </div>
                                    </div> 
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="enrollment-confirmeds" ''="">
                                            <label class="form-check-label" for="enrollment-confirmeds">
                                                 Post-Decision Requirements
                                            </label>
                                        </div>
                                    </div> 
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="enrollment-confirmedd" ''="">
                                            <label class="form-check-label" for="enrollment-confirmedd">
                                                  Enrollment Confirmed
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-md-2 text-center">
                                    <p class="text--custom fs-4 m-0"> <b>
                                        <?php if($astatus < 11): ?>
                                        <a class="btn btn-warning btn-sm px-2 mb-2"><i class="fa-solid fa-cart-shopping"></i> &nbsp; Pending</a>
                                        <?php endif; ?>
                                        <?php if($astatus == 11): ?>
                                        <a class="btn btn-danger btn-sm px-2 mb-2"><i class="fa-solid fa-cart-shopping"></i> &nbsp; Cancel</a>
                                        <?php endif; ?>
                                        <?php if(($astatus == 12) && ($student_details->paymentstatus >1)): ?>
                                        <a class="btn btn-success btn-sm px-2 mb-2"><i class="fa-solid fa-cart-shopping"></i> &nbsp; Approved</a>
                                        <?php elseif(($astatus == 12) && ($student_details->paymentstatus < 2)): ?>
                                        <a class="btn btn-warning btn-sm px-2 mb-2"><i class="fa-solid fa-cart-shopping"></i> &nbsp; Payment Pending</a>
                                        <?php endif; ?>   
                                    </b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="application-custom-box">
                        <div class="main-review-left">
                            <div class="row students-all-information">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="student-profile-headingOne">
                                            <div class="row">
                                                <div class="accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#student-profile-collapseOne" aria-expanded="true">
                                                    <div class="col-md-4">
                                                        <p class="fs-4">Student:</p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p class="fs-4"><a
                                                                href="/agent-student-profile/<?php echo e($student_details->student_id); ?>"><?php echo e($student_details->student_id); ?></a>
                                                            | <a href="/agent-student-profile/<?php echo e($student_details->student_id); ?>"
                                                                class="text--custom"> <?php echo e($student_details->first_name); ?>

                                                                <?php echo e($student_details->middle_name); ?>

                                                                <?php echo e($student_details->last_name); ?></a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </h2>
                                        <div id="student-profile-collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="student-profile-headingOne">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li class="fw-bold">Login Email</li>
                                                            <li class="fw-bold">Primary Email </li>
                                                            <li class="fw-bold">Birthday</li>
                                                            <li class="fw-bold">Phone Number</li>
                                                            <li class="fw-bold">First Language</li>
                                                            <li class="fw-bold">Gender</li>
                                                            <li class="fw-bold">Marital Status</li>
                                                            <li class="fw-bold">Passport Number</li>
                                                            <li class="fw-bold">Passport Expiry Date</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <ul>
                                                            <?php
                                                            $currentDate = date('d-m-Y');
                                                            $age = date_diff(date_create($student_details->date_of_birth), date_create($currentDate));
                                                            ?>
                                                            <li><?php echo e($student_details->email); ?></li>
                                                            <li><?php echo e($student_details->email); ?></li>
                                                            <li> <br /><?php echo e(date('M d, Y', strtotime($student_details->date_of_birth))); ?>

                                                                (<?php echo $age->format('%y'); ?> years old)</li>
                                                            <li><br />+91- <?php echo e($student_details->phone_number); ?></li>
                                                            <li><br /><?php echo ucwords($student_details->first_language); ?></li>
                                                            <li><?php echo ucwords($student_details->gender); ?></li>
                                                            <li><?php echo ucwords($student_details->marital_status); ?> </li>
                                                            <li><br /><?php echo ucwords($student_details->passport_number); ?></li>
                                                            <li><br />NA</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-none">
                                        <h2 class="accordion-header" id="background-headingTwo">
                                            <div class="row">
                                                <div class="accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#background-collapseTwo" aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapseTwo">
                                                    <div class="col-md-4">
                                                        <p class="fs-4">Background :</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="fs-5 opacity-50">Nationality</p>
                                                        <p class="fs-5"><?php echo e($student_details->country_of_citizenship); ?>

                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="fs-5 opacity-50">Residence</p>
                                                        <p class="fs-5"><?php echo e($student_details->country); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </h2>
                                        <div id="background-collapseTwo" class="accordion-collapse collapse show"
                                            aria-labelledby="background-headingTwo">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li class="fw-bold">Street</li>
                                                            <li class="fw-bold">City/Town</li>
                                                            <li class="fw-bold">Country</li>
                                                            <li class="fw-bold">Province/State</li>
                                                            <li class="fw-bold">Postal/Zip</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <ul>
                                                            <li><?php echo e($student_details->address); ?></li>
                                                            <li><?php echo e($student_details->city_town); ?></li>
                                                            <li><?php echo e($student_details->country); ?></li>
                                                            <li><?php echo e($student_details->province_state); ?></li>
                                                            <li><?php echo e($student_details->postal_code); ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="application-custom-box">
                        <div class="main-review-left">
                            <div class="row students-all-information">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="education-headingThree">
                                            <div class="row">
                                                <div class="accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#education-collapseThree" aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapseThree">
                                                    <div class="col-md-5">
                                                        <p class="fs-4">Education:</p>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <p class="fs-4">Bachelors <i
                                                                class="fa-solid fa-graduation-cap"></i></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </h2>
                                        <div id="education-collapseThree" class="accordion-collapse collapse show"
                                            aria-labelledby="education-headingThree">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <ul>
                                                            <li>Country of Education</li>
                                                            <li>Grade</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <ul>
                                                            <li><?php echo e($student_details->country_of_education); ?> </li>
                                                            <li><?php echo e($student_details->highest_level_of_education); ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="fs-4">Schools Attended</p>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <ul>
                                                            <li class="fw-bold">School Name</li>
                                                            <li class="fw-bold">Level</li>
                                                            <li class="fw-bold">Language</li>
                                                            <li class="fw-bold">Attended From</li>
                                                            <li class="fw-bold">Attended To</li>
                                                            <li class="fw-bold">Address</li>
                                                            <li class="fw-bold">Degree Name</li>
                                                            <li class="fw-bold">Graduated?</li>
                                                            <li class="fw-bold">Certificate Awarded?</li>
                                                            <li class="fw-bold">Graduation Date</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <ul>
                                                            <li> <?php echo e($student_details->name_of_institution); ?> </li>
                                                            <li><?php echo e($student_details->level_of_education); ?></li>
                                                            <li><?php echo ucwords($student_details->primary_language_of_instruction); ?> </li>
                                                            <li><?php echo e(date('Y-M-d', strtotime($student_details->attended_institution_from))); ?>

                                                            </li>
                                                            <li><?php echo e(date('Y-M-d', strtotime($student_details->attended_institution_to))); ?>

                                                            </li>
                                                            <li><?php echo e($student_details->school_address); ?>,
                                                                <?php echo e($student_details->school_city_town); ?>,
                                                                <?php echo e($student_details->school_province); ?></li>
                                                            <?php if($student_details->degree_name): ?>
                                                                <li><?php echo e($student_details->degree_name); ?></li>
                                                            <?php else: ?>
                                                                <li class="opacity-50 "> N/A </li>
                                                            <?php endif; ?>
                                                            <?php if($student_details->graduated_institution == 1): ?>
                                                                <li>Yes <i class="fa-solid fa-check"></i></li>
                                                            <?php else: ?>
                                                                <li class="opacity-50 "> N/A </li>
                                                            <?php endif; ?>

                                                            <?php if($student_details->physical_certificate_for_this_degree == 1): ?>
                                                                <li>Yes <i class="fa-solid fa-check"></i></li>
                                                            <?php else: ?>
                                                                <li class="opacity-50 "> N/A </li>
                                                            <?php endif; ?>

                                                            <li><?php echo e(date('Y-M-d', strtotime($student_details->graduation_date))); ?>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row students-all-payments">
                                <div class="col-md-4">
                                    <p class="fs-5">Payment:</p>
                                </div>
                                <div class="col-md-8">
                                    <p class="fs-5 text-center opacity-50 "><?php echo e($student_details->payment_status); ?> </p>
                                    <p class="fs-5 text-center">Application Fee &nbsp; &nbsp;
                                        <span data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                            data-bs-original-title="Application Fee"><?php echo e($student_details->application_fee_min); ?></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="mt-3 student-profile-review1">

                        <div class="alert alert-warning alert-dismissible fade show fs-5" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i> Application will not be processed until
                            payment received. <a href=""> View unpaid applications</a>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>

                        <ul class="bg-white p-3 nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="applicant-tab2" data-bs-toggle="pill"
                                    data-bs-target="#pills-applicant2" type="button" role="tab"
                                    aria-controls="pills-applicant" aria-selected="true"><i class="fa fa-file-text"></i>
                                    Applicant Requirements</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="records-tab2" data-bs-toggle="pill"
                                    data-bs-target="#pills-records2" type="button" role="tab"
                                    aria-controls="pills-records" aria-selected="false"><i
                                        class="fa-solid fa-book-medical"></i> Student Records</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="notes-tab2" data-bs-toggle="pill"
                                    data-bs-target="#pills-notes2" type="button" role="tab"
                                    aria-controls="pills-notes" aria-selected="false"><i
                                        class="fa-solid fa-comments"></i> Notes <!--<div class="css-wyw5m9">1</div>--></button>
                            </li>
                        </ul>


                        <div class="row mt-md-3">
                            <div class="col-md-12">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-applicant2" role="tabpanel"
                                        aria-labelledby="applicant-tab2">

                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="download-all-btn">
                                                    <a href="">
                                                        <i class="fa fa-download"></i>
                                                        Download All
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                                    <div class="accordion-item">
                                                        <div class="accordion-header" id="panelsStayOpen-headingOne">
                                                            <div class="accordion-button" data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapseOne"
                                                                aria-expanded="true"
                                                                aria-controls="panelsStayOpen-collapseOne">
                                                                <div class="left-slide-heading">
                                                                    <h2> Status of Documents </h2>
                                                                    <!-- <h6>Last requirement completed on Jul. 14, 2022</h6> -->
                                                                </div>
                                                                <div class="right-side-content">

                                                                    <div class="stage-card-summary">
                                                                        <div class="css-1lrwgxh">
                                                                            <div class="css-10vh6ur" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Missing <?php echo e($missing_doc); ?>">
                                                                                <img src="/assetsAgent/img/worning-icon.svg">
                                                                                <!-- <div>0</div> -->
                                                                            </div>
                                                                            <div class="css-1q3p0bj" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Reviewing <?php echo e($upload_doc_review_count); ?>">
                                                                                <img src="/assetsAgent/img/load.svg">
                                                                                <!-- <div>0</div> -->
                                                                            </div>
                                                                            <div class="css-n118i9" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Not Approved <?php echo e($upload_doc_canciled_count); ?>">
                                                                                <img src="/assetsAgent/img/worng-icon.svg">
                                                                                <!-- <div>0</div> -->
                                                                            </div>
                                                                            <div class="css-epjyqf" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Completed <?php echo e($upload_doc_verifiyed_count); ?>">
                                                                                <img src="/assetsAgent/img/check-icon.svg">
                                                                                <!-- <div>3</div> -->
                                                                            </div>
                                                                        </div> 
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="panelsStayOpen-collapseOne"
                                                            class="accordion-collapse collapse show"
                                                            aria-labelledby="panelsStayOpen-headingOne" style="">
                                                            <div class="accordion-body">
                                                                <ul class="acccrodion-list-detalis">
                                                                    
                                                                    
                                                                    <?php if(!empty($doc_requirment)): ?>
                                                                        <?php $__currentLoopData = $doc_requirment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php echo csrf_field(); ?>
                                                                            <li>
                                                                                <div role="listitem" class="css-rbi7dp">
                                                                                    <?php if($doc_list->required_field == 1): ?>
                                                                                        <div class="css-required">
                                                                                            <div>
                                                                                                <span>Required</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    <?php else: ?>
                                                                                        <div class="css-optional">
                                                                                            <div>
                                                                                                <span>Optional</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    <?php endif; ?>
                                                                                    
                                                                                    <div class="css-1lp81ux">
                                                                                        <div class="css-1p0j8nq" style="display: none"
                                                                                            id="complete<?php echo $doc_list->id; ?>">
                                                                                            <span
                                                                                                class="fa fa-check"></span>
                                                                                            <div
                                                                                                class="css-fke44g">
                                                                                                Completed
                                                                                            </div>
                                                                                        </div> 
                                                                                    </div>




                                                                                    <div class="css-1lp81ux">
                                                                                        <?php if(count($upload_doc_details)>0 ){?>
                                                                                        <div class="css-1p0j8nq"
                                                                                            id="pending<?php echo $doc_list->id; ?>">
                                                                                            <?php foreach ($upload_doc_details as $imgdetails) {
                                                                                                $docid[] = $imgdetails->doc_id;
                                                                                                $image_name[] = $imgdetails->image_name;
                                                                                            }
                                                                                            if (!empty($docid)) {
                                                                                                if (in_array($doc_list->id, $docid)) {
                                                                                                    echo ' <span class="fa fa-check"></span> <div class="css-fke44g">Completed</div>';
                                                                                                } else {
                                                                                                    echo '<span class="fa fa-info-circle" style="color: #FFC72D"></span> <div class="css-fke44g" style="color: #FFC72D">Pending</div> ';
                                                                                                }
                                                                                            } ?>
                                                                                        </div>
                                                                                        <?php 
                                                                                }
                                                                                else
                                                                                {?>
                                                                                        <div class="css-1p0j8nq" id="pending<?php echo $doc_list->id; ?>">
                                                                                            <span class="fa fa-info-circle"  style="color: #FFC72D"></span>
                                                                                            <div class="css-fke44g" style="color: #FFC72D">
                                                                                                Pending
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php }?>
                                                                                    </div>


                                                                                    <div class="css-sohti2">
                                                                                        <div
                                                                                            class="MuiBox-root jss208 sc-dkzDqf jlXQtr">
                                                                                            <div
                                                                                                class="MuiBox-root jss209 sc-dkzDqf jlXQtr css-1iwe4pm">
                                                                                                <div class="css-green">
                                                                                                    


                                                                                                </div>
                                                                                                <div class="css-k28thh">
                                                                                                    <span
                                                                                                        class="title-date">
                                                                                                        <span
                                                                                                            class="requirement-title">
                                                                                                            <div
                                                                                                                class="react_component_tooltip place-top type-dark">
                                                                                                            </div>
                                                                                                            <?php echo e($doc_list->document_name); ?>

                                                                                                        </span>
                                                                                                    </span>
                                                                                                    <div
                                                                                                        class="req-desc css-lsgy9k">
                                                                                                        <div
                                                                                                            class="wrapped-content">
                                                                                                            <p><?php echo e($doc_list->description); ?>

                                                                                                            </p>

                                                                                                        </div>
                                                                                                        <?php if($doc_list->upload_status == 1): ?>
                                                                                                            <div
                                                                                                                class="req-desc css-lsgy9k">
                                                                                                                <div
                                                                                                                    class="wrapped-content-upload">
                                                                                                                    <p>Please
                                                                                                                        provide
                                                                                                                        a
                                                                                                                        clear
                                                                                                                        and
                                                                                                                        legible
                                                                                                                        photocopy
                                                                                                                        of
                                                                                                                        the
                                                                                                                        applicant's
                                                                                                                        certificate
                                                                                                                        which
                                                                                                                        meets
                                                                                                                        the
                                                                                                                        following
                                                                                                                        requirements:
                                                                                                                    </p>
                                                                                                                    <ul>
                                                                                                                        <li>The
                                                                                                                            acceptable
                                                                                                                            formats
                                                                                                                            of
                                                                                                                            the
                                                                                                                            photocopy
                                                                                                                            are
                                                                                                                            .PDF,
                                                                                                                            .JPEG
                                                                                                                            or
                                                                                                                            .PNG
                                                                                                                        </li>
                                                                                                                        <li>The
                                                                                                                            photocopy
                                                                                                                            needs
                                                                                                                            to
                                                                                                                            be
                                                                                                                            entire
                                                                                                                            with
                                                                                                                            no
                                                                                                                            cut-off
                                                                                                                            at
                                                                                                                            the
                                                                                                                            edges
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                    <p>Please
                                                                                                                        be
                                                                                                                        advised
                                                                                                                        that
                                                                                                                        the
                                                                                                                        file
                                                                                                                        size
                                                                                                                        limit
                                                                                                                        of
                                                                                                                        the
                                                                                                                        photocopy
                                                                                                                        is
                                                                                                                        20MB.
                                                                                                                    </p>

                                                                                                                    <div class="attached-documents">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-4">
                                                                                                                                <p>Attached Documents :
                                                                                                                                </p>
                                                                                                                            </div>
                                                                                                                            <div class="col-md-8">
                                                                                                                                <div
                                                                                                                                    class="dowonload-icon-btn">
                                                                                                                                    
                                                                                                                                    <?php if(!empty($image_name)) 
                                                                                                                                        {
                                                                                                                                        
                                                                                                                                            foreach ($upload_doc_details as $data)
                                                                                                                                            {  
                                                                                                                                                
                                                                                                                                                if($data->doc_id == $doc_list->id)
                                                                                                                                                {
                                                                                                                                                    $img_url = asset('doc/');?>
                                                                                                                                                    <!--<div class="download">-->
                                                                                                                                                    <!--    <a href="<?php echo $img_url . '/' . $student_details->app_id . '/' . $data->image_name; ?>" download>-->
                                                                                                                                                    <!--        <i class="fa fa-download" style="color:green;font-size:20px;"></i>-->
                                                                                                                                                    <!--    </a>-->
                                                                                                                                                    <!--</div>-->
                                                                                                                                                    <?php $img = $img_url.'/'.$student_details->app_id.'/'.$data->image_name; ?>
                                                                                                                                                   <!-- <a href="<?php echo $img_url . '/' . $student_details->app_id . '/' . $data->image_name; ?>" target="_blank">-->
                                                                                                                                                   <!--    <img src="<?php echo e($img); ?>" class="card-img-top">-->
                                                                                                                                                   <!--</a>-->
                                                                                                                                                   
                                                                                                                                                   <div class="card">
                                                                                                                                                      <a href="<?php echo $img_url . '/' . $student_details->app_id . '/' . $data->image_name; ?>" target="_blank">
                                                                                                                                                           <img src="<?php echo e($img); ?>" class="card-img-top" style="max-height:150px">
                                                                                                                                                      </a>
                                                                                                                                                      <div class="card-body px-0 pt-0">
                                                                                                                                                        <h5 class="card-title">
                                                                                                                                                            <div class="file-field input-field">
                                                                                                                                                               
                                                                                                                                                                <input type="file" class="form-control" id="img-upload<?php echo $doc_list->id; ?>"
                                                                                                                                                                    onchange="docupload(<?php echo $doc_list->id; ?>,<?php echo $student_details->id; ?>,<?php echo $student_details->app_id; ?>);"> 
                                                                                                                                                                <span
                                                                                                                                                                    id="suceess<?php echo $doc_list->id; ?>"
                                                                                                                                                                    style="color:green"></span><br />
                                                                                                                                                                <span
                                                                                                                                                                    id="msg<?php echo $doc_list->id; ?>"
                                                                                                                                                                    style="color:green"></span><br />
                        
                                                                                                                                                            </div>
                                                                                                                                                        </h5>
                                                                                                                                                        <p class="card-text">
                                                                                                                                                            <div class="download text-center">
                                                                                                                                                                <a href="<?php echo $img_url . '/' . $student_details->app_id . '/' . $data->image_name; ?>" class="btn btn-secondary" download>
                                                                                                                                                                    <i class="fa fa-download me-2"></i>Download
                                                                                                                                                                </a>
                                                                                                                                                            </div>
                                                                                                                                                        </p>
                                                                                                                                                        <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                                                                                                                                                      </div>
                                                                                                                                                    </div>
                                                                                                                                                    <?php  
                                                                                                                                                }
                                                                                                                                            }  
                                                                                                                                            
                                                                                                                                        }
                                                                                                                                    ?>
                                                                                                                                </div>
                                                                                                                                <div class="row mt-md-3">
                                                                                                                                    <div class="col-md-12">
                                                                                                                                        <?php if(!empty($image_name)) 
                                                                                                                                        {
                                                                                                                                        
                                                                                                                                            foreach ($upload_doc_details as $data)
                                                                                                                                            {  
                                                                                                                                                if($data->doc_id == $doc_list->id)
                                                                                                                                                {?>
                                                                                                                                                <div id="suceesspass_<?php echo e($doc_list->id); ?>"></div>
                                                                                                                                                <div id="msg_pass_<?php echo e($doc_list->id); ?>"></div>
                                                                                                                                                <div id="suceess_pass_<?php echo e($doc_list->id); ?>"></div>
                                                                                                                                            <form id="docStatus">
                                                                                                                                            <?php echo csrf_field(); ?>
                                                                                                                                        <select class="form-select custom_select" aria-label="Default select example"  id="doc_<?php echo e($doc_list->id); ?>" onchange="updateDocument(<?php echo e($student_details->app_id); ?>,<?php echo e($doc_list->id); ?>);">
                                                                                                                                       
                                                                                                                                            <option value="0" <?php if($data->is_verified =='0'){echo "selected";}else{echo "";} ?>>Pending</option>
                                                                                                                                            <option value="1" <?php if($data->is_verified =='1'){echo "selected";}else{echo "";} ?>>Approved</option>
                                                                                                                                            <option value="2" <?php if($data->is_verified =='2'){echo "selected";}else{echo "";} ?>>Disapprove</option> 
                                                                                                                                        </select>
                                                                                                                                    </form> 
                                                                                                                                    
                                                                                                                                    
                                                                                                                                    <div style="display:none" id="disaprove_<?php echo e($doc_list->id); ?>">
                                                                                                                                        
                                                                                                                                        <textarea class="form-control" id="disc_<?php echo e($doc_list->id); ?>" name="disc"><?php if($data->backend_comment !='null'){ echo "$data->backend_comment";} ?></textarea>
                                                                                                                                        <br>
                                                                                                                                        <a href="javascript:void(0)" onclick="disaproved('<?php echo e($doc_list->id); ?>','<?php echo e($student_details->app_id); ?>');"  class="btn btn-secondary mt-2 float-end">Confirm identity</a>
                                                                                                                                        
                                                                                                                                      </div>
                                            
                                                                                                                                    <?php  }
                                                                                                                                            }  
                                                                                                                                            
                                                                                                                                        }
                                                                                                                                    ?>

                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                
                                                                                                                                <div id="msgpass_<?php echo e($doc_list->id); ?>"></div>                                                                                                                          </div>
                                                                                                                        </div>
                                                                                                                        
                                                                                                                    </div>
                                                                                                                    
                                                                                                                      
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        <?php endif; ?>

                                                                                                        <div
                                                                                                            class="css-see-less">
                                                                                                            <p>See Less
                                                                                                                <span class="fa fa-caret-up"></span>
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>
                                                                                    </div>


                                                                                </div>
                                                                            </li>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php endif; ?>


                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    
                                    <style>
                                        #msg4 img{
                                                width: 100%;
                                            max-height: 150px;
                                        }
                                    </style>
                                    <div class="tab-pane fade" id="pills-records2" role="tabpanel"
                                        aria-labelledby="records-tab2">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="main-timeline">
                                                    <?php if(!empty($student_records)): ?>
                                                    <?php $__currentLoopData = $student_records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $records): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="timeline">
                                                        <a href="#" class="timeline-content">
                                                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                                                            <ul>
                                                                <li class="title"><?php echo e($records->title); ?></li>
                                                                <li class="date"> <?php echo e(date('d M, Y', strtotime($records->created_at))); ?> </li>
                                                            </ul>
                                                            <p class="description"><br/><?php echo e($records->text); ?></p>
                                                        </a>
                                                    </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>


                                                    <!--<div class="timeline">
                                                        <a href="#" class="timeline-content">
                                                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                                                            <ul>
                                                                <li class="title">Application Opened</li>
                                                                <li class="date">24 May, 2022</li>
                                                            </ul>
                                                            <p class="description">As you progress through the application
                                                                process, you will see documents provided by ApplyBoard here.
                                                                These could come in the form of questions, documents,
                                                                payments, invoices, and application statuses.</p>
                                                        </a>
                                                    </div>-->
                                                    updateDocument
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="error"></div>
                                            <div id="success"></div>
                                    <div class="tab-pane fade" id="pills-notes2" role="tabpanel"
                                        aria-labelledby="notes-tab2">
                                        <form id="frmnote">
                                            
                                        <div class="bg-white p-3">
                                            
                                            <div class="textarea-custom-slide">
                                                <div class="form-group">
                                                    <!--<input type="text" name="notes_title" id="notes_title" class="form-control"-->
                                                    <!--    placeholder="Enter title here....">-->
                                                        
                                                    <input type="text" name="editor1" id="notes_title" class="form-control"
                                                        placeholder="Enter title here....">
                                                </div>
                                            </div>
                                            <input type="hidden" name="student_id" id="student_id" value="<?php echo $student_details->student_id; ?>">
                                            <input type="hidden" name="appid" id="appid" value="<?php echo $student_details->app_id; ?>">
                                            <!--<textarea  name="notes" id="notes" class="post-area"> </textarea><br/>-->
                                            <button type="button" class="btn btn-primary" id="msg" onclick="notesSave();">Save</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        #img-upload_pass {
            font-weight: bold;
            color: var(--color);
            height: 2.5em;
            border-radius: 3px;
        }
        .breadcrumb-item.active {
            font-size: 14px;
        }
        .breadcrumb-item{
            color:#2a50ed;
        }
        .success{
            color: green;
        }
        .error{
            color:red;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/design/resources/views/admin/admin_application_review.blade.php ENDPATH**/ ?>