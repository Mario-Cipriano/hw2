<?php
use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Chart;



class ConcertiController extends Controller{
    public function concerti(){
        if(session("user_id")!==null){
       $user=User::where('id',session("user_id"))->first()->Username;
        return view("concerti")->with("user",$user);
    } else return redirect("homepage_no_session");
}

    public function search($query){
        $json=Http::get('https://rest.bandsintown.com/artists/'.$query."/events?app_id=foo");
        return $json;
        }
}
?>