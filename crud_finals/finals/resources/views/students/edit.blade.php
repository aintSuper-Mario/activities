@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px; color: #f99b3c; background-color: #051e2d; border: 1px solid #f99b3c">
  <div class="card-header display-6 text-center" style="border-bottom: 1px solid #f99b3c; font-weight:bold">Edit Student</div>
  <div class="card-body">

  <a href="{{ url('/student') }}" class="btn" style="color: #f99b3c; border: 1px solid #f99b3c; margin-bottom: 15px">Cancel</a>
       
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label style="font-weight:bold">Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control" style="color: #f99b3c; background-color: transparent; border: 1px solid #f99b3c"></br>
        <label style="font-weight:bold">Address</label></br>
        <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control" style="color: #f99b3c; background-color: transparent; border: 1px solid #f99b3c"></br>
        <label style="font-weight:bold">Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control" style="color: #f99b3c; background-color: transparent; border: 1px solid #f99b3c"></br>
        <input type="submit" value="Update" class="btn btn-success" style="color: #f99b3c; background-color: transparent; border: 1px solid #f99b3c"></br>
    </form>
    
  </div>
</div>
  
@stop