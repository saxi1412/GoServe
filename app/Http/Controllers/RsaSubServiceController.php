<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RsaSubServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rsasub($id)
    {
        $rsaservices= DB::table('subservices')->where('service_id',$id)->latest("id")->paginate(10);
        return view('viewrsaservice',['rsaservices'=> $rsaservices]);
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
    public function storersasub(Request $request,$id)
    {
        $rsaservices= DB::table('subservices')->find($id);
       
        if($request->hasFile('image')){
            $file =$request->file('image');
            $extension =$file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $filepath='dist/images/servicesimg/'.$filename;
            // $file->storeAs('servicesimg/',$filename);
            $request->image->move(public_path('dist/images/servicesimg'), $filename);
            DB::table('subservices')->where('id', $id)->update([
                'image'=> $filepath,
               ]);
        }

        DB::table('subservices')->where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'discount_price' => $request->discount_price,

           ]);
    
           $res=DB::table('subservices')->where('id', $id)->first();

        return redirect(route('rsasub',$res->service_id));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editrsasub($id)
    {
        $rsaservices= DB::table('subservices')->find($id);
        return view('editrsasubserviceform',['rsaservices'=>$rsaservices]);
 
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
    public function destroyrsasub($id)
    {
        
    }
}
