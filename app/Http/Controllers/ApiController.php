<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Json;

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
        $req = $request->all();
        $response = array();
        $res = DB::table('setting')->select('img1', 'img2', 'img3', 'img4', 'img5')->first();
        $response['banners'] = $res;
        $response['services'] = array();
        $res = DB::table('setting')->first();
    
            $response['services']= DB::table('services')->get();
        
        if (isset($req['user_id'])) {
            $user = DB::table('users')->select('name', 'image')->where('id', $req['user_id'])->first();
            $response['profile'] = $user;
        }
        return $this->successfulResponse('Home Page', $response);
    }
    public function systemCheck()
    {
        $data = [
            'status' => 1,
        ];
        return response()->json($data);
    }
    public function getBookingsHistory()
    {
        $data = [
            'status' => 1,
        ];
        return response()->json($data);
    }
    public function getVehicle(Request $request)
    {
        $req = $request->all();
        if (!isset($req["user_id"])) {
            return $this->failureResponse("unauthanticated");
        }

        $res = DB::table("customer_vehicles")->where("user_id", $req["user_id"])->get();
        $response["vehicles"] = array();
        foreach ($res as $r) {
            $tmp["id"] = $r->id;
            $tmp["registration_number"] = $r->registration_number;
            $tmp["owner_name"] = $r->owner_name;
            $v = DB::table("vehicles")->where("id", $r->vehicle_id)->first();
            $tmp["company_name"] = $v->company_name;
            $tmp["model_name"] = $v->model_name;
            $tmp["fuel_type"] = $v->fuel_type;
            $tmp["image"] = $v->image;

            array_push($response["vehicles"], $tmp);
        }
        return $this->successfulResponse("vehicles", $response);
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
        $req = $request->all();
        $response = array();
        $res = DB::table("bookings")->select("id")->where("user_id", $req["user_id"])->where("current_status", "cart")->first();
        if ($res) {
            $cart = array([
                "cart"=>now()
            ]);
            $ren = DB::table("bookings")
                ->where("user_id", $req["user_id"])
                ->where("current_status", "cart")
                ->where("id", $res->id)
                ->update(
                    [
                        "vehicle_id" => $req["vehicle"],
                        "service_id" => $req["service_id"],
                        "sub_service_id" => $req["sub_service_id"],
                        "current_status" => "cart",
                        "statuses" => json_encode($cart),
                        "total" => $req["total"]
                    ]
                );

            $reb = DB::table("booking_data")
                ->where("booking_id", "=", $res->id)
                ->delete();
            $reb = DB::table("booking_data")->insert([
                "booking_id" => $res->id,
                "service_data" => $req["sub_service_data"],
                "added_by" => $req["user_id"]
            ]);
            $response["booking"] = $res->id;
        } else {
            $cart["cart"] = now();
            $res = DB::table("bookings")->insert(
                [
                    'user_id' => $req["user_id"],
                    "vehicle_id" => $req["vehicle"],
                    "service_id" => $req["service_id"],
                    "sub_service_id" => $req["sub_service_id"],
                    "current_status" => "cart",
                    "statuses" => json_encode($cart),
                    "total" => $req["total"]
                ]
            );
            $res = DB::table("bookings")->select('id')->where("user_id", $req["user_id"])->where("current_status", "cart")->first();
            $reb = DB::table("booking_data")->insert([
                "booking_id" => $res->id,
                "service_data" => $req["sub_service_data"],
                "added_by" => $req["user_id"]
            ]);
            $response["booking"] = $res->id;
        }
        return $this->successfulResponse("added to the cart", $response);
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
        $req = $request->all();
        if (!isset($req["service_id"])) {
            return $this->failureResponse("service id required");
        }
        $res["subservices"] = DB::table("subservices")->where("service_id", $req["service_id"])->get();
        return $this->successfulResponse("subservices", $res);
    }
    public function getSubServicesOptions()
    {
        return 'hi';
    }

    public function subServicesData(Request $request)
    {
        $data = $request->all();

        if (!isset($data['sub_service_id'])) {
            return $this->failureResponse("sub service required");
        } else {
            $options = DB::table('services_data')->select('id', 'name', 'tag', 'product', 'description', 'price', 'discounted_price')->where('active', '1')->where('type', '1')->where('sub_service_id', $data['sub_service_id'])->get()->toArray();
            $addons = DB::table('services_data')->select('id', 'name', 'image', 'description', 'price', 'discounted_price')->where('active', '1')->where('type', '2')->where('sub_service_id', $data['sub_service_id'])->get()->toArray();
            $sdata = DB::table('subservices')->select('id', 'name', 'service_id', 'price', 'discount_price')->where('is_active', '1')->where('id', $data['sub_service_id'])->first();
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
                return $this->successfulResponse("sub_service_data", $result);
            }
        }
    }
    public function getCart(Request $request)
    {
        $req = $request->all();

        $response = array();

        $resB = DB::table("bookings")->where("user_id", $req["user_id"])->where("current_status", "cart")->first();

        if ($resB) {

            $response["cart"] = $resB;

            $res = DB::table("customer_vehicles")->where("id", $resB->vehicle_id)->first();
            $tmp["id"] = $res->id;
            $tmp["registration_number"] = $res->registration_number;
            $tmp["owner_name"] = $res->owner_name;
            $v = DB::table("vehicles")->where("id", $res->vehicle_id)->first();
            $tmp["company_name"] = $v->company_name;
            $tmp["model_name"] = $v->model_name;
            $tmp["fuel_type"] = $v->fuel_type;
            $tmp["image"] = $v->image;
            $response["vehicle"] = $tmp;

            $res = DB::table("services")->where("id", $resB->service_id)->first();
            $response["service"] = $res;

            $res = DB::table("subservices")->where("id", $resB->sub_service_id)->first();
            $response["sub_service"] = $res;

            $res = DB::table("booking_data")->where("booking_id", $resB->id)->first();
            $response["sub_service_data"] = array();
            foreach (json_decode($res->service_data) as $r) {
                array_push($response["sub_service_data"], DB::table("services_data")->where("id", $r)->first());
            }
        } else {
            return $this->failureResponse("Nothing in cart!");
        }
        return $this->successfulResponse("cart", $response);
    }
    public function paymentMethods()
    {
    }
    public function getEvProducts(Request $request)
    {
        $response["products"] = array();
        $res = DB::table("products")->get();
        foreach ($res as $r) {
            $tmp["product"] = $r;
            $tmp["specifications"] = DB::table("product_specifications")->where("product_id", $r->id)->get();
            array_push($response["products"], $tmp);
        }
        return $this->successfulResponse("EV Store Products", $response);
    }
    public function getEvProduct(Request $request)
    {
        $req=$request->all();
        $res = DB::table("products")->where('id',$req["id"])->first();
        
            $tmp["product"] = $res;
            $tmp["specifications"] = DB::table("product_specifications")->where("product_id", $request->id)->get();
            $response["product"]= $tmp;
        
        return $this->successfulResponse("EV Store Products", $response);
    }
    public function placeBooking(Request $request)
    {
        
        $req=$request->all();
            $res = DB::table("bookings")->where("user_id", $req["user_id"])->where("current_status", "cart")->first();

        $status=json_decode($res->statuses,true);
        $tmp["new"]=now();
        array_push($status,$tmp);

        $res = DB::table("bookings")->where("current_status","cart")->where('user_id',$req['user_id'])->update([
            "message"=>$req["message"],
            "timeslot"=>$req["time_slot"],
            "booking_date"=>$req["month_slot"],
            "payment_method"=>$req["payment_method"],
            "current_status"=>"new",
            "statuses"=>json_encode($status)

        ]);
        
            
        $res= DB::table("bookings")
        ->where('user_id',$req['user_id'])
        ->where("current_status", "new")
        ->latest('id')
        ->first();

        $response["id"]=$res->id;

        $res=DB::table("users")
        ->select("fcm_token")
        ->where("type","1")
        ->whereNotNull("fcm_token")
        ->get();

        foreach($res as $r){
            $this->sendFCM("New Booking Received","Booking ID: ".$response["id"],$r->fcm_token);
        }

        return $this->successfulResponse("booking", $response);
    }

    public function getAddresses(Request $request)
    {
        $req = $request->all();
        DB::table("addresses")->whereNull("latitude")->delete();
        $resB["addresses"] = DB::table("addresses")->where("user_id", $req["user_id"])->get();
        return $this->successfulResponse("addresses", $resB);
    }
    public function getAddress(Request $request)
    {
        $req = $request->all();
        DB::table("addresses")->whereNull("latitude")->delete();
        $resB["addresses"] = DB::table("addresses")->where("id", $req["id"])->first();
        return $this->successfulResponse("addresses", $resB);
    }
    public function setLocation(Request $request)
    {
        $req = $request->all();
        DB::table("addresses")
            ->where("id", $req["id"])
            ->update([
                "latitude" => $req["latitude"],
                "longitude" => $req["longitude"]
            ]);
        $response["status"] = 1;
        return $this->successfulResponse("updated", $response);
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

    public function getVehicleModel(Request $request)
    {
        $req = $request->all();
        if (!isset($req['vehicle_type'])) {
            return $this->failureResponse("please select vehicle type");
        }
        if (!isset($req['fuel_type'])) {
            return $this->failureResponse("please select fuel type");
        }
        if (!isset($req['cname'])) {
            return $this->failureResponse("please select company name");
        }
        $res = DB::table("vehicles")
            ->select('model_name')
            ->where('vehicle_type', strtolower($req['vehicle_type']))
            ->where('fuel_type', $req['fuel_type'])
            ->where('company_name', strtolower($req['cname']))
            ->orWhere('model_name', 'like', '%' . strtolower($req['mname']) . '%')->get();
        $response['model_names'] = $res;
        return $this->successfulResponse("company names", $response);
    }

    public function getTimeSlots(Request $request)
    {
        try {
            $tss = DB::table('timeslots')->select('id', 'from_time', 'to_time')->where('is_active', '1')->get()->toArray();
            if (!$tss) {
                return $this->failureResponse('Time Slots Not Available.');
            } else {
                $result["timeslots"] = $tss;
                return $this->successfulResponse('TimeSlots', $result);
            }
        } catch (\Exception $e) {
            return $this->failureResponse($e);
        }
    }

    public function addAddress(Request $request)
    {
        $req = $request->all();
        $res = DB::table("addresses")->insert([
            "user_id" => $req["user_id"],
            "city" => $req["city"],
            "pincode" => $req["pincode"],
            "address" => $req["block"] . "," . $req["addr1"] . "," . $req["addr2"]
        ]);

        $res = DB::table("addresses")
            ->where("user_id", $req["user_id"])
            ->where("city", $req["city"])
            ->where("pincode", $req["pincode"])
            ->where("address", $req["block"] . "," . $req["addr1"] . "," . $req["addr2"])
            ->first();

        if ($res) {
            $response["address"] = $res->id;
            return $this->successfulResponse("address stored", $response);
        }
    }

    public function getCheckoutRequirements(Request $request)
    {
        $req = $request->all();
        $response = array();
        $res = DB::table("bookings")->where("user_id", $req["user_id"])->where("current_status", "cart")->first();
        if ($res) {
            $address = DB::table("subservices")->where("id", $res->sub_service_id)->first();
            $response["required_address"] = json_decode($address->required_addresses);
            $response["total"] = json_decode($res->total);

            return $this->successfulResponse("requirements", $response);
        } else {
            return $this->failureResponse("nothing to checkout!");
        }
    }

    public function addVehicle(Request $request)
    {

        $req = $request->all();
        if (!isset($req['vehicle_type'])) {
            return $this->failureResponse("please select vehicle type");
        }
        if (!isset($req['fuel_type'])) {
            return $this->failureResponse("please select fuel type");
        }
        if (!isset($req['cname'])) {
            return $this->failureResponse("please select company name");
        }

        $res = DB::table("vehicles")
            ->select('id')
            ->where('vehicle_type', strtolower($req['vehicle_type']))
            ->where('fuel_type', $req['fuel_type'])
            ->where('company_name', strtolower($req['cname']))
            ->where('model_name', strtolower($req['mname']))->first();

        if ($res) {
            DB::table("customer_vehicles")
                ->insert(
                    [
                        "user_id" => $req["user_id"],
                        "vehicle_id" => $res->id,
                        "registration_number" => $req["rnumber"],
                        "owner_name" => $req["oname"]
                    ]
                );
            $response["status"] = "true";
            return $this->successfulResponse("saved", $response);
        } else {
            return $this->failureResponse("please select valid vehicle");
        }
    }

    public function getVehicleCompany(Request $request)
    {
        $req = $request->all();
        if (!isset($req['vehicle_type'])) {
            $this->failureResponse("please select vehicle type");
        }
        if (!isset($req['fuel_type'])) {
            $this->failureResponse("please select fuel type");
        }
        $res = DB::table("vehicles")
            ->select('company_name')
            ->where('vehicle_type', strtolower($req['vehicle_type']))
            ->where('fuel_type', $req['fuel_type'])
            ->orWhere('company_name', 'like', '%' . strtolower($req['cname']) . '%')->get();
        $response['company_names'] = $res;
        return $this->successfulResponse("company names", $response);
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
            return $this->successfulResponse('updated Successfully', $result);
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
}
