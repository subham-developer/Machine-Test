<?php $__env->startSection('title', 'ssss'); ?>

<?php $__env->startSection('content'); ?>


<div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xl-12">
      <div class="col-md-4">&nbsp;</div>
      <div class="col-md-2 col-sm-4 col-xl-4" style="left: 880px;">
       <a href="/productView"><button type="button" class="btn btn-primary">Products</button></a>
    </div>
      <div class="col-md-2 col-sm-4 col-xl-4" style="left: 1000px;top: -37px;">
      <a href="/category"><button type="button" class="btn btn-primary">Add Category</button></a>
    </div>
      
    </div>
  </div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
              <th>#</th>
                <th>Name</th>
                <th></th>
                <th></th>
               </tr>
        </thead>
        <tbody>
           <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($k+1); ?></td>
            <td><?php echo e($data->name); ?></td>
             <input type="hidden" class="_Token" value="<?php echo e(csrf_token()); ?>">
            <td><a href="/category/<?php echo e($data->id); ?>"><span class="glyphicon glyphicon-pencil">&#x270f;</span></td>
            <td><i class="fa fa-fw fa-trash deletecategory" id="<?php echo e($data->id); ?>" data-toggle="modal" data-target="#myModal"></i></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
            <tr>
               <th>Sr no.</th>
                <th>Name</th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div>
<!-- </div> -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
  <script>
  $('#example').DataTable();
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>