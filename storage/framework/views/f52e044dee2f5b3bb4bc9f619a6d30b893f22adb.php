
<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-white p-4">
                        <?php if(!empty($student_details)){ ?>
                        <div class="css-1y75kwg css-1jlq0r60">
                            <div class="css-q6cz2y css-1jlq0r62">
                                <div class="css-1jlq0r65 css-gqqadv">

                                    <?php $firstcaracter = substr($student_details->first_name, 0, 1); ?>

                                    <div data-testid="student-profile-<?php echo e($student_details->id); ?>-initials-avatar"
                                        class="css-m8p8pp"><?php echo e($firstcaracter); ?></div>
                                </div>
                            </div>
                            <div class="css-1ca1ag7 css-1jlq0r61">
                                <div class="css-1yyj7dd css-1jlq0r63"><?php echo ucfirst($student_details->first_name);?> 
                                   <?php echo ucfirst($student_details->middle_name);?>
                                    <?php echo ucfirst($student_details->last_name);?></div>

                                <div>
                                    <span class="css-1ai5g3s css-1jlq0r64"><?php echo e($student_details->id); ?></span>
                                    <span class="css-1ai5g3s css-1jlq0r64">|</span>
                                    <span class="css-1ai5g3s css-1jlq0r64">
                                        <a href="mailto:<?php echo e($student_details->email); ?>"><?php echo e($student_details->email); ?></a>
                                    </span>
                                    <span class="css-1ai5g3s css-1jlq0r64">|</span>
                                    <span class="css-1ai5g3s css-1jlq0r64">
                                        <a href="tel:<?php echo e($student_details->phone_number); ?>">+91
                                            <?php echo e($student_details->phone_number); ?></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <div class="css-1sqs8up css-1uorugc3">
                            <a href="/agent-student-profile/<?php echo e($student_details->id); ?>">
                                <span class="css-1ksf4ma css-1uorugc4 ">Profile</span>
                            </a>
                            <a href="/search-and-apply/<?php echo e($student_details->id); ?>">
                                <span class="css-1ksf4ma css-1uorugc4">Search and Apply</span>
                            </a>
                            <a href="/student-profile-application/<?php echo e($student_details->id); ?>">
                                <span class="css-1ksf4ma css-1uorugc4 active-application">Applications<span
                                        class="css-c6v9dn css-1uorugc2">
                                        <?php if(!empty($totalcount)): ?>
                                            <?php echo e($totalcount); ?><?php else: ?><?php echo e('0'); ?>

                                        <?php endif; ?>
                                    </span></span>
                            </a>
                            <a href="/student-payment/<?php echo e($student_details->id); ?>">
                                <span class="css-1ksf4ma css-1uorugc4">Payments</span>
                            </a>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="css-120btev css-1piu9jy1">
                                    <div class="css-exg4v5 edqie6p13">
                                        <span aria-hidden="true" class="fa fa-shopping-cart"></span>
                                        <span>Unpaid Applications</span>

                                        <?php if(Session::has('success')): ?>
                                            <div class="alert alert-danger"><?php echo e(Session::get('success')); ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row overflow-hidden">
                            <div class="col-12">
                                <div class="myftable">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td><button class="btn border-0"><i
                                                            class="fa-solid fa-ellipsis-vertical"></i></button></td>
                                                <th scope="col">Status </th>
                                                <th scope="col">App ID</th>
                                                <th scope="col">School Name</th>
                                                <th scope="col">Program</th>
                                                <th scope="col">ESL Start Date</th>
                                                <th scope="col">Start Date</th>
                                                <th scope="col">Fees</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $total = 0; ?>
                                            <?php if(!empty($aplication_details)): ?>
                                                <?php $__currentLoopData = $aplication_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($details->payment_status == 1): ?>
                                                        <tr>
                                                            <td><button class="btn border-0"><i
                                                                        class="fa-solid fa-ellipsis-vertical"></i></button>
                                                            </td>
                                                            <td><a href=""><?php echo e($details->status_name); ?></a></td>
                                                            <td><a
                                                                    href="/student-application-review/<?php echo e($details->app_id); ?>"><?php echo e($details->app_id); ?></a>
                                                            </td>
                                                            <td><a
                                                                    href="/agent-college-details/<?php echo e($details->college_id); ?>"><?php echo e($details->program_college_name); ?></a>
                                                            </td>
                                                            <td><span><?php echo e($details->programs_name); ?></span></td>
                                                            <td>
                                                                <span>ESL</span>
                                                                <span>
                                                                    <select class="form-control" disabled>
                                                                        <option value="">N/A</option>
                                                                    </select>
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span>Academic</span>
                                                                <span data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title=""
                                                                    data-bs-original-title="Click to view courses ckecklist"
                                                                    aria-describedby="tooltip328" class="css-eogltt">
                                                                    <?php echo e($details->status); ?></span>
                                                                <span>
                                                                    <select class="form-select">
                                                                        <?php $intekdates = getIntekDate() ?>
                                                                        <?php $__currentLoopData = $intekdates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $intekdate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option
                                                                                value="<?php echo e($intekdate->earliest_intake_date); ?>"
                                                                                <?php echo e($intekdate->earliest_intake_date == "$details->earliest_intake_date" ? 'selected' : ''); ?>>
                                                                                <?php echo e(date('Y - M', strtotime($intekdate->earliest_intake_date))); ?>.
                                                                            </option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                </span>
                                                            </td>
                                                            <td><span>Application Fee </span></td>
                                                            <td><span> <?php echo e($details->application_fee_min); ?></span></td>
                                                            <td>
                                                                <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                    title="" data-bs-original-title="Application Note"
                                                                    class="application-note">
                                                                    <a href="#">
                                                                        <i class="fa-solid fa-note-sticky"></i>
                                                                    </a>
                                                                </span>
                                                            </td>
                                                            <td class="action">
                                                                <a href="/student-application-review/<?php echo e($details->app_id); ?>"
                                                                    class="edit"><i
                                                                        class="fa-solid fa-pen-to-square fs-4"></i></a>
                                                                <a href="" class="delete" data-bs-toggle="modal"
                                                                    data-bs-target="#user-delete"><i
                                                                        class="fa-solid fa-trash fs-4"></i></a>

                                                                <div class="modal fade" id="user-delete" tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body text-center">
                                                                                <h2>Are You Sure</h2>
                                                                            </div>
                                                                            <div
                                                                                class="modal-footer d-flex justify-content-between">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button type="button"
                                                                                    class="btn btn-danger"><a
                                                                                        href="/student-profile-application-delete/<?php echo e($details->id); ?>">Delete</a></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <?php
                                                            $total += $details->application_fee_min;
                                                        ?>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>

                                        </tbody>
                                        <tfoot>
                                            <tr class="">
                                                <td colspan="7">
                                                    <span class="float-end"> </span>
                                                </td>
                                                <td>
                                                    <span> Total </span>
                                                </td>
                                                <td>
                                                    <span> <?php echo e($total); ?> </span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-8">

                            </div>
                            <div class="col-md-4">
                                <div class="float-end">
                                    <a href="/search-and-apply/<?php echo e($student_details->id); ?>">
                                        <button type="button" class="btn btn-outline-primary">Find More Programs</button>
                                    </a>
                                    <!--<button type="button" class="btn btn-primary">Find More Programs</button>-->
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="css-1lgqrjk css-1piu9jy1">
                                    <div class="css-exg4v5 edqie6p13">
                                        <span aria-hidden="true" class="fa fa-shopping-cart"></span>
                                        <span>Paid Applications</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row overflow-hidden">
                            <div class="col-12">
                                <div class="myftable">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Status </th>
                                                <th scope="col">App ID</th>
                                                <th scope="col">School Name</th>
                                                <th scope="col">Program</th>
                                                <th scope="col">ESL Start Date</th>
                                                <th scope="col">Start Date</th>
                                                <th scope="col">Fees</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($aplication_details)): ?>
                                                <?php $__currentLoopData = $aplication_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($details->payment_status != 1): ?>
                                                        <tr>
                                                            <td><?php echo e($details->status_name); ?></td>
                                                            <td><a
                                                                    href="/student-application-review/<?php echo e($details->app_id); ?>"><?php echo e($details->app_id); ?></a>
                                                            </td>
                                                            <td><a
                                                                    href="/agent-college-details/<?php echo e($details->college_id); ?>"><?php echo e($details->program_college_name); ?></a>
                                                            </td>
                                                            <td><span><?php echo e($details->programs_name); ?></span></td>
                                                            <td>
                                                                <span>ESL</span>
                                                                <span> N/A </span>
                                                            </td>
                                                            <td>
                                                                <span> Academic </span>
                                                                <span>
                                                                    <?php echo e(date('Y - M', strtotime($details->earliest_intake_date))); ?></span>
                                                            </td>
                                                            <td><span>Application Fee </span>
                                                                <?php echo e($details->application_fee_min); ?></td>
                                                            <td><span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                    title=""
                                                                    data-bs-original-title="Application Note"
                                                                    class="application-note"> <a
                                                                        href="student_profile_review"><i
                                                                            class="fa-solid fa-note-sticky"></i></a>
                                                                </span></td>
                                                            <td class="action">
                                                                <a href="/student-application-review/<?php echo e($details->app_id); ?>"
                                                                    class="edit"><i
                                                                        class="fa-solid fa-pen-to-square fs-4"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
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
    <style>
        .overflow-hidden {
            overflow: scroll !important;
            width: 100%;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.agent_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/college/resources/views/agent/student_profile_application.blade.php ENDPATH**/ ?>