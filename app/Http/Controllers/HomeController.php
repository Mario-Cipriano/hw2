<?php
use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Content;

class HomeController extends Controller{
    public function home(){
        if(session("user_id")!==null){
       $user=User::where('id',session("user_id"))->first()->Username;
        return view("home")->with("user",$user);
    } else return redirect("homepage_no_session");
}
public function invia_dati(){
    $request=request();
    $id_username=session("user_id");
       $newEvent=Content::create([
        'immagine' => $request->immagine,
        'titolo' => $request->titolo,
        'settore' => $request->settore,
        'descrizione' => $request->descrizione
        ]);
        if($newEvent){
            return redirect('crea_eventi');
        }
}
public function conteggio(){
    $contenuto=array();
    $contenuto=Content::select('immagine','titolo','settore','descrizione')->get();
    return json_encode($contenuto);
}

public function ContenutiHome(){
        $contenuto=DB::select("SELECT * from contents");
        return $contenuto;
        }

public function Favourite($t){
    $id_username=session("user_id");
    $id_titolo=Content::where("titolo",$t)->first()->id;
    $boolean=DB::insert("INSERT into content_user(user_id,content_id) values(?,?)",[$id_username,$id_titolo]);
    return $boolean;
}
public function Header(){
    $header=DB::select("SELECT * from headers");
    return $header;
}
public function RimuoviPreferiti($t){
    $id_username=session("user_id");
    $id_titolo=Content::where("titolo",$t)->first()->id;
    DB::delete("DELETE from content_user where user_id=? and content_id=?",[$id_username,$id_titolo]);
}

public function EstraiPreferiti(){
    $id_username=session("user_id");
    $user=User::find($id_username);
    return $user->favourites;
}

}
?>