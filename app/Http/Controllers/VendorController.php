<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redis;

class VendorController extends Controller
{
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


    public function vendorbooking(Request $request)
    {

        try {
            $req = $request->all();
            $user = DB::table("users")->select("type")->where("id", $req["user_id"])->first();
            if ($user->type == "1") {
                $booking = DB::table("bookings")->orderBy("id", "desc")->get();
                $response["bookings"] = array();
                foreach ($booking as $b) {
                    $tmp["id"] = $b->id;
                    if ($b->service_id == 2 || $b->service_id == 3) {
                        $tmp["service_type"] = "RSA";
                    } else {
                        $tmp["service_type"] = "Consistent";
                    }
                    $tmp["name"] = DB::table('users')->where("id", $b->user_id)->first()->name;
                    $vehicle = DB::table('customer_vehicles')->where("id", $b->vehicle_id)->first()->vehicle_id;
                    $userV = DB::table('vehicles')->where("id", $vehicle)->first();
                    $tmp["vehicle"] = $userV->company_name . " " . $userV->model_name;
                    $time = DB::table('timeslots')->select('from_time', 'to_time')->where("id", $b->timeslot)->where('is_active', '1')->first();
                    $tmp["time"] = $time->from_time . " to " . $time->to_time;
                    $tmp["date"] = $b->booking_date;
                    $tmp["status"] = $b->current_status;


                    array_push($response["bookings"], $tmp);
                }
                return $this->successfulResponse("bookings", $response);
            } else {
                return $this->failureResponse("unauthorized user");
            }
        } catch (\Exception $e) {
            return $this->failureResponse($e->getMessage());
        }
    }
    public function vendorLogin(Request $request)
    {
        $reqData = $request->all();

        if (!isset($reqData['mobile'])) {
            return $this->failureResponse('mobile no required!');
        }
        if (!isset($reqData['password'])) {
            return $this->failureResponse('password required!');
        }

        $result =  DB::table('users')->select('id', 'password', 'type')->where('number', $reqData['mobile'])->first();
        if ($result) {
            if (Hash::check($reqData['password'], $result->password)) {
                $response = [
                    'id' => $result->id,
                    'role_id' => $result->type,
                ];
                return $this->successfulResponse('Login Succesfully', $response);
            } else {
                return $this->failureResponse('Wrong password!');
            }
        } else {
            return $this->failureResponse('User does not exist please register first');
        }
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
    public function system_check()
    {
        $data = [
            'status' => 1,
        ];
        return response()->json($data);
    }
    public function updateVendorFcmToken(Request $request)
    {
        $reqData = $request->all();
        if (!isset($reqData['id'])) {
            return $this->failureResponse('Authantication failed');
        } elseif (!isset($reqData['fcm_token'])) {
            return $this->failureResponse('FCM Token REQUIRED');
        } else {
            $affected = DB::table('users')
                ->where('id', $reqData['id'])
                ->update(['fcm_token' => $reqData['fcm_token']]);
            $result = ["status" => "true"];
            return $this->successfulResponse('updated Successfully', $result);
        }
    }

    public function getJobCard(Request $request)
    {
        $response["jobcard"]=DB::table("jobcard")->get();
        return $this->successfulResponse("job card",$response);
    }

    public function getBooking(Request $request)
    {

        try {
            $req = $request->all();
            $b = DB::table("bookings")->where("id", $req["id"])->first();
            $tmp["id"] = $b->id;
            if ($b->service_id == 2 || $b->service_id == 3) {
                $tmp["service_type"] = "RSA";
            } else {
                $tmp["service_type"] = "Consistent";
            }

            $user = DB::table('users')->where("id", $b->user_id)->first();
            $tmp["name"] = $user->name;
            $tmp["number"] = $user->number;
            $vehicle = DB::table('customer_vehicles')->where("id", $b->vehicle_id)->first();
            $userV = DB::table('vehicles')->where("id", $vehicle->vehicle_id)->first();
            $tmp["vehicle"] = $userV->company_name . " " . $userV->model_name;
            $tmp["registration_number"] = $vehicle->registration_number;
            $time = DB::table('timeslots')->select('from_time', 'to_time')->where("id", $b->timeslot)->where('is_active', '1')->first();
            $tmp["time"] = $time->from_time . " to " . $time->to_time;
            $tmp["date"] = $b->booking_date;
            $tmp["status"] = $b->current_status;
            $response["booking"] = $tmp;

            return $this->successfulResponse("booking", $response);
        } catch (\Exception $e) {
            return $this->failureResponse($e->getMessage());
        }
    }
    public function transferBooking()
    {
    }
    public function getTransferableUser()
    {
        $response["users"] = DB::table("users")->select("id", "name", "number")->where("type", ">", 2)->get();
        return $this->successfulResponse("users", $response);
    }
}
