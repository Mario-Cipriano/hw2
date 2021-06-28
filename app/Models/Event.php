<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Event extends Model{
    protected $fillable = [
        'immagine',
        'titolo', 
        'settore', 
        'descrizione'
    ];
   public function user(){
       return $this->belongsToMany("App\Models\User");
   }
   public $timestamps=false;
}
?>