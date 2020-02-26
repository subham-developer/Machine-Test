@extends('layouts.app')
@section('title', 'ssss')

@section('content')


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
         
           @foreach($products as  $k=>$product)
          <tr>
           <td>{{$k+1}}</td>
            <td>{{$product['name']}}</td>
            <td>{{$product['cat_name']}}</td>
            <td><span class="count_vlaue_class_{{$product['id']}}"</span>{{$product['count']}}</td>
            <td>
            <input type="hidden" class="_Token" value="{{ csrf_token() }}">
            @if($product['like'])
                 <font color="blue"><i id="{{$product['id']}}" data-attr="2" class="fas fa-thumbs-up like_product like_product_display_{{$product['id']}}"></i></font>
                 <i id="{{$product['id']}}" data-attr="1" class="fas fa-thumbs-up like_product like_product_hide_{{$product['id']}} hidden"></i>
            @else
                 <i id="{{$product['id']}}" data-attr="1" class="fas fa-thumbs-up like_product like_product_hide_{{$product['id']}}"></i>
                  <font color="blue"><i id="{{$product['id']}}" data-attr="2" class="fas fa-thumbs-up like_product like_product_display_{{$product['id']}}
                    hidden"></i></font>
            @endif
             </td>
             <td><a href="/product/{{$product['id']}}"><span class="glyphicon glyphicon-pencil">&#x270f;</span></td>
            <td><i class="fa fa-fw fa-trash deleteproduct" id="{{$product['id']}}" data-toggle="modal" data-target="#myModal"></i></td>
            </tr>
        @endforeach
          
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
     {{ $link }}
</div>
<!-- </div> -->
@stop

@section('script')
  <script>
  $('#example').DataTable();
  </script>
@stop