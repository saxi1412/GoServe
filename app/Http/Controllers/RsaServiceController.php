<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class RsaServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rservice()
    {
        $rsaservices= DB::table('services')->where('rsa','1')->latest("id")->paginate(10);
        return view('rsaservice',['rsaservices'=> $rsaservices]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $rsaservices= DB::table('services')->find($id);
       
        if($request->hasFile('image')){
            $file =$request->file('image');
            $extension =$file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $filepath='dist/images/servicesimg/'.$filename;
            // $file->storeAs('servicesimg/',$filename);
            $request->image->move(public_path('dist/images/servicesimg'), $filename);
            DB::table('services')->where('id', $id)->update([
                'image'=> $filepath,
               ]);
        }

        DB::table('services')->where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
           ]);
    

        return redirect(route('rservice'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editrsaservice($id)
    {
        $rsaservices= DB::table('services')->find($id);
        return view('editrsaserviceform',['rsaservices'=>$rsaservices]);
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
