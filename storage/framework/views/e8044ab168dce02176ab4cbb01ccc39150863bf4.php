<?php $__env->startSection('content'); ?>
<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>


    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>
<div class="page-content h-100">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb-list">
					<li>PROGRAM</li>
					<li><i class="fa fa-angle-right"></i></li>
					<li><b> SELECTED PROGRAM </b></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h4 class="mb-sm-0 font-size-18">0 Shortlisted Courses</h4>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="application-apply-holder">
					<div class="icon-holder">
						<i class="fa fa-file-text"></i>
					</div>
					<p><b> No applied shortlisted yet</b></p>
					<p class="mb-md-3">You have not shortlisted any course yet.</p>
					<a class="btn btn-primary" href="">Shortlist Now</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.student_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/enrolhere/public_html/college/resources/views/student/shortlist_programs.blade.php ENDPATH**/ ?>