@extends('employee.master')
@section('title')
<title>Employee | Edit</title>
    
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
        Edit Employee
        <div class="col-md-12">
           
        <form action="{{route('updateEmployee')}}" method="post">
                    @csrf
                    <input type="hidden" name="slug" value="{{$employee->slug}}">
                    <div class="row form-group">
                        <div class="col-md-6 p-3">
                            <label for="name">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="{{$employee->name}}" class="form-control" placeholder="Enter Name" id="">
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="col-md-6 p-3">
                            <label for="gender">Gender  <span class="text-danger">*</span> </label><br>

                            <label for="male">Male <input type="radio" name="gender" value="Male"   id="">
                            </label>
                            
    
                            <label for="female">Female <input type="radio" name="gender" value="Female"   id="">
                            </label>
                            
    
                            <label for="others">Others <input type="radio" name="gender" value="Others" id="">
                            </label>
                            <br>
                            @if ($errors->has('gender'))
                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                            @endif
                            
                        </div>

                        <div class="col-md-6 p-3">
                            <label for="name">Department <span class="text-danger">*</span></label>
                            <select class="form-control" id="department" name="department">
                                <option value="0">Choose...</option>
                                <option value="Finance">Finance</option>
                                <option value="Accounts">Accounts</option>
                            </select>
                            @if ($errors->has('department'))
                            <span class="text-danger">{{ $errors->first('department') }}</span>
                            @endif
                        </div>

                        <div class="col-md-6 p-3">
                            <label for="name">City <span class="text-danger">*</span></label>
                            <select class="form-control" id="city"  name="city">
                                <option  value="0">Choose...</option>
                                <option value="New Delhi">New Delhi</option>
                                <option value="Chennai">Chennai</option>
                            </select>
                            @if ($errors->has('department'))
                            <span class="text-danger">{{ $errors->first('city') }}</span>
                            @endif
                        </div>

                        <div class="col-md-12 p-3">
                            <button class="btn btn-success" type="submit">Update</button>

                        </div>


                    </div>
                   
                    

                </form>
        </div>
    </div>
</div>
    
@endsection

@section('script')
<script>

$(document).ready(function(){
    console.log("{{$employee->department}}");
    console.log("{{$employee->city}}");
    $("#department").val("{{$employee->department}}");
     $("#city").val("{{$employee->city }}");
     $("input[name='gender'][value='{{$employee->gender}}']").prop('checked', true);
});
 

</script>  
@endsection