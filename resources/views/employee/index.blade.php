@extends('employee.master')

@section('title')<title>Employee | List</title>@endsection


@section('content')
<div class="container">
    <div class="row p-5">
        <div class="col">
            <h1 class="text-center"> <a href="{{route('showEmployee')}}" class="btn btn-success"> Golden Harvest InfoTech Ltd.</a></h1>
            @if (Session::get('success'))
                <p class="text-center text-success">{{Session::get('success')}}</p>
            @endif
        </div>
    </div>

</div>
<div class="container">
    <a href="{{route('createEmployee')}}">Create New</a>
    <div class="row">
        <div class="col">
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Department</th>
                            <th>City</th>
                            {{-- <th>Action</th> --}}
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($employees))
                        @foreach ($employees as $employee)
                        <tr>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->gender}}</td>
                            <td>{{$employee->department}}</td>
                            <td>{{$employee->city}}</td>
                        <td><a href="{{route('editEmployee',$employee->slug)}}">Edit</a>|<a href="{{route('detailsEmployee',$employee->slug)}}">Details</a>|<a onclick="return confirm('Are you sure?')"  href="{{route('deleteEmployee',$employee->slug)}}">Delete</a></td>
                        </tr>
                            
                        @endforeach
                        @else 
                        <tr>
                            <td colspan="5" class="text-center text-primary">Empty Data !</td>
                        </tr>

                        @endif
                       
                      
                    </tbody>

                </table>
            </div>

        </div>

    </div>

</div>

    
@endsection