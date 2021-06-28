<?php
use Illuminate\Routing\Controller;
use App\Models\User;

class LoginController extends Controller{
public function login(){
    if(session("user_id")!==null){
        return redirect("home");
    }
    else {
        return view("login");
    }
}
public function checkLogin(){
    $request=request();
    $hash_pass=hash('sha256', $request->password);
    $pass_base64=base64_encode($hash_pass);
    $user=User::where('username',request('username'))->where('password',$pass_base64)->first();
     if(isset($user)){
         Session::put('user_id',$user->id);
         return redirect("home");
     }
     else {
         return view("login")->with("errore","Credenziali non valide.");
     }
}
public function logout(){
Session::flush();
return redirect("homepage_no_session");
}
}
?>