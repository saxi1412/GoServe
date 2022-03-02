<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class SupportStaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function support()
    {
        $supportstaffs= DB::table('users')->where('type',4)->paginate(10);
        return view('supportstaffs',['supportstaffs'=>$supportstaffs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createsupportstaff(Request $request)
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
            'type'=>'4'
        ]);

        return redirect(route('support'));
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
    public function editsupportstaff($id)
    {
        $supportstaffs= DB::table('users')->find($id);
        return view('editsupportstaffsform',['supportstaffs'=>$supportstaffs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatesupportstaff(Request $request, $id)
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

      return redirect(route('support'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroysupportstaff($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect(route('support'));
    }
}
