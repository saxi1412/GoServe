<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cust()
    {
       
        $customers= DB::table('users')->where('type',2)->latest("id")->paginate(10);
        return view('customers',['customers'=>$customers]);
    }
    public function addcustomer()
    {
        return view('addcustomer');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createcustomer(Request $request)
    {
        $request->validate(
            [

                'name' => 'required',
                'email' =>'required|email' ,
                'password' =>'required' ,
                'number' => 'required',
                
            ]
            );
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'password' => $request=Hash::make('yourPa$$w0rd'),
            'type'=>'2' 
        ]);

        return redirect(route('cust'));
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
    public function editcustomer($id)
    {
        $customers= DB::table('users')->find($id);
        return view('editcustomersform',['customers'=>$customers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatecustomer(Request $request, $id)
    {
        $request->validate(
            [

                'name' => 'required',
                'email' =>'required|email' ,
                'password' =>'required' ,
                'number' => 'required',
                
            ]
            );
        DB::table('users')->where('id', $id)->update([
        
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'password' => $request=Hash::make('yourPa$$w0rd'),
 
        
      ]);

      return redirect(route('cust'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroycustomer($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect(route('cust'));
    }
}
