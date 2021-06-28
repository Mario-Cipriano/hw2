<?php
use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Chart;

class EventiController extends Controller{
    public function index(){
        if(session("user_id")!==null){
       $user=User::where('id',session("user_id"))->first()->Username;
        return view("eventi_internazionali")->with("user",$user);
    } else return redirect("homepage_no_session");
}

   public function search($query){
       $json=Http::get('https://app.ticketmaster.com/discovery/v2/events.json',[
           'keyword'=>$query,
           'apikey'=>env("APIKEY")
       ]);
       return $json;
       }

   public function carrello(){
    /*$id_username=session("user_id");
        $boolean=DB::insert("INSERT into charts(id,immagine,titolo,data,luogo,quantita) values(?,?,?,?,?,?)",[$id_username,$i,$t,$d,$l,$q]);
        return $boolean;*/
        $request=request();
        Chart::create([
            'id'=>session("user_id"),
            'immagine'=>$request->immagine,
            'titolo'=>$request->titolo,
            'data'=>$request->data,
            'luogo'=>$request->luogo,
            'quantita'=>$request->quantita
        ]);
       }
    public function estrai(){
        $id_username=session("user_id");
        $query=DB::select("SELECT immagine,titolo,data,luogo,quantita from charts where id=?",[$id_username]);
        return $query;
    }

    public function aggiorna_quantita(){
        $request=request();
        $id_username=session("user_id");
        DB::update("UPDATE charts set quantita=? where id=? and titolo=? and data=?",[$request->quantita,$id_username,$request->titolo,$request->data]);
    }

   public function rimuovi_dal_carrello(){
    $request=request();
    $id_username=session("user_id");
    DB::delete("DELETE from charts where Id=? and titolo=? and data=?",[$id_username,$request->titolo,$request->data]);
   }


   }
   
?>