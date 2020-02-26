@extends('layouts.app')
@section('title', 'ssss')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xl-12">
      <div class="col-md-4">&nbsp;</div>
     
      <div class="col-md-2 col-sm-4 col-xl-4" style="left: 1000px;top: -37px;">
      <a href="/services"><button type="button" class="btn btn-primary">Add services</button></a>
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
           @foreach($data as $k=>$data)
          <tr>
            <td>{{$k+1}}</td>
            <td>{{$data->name}}</td>
             <input type="hidden" class="_Token" value="{{ csrf_token() }}">
            <td><a href="/services/{{$data->id}}"><span class="glyphicon glyphicon-pencil">&#x270f;</span></td>
            <td><i class="fa fa-fw fa-trash deleteservices" id="{{$data->id}}" data-toggle="modal" data-target="#myModal"></i></td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
               <th>#</th>
                <th>Name</th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div>
<!-- </div> -->
@stop

@section('script')
  <script>
  $('#example').DataTable();
  </script>
@stop