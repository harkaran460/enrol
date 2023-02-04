
<?php $__env->startSection('content'); ?>
<div class="page-content h-100 p-15 mx-1">
    <div class="container">
        <div class="row">
            <div class="col-12 knowledge-base"> 
                <div class="input-group d-flex justify-content-center pt-5">
                    <input type="text" class="search-query w-50 border py-2 border-secondary rounded" placeholder="Search the knowledge base" aria-labelledby="Search the knowledge base">
                    <button class="btn btn-primary" type="button">Search</button>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-between">
            <div class="col-md-5 mt-5">
                <div class="border border-secondary text-center p-4 rounded">
                    <a href="#">
                        <h3>Product Knowledge Base</h3>
                        <p class="text-primary">18 articles</p>
                    </a>
                </div>
            </div>
            <div class="col-md-5 mt-5 text-end">
                <div class="border border-secondary text-center p-4 rounded ">
                    <a href="#">
                        <h3>University/College Updates</h3>
                        <p class="text-primary">16 articles</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.agent_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/design/resources/views/agent/knowledge_base.blade.php ENDPATH**/ ?>