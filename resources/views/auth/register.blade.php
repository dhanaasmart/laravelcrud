<!--@if($errors->any())
<ul>
    {!!  implode('',$errors->all('<li>:message</li>'))!!}
</ul>
@endif


<form method="POST" action="/store">

    <label for="">Name </label>
    <input type="text" name="name"><br>

    <label for="">Email </label>
    <input type="text" name="email"><br>

    <label for="">Password </label>
    <input type="password" name="password"><br>

    <label for="">Confirm Password </label>
    <input type="password" name="password_confirmation"><br>


    <button type="submit"> Register</button>
   @csrf
</form>-->


<!--@include('layouts.master')-->

@include('layouts.registerlayout')


<div class="container" style="margin-top:90px">

        <div class="panel panel-default">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4>REGISTER YOUR PROFILE 
                       </h4>
                </div>
                <div class="panel-body">                   
  <form class="registerform" action="/store" method="POST" >
    @csrf
    
    <div class="form-group">
    <label for="role" class="form-label">USER TYPE :</label>
        <select class="form-select" id="role" name="role">
            <option>--SELECT--</option>
      <option value="admin">ADMIN</option>
      <option value="employee">EMPLOYEE</option>
    </select>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Enter Name</label>
      <div class="col-sm-10">          
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{old('name')}}" />
      <span class="text-danger">
          @error('name')
          {{$message}}
          @enderror
        </span>
    </div>
    </div><br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Enter Email ID</label>
      <div class="col-sm-10">              
      <input type="email" class="form-control" id="email" placeholder="Enter Email ID" name="email" value="{{old('email')}}" />
      <span class="text-danger">
          @error('email')
          {{$message}}
          @enderror
        </span>
    </div>
    </div><br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="salary">Enter Password</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="password"  name="password" value="{{old('password')}}" />
        <span class="text-danger">
          @error('password')
          {{$message}}
          @enderror
        </span>
      </div>
    </div><br>

    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Enter Password</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="password_confirmation"  name="password_confirmation" value="{{old('password_confirmation')}}" />
        <span class="text-danger">
          @error('password_confirmation')
          {{$message}}
          @enderror
        </span>
      </div>
    </div><br>


  
 
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">REGISTER</button>
      </div>
    </div>
  </form>

                    </div>

                </div>
 
</div>


</div>