
<?php $__env->startSection('content'); ?>
<div class="page-content h-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between">
                        <h1>Template</h1>
                        <a href="add-template.php"><button type="button" class="btn btn-primary py-1">Add Template</button></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th>#</th>
                            <th>TEMPLATE</th>
                            <th>CONTENT</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                        </tr>
                    </table> 
                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.agent_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/college/resources/views/agent/template.blade.php ENDPATH**/ ?>