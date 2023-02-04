
<?php $__env->startSection('content'); ?>
<div class="page-content h-100">
        <div class="container-fluid">
            <div class="row">
                <?php if(Session::has('Success')): ?>
                <div class="alert alert-info"><?php echo e(Session::get('Success')); ?></div>
            <?php endif; ?>

            <?php if(Session::has('Failed')): ?>
            <div class="alert alert-danger"><?php echo e(Session::get('Failed')); ?></div>
        <?php endif; ?>
                <div class="col-md-12">
                    <div class="d-flex justify-content-between mb-3">
                        <h1>Sub Agents</h1>
                        <a href="add-sub-agent"><button type="button" class="btn btn-primary py-1">Add Sub Agent</button></a>
                    </div>
                </div>
                <div class="col-md-12">
                   <?php if($sub_agent_list): ?>
                    <div class="overflow-auto">
                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th>#</th>
                            <th>SUB AGENT</th>
                            <th>MOBILE</th>
                            <th>EMAIL</th>
                            <th>COUNTRY | STATE | CITY</th>
                            <th>CONTACT PERSON</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                        </tr>
                        <?php $count =1; ?>
                        <?php $__currentLoopData = $sub_agent_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agent_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
                        <tr class="text-center">
                            <td><?php echo e($count); ?></td>
                            <td><?php echo e($agent_list->name); ?></td>
                            <td><?php echo e($agent_list->mobile); ?></td>
                            <td><?php echo e($agent_list->email); ?></td>
                            <td><?php echo e($agent_list->country); ?> | <?php echo e($agent_list->state); ?> | <?php echo e($agent_list->city); ?></td>
                            <td><?php echo e($agent_list->contact_person); ?></td>
                            <td><a href="change-sub-agent-status/<?php echo e($agent_list->id); ?>"> <?php if($agent_list->status ==1){ echo "<span>Active</span>";}else{echo "<span>Deactive</span>";}?></a></td>
                            <td class="action">
                                    <a href="sub_agent-update/<?php echo e($agent_list->id); ?>" class="edit"><i class="fa-solid fa-pen-to-square fs-4"></i></a>
                                    <a href="delete-sub-agent/<?php echo e($agent_list->id); ?>" class="delete" ><i
                                            class="fa-solid fa-trash fs-4"></i></a>
                                            
                                </td>
                        </tr>
                        <?php $count ++;?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </table>
                    </div>
                   <?php else: ?>
                    <table class="table border">
                        <td class="w-100 text-center">No Records</td>
                    </table>
                    <?php endif; ?> 
                </div>
                <div class="col-md-12 mt-3"> 
                    <div class="row">
                        <div class="col-md-6 d-flex"> 
                            <span class="pe-3">Show results</span>
                            <form method="GET" action="/sub_agent" id="agentqty"> 
                                <select class="form-select form-select-sm"  name="agentqty" onchange="this.form.submit()">
                                    <option value="" selected>Select</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="all">All</option>
                                </select>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="pagination-wrapper text-end">
                                <?php echo e($sub_agent_list->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
    <style>
        .flex.justify-between.flex-1.sm\:hidden {
            display: none;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.agent_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/college/resources/views/agent/sub_agent.blade.php ENDPATH**/ ?>