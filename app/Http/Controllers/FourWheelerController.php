<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FourWheelerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function four()
    {
        $fourwheelers= DB::table('vehicles')->where("vehicle_type","four wheeler")->latest("id")->paginate(10);
        return view('fourwheeler',['fourwheelers'=>$fourwheelers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createfourwheeler(Request $request)
    {

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
    public function editfourwheeler($id)
    {
        $fourwheelers= DB::table('vehicles')->find($id);
        return view('editfourwheelerform',['fourwheelers'=>$fourwheelers]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatefourwheeler(Request $request, $id)
    {
        if($request->hasFile('image')){
            $file =$request->file('image');
            $extension =$file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $filepath='/dist/images/vehicles/'.$filename;
            // $file->storeAs('servicesimg/',$filename);
            $request->image->move(public_path('dist/images/vehicles'), $filename);
            DB::table('vehicles')->where('id', $id)->update([
              
                'image'=> $filepath,
            ]);
        }
        DB::table('vehicles')->where('id', $id)->update([
            'company_name' =>$request->company_name,
            'model_name' => $request->model_name,
            'fuel_type' => $request->ftype,
        
        ]);

        return redirect(route('four'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyfourwheeler($id)
    {
        DB::table('vehicles')->where('id',$id)->delete();
        return redirect(route('four'));
    }
}
