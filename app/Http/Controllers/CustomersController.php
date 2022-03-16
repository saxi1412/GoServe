<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cust(Request $req)
    {
       $request=$req->all();
        $search = $request['search'] ?? "";
        if($search != ""){
            $customers= DB::table('users')->where('type',2)->where('name','LIKE', "%$search%")->latest("id")->paginate(10);
        }else{
            $customers= DB::table('users')->where('type',2)->latest("id")->paginate(10);
        }
        $data =compact('customers','search');
        return view('customers',['customers'=>$customers]);
    }
    public function addcustomer()
    {
        return view('addcustomer');
    }
    public function sendtoindividual()
    {
        return view('sendtoindividual');
    }

    public function createnotificationindividual(Request $request,$id){


        $user=DB::table("users")->select("fcm_token")->where("id",$id)->first();

        $this->sendFCM($request->title,$request->message,$user->fcm_token);

        DB::table('notifications')->insert([
            'user_id' => $id,
            'title' => $request->title,
            'message' => $request->message,
          
        ]);

        return redirect(route('cust'));
    }

    public static function sendFCM($title, $message, $target = 0)
    {
        //$baseurl="http://".url();
        //FCM api URL
        $url = 'https://fcm.googleapis.com/fcm/send';
        //api_key available in Firebase Console -> Project Settings -> CLOUD MESSAGING -> Server key
        $server_key = 'AAAAM1FeR1I:APA91bGkp8P79mtnoUENEjL6pGPdjYS5JqH9bEZQFRacxgHC1_a4Am1UAvhrzm6PTjE_AumTMwwGBvnl6dGkiqfWCD-quNSmTlLdWvy4q97A-6VXjn37oFRPlKoBC2WQjP_g5BwuOZCm';

        $fields = array();

        //        $fields['content_available'] = true;
        $fields['data'] = array();
        $fields['data']["message"] = $message;
        $fields['data']["title"] = $title;
        //        $fields['data']['click_action'] = '.MainActivity';
        //        $fields['data']['sound'] = 'default';
        $fields['to'] = $target;

        $fields['priority'] = "high";
        $headers = array(
            'Content-Type:application/json',
            'Authorization:key=' . $server_key
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('FCM Send Error: ' . curl_error($ch));
        }
        curl_close($ch);
        return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createcustomer(Request $request)
    {
        $request->validate(
            [

                'name' => 'required',
                'email' =>'required|email' ,
                'password' =>'required' ,
                'number' => 'required',
                
            ]
            );
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'password' => $request=Hash::make('yourPa$$w0rd'),
            'type'=>'2' 
        ]);

        return redirect(route('cust'));
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
    public function editcustomer($id)
    {
        $customers= DB::table('users')->find($id);
        return view('editcustomersform',['customers'=>$customers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatecustomer(Request $request, $id)
    {
        $request->validate(
            [

                'name' => 'required',
                'email' =>'required|email' ,
                'password' =>'required' ,
                'number' => 'required',
                
            ]
            );
        DB::table('users')->where('id', $id)->update([
        
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'password' => $request=Hash::make('yourPa$$w0rd'),
 
        
      ]);

      return redirect(route('cust'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroycustomer($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect(route('cust'));
    }
}
