<?php $__env->startSection('content'); ?>
<div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex flex-row justify-content-between align-items-center">
                    <h1>Applications</h1>
                    <div class="d-flex flex-row">
                        <button class="btn me-4 fw-normal fs-5 border rounded-pill px-3 py-1 border-primary">Apply Filter</button>
                        <button class="btn me-4 fw-normal fs-5 border rounded-pill px-3 py-1 border-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#student-filters" aria-controls="student-filters"><i class="fa-solid fa-filter"></i> Filters </button>


                        <a class="btn me-4 fw-normal fs-5 border rounded-pill px-3 py-1 border-primary" href="#" data-bs-toggle="modal" data-bs-target="#addNewStudent"><i class="fa-solid fa-plus me-2"></i>Add new student</a>
                    </div>
                    
                    
                    
                    <div class="modal fade" id="addNewStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <form action="">
                    <div class="modal-dialog" style="max-width: 600px;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body " style="height: 600px; overflow-Y: scroll;">
                                <p>Please provide a legitimate email address for your student that is actively monitored by them. Their country is required to forward applications to our partner schools. Note: ApplyBoard will not communicate with your student via email or other methods.</p>

                                <div class="mb-3">
                                    <label class="form-label">CONTACT INFORMATION</label>
                                    <input type="email" class="form-control mb-3" placeholder="Email">
                                    <input type="tel" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">PERSONAL INFORMATION</label>
                                    <input type="text" class="form-control mb-3" placeholder="Given Name">
                                    <input type="text" class="form-control mb-3" placeholder="Middle Name">
                                    <input type="text" class="form-control mb-3" placeholder="Family Name">
                                    <input type="date" class="form-control mb-3" placeholder="Birth Date">
                                    <select class="form-select " aria-label="Default select example">
                                        <option selected>Country of Citizenship</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3 gndr-ads">
                                    <label class="form-label">Gender</label>
                                    <div class="d-flex flex-row sg">
                                        <div class="w-100 me-3 d-flex align-items-center">
                                            <input class="mt-1 d-none" type="radio" name="select-gender" id="radiomale" checked>
                                            <label class="w-100 pt-3 ps-2" for="radiomale">Male</label>
                                        </div>
                                        <div class="w-100 d-flex align-items-center">
                                            <input class="mt-1 d-none" type="radio" name="select-gender" id="radiofemale">
                                            <label class="w-100 pt-3 ps-2" for="radiofemale">Female</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">LEAD MANAGEMENT</label>
                                    <select class="form-select mb-3" aria-label="Default select example">
                                        <option selected>Status</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <select class="form-select mb-3" aria-label="Default select example">
                                        <option selected>Referral Source</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <select class="form-select mb-3" aria-label="Default select example">
                                        <option selected>Country of Interest</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <select class="form-select mb-3" aria-label="Default select example">
                                        <option selected>Services of Interest</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I confirm that I have received express written consent from the student whom I am creating this profile for and I can provide proof of their consent upon request. To learn more please refer to the <a href="#">Personal Data Consent</a> article.
                                    </label>
                                </div>
                            </div>
                            <div class="modal-footer d-flex flex-row">
                                <button type="button" class="btn px-4" style="background-color: #FFE5E4;" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary px-4 bg">Create Student</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> 

                    <!--------------------Filter-------------------->
                    <div class="offcanvas offcanvas-start p-2" tabindex="-1" id="student-filters" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h3 class="offcanvas-title fs-4">Filter</h3>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">

                            <ul class="nav nav-pills mb-3 d-flex flex-row flex-nowrap" id="pills-tab" role="tablist">
                                <li class="nav-item w-100" role="presentation">
                                    <button class="nav-link active w-100" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                        Filters
                                    </button>
                                </li>
                                <li class="nav-item w-100" role="presentation">
                                    <button class="nav-link w-100" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Columns</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="student-filters-tabs">
                                <div class="tab-pane fade show active aplly-filter" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="mb-3">
                                        <label class="form-label ml-from">SCHOOL COUNTRY</label><br>
                                        <small>Select country</small>
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected>All</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex flex-row justify-content-between">
                                            <label class="form-label">PAYMENT STATUS</label><br>
                                            <a href=""><small>Clear</small></a>
                                        </div>
                                        <div class="mb-3 d-flex">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label ">Yes</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Paid</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex flex-row justify-content-between">
                                            <label class="form-label">APPLICATION STATUS</label><br>
                                            <a href=""><small>Clear</small></a>
                                        </div>
                                        <div class="mb-3 d-flex ">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Accepted</label>
                                        </div>
                                        <div class="mb-3 d-flex ">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Rejected</label>
                                        </div>
                                        <div class="mb-3 d-flex ">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Canceled</label>
                                        </div>
                                        <div class="mb-3 d-flex ">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Withdrawn</label>
                                        </div>
                                        <div class="mb-3 d-flex ">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Refund In Progress</label>
                                        </div>
                                        <div class="mb-3 d-flex ">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Program Closed</label>
                                        </div>
                                        <div class="mb-3 d-flex ">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Deferral In Progress</label>
                                        </div>
                                        <div class="mb-3 d-flex ">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Waitlisted</label>
                                        </div>
                                        <div class="mb-3 d-flex ">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Ready to Enroll</label>
                                        </div>
                                        <div class="mb-3 d-flex ">
                                            
                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Enrollment Confirmed</label>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-around">
                                        <button class="btn bg-light">Clear All Filter</button>
                                        <button class="btn bg">Apply Filter</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <ul class="p-0 m-0 column-check">
                                        <li><span>COLUMN HEADER</span> <a href="">hide all</a></li>
                                        <li>
                                            <hr class="w-100 my-0">
                                        </li>
                                        <li><span>Student ID</span> <input class="form-check-input" type="checkbox" value="" id="studentId"><label class="form-check-label" for="studentId">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Student Email</span> <input class="form-check-input" type="checkbox" value="" id="studentEmail"><label class="form-check-label" for="studentEmail">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>First Name</span> <input class="form-check-input" type="checkbox" value="" id="fName"><label class="form-check-label" for="fName">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Last Name</span> <input class="form-check-input" type="checkbox" value="" id="lName"><label class="form-check-label" for="lName">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Nationality</span> <input class="form-check-input" type="checkbox" value="" id="nationlty"><label class="form-check-label" for="nationlty">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Recruitment Partner</span> <input class="form-check-input" type="checkbox" value="" id="recuPart"><label class="form-check-label" for="recuPart">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Recruiter Type</span> <input class="form-check-input" type="checkbox" value="" id="recuType"><label class="form-check-label" for="recuType">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Education</span> <input class="form-check-input" type="checkbox" value="" id="education"><label class="form-check-label" for="education">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Applications</span> <input class="form-check-input" type="checkbox" value="" id="application"><label class="form-check-label" for="application">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Referral Source</span> <input class="form-check-input" type="checkbox" value="" id="referSour"><label class="form-check-label" for="referSour">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Lead Status</span> <input class="form-check-input" type="checkbox" value="" id="leadStat"><label class="form-check-label" for="leadStat">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--------------------Filter-------------------->

                </div>
            </div>

        </div>
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-12">
                    <div class="row overflow-hidden" id="student-table">
                        <div class="col-12 position-relative">
                            <div class="myftable">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Actions</th>
                                            <th scope="col">Payment Date</th>
                                            <th scope="col">App ID</th>
                                            <th scope="col">Student ID</th>
                                            <th scope="col">Apply Date</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Program</th>
                                            <th scope="col">School</th>
                                            <th scope="col">Start Date</th>
                                            <th scope="col">Recruitment Partner</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Requirements</th>
                                            <th scope="col">Current Stage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>    
                                                <div class="icon-calendar">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" id="litepicker" class="form-control pl-10 me-6" placeholder="11 Jun, 2022 - 20 Jul, 2022">
                                            </td>

                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td>
                                                <div class="icon-calendar">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" id="litepicker" class="form-control pl-10 me-6" placeholder="11 Jun, 2022 - 20 Jul, 2022">

                                            </td>
                                            <td><input type="text" class="form-control"></td>
                                            <td></td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected></option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected></option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <?php if(!empty($application_list)): ?>
                                        <?php $__currentLoopData = $application_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $applicationlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                        
                                        <tr>
                                            <td> 
                                            <div class="dropdown">
                                                 <button class="btn border-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="/student-profile-review/<?php echo e($applicationlist->id); ?>"><i class="bi bi-pencil"></i> View Application</a></li>
                                                    <li><a class="dropdown-item" href="/student_profile_application/<?php echo e($applicationlist->id); ?>"><i class="bi bi-file-earmark-text"></i> All Applications</a></li>
                                                </ul>
                                            </div> 
                                            </td>
                                            <td><a href="#"> NA</a></td>
                                            <td><a href="#"><?php echo e($applicationlist->app_id); ?></a></td>
                                            <td><a href="/agent_student_profile/<?php echo e($applicationlist->user_id); ?>"><?php echo e($applicationlist->user_id); ?></a></td>
                                            <td><span><?php echo e($applicationlist->created_at); ?></span></td>
                                            <td><span><?php echo e($applicationlist->first_name); ?></span></td>
                                            <td><span><?php echo e($applicationlist->last_name); ?></span></td>
                                            <td><span><?php echo e($applicationlist->programs_name); ?></span></td>
                                            <td><span><img width="20" height="20" src="<?php echo e(url('/images/' . $applicationlist->college_logo)); ?>" alt="Logo" />
                                                <?php echo e($applicationlist->program_college_name); ?></span></td>
                                            <td><span><?php echo e($applicationlist->earliest_intake_date); ?></span></td>
                                              <?php if(!empty($agent_email)): ?>
                                            <?php $__currentLoopData = $agent_email; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agentemail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           
                                            <td><a href="#"><?php echo e($agentemail->email); ?></a></td>
                                           
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            
                                            <td><span class="<?php echo e($applicationlist->bgcolor); ?> px-2 py-1 rounded-pill text-white text-white"><?php echo e($applicationlist->status_name); ?></span></td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <div class="text-white">1</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">2</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">3</div>
                                                    </li>
                                                </ul>
                                            </td>

                                            <td><span class="bg-light px-3 py-1 rounded-pill">Cancelled</span></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col d-flex justify-content-start align-items-center py-3">

                    <div class="dropdown d-flex flex-row border-end pe-2">
                        <span class="d-flex align-items-center ">Row:</span>
                        <form method="GET" action="/agentApplication" id="agentApplication">
                            <select class="form-select form-select-sm" name="qty" onchange="this.form.submit()">
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </form>
                    </div>

                    <nav aria-label="Page navigation example " class="d-flex px-3">
                        <ul class="pagination p-0 m-0 pe-3">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                        <span class="d-flex align-items-center border-startps-2">1 - 20 of 292</span>
                    </nav>

                </div>

            </div>
        </div> 
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.agent_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/college/resources/views/agent/application.blade.php ENDPATH**/ ?>