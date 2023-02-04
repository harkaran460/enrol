
<?php $__env->startSection('content'); ?>
    <div class="page-content h-100 manage-staff">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 overflow-scroll">
                    <?php if(session()->has('Success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session()->get('Success')); ?>

                    </div>
                <?php endif; ?>

                <?php if(session()->has('Failed')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session()->get('Failed')); ?>

                    </div>
                <?php endif; ?>
                
                    <div class="d-flex justify-content-between">
                        <h1>Teams</h1>
                        <a href="add-team"><button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i>&nbsp;
                                Add New Team</button></a>
                    </div>


                    <div class="accordion accordion-flush mb-3" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Role
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    ....
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(!empty($teams_list)): ?>
                    <table class="table table-bordered">

                        <tr>
                            <td class="col1">#</td>
                            <td class="col2">Name &amp; Email</td>
                            <td class="col3">Contact No.</td>
                            <td class="col5">Role</td>
                            <td class="col5">Status</td>
                            <td class="col7">Action</td>
                        </tr>

                        <tbody>
                            <?php $count =1;?>
                            <?php $__currentLoopData = $teams_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                            <tr>
                                <td class="col1"><?php echo e($count); ?></td>
                                <td class="col2">
                                    <div class="user-info d-flex">
                                        <div class="user-img">
                                            <img src="assetsAgent/img/dummy-profile-pic.jpg" alt="img"
                                                style="height: 40px; object-fit: cover; object-position: center center; border-radius: 50%">
                                        </div>
                                        <div class="user-bio ps-3">
                                            <div class="wrap">
                                                <div class="title-name">
                                                    <a href="#"><?php echo e($list->name); ?></a>
                                                </div>
                                            </div>
                                            <span class="title-name"><?php echo e($list->email); ?></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="col3">
                                    <span><?php echo e($list->country_code); ?><?php echo e($list->mobile); ?></span>
                                </td>
                               
                                <td class="col5">
                                    <span><?php if($list->is_admin ==1){ echo "Admin";}else{echo "Member";}?></span>
                                </td>
                                <td class="col6">
                                    <label class="switch-on-single">
                                        <a href="change-status/<?php echo e($list->id); ?>"> <?php if($list->status ==1){ echo "<span>Active</span>";}else{echo "<span>Deactive</span>";}?></a>
                                    </label>
                                </td>
                                <td class="col7 action">
                                    <a href="team-update/<?php echo e($list->id); ?>" class="edit"><i class="fa-solid fa-pen-to-square fs-4"></i></a>
                                    <a href="delete-team/<?php echo e($list->id); ?>" class="delete" ><i
                                            class="fa-solid fa-trash fs-4"></i></a>
                                            <!--<a href="delete-team/<?php echo e($list->id); ?>" class="delete" data-bs-toggle="modal" data-bs-target="#user-delete"><i
                                                class="fa-solid fa-trash fs-4"></i></a>-->

                                    <div class="modal fade" id="user-delete" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body text-center">
                                                    <h2>Are You Sure</h2>
                                                </div>
                                                <div class="modal-footer d-flex justify-content-between">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $count ++;?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                        </tbody>
                    </table>
                   
               
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <div class="d-flex">
                        <span class="pe-3">Show results</span>
                        <form method="GET" action="/team" id="teamqty">
                          
                            <select class="form-select form-select-sm"  name="qtyteam" onchange="this.form.submit()">
                            <option value="" selected>Select</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="all">All</option>
                        </select>
                        </form>
                    </div>
                    <div class="pagination-wrapper">
                        <?php echo e($teams_list->links()); ?>

                    </div>
                </div>
                <?php else: ?> 
                   <div class="col-12 text-center pt-3">
                    <span class="fw-bold">No Teams Please Create One.</span>
                </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
<style>
.flex.justify-between.flex-1.sm\:hidden {
display: none;
}
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.agent_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/college/resources/views/agent/team.blade.php ENDPATH**/ ?>