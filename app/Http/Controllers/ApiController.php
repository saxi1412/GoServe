<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function userLogin(Request $request)
    {
        $reqData = $request->all();

        if (!isset($reqData['mobile_no'])) {
            return $this->failureResponse('mobile no required!');
        }
        if (!isset($reqData['password'])) {
            return $this->failureResponse('password required!');
        }

        $result =  DB::table('users')->select('id', 'password')->where('number', $reqData['mobile_no'])->first();
        if ($result) {
            if (Hash::check($reqData['password'], $result->password)) {
                $response = [
                    'id' => $result->id
                ];
                return $this->successfulResponse('Login Succesfully', $response);
            } else {
                return $this->failureResponse('Wrong password!');
            }
        } else {
            return $this->failureResponse('User does not exist please register first');
        }
    }
    public function userRegister(Request $request)
    {
        $reqData = $request->all();

        if (!isset($reqData['name'])) {
            return $this->failureResponse('name required!');
        }

        if (!isset($reqData['email'])) {
            return $this->failureResponse('email required!');
        }
        if (!isset($reqData['mobile_no'])) {
            return $this->failureResponse('phone no required!');
        }

        if (!isset($reqData['password'])) {
            return $this->failureResponse('password required!');
        }

        $mres = DB::table('users')->select('id')->where('number', $request->mobile_no)->first();
        $eres = DB::table('users')->select('id')->where('email', $request->email)->first();

        if ($mres) {
            return $this->failureResponse('mobile number is already registered please login');
        } elseif ($eres) {
            return $this->failureResponse('email is already registered please login');
        } else {
            DB::table('users')->insert([

                'name' => $request->name,
                'email' => $request->email,
                'number' => $request->mobile_no,
                'password' => Hash::make($request->password),
                'type' => '2',

            ]);
            $res = DB::table('users')->select('id')->where('number', $request->mobile_no)->first();
            if ($res) {
                $response = array();
                $response['id'] = $res->id;
                return $this->successfulResponse('Registered Succesfully', $response);
            } else {
                return $this->failureResponse('cannot register please try again!');
            }
        }
    }
    public function homePage(Request $request)
    {
        $req=$request->all();
        $response=array();
        $res=DB::table('setting')->select('img1','img2','img3','img4','img5')->first();
        $response['banners']=$res;
        $response['services']=array();
        $res=DB::table('setting')->first();
        for ($i=1; $i < 6; $i++) { 
            array_push($response['services'],DB::table('services')->where('id',get_object_vars($res)['service'.$i])->first());
        }   
        if(isset($req['user_id'])){
            $user=DB::table('users')->select('name','image')->where('id',$req['user_id'])->first();
            $response['profile']=$user;
        }
        return $this->successfulResponse('Home Page',$response);
    }
    public function systemCheck()
    {
        $data = [
            'status' => 1,
        ];
        return response()->json($data);
    }
    public function getVehicle(Request $request)
    {
        $req=$request->all();
        if(!isset($req["user_id"])){
            return $this->failureResponse("unauthanticated");
        }
        $res=DB::table("customer_vehicles")->where("user_id",$req["user_id"])->get();
        $response["vehicles"]=array();
        foreach ($res as $r) {
            $tmp["id"]=$r->id;
            $tmp["registration_number"]=$r->registration_number;
            $tmp["owner_name"]=$r->owner_name;
            $v=DB::table("vehicles")->where("id",$r->vehicle_id)->first();
            $tmp["company_name"]=$v->company_name;
            $tmp["model_name"]=$v->model_name;
            $tmp["fuel_type"]=$v->fuel_type;
            $tmp["image"]=$v->image;
            
            array_push($response["vehicles"],$tmp);
        }
        return $this->successfulResponse("vehicles",$response);
    }
    public function vehicleType()
    {
        return 'hi';
    }
    public function vehicleBrand()
    {
        return 'hi';
    }
    public function cart(Request $request)
    {
        $req=$request->all();
        $cart["cart"]=now();
        $res=DB::table("bookings")->insert(
            [
                'user_id'=>$req["user_id"],
                "current_status"=>"cart",
                "statuses"=>json_encode($cart),
                "total"=>$req["total"]
            ]
            );

    }
    public function booking()
    {
        return 'hi';
    }
    public function timeSlot()
    {
        return 'hi';
    }
    public function services()
    {
        return 'hi';
    }
    public function getSubServices(Request $request)
    {
        $req=$request->all();
        if(!isset($req["service_id"])){
            return $this->failureResponse("service id required");
        }
        $res["subservices"]=DB::table("subservices")->where("service_id",$req["service_id"])->get();
        return $this->successfulResponse("subservices",$res);
    }
    public function getSubServicesOptions()
    {
        return 'hi';
    }

    public function subServicesData(Request $request)
    {
        $data=$request->all();

        if (!isset($data['sub_service_id'])) {
            return $this->failureResponse("sub service required");
        } else {
            $options = DB::table('services_data')->select('id', 'name', 'tag', 'product', 'description', 'price', 'discounted_price')->where('active', '1')->where('type', '1')->where('sub_service_id', $data['sub_service_id'])->get()->toArray();
            $addons = DB::table('services_data')->select('id', 'name', 'image', 'description', 'price', 'discounted_price')->where('active', '1')->where('type', '2')->where('sub_service_id', $data['sub_service_id'])->get()->toArray();
            $sdata = DB::table('subservices')->select('id','name','service_id' ,'price', 'discount_price')->where('is_active', '1')->where('id', $data['sub_service_id'])->first();
            if (!$sdata) {
                return $this->failureResponse("Not Data Available.");
            } else {
                $result["name"] = $sdata->name;
                $result["price"] = $sdata->price;
                $result["service"] = $sdata->service_id;
                $result["sub_service_id"] = $sdata->id;
                $result["discount_price"] = $sdata->discount_price;
                $result["sub_service_data"]["options"] = $options;
                $result["sub_service_data"]["addons"] = $addons;
                return $this->successfulResponse("sub_service_data",$result);
            }
        }
    }
    public function getCart()
    {
        return 'hi';
    }
    public function paymentMethods()
    {
        return 'hi';
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

    public function getVehicleModel(Request $request){
        $req=$request->all();
        if(!isset($req['vehicle_type'])){
            return $this->failureResponse("please select vehicle type");
        }
        if(!isset($req['fuel_type'])){
            return $this->failureResponse("please select fuel type");
        }
        if(!isset($req['cname'])){
            return $this->failureResponse("please select company name");
        }
        $res=DB::table("vehicles")
        ->select('model_name')
        ->where('vehicle_type',strtolower($req['vehicle_type']))
        ->where('fuel_type',$req['fuel_type'])
        ->where('company_name',strtolower($req['cname']))
        ->orWhere('model_name', 'like', '%' . strtolower($req['mname']) . '%')->get();
        $response['model_names']=$res;
        return $this->successfulResponse("company names",$response);
    }

    public function addVehicle(Request $request){
        
        $req=$request->all();
        if(!isset($req['vehicle_type'])){
            return $this->failureResponse("please select vehicle type");
        }
        if(!isset($req['fuel_type'])){
            return $this->failureResponse("please select fuel type");
        }
        if(!isset($req['cname'])){
            return $this->failureResponse("please select company name");
        }

        $res=DB::table("vehicles")
        ->select('id')
        ->where('vehicle_type',strtolower($req['vehicle_type']))
        ->where('fuel_type',$req['fuel_type'])
        ->where('company_name',strtolower($req['cname']))
        ->where('model_name', strtolower($req['mname']))->first();

        if ($res) {
            DB::table("customer_vehicles")
            ->insert(
                ["user_id"=>$req["user_id"],
                    "vehicle_id"=>$res->id,
                    "registration_number"=>$req["rnumber"],
                    "owner_name"=>$req["oname"]
                    ]
                );
                $response["status"]="true";
            return $this->successfulResponse("saved",$response);
        }else{
            return $this->failureResponse("please select valid vehicle");
        }
    }
    
    public function getVehicleCompany(Request $request){
        $req=$request->all();
        if(!isset($req['vehicle_type'])){
            $this->failureResponse("please select vehicle type");
        }
        if(!isset($req['fuel_type'])){
            $this->failureResponse("please select fuel type");
        }
        $res=DB::table("vehicles")
        ->select('company_name')
        ->where('vehicle_type',strtolower($req['vehicle_type']))
        ->where('fuel_type',$req['fuel_type'])
        ->orWhere('company_name', 'like', '%' . strtolower($req['cname']) . '%')->get();
        $response['company_names']=$res;
        return $this->successfulResponse("company names",$response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function failureResponse($msg)
    {
        $data = [
            'status' => 0,
            'message' => $msg,
        ];
        return response()->json($data);
    }
    public function successfulResponse($msg, $response)
    {
        $data = [
            'status' => 1,
            'message' => $msg,
            'data' => $response,
        ];
        return response()->json($data);
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
    public function updatefcmtoken(Request $request)
    {
        $reqData = $request->all();
        if (!isset($reqData['user_id'])) {
            return $this->failureResponse('Authantication failed');
        } elseif (!isset($reqData['fcm_token'])) {
            return $this->failureResponse('FCM Token REQUIRED');
        } else {
            $affected = DB::table('users')
                ->where('id', $reqData['user_id'])
                ->update(['fcm_token' => $reqData['fcm_token']]);
            $result = ["status" => "true"];
            return $this->successfulResponse( 'updated Successfully',$result);
        }
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
