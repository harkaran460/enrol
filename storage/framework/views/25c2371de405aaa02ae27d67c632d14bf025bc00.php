
<?php $__env->startSection('content'); ?> 

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-12">
                <h1>Students</h1>
                <div class="bg-white p-3 important_updates">
  
                     
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="missing_requirements_tab" data-bs-toggle="pill" data-bs-target="#missing_requirements" type="button" role="tab" aria-controls="missing_requirements" aria-selected="true">Missing Requirements <span>77</span> </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="notes_tab" data-bs-toggle="pill" data-bs-target="#notes" type="button" role="tab" aria-controls="notes" aria-selected="false">Notes <span>68</span> </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="application_status_tab" data-bs-toggle="pill" data-bs-target="#application_status" type="button" role="tab" aria-controls="application_status" aria-selected="false">Application Status <span>12</span> </button>
                        </li>
                    </ul>
                    
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="missing_requirements" role="tabpanel" aria-labelledby="missing_requirements_tab" tabindex="0">
                            <div class="notes_main">
                                <div class="notes_form_box">

                                    <div class="row">
                                        <div class="col-md-3">
                                            <select class="form-select" name="optionality">
                                                <option value="optionality" selected>Optionality</option>
                                                <option value="required">Required</option>
                                                <option value="optional">Optional</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-select" name="status">
                                                <option value="status" selected>Status</option>
                                                <option value="missing">Missing</option>
                                                <option value="Reviewing/Pending for Review">Reviewing/Pending for Review</option>
                                                <option value="Not Approved">Not Approved</option>
                                                <option value="completed">Completed</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <input name="number" type="text" class="form-control" placeholder="Student ID">
                                        </div>
                                        <div class="col-md-3">
                                            <input name="number" type="text" class="form-control" placeholder="Application ID">
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <select class="form-select" name="application_status">
                                                <option value="Application Status" selected>Application Status</option>
                                                <option value="required">Unpaid</option>
                                                <option value="Paid (Processing)">Paid (Processing)</option>
                                                <option value="Ready to Submit (Processing)">Ready to Submit (Processing)</option>
                                                <option value="Submitted (Processing)">Submitted (Processing)</option>
                                                <option value="Accepted">Accepted</option>
                                                <option value="Rejected">Rejected</option>
                                                <option value="Refund in Progress">Refund in Progress</option>
                                                <option value="Deferral in Progress">Deferral in Progress</option>
                                                <option value="Program Closed">Program Closed</option>
                                                <option value="Waitlisted">Waitlisted</option>
                                                <option value="Ready for Visa (Processing)">Ready for Visa (Processing)</option>
                                                <option value="Canceled">Canceled</option>
                                                <option value="Withdrawn">Withdrawn</option>
                                                <option value="Ready to Enroll (Processing)">Ready to Enroll (Processing)</option>
                                                <option value="Enrollment Confirmed">Enrollment Confirmed</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <input name="text" type="text" class="form-control" placeholder="Document Title">
                                        </div>
                                        <div class="col-md-3">
                                            <input name="text" type="text" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="col-md-3">
                                            <input name="text" type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <div class="d-grid gap-2 d-md-block">
                                                <button class="btn btn-outline-primary" type="button">Clear</button>
                                                <button class="btn btn-primary" type="button">Submit</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Optionality</th>
                                                        <th>Status</th>
                                                        <th>Student ID</th>
                                                        <th>App ID</th>
                                                        <th>App Status</th>
                                                        <th>Document Title</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Program & School</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Required</td>
                                                        <td>Missing</td>
                                                        <td>1053936</td>
                                                        <td>2591118</td>
                                                        <td>Processing</td>
                                                        <td>PTE (Automated)</td>
                                                        <td>Vivek</td>
                                                        <td>Chhabra</td>
                                                        <td>College Diploma - Business - Accounting (PBUSA), Sheridan College - Hazel McCallion</td>
                                                        <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                    </tr> 
                                                    <tr>
                                                        <td>Required</td>
                                                        <td>Missing</td>
                                                        <td>1053936</td>
                                                        <td>2591118</td>
                                                        <td>Processing</td>
                                                        <td>PTE (Automated)</td>
                                                        <td>Vivek</td>
                                                        <td>Chhabra</td>
                                                        <td>College Diploma - Business - Accounting (PBUSA), Sheridan College - Hazel McCallion</td>
                                                        <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Required</td>
                                                        <td>Missing</td>
                                                        <td>1053936</td>
                                                        <td>2591118</td>
                                                        <td>Processing</td>
                                                        <td>PTE (Automated)</td>
                                                        <td>Vivek</td>
                                                        <td>Chhabra</td>
                                                        <td>College Diploma - Business - Accounting (PBUSA), Sheridan College - Hazel McCallion</td>
                                                        <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Required</td>
                                                        <td>Missing</td>
                                                        <td>1053936</td>
                                                        <td>2591118</td>
                                                        <td>Processing</td>
                                                        <td>PTE (Automated)</td>
                                                        <td>Vivek</td>
                                                        <td>Chhabra</td>
                                                        <td>College Diploma - Business - Accounting (PBUSA), Sheridan College - Hazel McCallion</td>
                                                        <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Required</td>
                                                        <td>Missing</td>
                                                        <td>1053936</td>
                                                        <td>2591118</td>
                                                        <td>Processing</td>
                                                        <td>PTE (Automated)</td>
                                                        <td>Vivek</td>
                                                        <td>Chhabra</td>
                                                        <td>College Diploma - Business - Accounting (PBUSA), Sheridan College - Hazel McCallion</td>
                                                        <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Required</td>
                                                        <td>Missing</td>
                                                        <td>1053936</td>
                                                        <td>2591118</td>
                                                        <td>Processing</td>
                                                        <td>PTE (Automated)</td>
                                                        <td>Vivek</td>
                                                        <td>Chhabra</td>
                                                        <td>College Diploma - Business - Accounting (PBUSA), Sheridan College - Hazel McCallion</td>
                                                        <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Required</td>
                                                        <td>Missing</td>
                                                        <td>1053936</td>
                                                        <td>2591118</td>
                                                        <td>Processing</td>
                                                        <td>PTE (Automated)</td>
                                                        <td>Vivek</td>
                                                        <td>Chhabra</td>
                                                        <td>College Diploma - Business - Accounting (PBUSA), Sheridan College - Hazel McCallion</td>
                                                        <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Required</td>
                                                        <td>Missing</td>
                                                        <td>1053936</td>
                                                        <td>2591118</td>
                                                        <td>Processing</td>
                                                        <td>PTE (Automated)</td>
                                                        <td>Vivek</td>
                                                        <td>Chhabra</td>
                                                        <td>College Diploma - Business - Accounting (PBUSA), Sheridan College - Hazel McCallion</td>
                                                        <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Required</td>
                                                        <td>Missing</td>
                                                        <td>1053936</td>
                                                        <td>2591118</td>
                                                        <td>Processing</td>
                                                        <td>PTE (Automated)</td>
                                                        <td>Vivek</td>
                                                        <td>Chhabra</td>
                                                        <td>College Diploma - Business - Accounting (PBUSA), Sheridan College - Hazel McCallion</td>
                                                        <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Required</td>
                                                        <td>Missing</td>
                                                        <td>1053936</td>
                                                        <td>2591118</td>
                                                        <td>Processing</td>
                                                        <td>PTE (Automated)</td>
                                                        <td>Vivek</td>
                                                        <td>Chhabra</td>
                                                        <td>College Diploma - Business - Accounting (PBUSA), Sheridan College - Hazel McCallion</td>
                                                        <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Required</td>
                                                        <td>Missing</td>
                                                        <td>1053936</td>
                                                        <td>2591118</td>
                                                        <td>Processing</td>
                                                        <td>PTE (Automated)</td>
                                                        <td>Vivek</td>
                                                        <td>Chhabra</td>
                                                        <td>College Diploma - Business - Accounting (PBUSA), Sheridan College - Hazel McCallion</td>
                                                        <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Required</td>
                                                        <td>Missing</td>
                                                        <td>1053936</td>
                                                        <td>2591118</td>
                                                        <td>Processing</td>
                                                        <td>PTE (Automated)</td>
                                                        <td>Vivek</td>
                                                        <td>Chhabra</td>
                                                        <td>College Diploma - Business - Accounting (PBUSA), Sheridan College - Hazel McCallion</td>
                                                        <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="notes" role="tabpanel" aria-labelledby="notes_tab" tabindex="0">
                            
                            <div class="notes_main">
                                <div class="notes_form_box"> 
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="d-grid d-md-flex">
                                                <button class="btn3-mark" type="button">Trash Selected </button>
                                                <button class="btn3-mark" type="button">Mark as Read</button>
                                                <button class="btn3-mark" type="button">Mark as Unread</button>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="nav-tabs-messages"> 
                                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="all_messages_tab" data-bs-toggle="pill" data-bs-target="#all_messages" type="button" role="tab" aria-controls="all_messages" aria-selected="true">All</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="unread_messages_tab" data-bs-toggle="pill" data-bs-target="#unread_messages" type="button" role="tab" aria-controls="unread_messages" aria-selected="false">Unread</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="unread_first_message_tab" data-bs-toggle="pill" data-bs-target="#unread_first_message" type="button" role="tab" aria-controls="unread_first" aria-selected="false">Unread First</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="trashed_message_tab" data-bs-toggle="pill" data-bs-target="#trashed_message" type="button" role="tab" aria-controls="unread_first" aria-selected="false">Unread First</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="all_messages" role="tabpanel" aria-labelledby="all_messages_tab" tabindex="0">
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
                                        <div class="col-md-4">
                                            <div class="d-grid d-md-flex">
                                                <button class="btn3-mark" type="button">Trash Selected </button>
                                                <button class="btn3-mark" type="button">Mark as Read</button>
                                                <button class="btn3-mark" type="button">Mark as Unread</button>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="nav-tabs-messages"> 
                                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="all_messages_tab2" data-bs-toggle="pill" data-bs-target="#all_messages2" type="button" role="tab" aria-controls="all_messages2" aria-selected="true">All</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="unread_messages_tab2" data-bs-toggle="pill" data-bs-target="#unread_messages2" type="button" role="tab" aria-controls="unread_messages2" aria-selected="false">Unread</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="unread_first_message_tab2" data-bs-toggle="pill" data-bs-target="#unread_first_message2" type="button" role="tab" aria-controls="unread_first2" aria-selected="false">Unread First</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="trashed_message_tab2" data-bs-toggle="pill" data-bs-target="#trashed_message2" type="button" role="tab" aria-controls="unread_first2" aria-selected="false">Unread First</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="all_messages2" role="tabpanel" aria-labelledby="all_messages_tab2" tabindex="0">
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
<?php echo $__env->make('layouts.agent_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/design/resources/views/agent/outstanding_task.blade.php ENDPATH**/ ?>