<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class GarageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gar(Request $req)
    {
        
        $request=$req->all();
        $search = $request['search'] ?? "";
        if($search != ""){
            $garage= DB::table('users')->where('type',3)->where('garage_name','LIKE', "%$search%")->latest("id")->paginate(10);
        }else{
            $garage= DB::table('users')->where('type',3)->latest("id")->paginate(10);
        }
        $data =compact('garage','search');
        return view('garage',['garage'=>$garage]);
    }
    public function addgarage()
    {
        return view('addgarage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function creategarage(Request $request)
    {
        $request->validate(
            [
                'garage_name' =>'required',
                'garage_number' =>'required',
                'garage_email' => 'required|email',
                'garage_address' => 'required',
                'num_of_employees' =>'required',
                'gst_no' => 'required',
                'name' => 'required',
                'number' => 'required',
                'email' => 'required|email',
                'address' => 'required',
                'password' => 'required',
                'pan_card_no' => 'required',
                'service_type' => 'required',
            ]
            );
        DB::table('users')->insert([
            'garage_name' => $request->garage_name,
            'garage_number' => $request->garage_number,
            'garage_email' => $request->garage_email,
            'garage_address' => $request->garage_address,
            'num_of_employees' => $request->num_of_employees,
            'gst_no' => $request->gst_no,
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email,
            'address' => $request->address,
            'pan_card_no' => $request->pan_card_no,
            'service_type' => $request->service_type,
            'password' => $request=Hash::make('yourPa$$w0rd'),
            'type'=>'3'

 
        ]);

        return redirect(route('gar'));

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
    public function editgarage($id)
    {
        $garage= DB::table('users')->find($id);
        return view('editgarageform',['garage'=>$garage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updategarage(Request $request, $id)
    {
        $request->validate(
            [
                'garage_name' =>'required',
                'garage_number' =>'required',
                'garage_email' => 'required|email',
                'garage_address' => 'required',
                'num_of_employees' =>'required',
                'gst_no' => 'required',
                'name' => 'required',
                'number' => 'required',
                'email' => 'required|email',
                'address' => 'required',
                'password' => 'required',
                'pan_card_no' => 'required',
                'service_type' => 'required',
            ]
            );
        DB::table('users')->where('id', $id)->update([
        
            'garage_name' => $request->garage_name,
            'garage_number' => $request->garage_number,
            'garage_email' => $request->garage_email,
            'garage_address' => $request->garage_address,
            'num_of_employees' => $request->num_of_employees,
            'gst_no' => $request->gst_no,
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email,
            'address' => $request->address,
            'pan_card_no' => $request->pan_card_no,
            'service_type' => $request->service_type,
            'password' => $request=Hash::make('yourPa$$w0rd'),

        
      ]);

      return redirect(route('gar'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroygarage($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect(route('gar'));
    }
}
