<?php $__env->startSection('title', 'ssss'); ?>

<?php $__env->startSection('content'); ?>


<div class="container">
  <div class="row">
    <?php if(session()->has('message')): ?>
    
       <font color="green"> <?php echo e(session()->get('message')); ?></font>
   
<?php endif; ?>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
    <div class="col-md-12 col-sm-12 col-xl-12">
      <div class="col-md-4">&nbsp;</div>
      <div class="col-md-4 col-sm-4 col-xl-4 leftdiv1000">
      <a href="/categoryView"><button type="button" class="btn btn-primary" style="width: 108px;
">List</button></a>
    </div>
     <div class="col-md-12">&nbsp;</div>
    </div>
  </div>

<div class="col-md-12">
  <form method="POST" action="/category/upsert">
    <?php echo csrf_field(); ?>
      <table>
    <tr>
      <td class="width30">Category Name:</td>
      <td class="width30"><input type="text" class="form-control" value="<?php if(isset($data[0]['name'])){echo $data[0]['name'];} ?>" name="name">
<input type="hidden" value="<?php if(isset($data[0]['id'])){echo $data[0]['id'];} ?>" name="id"></td>
<input type="hidden" value="1" name="status"></td>
      <td class="width30"> <button type="submit" class="btn btn-primary">Submit</button></td>
     
    </tr>
  </table>

</form>

</div>
</div>
<!-- </div> -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
  <script>
  $('#example').DataTable();


  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>