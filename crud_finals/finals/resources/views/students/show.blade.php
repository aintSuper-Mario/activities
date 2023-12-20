@extends('students.layout')
@section('content')
  
<div class="card" style="margin:40px; color: #f99b3c; background-color: #051e2d; border: 1px solid #f99b3c">
  <div class="card-header display-6 text-center" style="border-bottom: 1px solid #f99b3c; font-weight: bold">Students View</div>
  <div class="card-body">
    <div class="display-6" style="border-left: 3px solid #f99b3c; padding-left: 5px">Student Information:</div>
        <div class="card-body">
        <h6 class="card-title" style="border-bottom: 1px solid #f99b3c; padding-bottom: 10px; width: 200px">Name : {{ $students->name }}</h6>
        <br>
        <h6 class="card-text" style="border-bottom: 1px solid #f99b3c; padding-bottom: 10px; width: 250px">Address : {{ $students->address }}</h6>
        <br>
        <h6 class="card-text" style="border-bottom: 1px solid #f99b3c; padding-bottom: 10px; width: 200px">Mobile : {{ $students->mobile }}</h6>
  </div>

  <a href="{{ url('/student') }}" class="btn" style="color: #f99b3c; border: 1px solid #f99b3c">Back</a>
    </hr>
  </div>
</div>