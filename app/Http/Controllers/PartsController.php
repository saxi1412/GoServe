<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function part()
    {
        $parts = DB::table('parts')->latest("id")->paginate(10);
        return view('parts', ['parts' => $parts]);
    }
    public function bulkupload()
    {
        
        // return view('bulkupload');
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
    public function storebulkproduct(Request $request)
    {
        $upload=$request->file('upload-file');
        $filePath=$upload->getRealPath();
        $file=fopen($filePath, 'r');
        $header= fgetcsv($file);

        foreach($header as $key => $value){
        //    dd($header);
        }

set_time_limit(7200);

        while($columns=fgetcsv($file)){
            if($columns[0]==""){
                continue;
            }else{
              DB::table("parts")->insert([
                  "part_number"=>$columns[0],
                  "description"=>$columns[2],
                  "charge_amount"=>$columns[4],
                  "tax"=>$columns[5],
                  "mrp"=>$columns[6],
                  "hsn_code"=>$columns[8],
              ]);
            }
        }
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

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
