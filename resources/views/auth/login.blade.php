<!--@if($errors->any())
<ul>
    {!!  implode('',$errors->all('<li>:message</li>'))!!}
</ul>
@endif

<form method="POST" action="authenticate">
    <label for="">Email </label>
    <input type="text" name="email"><br><br>

    <label for="">Password </label>
    <input type="password" name="password"><br><br>

    <button type="submit"> LOGIN</button>
   @csrf
</form>
-->

<!--@include('layouts.master')-->
@include('layouts.registerlayout')
  
        
<div class="container" style="margin-top:90px">
        <div class="panel panel-default">
            <div class="panel panel-info">
                <div class="panel-heading">
                  <h4> LOGIN</h4>
                </div>
                <div class="panel-body">              
        <form class="" method="POST" action="authenticate">
            @csrf

            <div class="form-group">
            @if($errors->any())

    {!!  implode('',$errors->all('<p class="text-danger">:message</p>'))!!}

@endif
            <label class="control-label col-sm-2" for="email">USER NAME</label>
            <div class="col-sm-10">          
                <input type="email" class="form-control" id="email" placeholder="Username" name="email" value="{{old('email')}}" />
                <span class="text-danger">
                @error('email')
                {{$message}}
                @enderror
                </span>
            </div>
            </div><br>

            <div class="form-group">
            <label class="control-label col-sm-2" for="password">PASSWORD</label>
            <div class="col-sm-10">          
                <input type="password" class="form-control" id="password"  name="password" value="{{old('password')}}" />
                <span class="text-danger">
                @error('password')
                {{$message}}
                @enderror
                </span>
            </div>
            </div>
        
            <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">LOGIN</button>
            </div>
            </div>
            <div class="form-group">
                <span>if you are new to this page,        
           <a href="{{url('register')}}">please SIGNUP</a></span>
            </div>


        </form>

    </div>

    </div>
 
</div>


