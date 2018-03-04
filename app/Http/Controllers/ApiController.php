<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use JWTAuth;
use App\User;
use JWTAuthException;
use DB;
class ApiController extends Controller
{   
    private $user;
    public function __construct(User $user){
        $this->user = $user;
    }
  
  public function getUserList(Request $request){
    // $data=$request->all();
    // $data['name'];

     // $users = DB::table('users')->select('name', 'email as user_email')->where('name'='user')->get();
   $users = DB::table('users')->select('name', 'email as user_email')->get();
    return response()->json(['result' => $users,'mss'=>'successfull']);
  } 
  
}  