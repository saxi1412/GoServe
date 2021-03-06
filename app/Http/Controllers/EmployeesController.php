<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function emp(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
            $employees= DB::table('users')->where('name','LIKE', "%$search%")->orWhere('email','LIKE', "%$search%")->latest("id")->paginate(10);
        }else{
            $employees= DB::table('users')->where('type',1)->latest("id")->paginate(10);
        }
        $data =compact('employees','search');
        return view('employees',['employees'=>$employees]);
    }
    public function addemployee()
    {
        return view('addemployee');
    }
    



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createemployee(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'number' =>'required' ,
                'residential_address' =>'required' ,
                'aadhar_card_no' => 'required',
                'pan_card_no' =>'required',
                'past_job_experience' => 'required',
                'current_job_description' => 'required',
                'date_of_joining' =>'required' ,
                'salary' => 'required',
                'roles_and_responsibility' =>'required',
                'emergency_contact_number' =>'required',
                'password' => 'required',
            ]
            );
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'residential_address' => $request->residential_address,
            'aadhar_card_no' => $request->aadhar_card_no,
            'pan_card_no' => $request->pan_card_no,
            'past_job_experience' => $request->past_job_experience,
            'current_job_description' => $request->current_job_description,
            'date_of_joining' => $request->date_of_joining,
            'salary' => $request->salary,
            'roles_and_responsibility' => $request->roles_and_responsibility,
            'emergency_contact_number' => $request->emergency_contact_number,
            'password' => $request=Hash::make('yourPa$$w0rd'),
            'type'=>'1'
        ]);

        return redirect(route('emp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editemployee($id)
    {
        $employees= DB::table('users')->find($id);
       return view('editemployeesform',['employees'=>$employees]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateemployee(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'number' =>'required' ,
                'residential_address' =>'required' ,
                'aadhar_card_no' => 'required',
                'pan_card_no' =>'required',
                'past_job_experience' => 'required',
                'current_job_description' => 'required',
                'date_of_joining' =>'required' ,
                'salary' => 'required',
                'roles_and_responsibility' =>'required',
                'emergency_contact_number' =>'required',
                'password' => 'required',
            ]
            );
        DB::table('users')->where('id', $id)->update([
        
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'residential_address' => $request->residential_address,
            'aadhar_card_no' => $request->aadhar_card_no,
            'pan_card_no' => $request->pan_card_no,
            'past_job_experience' => $request->past_job_experience,
            'current_job_description' => $request->current_job_description,
            'date_of_joining' => $request->date_of_joining,
            'salary' => $request->salary,
            'roles_and_responsibility' => $request->roles_and_responsibility,
            'emergency_contact_number' => $request->emergency_contact_number,
            'password' => $request=Hash::make('yourPa$$w0rd'),

        
      ]);

      return redirect(route('emp'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyemployee($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect(route('emp'));
    }
}
