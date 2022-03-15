<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TwoWheelerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $twowheelers=DB::table('vehicles')->where("vehicle_type","two wheeler")->latest("id")->paginate(10);
        return view('twowheeler',['twowheelers'=>$twowheelers]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createtwowheeler(Request $request)
    {
 
        // return redirect(route('index'));
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
    public function edittwowheeler($id)
    {
        $twowheelers= DB::table('vehicles')->find($id);
        return view('edittwowheelerform',['twowheelers'=>$twowheelers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatetwowheeler(Request $request, $id)
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
            'company_name' => $request->company_name,
            'model_name' =>$request->model_name,
            'fuel_type' => $request->ftype,
            
        ]);

        return redirect(route('index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroytwowheeler($id)
    {
        DB::table('vehicles')->where('id',$id)->delete();
        return redirect(route('index'));
    }
}
