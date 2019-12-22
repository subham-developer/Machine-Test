@extends('layouts.app')
@section('title', '')
<style>
#wrapper{
    -moz-box-shadow:0px 0px 3px #aaa;
    -webkit-box-shadow:0px 0px 3px #aaa;
    box-shadow:0px 0px 3px #aaa;
    -moz-border-radius:10px;
    -webkit-border-radius:10px;
    border-radius:10px;
    border:2px solid #fff;
    background-color:#f9f9f9;
    width:600px;
    overflow:hidden;
}
#steps{
    width:600px;
    overflow:hidden;
}
.step{
    float:left;
    width:600px;
}
#navigation{
    height:45px;
    background-color:#e9e9e9;
    border-top:1px solid #fff;
    -moz-border-radius:0px 0px 10px 10px;
    -webkit-border-bottom-left-radius:10px;
    -webkit-border-bottom-right-radius:10px;
    border-bottom-left-radius:10px;
    border-bottom-right-radius:10px;
}
#navigation ul{
    list-style:none;
  float:left;
  margin-left:22px;
}
#navigation ul li{
  float:left;
    border-right:1px solid #ccc;
    border-left:1px solid #ccc;
    position:relative;
  margin:0px 2px;
}
#navigation ul li a{
    display:block;
    height:45px;
    background-color:#444;
    color:#777;
    outline:none;
    font-weight:bold;
    text-decoration:none;
    line-height:45px;
    padding:0px 20px;
    border-right:1px solid #fff;
    border-left:1px solid #fff;
    background:#f0f0f0;
    background:
        -webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(0.09, rgb(240,240,240)),
        color-stop(0.55, rgb(227,227,227)),
        color-stop(0.78, rgb(240,240,240))
        );
    background:
        -moz-linear-gradient(
        center bottom,
        rgb(240,240,240) 9%,
        rgb(227,227,227) 55%,
        rgb(240,240,240) 78%
        )
}
#navigation ul li a:hover,
#navigation ul li.selected a{
    background:#d8d8d8;
    color:#666;
    text-shadow:1px 1px 1px #fff;
}
span.checked{
    background:transparent url(../images/checked.png) no-repeat top left;
    position:absolute;
    top:0px;
    left:1px;
    width:20px;
    height:20px;
}
span.error{
    background:transparent url(../images/error.png) no-repeat top left;
    position:absolute;
    top:0px;
    left:1px;
    width:20px;
    height:20px;
}
#steps form fieldset{
    border:none;
    padding-bottom:20px;
}
#steps form legend{
    text-align:left;
    background-color:#f0f0f0;
    color:#666;
    font-size:24px;
    text-shadow:1px 1px 1px #fff;
    font-weight:bold;
    float:left;
    width:590px;
    padding:5px 0px 5px 10px;
    margin:10px 0px;
    border-bottom:1px solid #fff;
    border-top:1px solid #d9d9d9;
}
#steps form p{
    float:left;
    clear:both;
    margin:5px 0px;
    background-color:#f4f4f4;
    border:1px solid #fff;
    width:400px;
    padding:10px;
    margin-left:100px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-box-shadow:0px 0px 3px #aaa;
    -webkit-box-shadow:0px 0px 3px #aaa;
    box-shadow:0px 0px 3px #aaa;
}
#steps form p label{
    width:160px;
    float:left;
    text-align:right;
    margin-right:15px;
    line-height:26px;
    color:#666;
    text-shadow:1px 1px 1px #fff;
    font-weight:bold;
}
#steps form input:not([type=radio]),
#steps form textarea,
#steps form select{
    background: #ffffff;
    border: 1px solid #ddd;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    outline: none;
    padding: 5px;
    width: 200px;
    float:left;
}
#steps form input:focus{
    -moz-box-shadow:0px 0px 3px #aaa;
    -webkit-box-shadow:0px 0px 3px #aaa;
    box-shadow:0px 0px 3px #aaa;
    background-color:#FFFEEF;
}
#steps form p.submit{
    background:none;
    border:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
    box-shadow:none;
}
#steps form button {
  border:none;
  outline:none;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    color: #ffffff;
    display: block;
    cursor:pointer;
    margin: 0px auto;
    clear:both;
    padding: 7px 25px;
    text-shadow: 0 1px 1px #777;
    font-weight:bold;
    font-family:"Century Gothic", Helvetica, sans-serif;
    font-size:22px;
    -moz-box-shadow:0px 0px 3px #aaa;
    -webkit-box-shadow:0px 0px 3px #aaa;
    box-shadow:0px 0px 3px #aaa;
    background:#4797ED;
}
#steps form button:hover {
    background:#d8d8d8;
    color:#666;
    text-shadow:1px 1px 1px #fff;
}
</style>
@section('content')



<!-- Full Width Column -->
  <section class="content">
      <div class="box box-default">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-md-6">
            
                <label>Minimal</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option value="1">1111</option>
                  <option value="2">2222</option>
                  <option value="3">3333</option>
                </select>
            
              <!-- /.form-group -->
            </div>

           </div> 
<h1>Fancy Sliding Form with jQuery</h1>
<div id="account-register" class="container">
 

  <div class="row">
    

    <div id="content" class="">
      <h1></h1>
     
      <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
     
          <div id="wrapper">

                <div id="steps" style="width: 3000px; margin-left: 0px;">
                    <form id="formElem" name="formElem" action="" method="post">
                        <fieldset class="step fieldset_div_hide personal_datails_fieldset-1">
                            <legend class="ml20">Account</legend>
                          
                        <div class="form-group required">
                       <label class="col-sm-2 control-label seller_name_error" for="input-firstname">Seller Name</label>
                        <div class="col-sm-10">
              <input type="text" name="firstname" value="" placeholder="Seller Name" id="input-firstname" class="form-control seller_name_input" />
             </div>
                              </div>
           
            
          
                        </fieldset>
                        <fieldset class="step personal_datails_fieldset-2 hidden">
                            <legend class="ml20">Contact Details - Dispatch Center / Warehouse</legend>
                             <div class="form-group">
                       <label class="col-sm-2 control-label" for="input-firstname">Warehouse Id</label>
                        <div class="col-sm-10">
                         <input type="text" name="additional_ware_house_id" value="" placeholder="Warehouse Id" id="input-firstname" class="form-control" />
                        
                      </div>
               
                        </fieldset>


                        <fieldset class="step personal_datails_fieldset-3 hidden">
                            <legend class="ml20">Bank Details (Cancelled cheque & Bank Letter required)</legend>
                            
                             <div class="form-group">
                       <label class="col-sm-2 control-label" for="input-firstname">Bank Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="bank_name" value="" placeholder="Bank Name" id="input-firstname" class="form-control" />
                          </div>
                              </div>

         


                        </fieldset>

                        <fieldset class="step personal_datails_fieldset-4 hidden">
                            <legend class="ml20">Company particulars (as applicable)</legend>
                             <div class="form-group">
                       <label class="col-sm-2 control-label" for="input-firstname">Permanent Account Number (PAN)</label>
                        <div class="col-sm-10">
              <input type="text" name="permanent_account_number" value="" placeholder="Permanent Account Number" id="input-firstname" class="form-control" />
              </div>
                              </div>
                    

                        </fieldset>
            <fieldset class="step personal_datails_fieldset-5 hidden">
                            <legend class="ml20">Confirm</legend>
              <p>
                Everything in the form was correctly filled 
                if all the steps have a green checkmark icon.
                A red checkmark icon indicates that some field 
                is missing or filled out with invalid data. In this
                last step the user can confirm the submission of
                the form.
              </p>
                          
                        </fieldset>
                       <button type="submit" class="hidden submit_button_click" value="Submit">Submit</button>
                    </form>
                </div>
                <div id="navigation" class="pull-right" style="">
                    <ul>
                       <li class="selected">
                     
                      
                          <a href="#"  class="registration-tab_hide btn btn-primary" id="registration-tab_1" >Next</a><span class="error"></span>
                        </li>
                        <li class="">
                            <!-- <a href="#">Personal Details</a><span class="error"></span> -->
                             <a href="#"  class="registration-tab_hide hidden btn btn-primary" id="registration-tab-previous_2" data-attr="previous">Previous</a>
                           </li>
                            <li class="">
                            <a href="#" class="registration-tab_hide hidden btn btn-primary" id="registration-tab_2">Next</a><span class="error"></span>
                        </li>
                        <li class="">
                            <!-- <a href="#">Payment</a><span class="error"></span> -->
                            <a href="#"  class="registration-tab_hide hidden btn btn-primary" id="registration-tab-previous_3" data-attr="previous">Previous</a>
                          </li>
                       <li class="">
                             <a href="#" class="registration-tab_hide hidden btn btn-primary" id="registration-tab_3">Next</a><span class="error"></span>
                        </li>
                        <li class="">
                            <!-- <a href="#">Settings</a><span class="error"></span> -->
                             <a href="#"  class="registration-tab_hide hidden btn btn-primary" id="registration-tab-previous_4" data-attr="previous">Previous</a>
                           </li>
                           <li class="">
                            <a href="#" class="registration-tab_hide hidden btn btn-primary" id="registration-tab_4">Submit</a><span class="error"></span>
                        </li>
                        <li class="">
                            <!-- <a href="#">Confirm</a>
                             <a href="#"  class="registration-tab_hide hidden btn btn-primary" id="registration-tab-previous_5" data-attr="previous">Previous</a> -->
                           </li>
                                <li class="">
                             <!-- <a href="#" class="registration-tab_hide hidden" id="registration-tab_5">Next</a> -->
                        </li>
                    </ul>
                </div>
            </div>
 
</div>
           </div>
    </section>
    

@stop

@section('script')
<script>
 $(function() {
  /*
  number of fieldsets
  */
  var fieldsetCount = $('#formElem').children().length;

  /*
  current position of fieldset / navigation link
  */
  var current   = 1;

  /*
  sum and save the widths of each one of the fieldsets
  set the final sum as the total width of the steps element
  */
  var stepsWidth  = 0;
    var widths    = new Array();
  $('#steps .step').each(function(i){
        var $step     = $(this);
    widths[i]     = stepsWidth;
        stepsWidth    += $step.width();
    });
  $('#steps').width(stepsWidth);

  /*
  to avoid problems in IE, focus the first input of the form
  */
  $('#formElem').children(':first').find(':input:first').focus(); 

  /*
  show the navigation bar
  */
  $('#navigation').show();
 
  /*
  when clicking on a navigation link
  the form slides to the corresponding fieldset
  */
    $('#navigation a').bind('click',function(e){
    var length =10;
    var $this = $(this);
    var prev  = current;
    $this.closest('ul').find('li').removeClass('selected');
        $this.parent().addClass('selected');
    /*
    we store the position of the link
    in the current variable
    */
    // current = $this.parent().index() + 1;

    var strId = $(this).attr('id');
    var dataAttr = $('#'+strId).attr('data-attr');

   $(window).scrollTop(0);
  
    // if(strId == 'registration-tab_1' || strId == 'registration-tab-previous_3'){
    //   $('#navigation').css('margin-top','-300px');
    //   $('#wrapper').css('height','900px');
    // }else if(strId == 'registration-tab_2' || strId == 'registration-tab-previous_4'){
    //     $('#navigation').css('margin-top','-610px');
    //      $('#wrapper').css('height','568px');
    // }else{
    //  $('#navigation').css('margin-top','');
    //   $('#wrapper').css('height','');
    // }
    if(strId == 'registration-tab_4'){
    $('.submit_button_click').click();
    return false;
 }
    if(dataAttr != undefined && dataAttr == 'previous'){
        var res = strId.split("_");
       current = Number(res[1])-1;
       var sliderIncrement = Number(current)+1;;
       $('.personal_datails_fieldset-'+current).removeClass('hidden');
             for (i = res[1]; i < length; i++) {
      
          $('.personal_datails_fieldset-'+sliderIncrement).addClass('hidden');
          sliderIncrement = Number(sliderIncrement)+1;
        }
       var newID = 'registration-tab'+'_'+current;
       var previousId = res[0]+'_'+current;
        $('.registration-tab_hide').addClass('hidden');
       $('#'+newID).removeClass('hidden');
       $('#'+previousId).removeClass('hidden');
     }else{
    
       var res = strId.split("_");
       
     
       current = Number(res[1])+1;
       var sliderIncrement = Number(current)+1;;

         $('.personal_datails_fieldset-'+current).removeClass('hidden');
       for (i = res[1]; i < length; i++) {
      
          $('.personal_datails_fieldset-'+sliderIncrement).addClass('hidden');
          sliderIncrement = Number(sliderIncrement)+1;
        }
       var newID = res[0]+'_'+current;
       var previousId = res[0]+'-previous'+'_'+current;
        $('.registration-tab_hide').addClass('hidden');
       $('#'+newID).removeClass('hidden');
       $('#'+previousId).removeClass('hidden');
     }
    // var newId = res[0]+'_'current;
    // alert(newId);
     // current += parseInt(res[1], 1);
    
    /*
    animate / slide to the next or to the corresponding
    fieldset. The order of the links in the navigation
    is the order of the fieldsets.
    Also, after sliding, we trigger the focus on the first
    input element of the new fieldset
    If we clicked on the last link (confirmation), then we validate
    all the fieldsets, otherwise we validate the previous one
    before the form slided
    */
        $('#steps').stop().animate({
            marginLeft: '-' + widths[current-1] + 'px'
        },500,function(){
      if(current == fieldsetCount)
        validateSteps();
      else
        validateStep(prev);
      $('#formElem').children(':nth-child('+ parseInt(current) +')').find(':input:first').focus();
    });
        e.preventDefault();
    });

  /*
  clicking on the tab (on the last input of each fieldset), makes the form
  slide to the next step
  */
  $('#formElem > fieldset').each(function(){
    var $fieldset = $(this);
    $fieldset.children(':last').find(':input').keydown(function(e){
      if (e.which == 9){
        $('#navigation li:nth-child(' + (parseInt(current)+1) + ') a').click();
        /* force the blur for validation */
        $(this).blur();
        e.preventDefault();
      }
    });
  });

  /*
  validates errors on all the fieldsets
  records if the form has errors in $('#formElem').data()
  */
  function validateSteps(){
    var FormErrors = false;
    for(var i = 1; i < fieldsetCount; ++i){
      var error = validateStep(i);
      if(error == -1)
        FormErrors = true;
    }
    $('#formElem').data('errors',FormErrors);
  }

  /*
  validates one fieldset
  and returns -1 if errors found, or 1 if not
  */
  function validateStep(step){
    if(step == fieldsetCount) return;

    var error = 1;
    var hasError = false;
    $('#formElem').children(':nth-child('+ parseInt(step) +')').find(':input:not(button)').each(function(){
      var $this     = $(this);
      var valueLength = jQuery.trim($this.val()).length;

      if(valueLength == ''){
        hasError = true;
        $this.css('background-color','#FFEDEF');
      }
      else
        $this.css('background-color','#FFFFFF');
    });
    var $link = $('#navigation li:nth-child(' + parseInt(step) + ') a');
    $link.parent().find('.error,.checked').remove();

    var valclass = 'checked';
    if(hasError){
      error = -1;
      valclass = 'error';
    }
    $('<span class="'+valclass+'"></span>').insertAfter($link);

    return error;
  }

  /*
  if there are errors don't allow the user to submit
  */
  $('#registerButton').bind('click',function(){
    if($('#formElem').data('errors')){
      alert('Please correct the errors in the Form');
      return false;
    }
  });
});
   $('.select2').select2();
</script>
@stop