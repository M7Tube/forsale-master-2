<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequset;
use App\Mail\Code;
use App\Models\AdType;
use App\Models\AppSettings;
use App\Models\FcmToken;
use App\Models\ForgetPassword;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Sanctum\PersonalAccessToken;

class AuthController extends Controller
{

    public function forget_password(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'lang' => ['required', 'string', 'in:ar,en'],
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user->is_admin != 1 && $user->serial_number == null) {
            $checkpreviousforgetpassword = ForgetPassword::where('email', $request->email)->first();
            if ($checkpreviousforgetpassword) {
                $checkpreviousforgetpassword->delete();
            }
            $ForgetPassword = ForgetPassword::Create([
                'email' => $request->email,
                'code' => rand(111111, 999999),
                'done' => 0,
            ]);
            if ($ForgetPassword) {
                Mail::to($user->email)->locale($request->lang)->send(new Code($ForgetPassword->code));
                return response()->json([
                    'status' => 'success',
                    'code' => 200,
                    'message' => 'Successfull Email Send !',
                ], 200);
            } else {
                return response()->json([
                    'status' => 'fails',
                    'code' => 200,
                    'message' => 'There Is something Wrong',
                ], 200);
            }
        } else {
            return response()->json([
                'status' => 'fails',
                'code' => 200,
                'message' => 'There Is something Wrong',
            ], 200);
        }
    }

    public function check_forget_password_code(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:forget_passwords,email'],
            'code' => ['required', 'string']
        ]);
        $data = ForgetPassword::where('email', $request->email)->first();
        if ($data) {
            if ($data->code == $request->code) {
                $data->code = null;
                $data->done = 1;
                $data->save();
                return response()->json([
                    'status' => 'success',
                    'code' => 200,
                    'message' => 'Successfull Code Checked',
                ], 200);
            } else {
                return response()->json([
                    'status' => 'fails',
                    'code' => 200,
                    'message' => 'There Is something Wrong',
                ], 200);
            }
        } else {
            return response()->json([
                'status' => 'fails',
                'code' => 200,
                'message' => 'There Is something Wrong',
            ], 200);
        }
    }

    public function reset_password(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:forget_passwords,email'],
            'password' => ['required','between:00000000,99999999', 'confirmed']
        ]);
        $data = ForgetPassword::where('email', $request->email)->first();
        if ($data) {
            if ($data->done == 1) {
                $user = User::where('email', $data->email)->first();
                $user->password = Hash::make($request->password);
                $user->save();
                $data->delete();
                return response()->json([
                    'status' => 'success',
                    'code' => 200,
                    'message' => 'Done !',
                ], 200);
            } else {
                return response()->json([
                    'status' => 'fails',
                    'code' => 200,
                    'message' => 'There Is something Wrong',
                ], 200);
            }
        } else {
            return response()->json([
                'status' => 'fails',
                'code' => 200,
                'message' => 'There Is something Wrong',
            ], 200);
        }
    }
    public function savefcmtoken(Request $request)
    {
        // return 'true';
        $request->validate([
            'user_id' => ['required', 'integer', 'exists:users,user_id'],
            'fcmtoken' => ['required'],
        ]);
        $fcmtoken = FcmToken::Create([
            'fcmtoken' => $request->fcmtoken,
            'user_id' => $request->user_id,
        ]);
        if ($fcmtoken) {
            return response()->json([
                'status' => 'success',
                'code' => 200,
                'message' => 'Successfull Token Saved',
                'data' => ['fcmtoken' => $request->fcmtoken, 'User' => $request->user_id],
            ], 200);
        } else {
            return response()->json([
                'status' => 'fails',
                'code' => 200,
                'message' => 'There Is something Wrong',
            ], 200);
        }
    }
    //This Controller For Controle All The Api And Authinticate it
    //This Function For API Register
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:48'],
            'last_name' => ['string', 'max:48'],
            'phone_number' => ['string', 'unique:users,phone_number'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required','between:00000000,99999999'],
            'birth_date' => ['date'],
            'is_personal' => ['required', 'between:1,2'],
        ]);
        $Code = rand(111111, 999999);
        $user = User::Create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'serial_number' => $Code,
            'birth_date' => $request->birth_date,
            'is_personal' => $request->is_personal,
            'password' => Hash::make($request->password),
        ]);
        if ($user) {
            $defualt_balance = AppSettings::all('wallet_defualt_balance')->first();
            $wallet = Wallet::Create([
                'balance' => $defualt_balance->wallet_defualt_balance,
                'user_id' => $user->user_id
            ]);
            AdType::Create(['en_name' => 'Normal Ad', 'ar_name' => 'أعلان عادي', 'count' => 50, 'is_spcial' => 0, 'user_id' => $user->user_id]);
            AdType::Create(['en_name' => 'Spcial Ad', 'ar_name' => 'أعلان مميز', 'count' => 50, 'is_spcial' => 1, 'user_id' => $user->user_id]);
            if ($wallet) {
                Mail::to($user->email)->send(new Code($user->serial_number));
                return response()->json([
                    'status' => 'success',
                    'code' => 200,
                    'message' => 'Successfull Register',
                    'data' => ['user' => $user->user_id, 'code' => $user->serial_number],
                ], 200);
            } else {
                return response()->json([
                    'status' => 'fails',
                    'code' => 200,
                    'message' => 'There Is something Wrong',
                ], 200);
            }
        } else {
            return response()->json([
                'status' => 'fails',
                'code' => 200,
                'message' => 'There Is something Wrong',
            ], 200);
        }
    }

    public function check(Request $request)
    {
        $request->validate([
            'user_id' => ['required', 'integer', 'exists:users,user_id'],
            'serial_number' => ['required', 'integer'],
        ]);
        $user = User::find($request->user_id);
        if (!$user || $user->is_admin == 1) {
            return response()->json([
                'status' => 'fails',
                'code' => 200,
                'message' => 'Undefine User',
            ], 200);
        } else {
            if ($user->serial_number == $request->serial_number) {
                $token = $user->createToken('LoginToken')->plainTextToken;
                $user->serial_number = null;
                $user->save();
                return response()->json([
                    'status' => 'success',
                    'code' => 200,
                    'message' => 'Successfull Request',
                    'data' => ['user' => $user->only('user_id', 'first_name', 'last_name', 'phone_number'), 'token' => $token],
                ], 200);
                // return compact('user', 'token');
            } else {
                return response()->json([
                    'status' => 'fails',
                    'code' => 200,
                    'message' => 'Wrong Code',
                ], 200);
            }
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email_phone' => ['required'],
            'password' =>  ['required']
        ]);
        if ($request->has('email_phone')) {
            // Check User If He Exict
            $user = User::where('email', $request->email_phone)->orWhere('phone_number', $request->email_phone)->first();
            if (!$user || $user->is_admin == 1) {
                return response()->json([
                    'status' => 'fails',
                    'code' => 200,
                    'message' => 'This User Is not Found'
                ], 200);
            } else {
                if (!Hash::check($request->password, $user->password)) {
                    return response()->json([
                        'status' => 'fails',
                        'code' => 200,
                        'message' => 'Wrong Password'
                    ], 200);
                } else  if (is_null($user->serial_number)) {
                    if ($checkTokenIfExists = PersonalAccessToken::where('tokenable_id', $user->user_id)->first()) {
                        $user->tokens()->where('tokenable_id', $user->user_id)->delete();
                    }
                    $token = $user->createToken('LoginToken')->plainTextToken;
                    return response()->json([
                        'status' => 'success',
                        'code' => 200,
                        'message' => 'Successfull Request',
                        'data' => ['user' => $user->only('user_id', 'first_name', 'last_name', 'phone_number'), 'token' => $token],
                    ], 200);
                } else {
                    return response()->json([
                        'status' => 'fails',
                        'code' => 200,
                        'message' => 'The Account Is Not Active Yet',
                    ], 200);
                }
            }
        }
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return response()->json([
            'status' => 'success',
            'code' => 200,
            'message' => 'Logout Done'
        ], 200);
    }
}
