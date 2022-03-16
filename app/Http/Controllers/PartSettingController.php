<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PartSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function partsetting()
    {
        $partsetting=DB::table('partsetting')->latest("id")->paginate(10);
        return view('partsetting',['partsetting'=>$partsetting]);

    }
    public function addpartsetting()
    {
        
        return view('addpartsetting');
    }
    
    
    public function createpartsetting(Request $request)
    {
       
       
        if($request->hasFile('image')){
            $file =$request->file('image');
            $extension =$file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $filepath='dist/images/partsetting/'.$filename;
            // $file->storeAs('servicesimg/',$filename);
            $request->image->move(public_path('dist/images/partsetting'), $filename);
            DB::table('partsetting')->insert([
                'image'=> $filepath,
               ]);
    
        }
        
        
       

        return redirect(route('partsetting'));

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
    public function editpartsetting($id)
    {
        $partsetting= DB::table('partsetting')->find($id);
        return view('editpartsettingform',['partsetting'=>$partsetting]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatepartsetting(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $filepath = 'dist/images/partsetting/' . $filename;
            // $file->storeAs('servicesimg/',$filename);
            $request->image->move(public_path('dist/images/partsetting'), $filename);
            DB::table('partsetting')->where('id', $id)->update([
            
                'image' => $filepath,
            ]);
        }
       
        
        return redirect(route('partsetting'));
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroypartsetting($id)
    {
        DB::table('partsetting')->where('id',$id)->delete();
        return redirect(route('partsetting'));
    }
}
