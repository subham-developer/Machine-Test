@extends('layouts.app')
@section('title', 'ssss')

@section('content')


<div class="container">
  <div class="row">
    @if(session()->has('message'))
    
       <font color="green"> {{ session()->get('message') }}</font>
   
@endif
    <div class="col-md-12 col-sm-12 col-xl-12">
      <div class="col-md-4">&nbsp;</div>
      <div class="col-md-4 col-sm-4 col-xl-4 leftdiv1000">
      <a href="/productView"><button type="button" class="btn btn-primary" style="width: 108px;
">List</button></a>
    </div>
     <div class="col-md-12">&nbsp;</div>
    </div>
  </div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="col-md-12">
  <form method="POST" action="/product/upsert">
    @csrf
      <table>
    <tr>
      <td>Select Category:</td>
      <td>
        <select id="example" name="category_id">
           <option value=" ">--select value--</option>
           @foreach($category as $k=>$category)
        <option value="{{$category->id}}" 
          <?php if(!empty($data[0]['category_id']) && $data[0]['category_id'] == $category->id) echo 'selected';?>>{{$category->name}}</option>
       
        @endforeach
      </select>
    </td>
      <td>Product Name</td>
        <td><input type="text" class="form-control" value="<?php if(isset($data[0]['name'])){echo $data[0]['name'];} ?>" name="name"><td>
          <td>Price</td>
        <td>
        <input type="text" value="<?php if(isset($data[0]['price'])){echo $data[0]['price'];} ?>" name="price"></td>
      <input type="hidden" value="1" name="status"></td>
      <input type="hidden" value="<?php if(isset($data[0]['id'])){echo $data[0]['id'];} ?>" name="id"></td>
      <td> <button type="submit" class="btn btn-primary">Submit</button></td>
     
    </tr>
  </table>

</form>

</div>
</div>
<!-- </div> -->
@stop

@section('script')
  <script>
  $('#example').select2();


  </script>
@stop