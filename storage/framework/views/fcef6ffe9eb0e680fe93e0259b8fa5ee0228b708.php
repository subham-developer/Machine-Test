<!doctype html>
<html>
    <head>
          <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
  <body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
      
             <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>    
             <?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>        
         
             <?php echo $__env->yieldContent('content'); ?>
             
             
             <!-- Jquery Core Js -->
    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
     </div>
     <?php echo $__env->yieldContent('script'); ?>
    </body>    
</html>    