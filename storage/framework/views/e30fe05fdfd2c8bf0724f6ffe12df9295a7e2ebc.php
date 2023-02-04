
<?php $__env->startSection('content'); ?> 
<div class="page-content"> 
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-12"> 
                <div class="bg-white p-3 important_updates">
  
                     
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="missing_requirements_tab" data-bs-toggle="pill" data-bs-target="#missing_requirements" type="button" role="tab" aria-controls="missing_requirements" aria-selected="true">Notifications <span><?php if(!empty($important_notice)): ?><?php echo e($important_notice->total()); ?><?php else: ?> <?php echo e(0); ?><?php endif; ?></span> </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="notes_tab" data-bs-toggle="pill" data-bs-target="#notes" type="button" role="tab" aria-controls="notes" aria-selected="false">Notes <span><?php if(!empty($notes)): ?><?php echo e($notes->total()); ?><?php else: ?> <?php echo e(0); ?><?php endif; ?> </span> </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="application_status_tab" data-bs-toggle="pill" data-bs-target="#application_status" type="button" role="tab" aria-controls="application_status" aria-selected="false">Application Status <span><?php if(!empty($application_list)): ?><?php echo e($application_list->total()); ?><?php else: ?> <?php echo e(0); ?><?php endif; ?></span> </button>
                        </li>
                    </ul>
                    
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="missing_requirements" role="tabpanel" aria-labelledby="missing_requirements_tab" tabindex="0">
                            <div class="notes_main">
                                <div class="notes_form_box">

                                    

                                    

                                    

                                    <?php if(!empty($important_notice)): ?>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>SN.</th>
                                                        <th>Title</th>
                                                        <th>Message</th>
                                                        <th>App ID</th>
                                                        <th>App Status</th>
                                                        <th>Payment Status</th>
                                                       
                                                        <th>Student Name</th>
                                                        <th>Student Email</th>
                                                        <th>Program & School</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php $count = 1; ?>
                                                    <?php $__currentLoopData = $important_notice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr><td><?php echo e($count); ?></td>
                                                        <td><?php echo e($notice->title); ?></td>
                                                        <td><?php echo e($notice->text); ?> <?php echo e($notice->agent_first_name); ?> <?php echo e($notice->agent_last_name); ?></td>
                                                        <td><a href="/student-application-review/<?php echo e($notice->app_id); ?>"><?php echo e($notice->app_id); ?></a></td>
                                                        <td><?php echo e($notice->application_status); ?></td>
                                                        <td><?php echo e($notice->payment_status); ?></td>
                                                    
                                                        <td><a href="/agent-student-profile/<?php echo e($notice->student_id); ?>"><?php echo e($notice->name); ?></a></td>
                                                        <td><a href="/agent-student-profile/<?php echo e($notice->student_id); ?>"><?php echo e($notice->email); ?></a></td>
                                                        <td><a href="/agent-program-details/<?php echo e($notice->program_id); ?>"><?php echo e($notice->programs_name); ?></a> & <a href="/agent-college-details/<?php echo e($notice->college_id); ?>"><?php echo e($notice->program_college_name); ?></a></td>
                                                        
                                                    </tr> 
                                                    <?php $count ++ ?> 
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                           <div class="notices"> <?php echo e($important_notice->links('pagination::bootstrap-4')); ?></div>
                                           <div><span>
                                            Showing Results <?php echo e(($important_notice->currentpage() - 1) * $important_notice->perpage() + 1); ?> to
                                            <?php echo e($important_notice->currentpage() * $important_notice->perpage()); ?>

                                            of <?php echo e($important_notice->total()); ?> entries
                                           </span></div>
                                           <?php endif; ?>
                                        </div>
                                        
                                    </div>
                                     
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="notes" role="tabpanel" aria-labelledby="notes_tab" tabindex="0">
                            
                            <div class="notes_main">
                                <div class="notes_form_box"> 
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="all_messages" role="tabpanel" aria-labelledby="all_messages_tab" tabindex="0">
                                                    <?php if(!empty($notes)): ?>
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <table class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                           
                                                                        </th>
                                                                        <th>Date & Time</th>
                                                        
                                                                        <th>Student Name</th>
                                                                        <th>Email</th>
                                                                        <th>App Id</th>
                                                                        <th>Program & School</th> 
                                                                        
                                                                       
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $count2 = 1; ?>
                                                                    <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <tr>
                                                                        <td>
                                                                            
                                                                            <?php echo e($count2); ?>

                                                                        </td>
                                                                        <td><?php echo e(date('d-M-Y H:i:s', strtotime($note->created_at))); ?>

                                                                            </td>
                                                                        
                                                                        <td><a href="/agent-student-profile/<?php echo e($note->student_id); ?>"><?php echo e($note->name); ?></a></td>
                                                                         <td><a href="/agent-student-profile/<?php echo e($note->student_id); ?>"><?php echo e($note->email); ?></a></td>
                                                                        <td><a href="/agent-program-details/<?php echo e($note->program_id); ?>"><?php echo e($note->programs_name); ?></a> & <a href="/agent-college-details/<?php echo e($note->college_id); ?>"><?php echo e($note->program_college_name); ?></a></td>
                                                                        <td>
                                                                            <span><b>Title: </b> <?php echo e($note->title); ?></span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> <?php echo e($note->notes); ?></span>
                                                                            
                                                                        </td>
                                                                         
                                                                    </tr> 
                                                                    <?php echo e($count2 ++); ?>   
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <?php echo e($notes->links('pagination::bootstrap-4')); ?>

                                                    <div><span>
                                                    Showing Results <?php echo e(($notes->currentpage() - 1) * $notes->perpage() + 1); ?> to
                                                    <?php echo e($notes->currentpage() * $notes->perpage()); ?> of <?php echo e($notes->total()); ?> entries
                                                    </span></div>
                                                    <?php endif; ?> 
                                                </div>
                                                <div class="tab-pane fade" id="unread_messages" role="tabpanel" aria-labelledby="unread_messages_tab" tabindex="0">
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <table class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </th>
                                                                        <th>Date & Time</th>
                                                                        <th>Student ID</th>
                                                                        <th>First Name</th>
                                                                        <th>Last Name </th>
                                                                        <th>App Id</th>
                                                                        <th>Program & School</th> 
                                                                        <th>Title</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="unread_first_message" role="tabpanel" aria-labelledby="unread_first_message_tab" tabindex="0">
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <table class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </th>
                                                                        <th>Date & Time</th>
                                                                        <th>Student ID</th>
                                                                        <th>First Name</th>
                                                                        <th>Last Name </th>
                                                                        <th>App Id</th>
                                                                        <th>Program & School</th> 
                                                                        <th>Title</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                   
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="trashed_message" role="tabpanel" aria-labelledby="trashed_message_tab" tabindex="0">
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <table class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </th>
                                                                        <th>Date & Time</th>
                                                                        <th>Student ID</th>
                                                                        <th>First Name</th>
                                                                        <th>Last Name </th>
                                                                        <th>App Id</th>
                                                                        <th>Program & School</th> 
                                                                        <th>Title</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="application_status" role="tabpanel" aria-labelledby="application_status-tab" tabindex="0"> 
                            <div class="notes_main">
                                <div class="notes_form_box"> 
                                    <div class="row">
                                        
                                        
                                        <?php if(!empty($application_list)): ?>
                                        <div class="col-md-12">
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="all_messages2" role="tabpanel" aria-labelledby="all_messages_tab2" tabindex="0">
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <table class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                          SN.
                                                                        </th>
                                                                        <th>App Id</th> 
                                                                         
                                                                        <th>Application Status</th>
                                                                        <th>Payment Status</th>
                                                                        <th>Program & School</th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $count = 1; ?>
                                                                    <?php $__currentLoopData = $application_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $applist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo e($count); ?>

                                                                        </td> 
                                                                        <td><?php echo e($applist->app_id); ?></td> 
                                                                         
                                                                        <td><?php echo e($applist->application_status); ?></td>
                                                                        <td><?php echo e($applist->payment_status); ?></td>
                                                                        <td><?php echo e($applist->programs_name); ?> - <?php echo e($applist->program_college_name); ?></td>
                                                                        
                                                                         
                                                                    </tr> 
                                                                    <?php echo e($count ++); ?>

                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                     
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="unread_messages2" role="tabpanel" aria-labelledby="unread_messages_tab2" tabindex="0">
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <table class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </th>
                                                                        <th>App Id</th> 
                                                                        <th>Program & School</th> 
                                                                        <th>Title</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>  
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="unread_first_message2" role="tabpanel" aria-labelledby="unread_first_message_tab2" tabindex="0">
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <table class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </th>
                                                                        <th>App Id</th> 
                                                                        <th>Program & School</th> 
                                                                        <th>Title</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>  
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="trashed_message2" role="tabpanel" aria-labelledby="trashed_message_tab2" tabindex="0">
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <table class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </th>
                                                                        <th>App Id</th> 
                                                                        <th>Program & School</th> 
                                                                        <th>Title</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>  
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.agent_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/design/resources/views/agent/important_notice.blade.php ENDPATH**/ ?>