<?php
namespace App\Http\Controllers;

use App\Models\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
    {
        public function login()
        {
            $credentials = [
                'email' => request('email'),
                'password' => request('password')
            ];

            if (Auth::attempt($credentials)) {
                $success['token'] = Auth::user()->createToken('MyApp')->accessToken;
                $success['email'] = Auth::user()->email;

                return response()->json(['success' => $success]);
            }

            return response()->json(['error' => 'Unauthorised'], 401);
        }

        public function register(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            }

            $input = $request->all();
            $input['password'] = bcrypt($input['password']);

            $user = User::create($input);
            $success['token'] = $user->createToken('MyApp')->accessToken;
            $success['name'] = $user->name;

            return response()->json(['success' => $success]);
        }

        public function getDetails()
        {
            return response()->json(['success' => Auth::user()]);
        }

        public function logout()
        {
            Auth::logout();
            return response()->json([
                'status' => 'success',
                'msg' => 'Logged out Successfully.'
            ], 200);
        }
        public function index()
        {
            return response()->json(User::paginate(10)->toArray());
        }

        public function listWithoutPagination() {
            return response()->json(User::get()->toArray());
        }

        public function details($id) {
            return response()->json(User::where('id', $id)->first()->toArray());
        }

        public function update(Request $request, $id) {
            $user = User::where('id', $id)->first();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            return response()->json([
                'message' => 'Użytkownik został wyedytowany.'
            ]);
        }

            public function store(Request $request)
        {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            return response()->json([
                'message' => 'Nowy użytkownik został stworzony.'
            ]);
        }

        public function destroy($id) {
            $user = User::where('id', $id)->first();
            $user->delete();

            return response()->json([
                'message' => 'Użytkownik został usunięty.'
            ]);
        }
    }
