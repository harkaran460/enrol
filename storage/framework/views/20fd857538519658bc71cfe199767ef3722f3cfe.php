
<?php $__env->startSection('content'); ?>
<div class="page-content h-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div>
                    <h1>Conversation Reminders</h1>
                </div>
            </div>

            <div class="col-md-12">
                <div class="overflow-auto">
                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th>#</th>
                            <th>TRAINING TYPE</th>
                            <th>PREFER SCHEDULE(S)</th>
                            <th>SCHEDULED AT</th>
                            <th>PERFORM BY</th>
                            <th>ACTION</th>
                        </tr>
                    </table>
                </div>
                <table class="table border">
                    <td class="w-100 text-center">No Training List</td>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.agent_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/college/resources/views/agent/my_reminders.blade.php ENDPATH**/ ?>