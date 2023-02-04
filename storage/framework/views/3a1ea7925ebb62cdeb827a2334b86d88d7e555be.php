<?php $__env->startComponent('mail::message'); ?>
# Hello Admin,

You have got a new note details are mention below.

<table class="table" border="1" width="100%">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">App Id</th>
        <th scope="col">Title</th>
        <th scope="col">Message</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo e($student_name); ?></td>
        <td><?php echo e($appid); ?></td>
        <td><?php echo e($title); ?></td>
        <td><?php echo e($notes); ?></td>
      </tr>
    </tbody>
  </table>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/enrolhere/public_html/design/resources/views/emails/student_note.blade.php ENDPATH**/ ?>