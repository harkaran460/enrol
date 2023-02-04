
<?php $__env->startSection('content'); ?>

    <div class="page-content h-100 p-15 mx-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills mb-3 res-nav-block" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Quick Commission Payout </button>
                        </li>
                        <!--<li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Full Commission Payout </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Outstanding Invoices </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-paid-tab" data-bs-toggle="pill" data-bs-target="#pills-paid" type="button" role="tab" aria-controls="pills-paid" aria-selected="false">Paid Invoices</button>
                            </li>-->
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex mb-2">
                                    <div class="pe-3"><span>Show results</span></div>
                                    <div>


                                        <form method="GET" action="/invoices/" id="agentApplication">
                                            <select class="form-select form-select-sm" name="qty"
                                                onchange="this.form.submit()">
                                                <option value="20">20</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>

                                <div><span>
                                        Showing Results <?php echo e(($invice_list->currentpage() - 1) * $invice_list->perpage() + 1); ?> to
                                        <?php echo e($invice_list->currentpage() * $invice_list->perpage()); ?>

                                        of <?php echo e($invice_list->total()); ?> entries
                                    </span></div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="col1">Sr.No</th>
                                            <th class="column2">App Id</th>
                                            <th class="column3">Student Id</th>
                                            <th class="column4">Amount</th>
                                            <th class="column5">Commission</th>
                                            <th class="column6">Tax</th>
                                            <th class="column7">Total Deduction</th>
                                            <th class="column7">Final Payable Amount </th>
                                            <th class="column7">Commission Type</th>
                                            <th class="column7">Tax Type</th>
                                            <th class="column7">Payment Id</th>
                                            <th class="column7">Payment Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($invice_list)): ?>
                                            <?php $count = 1 ?>
                                            <?php $__currentLoopData = $invice_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td align="center"><?php echo e($count); ?></td>
                                                    <td align="center"><?php echo e($list->appid); ?></td>
                                                    <td align="center"><?php echo e($list->email); ?></td>
                                                    <td align="center"><?php echo e($list->amount); ?></td>
                                                    <td align="center"><?php echo e($list->commission); ?></td>
                                                    <td align="center"><?php echo e($list->tax); ?></td>
                                                    <td align="center"><?php echo e($list->total_deduction); ?></td>
                                                    <td align="center"><?php echo e($list->final_payable_amt); ?></td>
                                                    <td align="center"><?php echo e($list->commission_type); ?></td>
                                                    <td align="center"><?php echo e($list->tax_type); ?></td>
                                                    <td align="center"><?php echo e($list->payment_id); ?></td>
                                                    <td align="center"><?php echo e($list->payment_date); ?></td>

                                                </tr>
                                                <?php $count++ ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="7" align="center">No Records</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php echo e($invice_list->links('pagination::bootstrap-4')); ?>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex mb-2">
                                    <div class="pe-3"><span>Show results</span></div>
                                    <div>
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected>25</option>
                                            <option value="1">50</option>
                                            <option value="2">100</option>
                                        </select>
                                    </div>
                                </div>
                                <div><span>Showing Results 0 to 0 of 0</span></div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="col1">Sr.No</th>
                                            <th class="column2">sid/aid</th>
                                            <th class="column3">student</th>
                                            <th class="column4">intake</th>
                                            <th class="column5">Commission</th>
                                            <th class="column6">Commission Release Date</th>
                                            <th class="column7">Invoice</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="7" align="center">No Records</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex mb-2">
                                    <div class="pe-3"><span>Show results</span></div>
                                    <div>
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected>25</option>
                                            <option value="1">50</option>
                                            <option value="2">100</option>
                                        </select>
                                    </div>
                                </div>
                                <div><span>Showing Results 0 to 0 of 0</span></div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="col1">Sr.No</th>
                                            <th class="column2">sid/aid</th>
                                            <th class="column3">student</th>
                                            <th class="column4">intake</th>
                                            <th class="column5">Invoice Type</th>
                                            <th class="column6">Generated Amount</th>
                                            <th class="column7">Due Date</th>
                                            <th class="column8">Invoice</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="8" align="center">No Records</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-paid" role="tabpanel" aria-labelledby="pills-paid-tab">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex mb-2">
                                    <div class="pe-3"><span>Show results</span></div>
                                    <div>
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected>25</option>
                                            <option value="1">50</option>
                                            <option value="2">100</option>
                                        </select>
                                    </div>
                                </div>
                                <div><span>Showing Results 0 to 0 of 0</span></div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="col1">Sr.No</th>
                                            <th class="column2">sid/aid</th>
                                            <th class="column3">student</th>
                                            <th class="column4">intake</th>
                                            <th class="column5">Invoice Type</th>
                                            <th class="column6">Generated Amount</th>
                                            <th class="column7">Due Date</th>
                                            <th class="column8">Invoice</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="8" align="center">No Records</td>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.agent_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/design/resources/views/agent/invoices.blade.php ENDPATH**/ ?>