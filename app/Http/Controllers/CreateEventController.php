<?php
use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Event;


class CreateEventController extends Controller{
    public function crea_eventi(){
        if(session("user_id")!==null){
       $user=User::where('id',session("user_id"))->first()->Username;
        return view("create_event")->with("user",$user);
    } else return redirect("homepage_no_session");
}
 
public function invia_dati(){
    $request=request();
    $id_username=session("user_id");
       $newEvent=Event::create([
        'immagine' => $request->immagine,
        'titolo' => $request->titolo,
        'settore' => $request->settore,
        'descrizione' => $request->descrizione
        ]);
        if($newEvent){
            return redirect('crea_eventi');
        }
}
   }
   
?>