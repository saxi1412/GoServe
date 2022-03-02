<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsistentServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cservice()
    {
       
        $consistentservice= DB::table('services')->where('rsa','0')->paginate(10);
        return view('consistentservice',['consistentservice'=>$consistentservice]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createcservice(Request $request)
    {
        DB::table('services')->insert([
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description,
        ]);

        return redirect(route('cservice'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storecservice(Request $request,$id)
    {
        $rsaservices= DB::table('services')->find($id);
       
        if($request->hasFile('image')){
            $file =$request->file('image');
            $extension =$file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $filepath='dist/images/servicesimg/'.$filename;
            // $file->storeAs('servicesimg/',$filename);
            $request->image->move(public_path('dist/images/servicesimg'), $filename);
        }

        DB::table('services')->where('id', $id)->update([
            
            'name' => $request->name,
            'image'=> $filepath,
            'description' => $request->description,
           
           ]);
    

        return redirect(route('cservice'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editcservice($id)
    {
        $consistentservice= DB::table('services')->find($id);
       return view('editconsistentserviceform',['consistentservice'=>$consistentservice]);
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
