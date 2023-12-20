@extends('students.layout')
@section('content')
    <div class="container" >
        <div class="row" style="margin:20px;" >
            <div class="col-12">
                <div class="card" style="background-color: #051e2d; border: 1px solid #f99b3c">
                    <div class="card-header " style="color: #f99b3c; border-bottom: 1px solid #f99b3c">
                        <h2 class="text-center display-4" style="font-weight: bold">Student Management System</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/student/create') }}" class="btn btn-sm m-1" title="Add New Student" style="background-color: #051e2d; border: 1px solid #f99b3c; color: #f99b3c">
                            Add Student
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table" style="color: #f99b3c">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->mobile }}</td>
  
                                        <td>
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm" style="background-color: #051e2d; border: 1px solid #f99b3c; color: #f99b3c"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm" style="background-color: #051e2d; border: 1px solid #f99b3c; color: #f99b3c"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')" style="background-color: #051e2d; border: 1px solid #f99b3c; color: #f99b3c"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection