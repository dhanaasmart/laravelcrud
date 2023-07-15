@include('layouts.employeelayout')


<div class="container" style="margin-top:90px">

        <div class="panel panel-default">
            <div class="panel panel-info">
                <div class="panel-heading">
                <h3>Hai {{auth()->user()->name}}</h3>
                <?php $id=auth()->user()->id;?>
                

                </div>
                <div class="panel-body">
                    
                <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Pvt.NO</th>
                            <th>EMPLOYEE ID</th>
                            <th>EMPLOYEE NAME</th>
                            
                            
                            <th>STATUS</th>
                        </tr>
                        </thead>
                        <tbody>
                           <tr><td>{{$id}}</td>
                           <td>{{$id}}</td>
                           <td>{{auth()->user()->name}}</td>
                           <td>ACTIVE</td>

                           </tr>
                        </tbody>
                    </table>  

                
                <a href="{{url('/logout')}}" type="button" button-success>logout</a>
                </div>
</div></div></div>
