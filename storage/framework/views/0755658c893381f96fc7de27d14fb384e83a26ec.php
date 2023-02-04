<?php $__env->startSection('content'); ?>
<?php $countries     = getCountry();?>
    <div class="page-content p-15 mx-3">
        
        <div class="container-fluid">
            <div class="row">
                <!--<h1 class="f-18 fs-3">Students</h1>-->
                <div class="col-12 d-flex flex-row justify-content-between">
                    
                    <h1 class="f-18 fs-3 text-black" style="margin-left:2rem !important;">Applications</h1>
                    <div class="d-flex flex-row mt-2">
                    
                        <!--<a href="/agentApplication" class="btn border rounded-pill mb-3  fs-5 f-13 border-danger " > Back </a>-->
                        <button class="btn border rounded-pill mb-3 ms-1 fs-5 f-13  border-danger ms-2 resp-btn btn-new-jetmain">Apply Filter</button>
                        <button class="btn border rounded-pill fs-5 f-13  mb-3  border-danger ms-2 resp-btn btn-new-jetmain" type="button" data-bs-toggle="offcanvas" data-bs-target="#student-filters" aria-controls="student-filters"><i class="fa-solid fa-filter"></i> Filters </button>
                        <a class="btn border rounded-pill fs-5 f-13  mb-3 border-danger ms-2 resp-btn btn-new-jetmain" href="#" data-bs-toggle="modal" data-bs-target="#addNewStudent"><i class="fa-solid fa-plus me-2"></i>Add new student</a>
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
                                            <input type="text" class="form-control mb-3" name="family_name" placeholder="Family Name">
                                                
                                            <!--<input type="date" class="form-control mb-3" name="dob" placeholder="Birth Date">-->
                                            
                                            <input type="text" id="datepicker" name="dob" class="form-control mb-3"  placeholder="Birth Date">
                                            
                                            <select class="form-select " name="citizenship" role="textbox" area-readonly="true" aria-label="Default select example">
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
                    
                    
                    
                     

                    <!--------------------Filter-------------------->
                    <div class="offcanvas offcanvas-start p-2" tabindex="-1" id="student-filters" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h3 class="offcanvas-title fs-4">Hide/Show Columns</h3>
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
                                <div class="tab-pane fade show active aplly-filter apply_fliter_check" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="mb-3">
                                        <label class="form-label ml-from font">SCHOOL COUNTRY</label><br>
                                        <small>Select country</small>
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected>All</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="USA">USA</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 payment_status">
                                        <div class="d-flex flex-row justify-content-between">
                                            <label class="form-label font">PAYMENT STATUS</label><br>
                                            <a href=""><small>Clear</small></a>
                                        </div>
                                        
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>
                                             </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 d-flex"> 
                                            <div class="form-check"> 
                                                <input class="form-check-input " type="radio" name="payment_statues" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check"> 
                                                <input class="form-check-input " type="radio" name="payment_statues" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Paid</label>
                                        </div>
                                        
                                    </div>
                                    <div class="mb-3 apply_filter_application">
                                        <div class="d-flex flex-row justify-content-between">
                                            <label class="form-label font">APPLICATION STATUS</label><br>
                                            <a href=""><small>Clear</small></a>
                                        </div>
                                       

                                        <div class="d-flex">
                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>
                                             </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">   
                                            <div class="form-check">
                                                 <input class="form-check-input" type="radio" name="appplication_status_accepted" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                 <input class="form-check-input" type="radio" name="appplication_status_accepted" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Accepted</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check"> 
                                                <input class="form-check-input" type="radio" name="appplication_status_rejected" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check"> 
                                                <input class="form-check-input" type="radio" name="appplication_status_rejected" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Rejected</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_canceled" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_canceled" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Canceled</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_withdrawn" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_withdrawn" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Withdrawn</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_refundprogress" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_refundprogress" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Refund In Progress</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Program Closed</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_program_closed" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_program_closed" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Deferral In Progress</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_deferralprogress" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_deferralprogress" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Waitlisted</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_waitlisted" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_waitlisted" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Ready to Enroll</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input " type="radio" name="appplication_status_readyenroll" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input " type="radio" name="appplication_status_readyenroll" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Enrollment Confirmed</label>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex mt-md-3">
                                        <button class="btn bg-light fs-5">Clear All Filter</button>
                                        <button class="btn bg ms-md-3 fs-5">Apply Filter</button>
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
                                <table class="table">
                                    <thead>
                                        <tr style="border-bottom: 2px solid #0000001f;">
                                            <th class="text-center" >Actions</th>
                                            <!--<th class="text-center" scope="col">Payment Date</th>-->
                                            <th class="text-center" >App ID</th>
                                            <th class="text-center" >Student ID</th>
                                            <!--<th class="text-center" scope="col" style="width: 180px;">Apply Date</th>-->
                                            <th class="text-center" >First Name</th>
                                            <th class="text-center">Last Name</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Requirements</th>
                                            <!--<th class="text-center" scope="col">Current Stage</th>-->
                                            <th class="text-center">Program</th>
                                            <th class="text-center">School</th>
                                            <th class="text-center">Start Date</th>
                                            <th class="text-center">Recruitment Partner</th>
                                            
                                            <!--<th class="text-center" scope="col">View</th>-->
                                        </tr>
                                        <form method="GET" action="/agentApplication" id="frmApplicationFilter">
                                            <tr>
                                                <!--<td scope="col"></td>-->
                                                <!--<td scope="col">     -->
                                                    <!--<div class="ui main-date">-->
                                                    <!--    <div class="ui form">-->
                                                    <!--        <div class="two fields">-->
                                                    <!--            <div class="field">-->
                                                                    <!--<label>Start date</label>-->
                                                    <!--                <div class="ui calendar" id="rangestart">-->
                                                    <!--                    <div class="ui input left icon">-->
                                                    <!--                        <i class="calendar icon"></i>-->
                                                    <!--                        <input type="text" name="payment_start_date" placeholder="Start" onchange="this.form.submit()">-->
                                                    <!--                    </div>-->
                                                    <!--                </div>-->
                                                    <!--            </div>-->
                                                    <!--            <div class="field margin-10">-->
                                                                    <!--<label>End date</label>-->
                                                    <!--                <div class="ui calendar" id="rangeend">-->
                                                    <!--                    <div class="ui input left icon">-->
                                                    <!--                        <i class="calendar icon"></i>-->
                                                    <!--                        <input type="text" name="payment_end_date"  placeholder="End" onchange="this.form.submit()">-->
                                                    <!--                    </div>-->
                                                    <!--                </div>-->
                                                    <!--            </div>-->
                                                    <!--        </div>-->
                                                    <!--    </div>-->
                                                    <!--</div>-->
                                                <!--</td> -->
                                                <td scope="col">
                                                    <!--<div class="input-control">-->
                                                        <input type="text" class="form-control" name="appid">
                                                    <!--</div>-->
                                                </td>
                                                <!--<td scope="col">-->
                                                <!--    <div class="input-control">-->
                                                <!--        <input type="text" class="form-control" name="student_id">-->
                                                <!--    </div>-->
                                                <!--</td>-->
                                                <!--<td scope="col"></td>-->
                                                <td scope="col">
                                                    <!--<div class="input-control">-->
                                                        <input type="text" class="form-control" name="fname">
                                                    <!--</div> -->
                                                 </td>
                                                <td scope="col">
                                                    <!--<div class="input-control">-->
                                                        <input type="text" class="form-control" name="lname">
                                                    <!--</div> -->
                                                </td>
                                                <!--<td scope="col"></td>-->
                                                <td scope="col">
                                                    <!--<div class="input-control">-->
                                                        <select class="form-select" name="requirements" aria-label="Default select example" onchange="this.form.submit()" style="width: 170px;">
                                                            <option selected>---</option>
                                                            <option value="Missing">Missing</option>
                                                            <option value="Reviewing">Reviewing</option>
                                                            <option value="Reviewing - None Outstanding">Reviewing - None Outstanding</option>
                                                            <option value="Not Approved">Not Approved</option>
                                                            <option value="Complete">Complete</option>
                                                        </select>
                                                    <!--</div>-->
                                                </td>
                                                <!--<td scope="col">-->
                                                <!--    <div class="input-control">-->
                                                <!--        <select class="form-select" aria-label="Default select example" name="current_status" onchange="this.form.submit()" style="width: 150px;">-->
                                                <!--            <option selected>---</option>-->
                                                <!--            <option value="Pre-Payment">Pre-Payment</option>-->
                                                <!--            <option value="Pre-Submission">Pre-Submission</option>-->
                                                <!--            <option value="Submission">Submission</option>-->
                                                <!--            <option value="Post-Submission">Post-Submission</option>-->
                                                <!--            <option value="Admission">Admission</option>-->
                                                <!--            <option value="Visa-Application">Visa-Application</option>-->
                                                <!--            <option value="Pre-Arrival">Pre-Arrival</option>-->
                                                <!--            <option value="Post Arrival/Commission">Post Arrival/Commission</option>-->
                                                <!--            <option value="Arrival">Arrival</option>-->
                                                <!--        </select>-->
                                                <!--    </div>-->
                                                <!--</td>-->
                                                <td scope="col">
                                                    <!--<div class="input-control">-->
                                                        <input type="text" class="form-control" name="program_name" style="width: 200px;">
                                                    <!--</div> -->
                                                </td>
                                                <!--<td scope="col">-->
                                                <!--    <div class="input-control">-->
                                                <!--        <input type="text" class="form-control" name="school_name" style="width: 200px;">-->
                                                <!--    </div> -->
                                                <!--</td>-->
                                                <td scope="col">
                                                    <!--<div class="ui main-date">-->
                                                        <!--<div class="ui form">-->
                                                            <!--<div class="two fields">-->
                                                                <!--<div class="field">-->
                                                                <!--    <div class="ui calendar" id="rangestart1">-->
                                                                <!--        <div class="ui input left icon">-->
                                                                <!--            <i class="calendar icon"></i>-->
                                                                <!--            <input type="text" name="application_start_date" placeholder="Start" onchange="this.form.submit()">-->
                                                                <!--        </div>-->
                                                                <!--    </div>-->
                                                                <!--</div>-->
                                                                <div class="field margin-10">
                                                                    <div class="ui calendar" id="rangeend1">
                                                                        <div class="ui input left icon">
                                                                            <i class="calendar icon"></i>
                                                                            <input type="text" name="application_end_date" placeholder="End" onchange="this.form.submit()">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <!--</div>-->
                                                        <!--</div>-->
                                                    <!--</div>-->
                                                </td>
                                                <!--<td scope="col">-->
                                                    <!--<div class="input-control">-->
                                                <!--        <input type="text" class="form-control" name="requirement_partner" style="width: 200px;">-->
                                                    <!--</div>-->
                                                <!--</td>-->
                                                
                                                <!--<th scope="col"></td>-->
                                            </tr>
                                        </form>
                                    </thead>
                                    <tbody>
                                        
                                        <?php if(!empty($application_list)): ?>
                                        <?php $__currentLoopData = $application_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $applicationlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                        
                                        <tr>
                                            <td> 
                                                <div class="dropdown">
                                                     <button class="btn border-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="dropdown-item" href="https://design.enrolhere.com/student-application-review/78429398"><i class="bi bi-pencil"></i> View Application</a></li>
                                                        <li><a class="dropdown-item" href="https://design.enrolhere.com/student-profile-application/16"><i class="bi bi-file-earmark-text"></i> All Applications</a></li>
                                                    </ul>
                                                </div> 
                                            </td>
                                            <!--<td class="text-center"><a href="#"> NA</a></td>-->
                                            <td class="text-center">
                                                <a style="color:#3366cc" href="/student-application-review/<?php echo e($applicationlist->app_id); ?>"><?php echo e($applicationlist->app_id); ?></a>
                                            </td>
                                            <td class="text-center"><a style="color:#3366cc" href="/agent_student_profile/<?php echo e($applicationlist->user_id); ?>"><?php echo e($applicationlist->user_id); ?></a></td>
                                            <!--<td class="text-center"><span><?php echo e(date('d-M-Y', strtotime($applicationlist->created_at))); ?></span></td>-->
                                            <td class="text-center"><span><?php echo e($applicationlist->first_name); ?></span></td>
                                            <td class="text-center"><span><?php echo e($applicationlist->last_name); ?></span></td>
                                            <td class="text-center"><span class="<?php echo e($applicationlist->bgcolor); ?> px-2 py-1 rounded-pill text-white text-white notPaid-main"><?php echo e($applicationlist->status_name); ?></span></td>

                                            <td class="text-center">
                                                <ul>
                                                    <li>
                                                        <div class="text-white req-circle-main" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Requirements">1</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white req-circle-main-one" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Requirements">2</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white req-circle-main-two" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Requirements">3</div>
                                                    </li>
                                                </ul>
                                            </td> 
                                            <!--<td class="text-center">-->
                                                <!--<span class="bg-light px-3 py-1 rounded-pill">Cancelled</span>-->
                                            <!--</td>-->
                                            <td class="text-center"><a href="/agent-program-details/<?php echo e($applicationlist->pid); ?>"><span><?php echo e($applicationlist->programs_name); ?></span></a></td>
                                            <td class="text-center"><a href="/agent-college-details/<?php echo e($applicationlist->cid); ?>"><span><img width="20" height="20" src="<?php echo e(url('/images/' . $applicationlist->college_logo)); ?>" alt="Logo" />
                                                <?php echo e($applicationlist->program_college_name); ?></span></a></td>
                                            <td class="text-center"><span><?php echo e(date('d-M-Y', strtotime($applicationlist->earliest_intake_date))); ?> </span></td>
                                              <?php if(!empty($agent_email)): ?>
                                            <?php $__currentLoopData = $agent_email; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agentemail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           
                                            <td class="text-center"><a href="#"><?php echo e($agentemail->email); ?></a></td>
                                           
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            
                                            
                                            
                                            <td class="text-center">
                                                 <button class="btn  border-12 mb-3 border-danger fs-6 btn-vew-main">View</button>
                                            </td>
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

               <div class="row justify-content-start align-items-center py-3">
                    
                    <div class="dropdown col-lg-2 col-sm-2 d-flex flex-row border-end pe-2 mt-3">
                        <span class="d-flex align-items-center ">Row:</span>
                        <form method="GET" action="/agentApplication" id="agentApplication">
                            <select class="form-select form-select-sm" name="qty" onchange="this.form.submit()">
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </form>
                    </div>

                    <nav aria-label="Page navigation example" class="mt-1 px-3 col-lg-10 col-sm-12 resp-nav">
                        <div class="pagination-wrapper">
                            <?php echo e($application_list->links()); ?>

                        </div>

                    
                    

                </div>

            </div>
        </div> 
    </div>
    
    <style>
    .req-circle-main{
        background-color:#d18d2f7a !important;
        color:#d16f2f !important;
        width:30px !important;
        height:30px !important;
    }
    .req-circle-main-one{
        background-color:#d12f2f6b !important;
        color:#d12f2f !important;
        width:30px !important;
        height:30px !important;
    }
    .req-circle-main-two{
        background-color:#26c06c7a !important;
        color:#26c06c !important;
        width:30px !important;
        height:30px !important;
    }
    
    #student-table table tbody tr td button{
        background-color:transparent;
    }
    .btn-vew-main:hover{
        background-color: #2b50ed !important;
        color: #fff !important;
    }
    .btn-vew-main{
        background-color:#e2e5ef !important;
        height:30px !important;
        width:50px !important;
        line-height:0 !important;
        border-radius:6px !important;
        border:none !important;
    }
    .notPaid-main{
            background-color: rgba(68,97,223,.1) !important;
            color: black !important;
            font-size:11px !important;
            font-weight:400 !important;
    }
    .btn-new-jetmain{
    background-color:#e2e5ef !important;
    border:none !important;
    border-radius:4px !important;
    font-size:11px !important;
    
   }
  .btn-new-jetmain:hover{
    background-color:#2b50ed !important;
    color:white !important;
  }
  .main-date{
      /*padding-bottom:1rem !important;*/
  }
    @media (min-width:300px) and (max-width:600px) {
        #student-table .col-12 {
            overflow-x: scroll;
            height: 50vh;
            }
    }
    </style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.agent_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/design/resources/views/agent/application.blade.php ENDPATH**/ ?>