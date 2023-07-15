<!--@include('layouts.master')-->
<!--@include('layouts.bootstraplayout')
  

<div class="container" style="margin-top:90px">
@if(session('status'))
<h6 class="alert alert-success">{{session('status')}}</h6>
@endif
        <div class="panel panel-default">
            <div class="panel panel-info">
                <div class="panel-heading">
                  
                </div>
                <div class="panel-body">
                         
  <form class="form-horizontal" action="{{url('update-profile'.$employee1->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="empid">Employee ID :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="empid" placeholder="Enter Employee ID" name="empid" value="{{employee1->id}}" />
        <span class="text-danger">
          @error('empid')
          {{$message}}
          @enderror
        </span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="empname">Employee Name</label>
      <div class="col-sm-10">          
        
      <input type="text" class="form-control" id="empname" placeholder="Enter Employee Name" name="empname" value="{{old('empname')}}" />
      <span class="text-danger">
          @error('empname')
          {{$message}}
          @enderror
        </span>
    </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="designation">Employee Designation</label>
      <div class="col-sm-10">          
        
      <input type="text" class="form-control" id="designation" placeholder="Enter Employee Designation" name="designation" value="{{old('designation')}}" />
      <span class="text-danger">
          @error('designation')
          {{$message}}
          @enderror
        </span>
    </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="salary">Employee Salary</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="salary" placeholder="Enter Employee Salary" name="salary" value="{{old('salary')}}" />
        <span class="text-danger">
          @error('salary')
          {{$message}}
          @enderror
        </span>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="salary">Employee Image</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" id="profile_image"  name="profile_image" value="{{old('profile_image')}}" />
        <span class="text-danger">
          @error('profile_image')
          {{$message}}
          @enderror
        </span>
      </div>
    </div>
 
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>

                    </div>

                </div>
 
</div>
-->
<!--</body>
</html>-->
