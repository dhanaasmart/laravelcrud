<?php

namespace App\Http\Controllers;
use App\Models\Employeedetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
class EmpDetController extends Controller
{
    //
public function empdet()
{
    if(Gate::allows('isadmin'))
    {
    $employee = Employeedetails::all();
    return view('empinfo.empdetails', compact('employee'));
    }elseif(Gate::allows('isemployee')){

        return view('home');
    }
    
    else{
        return response('only admin can access this page',200);
    }

}
public function create()
{
    return view('empinfo.add_empdetails');

}
public function store(Request $request)
{

    $request->validate([
        'empid'=>'required|integer',
        'empname'=>'required|regex:/^[\p{L}\p{M}\s.\-]+$/u',
        'designation'=>'required',
        'salary'=>'required|integer',
        'profile_image'=>'required'
    ]);
    //echo "<pre>";
    //print_r($request->all());
    $employee=new Employeedetails;
    $employee->empid = $request->input('empid');
    $employee->empname = $request->input('empname');
    $employee->designation = $request->input('designation');
    $employee->salary = $request->input('salary');

    if($request->hasfile('profile_image'))
    {
        $file=$request->file('profile_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/employees/',$filename);
        $employee->profile_image =$filename;
    }
    $employee->save();
    
    //return redirect()->back()->with('status', 'Employee Details Added Successfully');
    return redirect('/empdet');
}

    public function editemployee($id)
    {
        $employee = Employeedetails::find($id);
        return view('empinfo.editemployee', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'empid'=>'required|integer',
            'empname'=>'required|regex:/^[\p{L}\p{M}\s.\-]+$/u',
            'designation'=>'required',
            'salary'=>'required|integer'
           
        ]);
        $employee = Employeedetails::find($id);
        $employee->empid = $request->input('empid');
        $employee->empname = $request->input('empname');
        $employee->designation = $request->input('designation');
        $employee->salary = $request->input('salary');
    
        if($request->hasfile('profile_image'))
        {
            $destination='uploads/employees/'.$employee->profile_image;
             if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file=$request->file('profile_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/employees/',$filename);
            $employee->profile_image =$filename;
        }
       

        $employee->update();
        return redirect('empdet')->with('status', 'Employee Details Updated Successfully');
    }

    public function delete($id)
    {
        $employee=Employeedetails::find($id);
        $destination ='uploads/employees/'.$employee->profile_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $employee->delete();
        return redirect('empdet')->with('status', 'Employee Details deleted Successfully');
   
    }

    public function viewempprofile1($id){
        $employee1 = Employeedetails::find($id);
        return view('empinfo.viewempprofile',compact('employee1'));

    }
}
