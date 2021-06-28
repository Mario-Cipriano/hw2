<?php
use Illuminate\Routing\Controller;
use App\Models\User;

class RegisterController extends Controller{
public function create(){
    $request=request();
    $hash_pass=hash('sha256', $request->password);
    $pass_base64=base64_encode($hash_pass);
     User::create([
        'username'=>$request->username,
        'password'=>$pass_base64
    ]);
    return view("signup")->with("reg","Registrazione completata.");
}

public function checkUsername($query){
    $esiste=User::where('username',$query)->exists();
    return ['presente'=>$esiste];
    }
    
public function register(){
    return view("signup");
}

}

?>