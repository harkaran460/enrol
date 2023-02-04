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
    <?php //print_r($inakesdate);
    ?>
    <div class="page-content program">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group d-flex justify-content-center">
                        <input type="text" class="w-25 border py-2 border-secondary rounded"
                            placeholder="Search the knowledge base">
                        <input type="text" class="w-25 border py-2 border-secondary rounded"
                            placeholder="Search the knowledge base">
                        <button class="btn btn-primary" type="button">Search</button>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-3">
                    <div class="">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header filtertip" id="eligibilityheadingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#eligibility" aria-expanded="true" aria-controls="eligibility">
                                        Eligibility
                                    </button>
                                </h2>
                                <div id="eligibility" class="accordion-collapse collapse show"
                                    aria-labelledby="eligibilityheadingOne" data-bs-parent="#accordionExample">

                                    <div class="accordion-body">
                                        <form action="agenteligibilityfilter" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <label>Select Student</label>
                                                <?php if(!empty($student_list)): ?>
                                                    <!-- <select class="select2 form-control select2-multiple" multiple="" data-placeholder="Choose ..." name="student[]">
                                                 <?php $__currentLoopData = $student_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                 <option value="<?php echo e($student->id); ?>"><?php echo e($student->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>-->
                                                <?php endif; ?>
                                                <input type="text" id="search-dropdwon-main" class="form-control"
                                                    placeholder="Search...">
                                                <input type="hidden" id="student" name="student" value="">
                                                <div class="search-dropdown">
                                                    <img src="<?php echo e(url('/img/loader.gif')); ?>" alt="Image" width="20"
                                                        class="loadern" />
                                                    <span id="suggesstionbox"></span>
                                                    <ul>
                                                        <li class="disabled">No Option </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#addNewStudent"> + ADD
                                                            NEW STUDENT </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Do you have a valid Study Permit / Visa?</label>
                                                <select class="select2 form-control select2-multiple" multiple="multiple"
                                                    data-placeholder="Choose ..." name="visa_permit" id="visa_permit">

                                                    <?php $__currentLoopData = $getPermitVisa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($visa->id); ?>"><?php echo e($visa->visa_title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Nationality</label>
                                                <select class="form-control select2" name="nationality" id="nationality">
                                                    <option value="">-- select one --</option>

                                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($country->id); ?>"><?php echo e($country->country); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Education Country</label>
                                                <select class="form-control select2" name="education_country"
                                                    id="education_country">
                                                    <option value="">-- select one --</option>
                                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($country->id); ?>"><?php echo e($country->country); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Education Level</label>
                                                <select class="form-control select2" name="education_lavel"
                                                    id="education_lavel">
                                                    <option>Select...</option>

                                                    <?php $__currentLoopData = $getEducations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $getEducation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($getEducation->id); ?>"><?php echo e($getEducation->title); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Grading Scheme</label>
                                                <select class="form-control select2" name="grading_schem"
                                                    id="grading_schem">
                                                    <option>Select...</option>


                                                    <?php $__currentLoopData = $getGradingSchemes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $getGradingScheme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($getGradingScheme->id); ?>">
                                                            <?php echo e($getGradingScheme->grad_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>English Exam Type</label>
                                                <select class="form-control select2" name="exam_type" id="exam_type">

                                                    <?php $__currentLoopData = $getEnglishexamType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value=<?php echo e($type->id); ?>><?php echo e($type->exam_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </select>
                                            </div>
                                            <div class="row addisnalrow " style="display:none">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Reading</label>
                                                        <input type="text" name="reading" id="reading"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Listening</label>
                                                        <input type="text" name="listening" id="listening"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Speaking</label>
                                                        <input type="text" name="speaking" id="speaking"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Writing</label>
                                                        <input type="text" name="writing" id="writing"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group checkbox">
                                                                    <input class="form-check-input" type="checkbox" value="" id="OnlyCheckDefault">
                                                                    <label class="form-check-label" for="OnlyCheckDefault">
                                                                        Only Show Direct Admissions
                                                                    </label>
                                                                    <i class="fa-solid fa-circle-question" id="question" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Turning this switch ON means you will only see programs that you will beeligible to apply for them without taking any prerequisite english classes.Keeping this filter OFF means some results shown will require you to takeEnglish classes before becoming eligible to apply."></i>
                                                                </div> -->
                                            <div class="form-group mt-3">
                                                <input type="submit" class="btn-primary" value="APPLY FILTERS">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header filtertip" id="schoolfiltersheadingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#school-filters" aria-expanded="true"
                                        aria-controls="school-filters">
                                        College Filters
                                    </button>
                                </h2>
                                <div id="school-filters" class="accordion-collapse collapse show"
                                    aria-labelledby="schoolfiltersheadingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <form action="agentcollagefilter" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <label> Country </label>
                                                <select class="select2 form-control select2-multiple" id="country"
                                                    name="collage_country[]" multiple="multiple"
                                                    data-placeholder="select ...">
                                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option data-id="<?php echo e($country->id); ?>"
                                                            value="<?php echo e($country->id); ?>"><?php echo e($country->country); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="form-group checkbox">
                                                <input class="form-check-input" type="checkbox" value="Yes"
                                                    name="work_permit_status" id="PostCheckDefault">
                                                <label class="form-check-label" for="PostCheckDefault">
                                                    Post-Graduation Work Permit Available
                                                </label>
                                                <i class="fa-solid fa-circle-question" id="question"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Turning this switch ON means you will only see programs that you will beeligible to apply for them without taking any prerequisite english classes.Keeping this filter OFF means some results shown will require you to takeEnglish classes before becoming eligible to apply."></i>
                                            </div>
                                            <div class="form-group">
                                                <label>Provinces / States</label>
                                                <select class="select2 form-control select2-multiple" id="state"
                                                    name="collage_state[]" multiple="multiple"
                                                    data-placeholder="select ...">
                                                    <option value="">No Option</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Campus City <i class="fa-solid fa-circle-question" id="question"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                        data-bs-original-title="By selecting this checkbox, only programs that are from schools participating in the Post Graduation Work Permit program (in Canada), Optional Practical Training program (in USA), Temporary Graduate Visa program (in Australia), Post-Study Work Visa program (in UK), and Stay Back Visa (in Ireland) will be shown."></i></label>
                                                <select class="form-control select2" multiple="multiple" id="city"
                                                    name="campus_city_name[]" data-placeholder="select ...">
                                                    <option value="">No Option</option>

                                                </select>
                                            </div>

                                            <div class="form-group checkbox">
                                                <div class="row">
                                                    <div class="col">
                                                        <input class="form-check-input"name="univercity" type="checkbox"
                                                            value="University" id="UniversityCheckDefault">
                                                        <label class="form-check-label" for="UniversityCheckDefault">
                                                            University
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <input class="form-check-input" type="checkbox" value="College"
                                                            name="collage" id="CollegeCheckDefault">
                                                        <label class="form-check-label" for="CollegeCheckDefault">
                                                            College
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="english_institute" value="English Institute"
                                                            id="englishinstituteCheckDefault">
                                                        <label class="form-check-label"
                                                            for="englishinstituteCheckDefault">
                                                            English Institute
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="High School" name="high_school"
                                                            id="highschoolCheckDefault">
                                                        <label class="form-check-label" for="highschoolCheckDefault">
                                                            High School
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Collage</label>
                                                <select class="form-control select2" name="college[]" multiple="multiple"
                                                    data-placeholder="select ...">
                                                    <option value="">No Option</option>
                                                    <?php if(!empty($colleges)): ?>
                                                        <?php $__currentLoopData = $colleges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $college): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($college->id); ?>">
                                                                <?php echo e($college->college_name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                            <div class="form-group mt-3">
                                                <input type="submit" class="btn-primary" value="APPLY FILTERS">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mt-md-4">
                                <h2 class="accordion-header filtertip" id="programfiltersheadingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#program-filters" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Program Filters
                                    </button>
                                </h2>
                                <div id="program-filters" class="accordion-collapse collapse show"
                                    aria-labelledby="programfiltersheadingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <form action="agentprogramfilter" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <label> College</label>
                                                <select class="form-control select2" name="collage_name[]"
                                                    multiple="multiple" data-placeholder="select ...">
                                                    <option value="">No Option</option>
                                                    <?php if(!empty($colleges)): ?>
                                                        <?php $__currentLoopData = $colleges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $college): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($college->id); ?>">
                                                                <?php echo e($college->college_name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </select>
                                                <!--<select class="form-control select2" multiple="multiple" data-placeholder="select ...">
                                                                    <option value="">No Option</option>
                                                                </select>-->
                                            </div>
                                            <div class="form-group">
                                                <label>Intakes 88</label>
                                                <select class="select2 form-control select2-multiple" name="inakes_date[]"
                                                    multiple="multiple" data-placeholder="select ...">

                                                    <?php print_r($inakesdate); ?>
                                                    <?php if(!empty($inakesdate)): ?>
                                                        <?php $__currentLoopData = $inakesdate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($date->earliest_intake_date); ?>">
                                                                <?php echo e(date('d-F-Y', strtotime($date->earliest_intake_date))); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Post-Secondary Discipline</label>
                                                <select class="select2 form-control select2-multiple"
                                                    name="post_discipline[]" multiple="multiple"
                                                    data-placeholder="select ...">
                                                    <?php if(!empty($postdisciplines)): ?>
                                                        <?php $__currentLoopData = $postdisciplines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($disc->id); ?>"><?php echo e($disc->title); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Post-Secondary Sub-Categories</label>
                                                <select class="select2 form-control select2-multiple"
                                                    name="sub_categories[]" multiple="multiple"
                                                    data-placeholder="select ...">
                                                    <?php if(!empty($subcategories)): ?>
                                                        <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($sub_cat->id); ?>">
                                                                <?php echo e($sub_cat->sub_cat_name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                            <!-- <div class="form-group checkbox">
                                                                <input class="form-check-input" type="checkbox" value="" id="CommissionsCheckDefault">
                                                                <label class="form-check-label" for="CommissionsCheckDefault">
                                                                    Show Commissions
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <p>All amounts are listed in the currency charged by the school. For best results, please specify a country of the school.</p>
                                                            </div>-->
                                            <div class="form-group checkbox">
                                                <input class="form-check-input" type="checkbox" value="Yes"
                                                    name="living_cost" id="TuitionCheckDefault">
                                                <label class="form-check-label" for="TuitionCheckDefault">
                                                    Include living costs
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label>Tuition Fee</label>
                                                <input type="text" name="tuition_free" id="range_04">
                                            </div>
                                            <div class="form-group">
                                                <label>Application Fee</label>
                                                <input type="text" name="applocation_free" id="range_05">
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <div class="row">
                                                    <!--div class="col-6">
                                                                        <button type="button" class="btn btn-danger px-4">Clear Filters</button>
                                                                    </!--div>-->
                                                    <!-- <div class="col-6">
                                                                        
                                                                        <button type="button" class="btn btn-primary px-4 float-end">Apply Filters</button>
                                                                    </div>-->
                                                    <div class="form-group mt-4">
                                                        <input type="submit" class="btn-primary" value="APPLY FILTERS">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="program-list">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="programs-tab" data-bs-toggle="pill"
                                    data-bs-target="#programs" type="button" role="tab" aria-controls="programs"
                                    aria-selected="false">Programs ( <?php if($collages != 'not_found'): ?>
                                        <?php echo e($courseTotal); ?>

                                    <?php else: ?>
                                        0
                                    <?php endif; ?>) </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="school-tab" data-bs-toggle="pill" data-bs-target="#school"
                                    type="button" role="tab" aria-controls="school" aria-selected="true">Colleges (
                                    <?php if($collages != 'not_found'): ?>
                                        <?php echo e(count($collages)); ?>

                                    <?php else: ?>
                                        0
                                    <?php endif; ?>)
                                </button>
                            </li>
                        </ul>
                        <ul class="d-flex float-end select-bar-program">
                            <li>
                                <form action="agentProgram" method="GET">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <select class="form-select" id="sorting" name="sorting"
                                            aria-label="Default select example">
                                            <option value="1">Relevance</option>
                                            <option value="college_asc">College Neme(A-z)</option>
                                            <option value="college_desc">College Neme(Z-A)</option>
                                            <option value="tfee_asc">Tution Fee(0-9)</option>
                                            <option value="tfee_desc">Tution Fee(9-0)</option>
                                            <option value="applo_asc">Application Fee (0-9)</option>
                                            <option value="applo_desc">Application Fee (9-0)</option>
                                        </select>
                                    </div>
                                </form>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade active show" id="programs" role="tabpanel"
                                aria-labelledby="programs-tab">
                                <?php if($collages != 'not_found'): ?>
                                    <?php $__currentLoopData = $collages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="main-programs-content">
                                            <div class="main-programs-img">
                                                <a href="/agent-college-details/<?php echo e($list->id); ?>">
                                                    <img width="48" height="48"
                                                        src="<?php echo e(url('/images/' . $list->college_logo)); ?>"
                                                        alt="Logo" />
                                                </a>
                                                <div>
                                                    <div>
                                                        <a
                                                            href="/agent-college-details/<?php echo e($list->id); ?>"><?php echo e($list->college_name); ?></a>
                                                    </div>
                                                    <div class="css-6g7jag">
                                                        <?php echo e($list->college_address); ?>, <?php echo e($list->college_country); ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <?php $__currentLoopData = $list->courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="main-programs-img-content">
                                                    <div class="">
                                                        <div>
                                                            <a
                                                                href="/agent-program-details/<?php echo e($p->id); ?>"><?php echo e($p->programs_name); ?></a>
                                                        </div>
                                                        <div class="main-programs-list">
                                                            <div class="css-1kos2q0">
                                                                <span>TUITION FEE</span>
                                                                <span class="money css-6xix1i">
                                                                    <?php if($p->tuition_fee_min != ''): ?>
                                                                        <?php echo e(number_format($p->tuition_fee_min, 2)); ?>

                                                                        -
                                                                    <?php else: ?>
                                                                        NA
                                                                    <?php endif; ?>
                                                                    <?php if($p->tuition_fee_max != ''): ?>
                                                                        <?php echo e(number_format($p->tuition_fee_max, 2)); ?>

                                                                    <?php endif; ?>
                                                                </span>
                                                            </div>
                                                            <div class="css-1kos2q0 ps-5">
                                                                <span>APPLICATION FEE</span>
                                                                <span>
                                                                    <?php if($p->application_fee_min != ''): ?>
                                                                        <?php echo e(number_format($p->application_fee_min, 2)); ?>

                                                                        -
                                                                    <?php else: ?>
                                                                        NA
                                                                    <?php endif; ?>
                                                                    <?php if($p->application_fee_max != ''): ?>
                                                                        <?php echo e(number_format($p->application_fee_max, 2)); ?>

                                                                    <?php endif; ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php if(!empty($canapply)): ?>
                                                        <div class="select-submit">
                                                            <a class="" href="" data-bs-toggle="modal"
                                                                data-bs-target="#select-student"
                                                                data-programid="<?php echo e($p->id); ?>"
                                                                onclick="setprogramid(<?php echo e($p->id); ?>);">Select
                                                                Student</a>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            <?php break; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                        <div class="text-center">
                                            <a href="javascript:;" class="see-more"> See <?php echo e(count($list->courses)); ?>

                                                More Programs <i class="fa fa-chevron-down"></i></a>
                                            <hr />
                                            <div class="main-slide">
                                                <?php $__currentLoopData = $list->courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="main-programs-img-content">
                                                        <div class="">
                                                            <div>
                                                                <a
                                                                    href="/agent-program-details/<?php echo e($plist->id); ?>"><?php echo e($plist->programs_name); ?></a>
                                                            </div>
                                                            <div class="main-programs-list">
                                                                <div class="css-1kos2q0">
                                                                    <span>TUITION FEE</span>
                                                                    <span class="money css-6xix1i">
                                                                        <?php if($plist->tuition_fee_min != ''): ?>
                                                                            <?php echo e(number_format($plist->tuition_fee_min, 2)); ?>

                                                                            -
                                                                        <?php else: ?>
                                                                            NA
                                                                        <?php endif; ?>
                                                                        <?php if($plist->tuition_fee_max != ''): ?>
                                                                            <?php echo e(number_format($plist->tuition_fee_max, 2)); ?>

                                                                        <?php endif; ?>
                                                                    </span>
                                                                </div>
                                                                <div class="css-1kos2q0 ps-3">
                                                                    <span>APPLICATION FEE</span>
                                                                    <span>
                                                                        <?php if($plist->application_fee_min != ''): ?>
                                                                            <?php echo e(number_format($plist->application_fee_min, 2)); ?>

                                                                            -
                                                                        <?php else: ?>
                                                                            NA
                                                                        <?php endif; ?>
                                                                        <?php if($plist->application_fee_max != ''): ?>
                                                                            <?php echo e(number_format($plist->application_fee_max, 2)); ?>

                                                                        <?php endif; ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <?php if(!empty($canapply)): ?>
                                                            <div class="select-submit">
                                                                <a class="" href=""
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#select-student"
                                                                    data-programid="<?php echo e($plist->id); ?>"
                                                                    onclick="setprogramid(<?php echo e($plist->id); ?>);">Select
                                                                    Student</a>

                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <a href="javascript:;" class="less-more"> See Less <i
                                                        class="fa fa-chevron-up"></i></a>
                                                <hr />
                                            </div>

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($collages->links()); ?>

                            <?php else: ?>
                                <div class="alert alert-danger">
                                    <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                    </strong> Requesting data not found.
                                </div>
                            <?php endif; ?>




                            <!-- Modal Select Student -->
                            <div class="modal fade" id="select-student" tabindex="-1"
                                aria-labelledby="selectstudentLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title text-center m-auto" id="selectstudentLabel">Check
                                                Student Eligibility</h2>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <h5>Select a student to check their eligibility.</h5>
                                            <form action="" method="POST">
                                                <div class="form-group">
                                                    <input type="hidden" id="student-main" name="student-main"
                                                        value="">
                                                    <input type="hidden" id="programid" name="programid"
                                                        value="">
                                                    <input type="text" id="search_student" class="form-control"
                                                        placeholder="Search students name, email">
                                                    <img src="<?php echo e(url('/img/loader.gif')); ?>" alt="Image"
                                                        width="20" class="loadern2" />
                                                    <div id="student_list_on_page"></div>

                                                </div>
                                            </form>
                                        </div>

                                        <div id="main-content-popup">
                                            <div id="elgalertsuc"class="alert alert-success alert-dismissible fade show"
                                                role="alert">
                                                <i class="fa-solid fa-triangle-exclamation"></i> Student is eligible
                                                for this program.
                                            </div>
                                            <div id="elgalertdanger"class="alert alert-danger alert-dismissible fade show"
                                                role="alert">
                                                <i class="fa-solid fa-triangle-exclamation"></i> Student is not
                                                eligible
                                                for this program.
                                            </div>
                                            <div class="main-content-text mx-4 mt-3">
                                                <div id="pdetails"></div>
                                            </div>
                                            <div id="papply" class="d-flex mt-3" style="display: none">
                                                <!--<a class="btn btn-default w-50">Close</a>-->
                                                <a class="btn btn-primary w-50" onclick="prograApply()">Apply Now</a>
                                            </div>


                                        </div>



                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="school" role="tabpanel" aria-labelledby="school-tab">
                            <div class="row">
                                <?php if($collages != 'not_found'): ?>
                                    <?php $__currentLoopData = $collages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-6">
                                            <div class="school-tabs-section">
                                                <div class="school-tabs-content">
                                                    <img width="68" height="68"
                                                        src="<?php echo e(url('/images/' . $collage->college_logo)); ?>"
                                                        alt="Logo" />
                                                    <div class="school-tabs-main">
                                                        <a
                                                            href="/agent-college-details/<?php echo e($collage->id); ?>"><?php echo e($collage->college_name); ?></a>
                                                        <h4> <?php echo e($collage->college_address); ?>,
                                                            <?php echo e($collage->college_country); ?></h4>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($collages->links()); ?>

                                <?php else: ?>
                                    <div class="alert alert-danger">
                                        <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                        </strong> Requesting data not found.
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="modal fade" id="addNewStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 600px;">

        <form action="" method="POST" id="student_regi">
            <?php echo csrf_field(); ?>
            <div class="modal-content" id="new-students">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="error"></div>
                <div id="success"></div>
                <div class="modal-body " style="height: 600px; overflow-Y: scroll;">
                    <p>Please provide a legitimate email address for your student that is actively monitored by them.
                        Their country is required to forward applications to our partner schools. Note: ApplyBoard will
                        not communicate with your student via email or other methods.</p>

                    <div class="mb-3">
                        <label class="form-label">CONTACT INFORMATION</label>
                        <input type="email" name="email" class="form-control mb-3" placeholder="Email">
                        <input type="tel" name="phone" class="form-control" placeholder="Phone Number">

                    </div>
                    <div class="mb-3">
                        <label class="form-label">PERSONAL INFORMATION</label>
                        <input type="text" class="form-control mb-3" name="fname" placeholder="Given Name">
                        <input type="text" class="form-control mb-3" name="lname" placeholder="Last Name">
                        <input type="text" class="form-control mb-3" name="family_name"
                            placeholder="Family Name">
                        <input type="date" class="form-control mb-3" name="dob" placeholder="Birth Date">
                        <select class="form-select " name="citizenship" aria-label="Default select example">
                            <option selected>Country of Citizenship</option>
                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($country->id); ?>">
                                    <?php echo e($country->country); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="mb-3 gndr-ads">
                        <label class="form-label">Gender</label>
                        <div class="d-flex flex-row sg">
                            <div class="w-100 me-3 d-flex align-items-center">
                                <input class="mt-1 d-none" type="radio" name="gender" id="radiomale"
                                    value="male" checked>
                                <label class="w-100 pt-3 ps-2" for="radiomale">Male</label>
                            </div>
                            <div class="w-100 d-flex align-items-center">
                                <input class="mt-1 d-none" type="radio" name="gender" value="female"
                                    id="radiofemale">
                                <label class="w-100 pt-3 ps-2" for="radiofemale">Female</label>
                            </div>

                        </div>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" name="term_conditions" type="checkbox" value="1"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            I confirm that I have received express written consent from the student whom I am creating
                            this profile for and I can provide proof of their consent upon request. To learn more please
                            refer to the <a href="#">Personal Data Consent</a> article.
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn px-4" style="background-color: #FFE5E4;"
                        data-bs-dismiss="modal">Cancel</button>
                    <input type="hidden" id="agent_id" name="agent_id" value="<?php echo e(Auth::user()->id); ?>">
                    <button type="button" class="btn btn-primary px-4 bg float-end"
                        onclick="student_regi_agent();">Create Student</button>
                </div>
            </div>
        </form>
    </div>
</div>

<style>
    .w-5.h-5 {
        width: 2%;
    }

    .css-6g7jag {
        color: #fff;
    }

    .loadern {
        position: relative;
        top: -27px;
        right: -89%;
        z-index: 999999999999;
    }

    #search-res {
        z-index: 9999999;
        width: 83%;
        overflow: scroll;
        height: 36vh;
    }

    .fw-bold.ptitle {
        font-size: 20px;
        margin-left: 4%;
    }
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.agent_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/college/resources/views/agent/program.blade.php ENDPATH**/ ?>