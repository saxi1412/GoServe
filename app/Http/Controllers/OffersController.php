<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function offer()
    {
        $offers=DB::table('offers')->latest("id")->paginate(10);
        return view('offers',['offers'=>$offers]);

    }
    public function addoffer()
    {
        
        return view('addoffer');
    }
    
    public function createoffer(Request $request)
    {
       
       
        if($request->hasFile('image')){
            $file =$request->file('image');
            $extension =$file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $filepath='dist/images/offers/'.$filename;
            // $file->storeAs('servicesimg/',$filename);
            $request->image->move(public_path('dist/images/offers'), $filename);
            DB::table('offers')->insert([
                'image'=> $filepath,
               ]);
    
        }
        
        
       

        return redirect(route('offer'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editoffer($id)
    {
        $offers= DB::table('offers')->find($id);
        return view('editofferform',['offers'=>$offers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateoffer(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $filepath = 'dist/images/offers/' . $filename;
            // $file->storeAs('servicesimg/',$filename);
            $request->image->move(public_path('dist/images/offers'), $filename);
            DB::table('offers')->where('id', $id)->update([
            
                'image' => $filepath,
            ]);
        }
       
        
        return redirect(route('offer'));
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyoffer($id)
    {
        DB::table('offers')->where('id',$id)->delete();
        return redirect(route('offer'));
    }
}
