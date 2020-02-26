@extends('layouts.app')
@section('title', 'ssss')

@section('content')


<div class="container">
  <div class="row">
    @if(session()->has('message'))
    
       <font color="green"> {{ session()->get('message') }}</font>
   
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-md-12 col-sm-12 col-xl-12">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <a href="/servicesView"><button type="button" class="btn btn-primary" style="width: 108px;
    ">List</button></a>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
    </div>
  </div>



  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form method="POST" action="/services/upsert">
            @csrf
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Services Name:</div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><input type="text" class="form-control" value="<?php if(isset($data[0]['name'])){echo $data[0]['name'];} ?>" name="name">
              <input type="hidden" value="<?php if(isset($data[0]['id'])){echo $data[0]['id'];} ?>" name="id">
              <input type="hidden" value="1" name="status"></div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Description:</div>
                  <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                    <textarea class="form-control" style="width: 100%;height: 128px;" name="ser_description"><?php if(isset($data[0]['ser_description'])){echo $data[0]['ser_description'];} ?>
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
@stop

@section('script')
  <script>
  $('#example').DataTable();


  </script>
@stop