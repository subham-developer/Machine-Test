 <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2-pre
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo e(asset('adminlte/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo e(asset('adminlte/plugins/chart.js/Chart.min.js')); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo e(asset('adminlte/plugins/sparklines/sparkline.js')); ?>"></script>
<!-- JQVMap -->
<script src="<?php echo e(asset('adminlte/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('adminlte/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo e(asset('adminlte/plugins/moment/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
<!-- Summernote -->
<script src="<?php echo e(asset('adminlte/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('adminlte/dist/js/adminlte.js')); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('adminlte/dist/js/pages/dashboard.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('adminlte/dist/js/demo.js')); ?>"></script>
<script src="https://adminlte.io/themes/AdminLTE/bower_components/select2/dist/js/select2.full.min.js"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>

 $("body").on("click",".deletecategory",function(){
  $('.delete_id').val(this.id);
  $('.action_delete_id').val('delete_categrory');

});
  $("body").on("click", ".deleteproduct",function(){
  
  $('.delete_id').val(this.id);
});
 
  $('body').on('click', '.popup_delete', function() {
  var delete_id = $('.delete_id').val();
  var action_delete_id = $('.action_delete_id').val();
  var _token = $('._Token').val();
  if(action_delete_id == 'delete_categrory'){
    var urlData = '/deleteCategrory';
}else{
  var urlData = '/deleteProduct'
}
  var request = $.ajax({
  url: urlData,
  type: "POST",
  data: {id : delete_id,_token : _token},
  dataType: "json",
  success: function(result){
     if(result ==1){
      $('.pop_up_msg').html('<font color="green">deleted successfully</font>');
     }else{
      $('.pop_up_msg').html('<font color="red">something went wrong</font>');
     }
     setTimeout(function(){ window.location.reload(); }, 3000);
    }});
});

 $('body').on('click', '.like_product', function() {
  var data_attr = $(this).attr("data-attr");
  var id = $(this).attr("id");
  var _token = $('._Token').val();
  var request = $.ajax({
  url: "/likeProduct",
  type: "POST",
  data: {id : id,_token : _token,data_attr:data_attr},
  dataType: "json",
  success: function(result){
     if(result ==1){
      if(data_attr == 2){
          $('.like_product_hide_'+id).removeClass('hidden');
           $('.like_product_display_'+id).addClass('hidden');
           $('.count_vlaue_class_'+id).html(parseInt($('.count_vlaue_class_'+id).text())-1);
        }else{
         $('.count_vlaue_class_'+id).html(parseInt($('.count_vlaue_class_'+id).text())+1);
          $('.like_product_display_'+id).removeClass('hidden');
           $('.like_product_hide_'+id).addClass('hidden');
        }
     }
    
    }});
});

</script>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          
        </div>
        <div class="modal-body">
          <span class="pop_up_msg"></span>
          <p>Are you sure you want to delete???</p>
        </div>
        <div class="modal-footer">
          <input type="hidden" class="delete_id" value="">
          <input type="hidden" class="action_delete_id" value="">
          <button type="button" class="btn btn-danger popup_delete">Delete</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>