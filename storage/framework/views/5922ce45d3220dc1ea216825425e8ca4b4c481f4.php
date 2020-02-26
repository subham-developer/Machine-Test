<?php $__env->startSection('title', 'ssss'); ?>

<?php $__env->startSection('content'); ?>


<div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xl-12">
      <div class="col-md-4">&nbsp;</div>
      
      <div class="col-md-2 col-sm-4 col-xl-4" style="left: 880px;">
       <a href="/product"><button type="button" class="btn btn-primary">Add Product</button></a>
    </div>
    <div class="col-md-2 col-sm-4 col-xl-4" style="left: 1000px;top: -37px;">
       <a href="/categoryView"><button type="button" class="btn btn-primary">Category</button>
    </a>
    </div>
    </div>
  </div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
               <th>#</th>
                <th>Name</th>
                <th>Category</th>
                <th>likeCount</th>
                <th>likeProduct</th>
                <th></th>
                 <th></th>
            </tr>
        </thead>
        <tbody>
         
           <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
           <td><?php echo e($k+1); ?></td>
            <td><?php echo e($product['name']); ?></td>
            <td><?php echo e($product['cat_name']); ?></td>
            <td><span class="count_vlaue_class_<?php echo e($product['id']); ?>"</span><?php echo e($product['count']); ?></td>
            <td>
            <input type="hidden" class="_Token" value="<?php echo e(csrf_token()); ?>">
            <?php if($product['like']): ?>
                 <font color="blue"><i id="<?php echo e($product['id']); ?>" data-attr="2" class="fas fa-thumbs-up like_product like_product_display_<?php echo e($product['id']); ?>"></i></font>
                 <i id="<?php echo e($product['id']); ?>" data-attr="1" class="fas fa-thumbs-up like_product like_product_hide_<?php echo e($product['id']); ?> hidden"></i>
            <?php else: ?>
                 <i id="<?php echo e($product['id']); ?>" data-attr="1" class="fas fa-thumbs-up like_product like_product_hide_<?php echo e($product['id']); ?>"></i>
                  <font color="blue"><i id="<?php echo e($product['id']); ?>" data-attr="2" class="fas fa-thumbs-up like_product like_product_display_<?php echo e($product['id']); ?>

                    hidden"></i></font>
            <?php endif; ?>
             </td>
             <td><a href="/product/<?php echo e($product['id']); ?>"><span class="glyphicon glyphicon-pencil">&#x270f;</span></td>
            <td><i class="fa fa-fw fa-trash deleteproduct" id="<?php echo e($product['id']); ?>" data-toggle="modal" data-target="#myModal"></i></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </tbody>
        <tfoot>
            <tr>
               <th>#</th>
                <th>Name</th>
                <th>Category</th>
                <th>likeCount</th>
                <th>likeProduct</th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
     <?php echo e($link); ?>

</div>
<!-- </div> -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
  <script>
  $('#example').DataTable();
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>