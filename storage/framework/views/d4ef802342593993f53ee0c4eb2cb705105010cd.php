
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
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <a href="/paymentView"><button type="button" class="btn btn-primary" style="width: 108px;
    ">List</button></a>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
    </div>
  </div>



  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form method="POST" action="/payment/upsert">
            <?php echo csrf_field(); ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Payment Mode Name:</div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><input type="text" class="form-control" value="<?php if(isset($data[0]['name'])){echo $data[0]['name'];} ?>" name="name">
              <input type="hidden" value="<?php if(isset($data[0]['id'])){echo $data[0]['id'];} ?>" name="id">
              <input type="hidden" value="1" name="status"></div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Description:</div>
                  <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                    <textarea class="form-control" style="width: 100%;height: 128px;" name="pay_description"><?php if(isset($data[0]['pay_description'])){echo $data[0]['pay_description'];} ?>
                    </textarea>
                  </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <center><button type="submit" class="btn btn-primary">Submit</button></center></div>
          </form>
    </div>
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