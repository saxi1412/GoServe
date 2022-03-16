<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeSettingController extends Controller
{
    public function setting(){
        $rsaservices= DB::table('setting')->first();
        $services=DB::table('services')->select('id','name')->get();
        return view('homesetting',['rsaservices'=>$rsaservices,
        'services'=>$services
    ]);
    }

    public function updateSettings(REQUEST $request){
$data=$request->all();
        for ($i=1; $i < 6; $i++) { 
            if($request->hasFile('img'.$i)){
                $file =$request->file('img'.$i);
                $extension =$file->getClientOriginalExtension();
                $filename= time().$i.'.'.$extension;
                $filepath='dist/images/banners/'.$filename;
                // $file->storeAs('servicesimg/',$filename);
                $file->move(public_path('dist/images/banners'), $filename);
                DB::table('setting')->update([
                    'img'.$i => $filepath,
                   ]);
            }
            DB::table('setting')->update([
                'service'.$i=>$data['service'.$i],
               ]);
            
        }
        // return dd($request->service5);
        return redirect(route('setting'));
    }
}
