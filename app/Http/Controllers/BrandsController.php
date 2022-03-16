<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function brand()
    {
        $brands=DB::table('brands')->latest("id")->paginate(10);
        return view('brands',['brands'=>$brands]);

    }
    public function addbrand()
    {
        
        return view('addbrand');
    }
    
    
    public function createbrand(Request $request)
    {
       
       
        if($request->hasFile('image')){
            $file =$request->file('image');
            $extension =$file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $filepath='dist/images/brands/'.$filename;
            // $file->storeAs('servicesimg/',$filename);
            $request->image->move(public_path('dist/images/brands'), $filename);
            DB::table('brands')->insert([
                'image'=> $filepath,
               ]);
    
        }
        
        
       

        return redirect(route('brand'));

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
    public function editbrand($id)
    {
        $brands= DB::table('brands')->find($id);
        return view('editbrandform',['brands'=>$brands]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatebrand(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $filepath = 'dist/images/brands/' . $filename;
            // $file->storeAs('servicesimg/',$filename);
            $request->image->move(public_path('dist/images/brands'), $filename);
            DB::table('brands')->where('id', $id)->update([
            
                'image' => $filepath,
            ]);
        }
       
        
        return redirect(route('brand'));
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroybrand($id)
    {
        DB::table('brands')->where('id',$id)->delete();
        return redirect(route('brand'));
    }
}
