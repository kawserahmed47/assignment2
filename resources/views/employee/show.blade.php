@extends('employee.master')
@section('title')
<title>Employee | Details</title>
    
@endsection

@section('content')
<div class="container">
    <div class="row p-5">
        <div class="col">
        <h1 class="text-center"> <a href="{{route('showEmployee')}}" class="btn btn-success"> Golden Harvest InfoTech Ltd.</a></h1>
        </div>
    </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-md-3">


        </div>
        <div class="col-md-6">
        <img src="{{asset('public/avatar.png')}}" alt="Employee Img" width="140" height="140" class="img-rounded">
            <h3>{{$employee->name}}</h3>
            <p>Designation</p>

        </div>

        <div class="col-md-3">


        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <h4>About</h4>
            <table>
                
                    <tr>
                        <th>Name:</th>
                        <td>{{$employee->name}}</td>

                    </tr>
                    <tr>
                        <th>Gender:</th>
                        <td>{{$employee->gender}}</td>

                    </tr>
                    <tr>
                        <th>Department:</th>
                        <td>{{$employee->department}}</td>

                    </tr>

                    <tr>
                        <th>City:</th>
                        <td>{{$employee->city}}</td>

                    </tr>
                    <tr>
                        <th>Mobile:</th>
                        <td>...</td>

                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>...</td>

                    </tr>
             

            </table>

        </div>

    </div>

</div>
    
@endsection