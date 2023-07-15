
<!--
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>-->
    
@include('layouts.bootstraplayout')
   
<div class="container" style="margin-top:90px">
        <div class="panel panel-default">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4>ABC INFOTECH PVT LTD.
                        <a href="{{url('add-emp')}}" class="btn btn-primary">Add Employee</a>
                    </h4>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>EMPLOYEE ID</th>
                            <th>EMPLOYEE NAME</th>
                            <th>DESIGNATION</th>
                            <th>SALARY</th>
                            <th>PROFILE</th>
                            <th>EDIT/DELETE</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($employee as $item)
                            <tr>
                                <td>{{$item->id}} </td>
                                <td>{{$item->empid}} </td>
                                <td>{{$item->empname}} </td>
                                <td>{{$item->designation}} </td>
                                <td>{{$item->salary}} </td>
                                <td>
                                    <img src="{{ asset('uploads/employees/'.$item->profile_image)}}" width="70px" height="70px" alt="Image">
                                </td>
                                <td>
                                    <a href="{{url('edit-employee/'.$item->id)}}" class="btn btn-primary btn-sm">EDIT</a>/
                                    <a href="{{url('delete-employee/'.$item->id)}}" class="btn btn-danger btn-sm">DELETE</a>
                                </td>
                            </tr>

                            @endforeach
                           
                        </tbody>
                    </table>  
                </div>
            </div>
        </div>
    </div>
<!--</body>
</html>-->


    